
<?php

class Questions extends AppModel {

	public $name = 'Questions';
	public $belongsTo = array(
	'Modules' => array( 'foreignKey' => 'Module'),
	'Answers' => array( 'foreignKey' => 'idQuestion'),
	);
	
	


}

