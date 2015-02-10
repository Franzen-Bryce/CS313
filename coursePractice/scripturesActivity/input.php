<?php if(!$_SESSION){
    session_start();
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input New Scripture</title>
	<link href="style.css" rel="stylesheet"  type="text/css">
</head>
<body>
	<nav><a href="view.php">View Scriptures</a></nav>
	<div class="left">
		<form action="index.php" method="POST">
			<label for="book">Book Name:</label>
			<input type="text" name="book" placeholder="e.g. Helaman">

			<label for="chapter">Chapter Number:</label>
			<input type="text" name="chapter" placeholder="e.g. 10">

			<label for="verse">Verse Number:</label>
			<input type="text" name="verse" placeholder="e.g. 55">

			<label for="content">Content:</label>
			<textarea name="content" cols="50" rows="10"></textarea>		
	</div>
	<div class="right">
		<?php
		$topicsOut = "";
		foreach ($_SESSION['topics'] as $value) {
			$topicsOut .= "<input type='checkbox' value='" . $value[0] . "' name='topics[]'>" . $value[1] . "<br><br>";
		}
		echo $topicsOut;
		?>
	<label for="submit"></label>
	<input type="submit" name="action" value="Submit Your Scripture">
	</form>
	</div>
</body>
</html>