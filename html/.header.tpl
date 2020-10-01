<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Primary Meta Tags -->
	<title>{$opt_title}</title>
	<meta name="title" content="{$opt_title}">
	<meta name="description" content="{$opt_description}">

    <link rel="shortcut icon" href="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/favicon.ico">
 

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="{$ogt_site_name}">
	<meta property="og:url" content="{$ogt_url}">
	<meta property="og:title" content="{$ogt_title}">
	<meta property="og:description" content="{$opt_description}">
	<meta property="og:image" content="{$ogt_image}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:site_name" content="{$ogt_site_name}">
	<meta property="twitter:url" content="{$ogt_url}">
	<meta property="twitter:title" content="{$ogt_title}">
	<meta property="twitter:description" content="{$opt_description}">
	<meta property="twitter:image" content="{$ogt_image}">

	{* <meta http-equiv="refresh" content="1"> *}

	<style>{$css_style}</style>
</head>
<body class="{if $isPdf}no_background{/if}">
	<div id="wrapper">

		<div class="wrapper-content"> 

			<div id="header">
				<div class="left">
					<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/logo_1.png" alt="Random Logo">
				</div>
				<div class="center">
					<div class="content">
						<h1 class="{if $isPdf}isPdf{/if}">UNIVERSITY OF AMIRAL ROUTER TECH</h1>
						<p>Different Technology And Interesting Ideas</p>
					</div>
				</div>
				<div class="right">
					<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/logo_2.png" alt="Random Logo">
				</div>
			</div>
		 