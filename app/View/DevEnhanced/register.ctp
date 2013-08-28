
<head>
	<title>Register!</title>
</head>

<body id ='wrap'>
<div id='content'>

<h5> Create your user information below! <br /></h5>

<?php 
echo $this->form->create('Users', array(
                'action' => 'register_success',
         )						
        );
        echo $this->form->input('Email', array(
                'label' => 'Email: ',

        ));

        echo $this->form->input('Passwd', array(
                'label' => 'Password: ',
                'type' => 'password',
        ));

        echo $this->form->input('fName', array(
                'label' => 'First Name: ',

        ));
        echo $this->form->input('lName', array(
                'label' => 'Last Name: ',

        ));
        echo $this->form->input('PhoneNum', array(
                'label' => 'Phone Number: ',

        ));
        echo $this->form->end('Register');
?>
	
</div>


</body>
</html>