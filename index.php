<!DOCTYPE html>
<html lang="en">
<?php $page = 'about';?>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Bryce Franzen</title>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/cssLinks.php'; ?>
</head>

<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <br>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" src="/images/bryceAndCandice.jpg" alt="Image of Bryce Franzen">
            </div>
            <div class="col-md-6">
                <h2>Bryce Franzen</h2>
                <p>I am a student at Brigham Young University- Idaho majoring in website development.  I am proficient in HTML, CSS3, JavaScript, PHP, and MySQL.  I have some experience with JQuery.</p>
                <p>I married my wife Candice on July 25, 2014, and I currently live in Rexburg, Idaho.</p>
                <p>I am a quick learner and I love learning new things.  I work well individually or in groups, both are fine with me.  I am good at working with people and communicating or presenting ideas.  I greatly enjoy problem solving, and I am always looking for new ways to make a task easier.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Programming Languages</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/HTML5.png" alt="HTML5 Image">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/CSS3.png" alt="CSS3 Image">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/JavaScript.png" alt="JavaScript Image">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/jQuery.png" alt="jQuery Image">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/mysql.png" alt="MySQL Image">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="/images/languages/php.png" alt="PHP Image">
            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
