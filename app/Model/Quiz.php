
<?php

class Quiz extends AppModel {

	public $hasMany = array(
		'myModules' => array(
			'className' => 'Modules',
		)
	);
}