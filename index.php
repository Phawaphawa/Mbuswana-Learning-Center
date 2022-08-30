<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'mbuswan1_spad126';
$sitepad['db_user'] = 'mbuswan1_spad126';
$sitepad['db_pass'] = '-[lS[!Y@OPQ26Y-M';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'AQ4leif_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'mbuswanalc.co.za';// URL without protocol but with directory as well
$sitepad['url'] = 'https://mbuswanalc.co.za';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/mbuswan1';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'HdcJ8D7ECwKwmquJFDt5pf9DkbrmJ72DWzWQ10gbs1tlMEQWIM2idzjeeCkmmIP3';
$sitepad['SECURE_AUTH_KEY'] = 'gopz6vqWQWEhAnvl8jXqbKd2X26MckLGSb5noKc5PlRsj0E9AW00dCcHP1Ol47pp';
$sitepad['LOGGED_IN_KEY'] = 'yx2G1fpeR28jtPviDyrdLhv3UAsFQHIWQt3fi7nzmXRpL3SJkQnwxmz7mic9CDrr';
$sitepad['NONCE_KEY'] = 'FaN7HOtihr3iTWw5b9DzirbugtGVxi9MlNXLBn7ppNxuA0XRi1CZJ3xmonGgAGkl';
$sitepad['AUTH_SALT'] = 'smqg96gyiQkwEzCjeXNkxXrtrBD5gVf281vxv1rnYlF7QeTtnvsYdSnnJUTwg0Dg';
$sitepad['SECURE_AUTH_SALT'] = 'STTRQyqpJf89dGrAiwb4OlhBjKeiDzTMQtpgkKXSVhBCWrPf1pTLEFGA5YthPmjJ';
$sitepad['LOGGED_IN_SALT'] = 'wQGO1nGhURzbdhsa6eKQknRlmwu6x08VfdRw1zywfw5hYrU4Fbh15doQ8WCPXHBT';
$sitepad['NONCE_SALT'] = 'nEPtl37LgpwbAw4QTYaCAdXzINLIFufCG1PFp5OwYlw13BzS8HhJwrn79YbrukOz';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

