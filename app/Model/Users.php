
<?php

class Users extends AppModel {

	public $name = 'Users';
	public $hasMany = array(
		'myUsers' => array(
			'className' => 'myUsers',		
		)
	);


}

