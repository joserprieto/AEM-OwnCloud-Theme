<?php
/**************************************************************************
 * Copyleft joserprieto - Some Rights Reserved
 *
 * joserprieto
 *
 *
 * @file        layout.base.php
 * @author      joserprieto
 * @date        10/06/16 22:27
 * @project     OwnCloud Theme Arte et Marte
 * @projectCode AEM-OCL
 * @site        http://arteetmarte.org
 * @repo        git@bitbucket.org:joserprieto-team/aem-ocl.git
 *
 * @type        php
 */

/**
 * @var \OC_Defaults	$theme
 */
?>
<!DOCTYPE html>
<!-- TEMPLATE: ./themes/arteetmarte/core/templates/layout.base.php -->
<!--[if lte IE 8]><html class="ng-csp ie ie8 lte9 lte8" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><!--<![endif]-->
	<head data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">

		<title>
		<?php p($theme->getTitle()); ?>
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="referrer" content="never">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="theme-color" content="<?php p($theme->getMailHeaderColor()); ?>">
<!--		<link rel="shortcut icon" href="--><?php //print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?><!--">-->
<!--		<link rel="apple-touch-icon-precomposed" href="--><?php //print_unescaped(image_path('', 'favicon-touch.png')); ?><!--">-->
<!--		<link rel="mask-icon" sizes="any" href="--><?php //print_unescaped(image_path('', 'favicon-mask.svg')); ?><!--" color="#795548">-->
		<?php include('favicons.php'); ?>
		<!-- Add Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Marvel:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<?php foreach ($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="screen">
		<?php endforeach; ?>
		<?php foreach ($_['jsfiles'] as $jsfile): ?>
			<script src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>
		<?php print_unescaped($_['headers']); ?>
	</head>
	<body id="body-public">
		<?php include('layout.noscript.warning.php'); ?>
		<?php print_unescaped($_['content']); ?>
	</body>
</html>
