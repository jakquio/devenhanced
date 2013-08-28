
<table>
<tr>
  <th>Subject</th>
  <th>Description</th>
</tr>

<?php
$this->form->create('Modules');   
// Loops through Module Tabl   
    foreach($findAll as $findAll): {
    $name =  $findAll['Modules']['mod_name'];
    $modInfo = $findAll['Modules']['Description'];
    $modID = $findAll['Modules']['id_Modules'];
    }
?>
<tr>
  <td><?php echo $this->html->link( $name, array(
      'controller' => 'Quiz',
      'action' => 'doQuiz',
      'modChoice' => array($modID),
    ), $modID); ?></td>
  <td><?php echo $modInfo; ?></td>
</tr>

<?php 
endforeach;
unset($findAll);
$this->form->end(); // End of Module Loop

?>

</table>
<div>Please select a module.<br /></div>