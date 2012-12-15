<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Projectseavieuw',
	array(
		'Project' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Project' => '',
		
	)
);

?>