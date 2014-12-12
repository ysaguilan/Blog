<?php
/*inserts navigation code into this php file*/
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
	header("Location: " . $path . "amit1.php");
	die();
}
?>
<nav>
<!--creates un ordered list-->
	<ul>
	<!--list item-->
		<li><a href="<?php echo $path . "post.php"?>"> Blog Post Forum</a></li>
	</ul>
	</nav>