<?php
date_default_timezone_set("America/Los_Angeles");

if(!$_SESSION){
   session_start();
}
if (!$_SESSION['############'] == ############## ){
        // not logged in move to login page
        header('Location: /coupons/adminLogin.php');
        exit;
    }?>

<!DOCTYPE HTML>
<html lang="en">
    <head><!--HOME-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/faviconIcon.php'; ?>
    <title>Admin |The Pit Crew Automotive</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script type="text/javascript" src="createPreview.js"></script>
    <link rel="stylesheet" type="text/css" href="/formStyle.css">
    <link rel="stylesheet" type="text/css" href="couponStyle.css">
    <meta charset="UTF-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/script.php'; ?>
    </head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/adminHeader.php'; ?>
    <div id="maincontent">
        <div class="container">
            <?php echo $_SESSION['errors'] ?>
            <?php echo $output ?>
        </div>
    </div> <!--main content-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    
</body>
<?php   
    unset($_SESSION['errors']);
    unset($_SESSION['message']);
?>
</html>