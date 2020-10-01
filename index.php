<?php 
	use Knp\Snappy\Pdf;

	include __DIR__."/vendor/autoload.php";

	$isPdf = false; // is pdf or just html
	$isDisplayOnBrowser = true; // show pdf on browser witout download

	/** Getting example data array from json file. file contains random generated results. thats just random */
	$results = json_decode(file_get_contents("example.json"),true);
 

	/** Getting CSS Data from Less as compiled and compressed  */
	$less = new \lessc; 
	$less->setFormatter("compressed");
	$css_style = $less->compile( file_get_contents(__DIR__."/style/index.less")  );  


	$assigments = [
		/** Html Page Header Details */
		"opt_title" => "Results of Exam",
		"opt_description" => "The exam results dated 01 October 2020 have been announced",
		/** Meta tags for Social Media. Facebook,Twitter,Whatsapp... */
		"ogt_title" => "Results of Exam Have Been Announced!", 
		"ogt_url" => "https://github.com/atiksoftware/php-html_to_pdf", 
		"ogt_image" => "https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/ogt_image.png", 
		"ogt_site_name" => "AmiralRouter", 

		/** CSS Data*/
		"css_style" => $css_style,

		/** Set isPDf to smarty. its can be need while editing scheme */
		"isPdf" => $isPdf,

		/** Datas for will usage in HTML source */
		"results" => $results
	]; 



	/** Create New Smarty */
	$smarty = new Smarty();
	$smarty->template_dir = __DIR__ . '/html/'; // smarty html files folder
	$smarty->compile_dir  = __DIR__ . '/html/compile/'; // smarty compiled files storage in this folder


	/** Give our variables to smarty */
	$smarty->assign( $assigments );

	/** Fetch our file as html result */
	$htmlSource = $smarty->fetch('results.tpl');

	/** if its not PDF, write html source as output and exit */
	if(!$isPdf){
		echo $htmlSource;
		exit;
	}

 
	/** if not PDF not, already exited up line. if PDF mode, contirnue next codes */

	$tmpFileName = date("Y.m.d_H.i.s").".pdf";
	$tmpFilePath = __DIR__."/temp/$tmpFileName";

	/** check 32/64 bit. if integers 4 bytes, its mean 32bit. if 8 byte, its mean 64 bit */
	$is64Bit = PHP_INT_SIZE === 8; 
	/** check for windows or other(linux/unix) */
	$isWindows = strtoupper(substr(PHP_OS, 0, 3)) === "WIN";

	if($isWindows){
		if($is64Bit){
			$snappy = new Pdf(__DIR__.'/vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf.exe');
		}else{
			$snappy = new Pdf(__DIR__.'/vendor/wemersonjanuario/wkhtmltopdf-windows/bin/32bit/wkhtmltopdf.exe');
		}
	}else{
		if($is64Bit){
			$snappy = new Pdf(__DIR__.'/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
		}else{
			$snappy = new Pdf(__DIR__.'/vendor/h4cc/wkhtmltopdf-i386/bin/wkhtmltopdf-i386');
		}
	}

	/** if you want clear margins on paper left-right-top-bottom, use down lines */
	// $snappy->setOption('margin-top', '40mm');
	// $snappy->setOption('margin-left', '0mm');
	// $snappy->setOption('margin-right', '0mm');
	// $snappy->setOption('viewport-size', '1920x1080'); 

	/** create a pdf wint our html source data */
	try {
		$snappy->generateFromHtml( $htmlSource ,$tmpFilePath);
	} catch (\Exception $e) { echo "An error while creating pdf file. \n" . $e->getMessage(); }

	/** display PDf ile on browser or download named tmp file like (20.10.01_10.54.25.pdf) */
	if($isDisplayOnBrowser){
		header('Content-Type: application/pdf');
	}else{
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="'.$tmpFileName.'"');
	}
	
	/** Read file bytes to output */
	try {
		readfile($tmpFilePath);
	} catch (\Exception $e) { echo "An error while outputting pdf file. \n" . $e->getMessage(); }

	/** remove out temp pdf file */
	try {
		unlink($tmpFilePath);
	} catch (\Exception $e) { echo "An error while removing generated temp pdf file ($tmpFilePath). \n" . $e->getMessage(); }