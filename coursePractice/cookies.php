<?php 
    if (!isset($_COOKIE['visits'])){
        $visits = 0;
        setcookie("visits", $visits, time() + 10 * 60);
    }
    if (isset($_COOKIE['visits'])){
        if(isset($_COOKIE['visits'])){
            $visits = $_COOKIE['visits'];
            $visits++;
            setcookie("visits", $visits, time() + 10 * 60);
        }
    }
    $name = "userID";
    setcookie($name, $value, time() + 10 * 60);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Testing</title>
</head>
<body>
    <div>
        <h3>This is a page with cookies</h3>
        <?php 
        if($_COOKIE['visits'] == 0){
            echo "You have not visited this page before";
        }
        if($_COOKIE['visits'] == 1){
            echo "You have visited this page <b>" . $_COOKIE['visits'] . "</b> time.";
        }
        if ($_COOKIE['visits'] > 1){
            echo "You have visited this page <b>" . $_COOKIE['visits'] . "</b> times.";
        }
?>
    </div>
</body>
</html>