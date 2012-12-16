<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_projectseavieuw_domain_model_media'] = array(
	'ctrl' => $TCA['tx_projectseavieuw_domain_model_media']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, layout, media, youtube_key, text',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, layout, media, youtube_key, text,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_projectseavieuw_domain_model_media',
				'foreign_table_where' => 'AND tx_projectseavieuw_domain_model_media.pid=###CURRENT_PID### AND tx_projectseavieuw_domain_model_media.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'layout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout.option.0', 'layout1'),
					array('LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout.option.1', 'layout2'),
					array('LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout.option.2', 'layout3'),
					array('LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout.option.3', 'layout4'),
					array('LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.layout.option.4', 'layout5'),
				),
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'media' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.media',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'jpg, jpeg, png',
				'uploadfolder' => 'uploads/tx_projects_seavieuw',
				'show_thumbs' => TRUE,
				'multiple' => TRUE,
				'maxitems' => 5,
				'autoSizeMax' => 30
			),
		),
		'youtube_key' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.youtube_key',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:projectseavieuw/Resources/Private/Language/locallang_db.xml:tx_projectseavieuw_domain_model_media.text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'project' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'starttime' => array (
			'config' => array (
				'type' => 'passthrough',
			)
		),
		'endtime' => array (
			'config' => array (
				'type' => 'passthrough',
			)
		),
		'sys_language_uid' => array (
			'config' => array (
				'type' => 'passthrough',
			)
		),
	),
);

?>