<?php
/* Smarty version 3.1.36, created on 2020-10-01 08:46:09
  from 'C:\wamp64\www\html_to_pdf\html\.header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f759751e3f1e5_45301237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b7c5efb9b0740b724eb300e1688a39718e7c27' => 
    array (
      0 => 'C:\\wamp64\\www\\html_to_pdf\\html\\.header.tpl',
      1 => 1601541934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f759751e3f1e5_45301237 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Primary Meta Tags -->
	<title><?php echo $_smarty_tpl->tpl_vars['opt_title']->value;?>
</title>
	<meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['opt_title']->value;?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['opt_description']->value;?>
">

    <link rel="shortcut icon" href="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/favicon.ico">
 

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['ogt_site_name']->value;?>
">
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['ogt_url']->value;?>
">
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['ogt_title']->value;?>
">
	<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['opt_description']->value;?>
">
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['ogt_image']->value;?>
">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:site_name" content="<?php echo $_smarty_tpl->tpl_vars['ogt_site_name']->value;?>
">
	<meta property="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['ogt_url']->value;?>
">
	<meta property="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['ogt_title']->value;?>
">
	<meta property="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['opt_description']->value;?>
">
	<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['ogt_image']->value;?>
">

	
	<style><?php echo $_smarty_tpl->tpl_vars['css_style']->value;?>
</style>
</head>
<body class="<?php if ($_smarty_tpl->tpl_vars['isPdf']->value) {?>no_background<?php }?>">
	<div id="wrapper">

		<div class="wrapper-content"> 

			<div id="header">
				<div class="left">
					<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/logo_1.png" alt="Random Logo">
				</div>
				<div class="center">
					<div class="content">
						<h1 class="<?php if ($_smarty_tpl->tpl_vars['isPdf']->value) {?>isPdf<?php }?>">UNIVERSITY OF AMIRAL ROUTER TECH</h1>
						<p>Different Technology And Interesting Ideas</p>
					</div>
				</div>
				<div class="right">
					<img src="https://raw.githubusercontent.com/atiksoftware/php-html_to_pdf/master/assets/logo_2.png" alt="Random Logo">
				</div>
			</div>
		 <?php }
}
