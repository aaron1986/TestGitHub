<?php

require_once 'core/init.php';

if(Input::exists()) {
	$validate = new validate();
	$validation = $validate->check($_POST, array(
	    'username' => array(	    
	        'required' => true,
	        'min' => 4,
	        'max' => 20,
	        'unique' => 'users'  
	    ),
	    'password' => array(
	        'required' => true,
	        'min' => 5 
	    ),
	    'password_again' => array(
	        'required' => true,
	        'matches' => 'password'
	    ),
	    'name' => array(
	        'required' => true,
	        'min' => 4,
	        'max' => 50
	    ),
	));
	
	if($validation -> passed() ) {
		echo 'Passed';
	} else {
		foreach($validation->errors() as $error) {
			echo $error, '<br>';
		}
	}
}
?>
<form action="" method="post">
	<div class="field">
	    <label for="username">Username</label>
	    <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username'));?>">
	</div>
	
	<div class="field">
		<label for="password">Please Choose a Password</label>
	    <input type="password" name="password" id="password">
	</div>

    <div class="field">
		<label for="password_again">Please Enter Password again</label>
	    <input type="password" name="password_again" id="password_again">
	</div>
	
	
    <div class="field">
		<label for="name">Your Name</label>
	    <input type="text" name="name" value-"<?php echo escape(Input::get('name'));?>" id="name">
	</div>
	
	<input type="submit" value="Register">

</form>
