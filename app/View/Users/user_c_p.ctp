
<div id='menu-left'>
<?php
        echo $this->html->link('Main', array( 'controller' => 'Users', 'action' => 'UserCP'));
        echo '<br /><br />';
        echo $this->html->link('Edit Profile', array( 'controller' => 'Users', 'action' => 'edit_profile'));
        echo '<br /><br />';
        echo $this->html->link('Start your Quiz', array( 'controller' => 'Quiz', 'action' => 'index'));
        echo '<br /><br />';
        echo $this->html->link('Sign out!', array( 'controller' => 'Users', 'action' => 'Logout'));
        echo '<br /><br />';
?>
</div>
<h3> User Page Main Content </h3>