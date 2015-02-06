<?php
date_default_timezone_set("America/Los_Angeles");
if(!$_SESSION){
   session_start();
}

$page = "customerReviews"; 
$subPage = "activeReviews";

if (!$_SESSION['###############'] == ################ ){
        // not logged in move to login page
        header('Location: /coupons/adminLogin.php');
        exit;
    }?>

<!DOCTYPE HTML>
<html lang="en">
    <head><!--HOME-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/faviconIcon.php'; ?>
    <title>Edit Reviews |The Pit Crew Automotive</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <meta charset="UTF-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/script.php'; ?>
    </head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/adminHeader.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/adminModules/reviewsNav.php'; ?>
    <div id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Current Customer Reviews</h2><hr>
                    <?php echo $errors ?>
                </div>
            </div>
            <?php echo $output?>
        </div>
    </div> <!--main content-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    
</body>
<?php   
    unset($_SESSION['errors']);
    unset($_SESSION['message']);
?>
</html>