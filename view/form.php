<a href="/../Blog/amit1.php"> Back </a>
<?php
/*inserts config code into this php file*/
require_once(__DIR__ . "/../model/config.php");

require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
	header("Location: " . $path . "amit1.php");
	die();
}
?>
<!--creates header with bigges font size-->
<h1>
	Create Blog Post
</h1>
<!--takes in certain information and sends it to the table-->
<!--used to create an HTML form method helps post(send) information then sends info to create-post.php-->
<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
<!--makes a title text box to create a title for posts-->
<div >
<label for="title">Title: </label>
<input id="title1" type="text" name="title"/>
</div>

<!--make a posts text box to create a multi word post-->
<div class ="post">
<label for="post">Post: </label>
<textarea name="post"></textarea>	
</div>

<div class="submit">
<!--creates a button to submit post-->
	<button type="submit">
		Submit
	</button>
</div>
</form>