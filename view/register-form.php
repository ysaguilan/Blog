
<?php
/*inserts config code into this php file*/
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>
<!--creates a form for registration-->
<form method="post" action= "<?php echo $path . "controller/create-user.php";?>">

<!--creates text space for email-->
	<div>
	<label for="email">Email:</label>
	<input type="text" name="email" />
	</div>
	<!--creates textspace for username-->
	<div>
	<label for="username">Username:</label>
	<input type="text" name="username"/>
	</div>
<!--creates a text space for password-->
	<div>
	<label for="password">Password:</label>	
	<!--type is password so that little black dots appear instead of letters when user is typing a password-->
	<input type="password" name="password"/>
	</div>
<!--creates button called submit-->
	<div>
	<button type="submit">Submit</button>
	</div>
</form>