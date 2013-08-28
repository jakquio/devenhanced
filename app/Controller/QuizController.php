
<?php 

// Create logic for loading modules here.

class QuizController extends AppController {

public $helpers = array( 'Form', 'Html', 'Js', 'Auth', 'Session');

public function beforeFilter(){

$this->loadModel('Modules');
$this->loadModel('Questions');
$this->loadModel('Answers');

}

public function Quiz() {
    $this->redirect('index');
}

public function index() {

// Views for Selecting Quiz Modules

$this->set('findAll', $this->Modules->find('all'));
}

public function doQuiz() {

// Get Parameter from request
// Get Count in foreach loop
// Search table and send views
    
    $qry = $this->Questions->findAllByidModule
            ($this->request->params['named']['modChoice']);
   
    $this->set( 'Quiz', $qry);

}



}