<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Display</title>
</head>
<body>
    <?php echo "The session count is... " . $_SESSION['count'] ?>
    
</body>
</html>