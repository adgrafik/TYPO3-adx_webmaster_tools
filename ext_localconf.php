<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionConfiguration = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['adx_webmaster_tools']);

// Add extra fields to rootline.
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',description,abstract,keywords,author';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_adxwebmastertools_verification_google_id,tx_adxwebmastertools_verification_yahoo_id';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_adxwebmastertools_xml_sitemap_disable,tx_adxwebmastertools_xml_sitemap_priority,tx_adxwebmastertools_xml_sitemap_changefrequence';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_adxwebmastertools_google_analytics_account_id,tx_adxwebmastertools_google_analytics_domain_name,tx_adxwebmastertools_google_analytics_allow_linker,tx_adxwebmastertools_google_analytics_local_remote_server_mode';

// add page types to real url
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fileName']['index']['rss.xml']['keyValues']['type'] = 1341932124;
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fileName']['index']['sitemap.xml']['keyValues']['type'] = 1341932156;

?>