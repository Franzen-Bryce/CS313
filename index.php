<!DOCTYPE html>
<html lang="en">
<?php $page = 'home';?>
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
                    <li class="active">Home</li>
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

        <hr>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

    <!--Script Links-->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/script.php'; ?>
</body>

</html>
