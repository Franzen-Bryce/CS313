<?php $mainPage = "assignments"; $page = "assignment1"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bryce Franzen - Assignment 1</title>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/cssLinks.php'; ?>
</head>

<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PHP Survey</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Assignments</li>
                    <li class="active">PHP Survey</li>
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
                <h3>PHP Survey</h3>
                    <form action="phpSurvey.php" role="form">
                      <div class="form-group">
                         <!--Full Name-->
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                           <!--Color-->
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Favorite Color:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your favorite color.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <!--Favorite Movie-->
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Favorite Movie:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your favorite movie.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <button type="button" href="" class="btn btn-">See Messages</button>
                        </div>
                    </form>
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