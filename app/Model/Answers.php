
<?php

class Answers extends AppModel {

	public $name = 'Answers';
	public $belongsTo = array(
	'Modules' => array( 'foreignKey' => 'Module'),
	'Questions' => array( 'foreignKey' => 'idQuestion'),
	);

}

