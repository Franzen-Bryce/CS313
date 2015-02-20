<?php 
$mainPage = "assignments"; 
$page = "thePitCrew";

if(!$_SESSION){
    session_start();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bryce Franzen - The Pit Crew Automotive</title>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/cssLinks.php'; ?>
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PHP Database Interaction</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Assignments</li>
                    <li class="active">PHP Database Interaction (The Pit Crew Automotive)</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/sideBarNav.php'; ?>
            
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>PHP Database Interaction (<a href="http://www.thepitcrewautomotive.com/services/trico-view/#customerReviews" target="_blank">www.thepitcrewautomotive.com</a>)</h3>
                <h4>Project:</h4>
                <p>For this project I created a customer comment interface for The Pit Crew Automotive's website.  I included this comment interface on each service page of the site and built an administrator panel to manage customer comments.</p>
                <br>
                <h4>Comment Interface:</h4>
                <iframe style="width: 100%; height: 800px; border: none;" src="http://thepitcrewautomotive.com/services/oil-changes/test-service/"></iframe>
                <br><br>
                <h4>Administrator Control Panel:</h4>
                <img class="img-responsive" src="/images/portfolio/thePitCrewAutomotive/pendingReviews.png" alt="The Pit Crew Automotive Pending Reviews Image" />
                <br>
                <img class="img-responsive" src="/images/portfolio/thePitCrewAutomotive/activeReviews.png" alt="The Pit Crew Automotive Active Reviews Image" />
            </div>
        </div>
        <!-- /.row -->
        <hr>

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    
    <!--Script Links-->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/script.php'; ?>
</body>

</html>