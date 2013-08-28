	
	
<?php

		echo $this->html->link( 'Main', array(
			'action' => 'UserCP',
		));
		
		echo "<br /><br />";
		
				
		echo $this->html->link( 'Edit Profile', array(
			'action' => 'edit_profile',
		));
		
		echo "<br /><br />";
	
		echo $this->html->link( 'Start Your Quiz!', array(
			'action' => 'quiz',
		));

		echo "<br /><br />";
		
		echo $this->html->link( 'Logout!', array(
			'action' => 'logout',
		));