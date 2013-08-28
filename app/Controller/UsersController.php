
<?php 

// Process users and registration here

class UsersController extends AppController {

    public $helpers = array( 'Form', 'Html', 'Js', 'Auth', 'Session');

    public function beforeFilter() {

    }

    public function edit_profile() {

    // Allow user changes

    }

    public function UserCP() {

    // User Control Panel


    }

    public function register_success() {  

    // Confirm  registry input

    }

    public function logout() {

    // destroy cookies/sessions and return to main

    $this->redirect( array( 
        'controller' => 'DevEnhanced', 'action' => 'index',
    ));
    }

}