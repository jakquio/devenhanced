

<head><title>Login!</title></head>

<h5> Login to Dev-Enhanced! </h5><br />
<?php
    echo $this->form->create('User', array(
    'type' => 'post',
    'action' => 'userCP',
    ));	

    echo $this->form->input('Email', array( 
    'label' => 'Email:',
    ));

    echo $this->form->input('Password', array(
    'label' => 'Password:',
    'type' => 'password',
    ));
    echo $this->form->end('Login!');
?>


</body>
</html>
