<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Projectseavieuw',
	'projectSeavieuw'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'project_seavieuw');

t3lib_extMgm::addLLrefForTCAdescr('tx_projectseavieuw_domain_model_project', 'EXT:projectseavieuw/Resources/Private/Language/locallang_csh_tx_projectseavieuw_domain_model_project.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_projectseavieuw_domain_model_project');
$TCA['tx_projectseavieuw_domain_model_project'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_project',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,media,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_projectseavieuw_domain_model_project.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_projectseavieuw_domain_model_media', 'EXT:projectseavieuw/Resources/Private/Language/locallang_csh_tx_projectseavieuw_domain_model_media.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_projectseavieuw_domain_model_media');
$TCA['tx_projectseavieuw_domain_model_media'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media',
		'label' => 'layout',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'layout,media,youtube_key,text,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Media.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_projectseavieuw_domain_model_media.gif'
	),
);

?>