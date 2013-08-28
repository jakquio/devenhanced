
<?php

class Module extends AppModel {

	public $useTable = 'Modules';
	public $hasMany = array(
		'mod_Questions' => array(
			'className' =>'Questions',
			'foreignKey' => 'idQuestion',
		),
		'mod_Answers' => array(
		'className'	=> 'Answers',
		'foreignKey' => 'idAnswers',
		),
	);
	
}   