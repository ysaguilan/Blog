<?php

require_once(__DIR__ . "/../model/config.php");
	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);

	if($result) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div class = 'post'>";
			echo "<h2>" . $row['title'] . "</h2>";/*pulls titles from row called title and shows on screen*/
			echo "<br />"; /*creates space*/
			echo "<p>" . $row['post'] . "</h1>"; /*pulls posts from row called post and shows on screen*/
			echo "<br/>";/*creates space*/
			echo "</div";
		}
	}
?>