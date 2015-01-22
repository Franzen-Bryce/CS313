<?php $visited = array($_POST['NA'], $_POST['SA'], $_POST['Eu'], $_POST['As'], $_POST['Au'], $_POST['Af'], $_POST['An']);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Submission</title>
</head>
<body>
    <p><b>Username:</b> <br/><?php echo $_POST['name'] ?></p>
    <p><b>Email:</b> <br/><a href="mailto: <?php echo $_POST['email'] ?>"><?php echo $_POST['email'] ?></a></p>
    <p><b>Major:</b> <br/><?php echo $_POST['major'] ?></p>
    <p><b>Places Visited:</b> <br/><?php foreach ($visited as $value){
        if ($value != ""){
        echo $value . "<br/>";}
    }?>
        </p>
    <p><b>Comment:</b> <br/><?php echo $_POST['comment']?></p>
</body>
</html>