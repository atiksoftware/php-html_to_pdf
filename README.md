# PHP Html To Pdf File
[![GitHub](https://img.shields.io/badge/Author-Amiral%20Router-blue)]()
[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Fatiksoftware%2Fphp-html_to_pdf)]()
[![GitHub stars](https://img.shields.io/github/stars/atiksoftware/php-html_to_pdf?color=brightgreen)]()
[![GitHub contributors](https://img.shields.io/github/contributors/atiksoftware/php-html_to_pdf?color=brightgreen)]()
[![GitHub issues](https://img.shields.io/github/issues/atiksoftware/php-html_to_pdf?color=blue)]()  

Convert html to pdf files with smarty template engine. Download as file or display on browser.
  

<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/readme_images/html.jpg" width="450" /> <img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/readme_images/pdf.jpg" width="450" />
 
<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/readme_images/whatsapp.jpg" width="450" />

### Needs: 
```bash
$ composer require smarty/smarty
$ composer require leafo/lessphp
$ composer require knplabs/knp-snappy
```
Also you should download `wkhtmltopdf`:  
if you are in 32/64 bit Windows based system:
```bash
$ composer require wemersonjanuario/wkhtmltopdf-windows
```
if you are in 32 bit Linux based system:
```bash
$ composer require h4cc/wkhtmltopdf-i386 0.12.x
$ composer require h4cc/wkhtmltoimage-i386 0.12.x
```

or this if you are in 64 bit based system:

```bash
$ composer require h4cc/wkhtmltopdf-amd64 0.12.x
$ composer require h4cc/wkhtmltoimage-amd64 0.12.x
```


> :warning: **If you are using CSS3 properties like Flex,BorderRadius etc**: You should use -webkit prefixes  
You can follow https://autoprefixer.github.io/
---
## How to use
If you have enough experience about PHP, you not need this directive.

+ Create your html files in `html` folder as .tlp(smart format)  
+ Create your style files in `style` folder as .less format  
+ first call smarty fetch 
+ then call pdfgenerator functions
### Also Read Comments in `index.php` 




---
#### If you like this document, you can give a star. Thank you
**Amiral Router!**