<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/**
 * Add-ons for pages
 */
$tempColumns = array(
	'tx_adxwebmastertools_verification_google_id' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_verification_google_id',
		'exclude' => 1,		
		'config' => array(
			'type' => 'input',
		),
	),
	'tx_adxwebmastertools_verification_yahoo_id' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_verification_yahoo_id',
		'exclude' => 1,		
		'config' => array(
			'type' => 'input',
		),
	),
	'tx_adxwebmastertools_google_analytics_account_id' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics_account_id',
		'exclude' => 1,		
		'config' => array(
			'type' => 'input',
		),
	),
	'tx_adxwebmastertools_google_analytics_domain_name' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics_domain_name',
		'exclude' => 1,		
		'config' => array(
			'type' => 'input',
		),
	),
	'tx_adxwebmastertools_google_analytics_allow_linker' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics_allow_linker',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_adxwebmastertools_google_analytics_allow_hash' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics_allow_hash',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_adxwebmastertools_google_analytics_local_remote_server_mode' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics_local_remote_server_mode',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_adxwebmastertools_xml_sitemap_enabled' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_enabled',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_adxwebmastertools_xml_sitemap_priority' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_priority',
		'exclude' => 1,
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_priority.default', ''),
				array('0.1', '0.1'),
				array('0.2', '0.2'),
				array('0.3', '0.3'),
				array('0.4', '0.4'),
				array('0.5', '0.5'),
				array('0.6', '0.6'),
				array('0.7', '0.7'),
				array('0.8', '0.8'),
				array('0.9', '0.9'),
				array('1', '1'),
			),
		),
	),
	'tx_adxwebmastertools_xml_sitemap_changefrequence' => array(		
		'label' => 'LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence',
		'exclude' => 1,
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.default', ''),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.always', 'always'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.hourly', 'hourly'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.daily', 'daily'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.weekly', 'weekly'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.monthly', 'monthly'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.yearly', 'yearly'),
				array('LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap_changefrequence.never', 'never'),
			),
		),
	),
);

$TCA['pages']['palettes']['tx_adxwebmastertools_verification'] = array(
	'showitem' => 'tx_adxwebmastertools_verification_google_id, --linebreak--, tx_adxwebmastertools_verification_yahoo_id',
	'canNotCollapse' => 1,
);

$TCA['pages']['palettes']['tx_adxwebmastertools_xml_sitemap'] = array(
	'showitem' => 'tx_adxwebmastertools_xml_sitemap_enabled, tx_adxwebmastertools_xml_sitemap_priority, tx_adxwebmastertools_xml_sitemap_changefrequence',
	'canNotCollapse' => 1,
);

$TCA['pages']['palettes']['tx_adxwebmastertools_google_analytics'] = array(
	'showitem' => 'tx_adxwebmastertools_google_analytics_account_id, --linebreak--, tx_adxwebmastertools_google_analytics_domain_name, --linebreak--, tx_adxwebmastertools_google_analytics_allow_linker, tx_adxwebmastertools_google_analytics_allow_hash, tx_adxwebmastertools_google_analytics_local_remote_server_mode',
	'canNotCollapse' => 1,
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages', 
	'--palette--;LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_verification.palette;tx_adxwebmastertools_verification,
	--palette--;LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_google_analytics.palette;tx_adxwebmastertools_google_analytics,
	--palette--;LLL:EXT:adx_webmaster_tools/Resources/Private/Language/Locallang.xml:tx_adxwebmastertools_xml_sitemap.palette;tx_adxwebmastertools_xml_sitemap', 
	'', 
	'before:--palette--;;miscellaneous'
);
t3lib_extMgm::addLLrefForTCAdescr('pages', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/LocallangCSH.xml');

// Add static TypoScript files
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Verification/', 'ad: Webmaster Tools verification');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GoogleAnalytics/', 'ad: Webmaster Tools Google Analytics');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Sitemap/Common/', 'ad: Webmaster Tools XML sitemap common');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Sitemap/tt_news/', 'ad: Webmaster Tools XML sitemap tt_news');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/RSS2/tt_news/', 'ad: Webmaster Tools RSS2 tt_news');

?>