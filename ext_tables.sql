
#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_adxwebmastertools_verification_google_id varchar(64) NOT NULL DEFAULT '',
	tx_adxwebmastertools_verification_yahoo_id varchar(64) NOT NULL DEFAULT '',
	tx_adxwebmastertools_google_analytics_account_id varchar(32) NOT NULL DEFAULT '',
	tx_adxwebmastertools_google_analytics_domain_name varchar(255) NOT NULL DEFAULT '',
	tx_adxwebmastertools_google_analytics_allow_linker tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxwebmastertools_google_analytics_local_remote_server_mode tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxwebmastertools_xml_sitemap_enabled tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxwebmastertools_xml_sitemap_priority varchar(3) NOT NULL DEFAULT '',
	tx_adxwebmastertools_xml_sitemap_changefrequence varchar(8) NOT NULL DEFAULT ''
);
