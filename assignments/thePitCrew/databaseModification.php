<?php 
$mainPage = "assignments"; 
$page = "databaseModify";

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
    <title>Bryce Franzen - Database Modification</title>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/cssLinks.php'; ?>
    <script>
		function show(){
    		$("#credentials").fadeIn(2000);
		}
    </script>
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PHP Database Modification</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Assignments</li>
                    <li class="active">PHP Database Modification (The Pit Crew Automotive)</li>
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
                <h3>PHP Database Modification (<a href="http://thepitcrewautomotive.com/coupons/adminLogin.php" target="_blank">www.thepitcrewautomotive.com</a>)</h3>
                <h4>Click the above link.  The following credentials will grant you read-only access to the admin panel.</h4>
                <hr>
                <div class="row">
	                <div class="col-md-7">
	                	<small>USAGE AGREEMENT:</small><br>
						<small>I agree that I will use the following credentials to evaluate and preview The Pit Crew Automotive's admin panel, and that I will in no way attempt to "hack" or alter the database.  I understand that the act of doing so will be punishable by law.</small>
					</div>
					<div class="col-md-4" style="margin-top: 30px;">
						<button class="btn btn-danger" onclick="show()">I agree, show me the credentials</button>
					</div>
				</div><br>
                <div class="row" style="display: none" id="credentials">
	                <div class="col-md-4"><p><b>Username:</b> limitedAdmin</p></div>
    				<div class="col-md-4"><p><b>Password:</b> limitedAccess</p></div>
                </div>
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