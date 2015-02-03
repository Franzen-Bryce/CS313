<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scriptures</title>
</head>
<body>
	<form action="index.php" method="POST" accept-charset="utf-8">
		<input type="text" name="search" placeholder="Book Name" value="<?php echo $searchName;?>"/>
		<input type="submit" name="action" value="Search">
	</form>
	<?php echo $output; ?>
</body>
</html>