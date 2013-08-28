
<?php

$config = array( 'debug' => 1 );

$services_json = json_decode(getenv('VCAP_SERVICES'),true);
$af_mysql_config = $services_json['mysql-5.1'][0]['credentials'];


Configure::write('Security.salt', 'WhiteBEAMSofLOVE12300');
Configure::write('Security.cipherSeed', '1900987020');

Configure::write('Database.config', array(
		'default' => array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host'		=> $af_mysql_config["hostname"],
			'login' 	=> $af_mysql_config["username"],
			'password' 	=> $af_mysql_config["password"],
			'database' 	=> $af_mysql_config['name'],
			'port'		=> $af_mysql_config["port"],
			'prefix' 	=> '',
			'encoding' 	=> 'utf8',			
	)
));

CakeLog::config('default', array(
		'engine'	=> 'FileLog',
		'path'		=> ROOT . DS . 'data' . DS . 'logs' . DS
));

?>