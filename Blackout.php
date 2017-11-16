<?php
/**
 * MediaWiki extension to protest, and raise awareness of, Internet censorship.
 * Installation instructions can be found on
 * https://www.mediawiki.org/wiki/Extension:Blackout
 *
 * @addtogroup Extensions
 * @author John Du Hart and Gregory Varnum utilizing work by jorm and MediaWiki developers for the
 * Wikimedia Foundation's SOPA/PIPA protest
 * @license GPL
 *
 * Thank you for feedback, bug reporting and cleaning up code
 *
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Blackout' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Blackout'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the Blackout extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Blackout extension requires MediaWiki 1.29+' );
}
