
<?php

$config = array( 'debug' => 1 );

Configure::write('Security.salt', 'WhiteBEAMSofLOVE12300');
Configure::write('Security.cipherSeed', '1900987020');

Configure::write('Database.config', array(
		'default' => array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host'		=> 'localhost',
			'login' 	=> 'root',
			'password' 	=> 'sP7beCr9',
			'database' 	=> 'Dev-Enhanced',
			'prefix' 	=> '',
			'encoding' 	=> 'utf8',
			'unix_socket'	=> '/tmp/mysql.sock',
			
	)
));

CakeLog::config('default', array(
		'engine'	=> 'FileLog',
		'path'		=> ROOT . DS . 'data' . DS . 'logs' . DS
));














?>