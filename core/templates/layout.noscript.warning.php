<?php
/**************************************************************************
 * Copyleft joserprieto - Some Rights Reserved
 *
 * joserprieto
 *
 *
 * @file        layout.noscript.warning.php
 * @author      joserprieto
 * @date        10/06/16 22:49
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
<!-- TEMPLATE: ./themes/arteetmarte/core/templates/layout.noscript.warning.php -->
<noscript>
	<div id="nojavascript">
		<div>
			<?php print_unescaped(str_replace(
					['{linkstart}', '{linkend}'],
					['<a href="http://enable-javascript.com/" target="_blank" rel="noreferrer">', '</a>'],
					$l->t('This application requires JavaScript for correct operation. Please {linkstart}enable JavaScript{linkend} and reload the page.')
				)); ?>
		</div>
	</div>
</noscript>
