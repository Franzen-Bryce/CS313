<?php $page = 'portfolio';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Portfolio - Franzen-IT</title>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/cssLinks.php'; ?>
</head>

<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <br>
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Personal Works Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-pitCrew">
                    <img class="img-responsive img-hover" src="/images/portfolio/thePitCrewAutomotive/thePitCrewAutomotive.png" alt="thepitcrewautomotive.com screenshot">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style='margin-top: 0px;'><b>The Pit Crew Automotive</b></h3>
                <h4>HTML5, CSS3, JavaScript, PHP, MySQL, AJAX</h4>
                <p>An automotive mechanic shop located in Milwaukie, Oregon.</p>
                <p>This site features a database driven administrator control panel to manage the coupons, hours, and daily specials of the shop.  Coupons and daily specials can be set to expire based upon a specific date, then they are "parked" for future use, but disabled from public access.</p>
                <ul>
                    <li>Currently Live</li>
                    <li>Database Integration</li>
                    <li>Administrator panel to edit site content</li>
                    <li>Built from the ground up without a framework</li>
                </ul>
                <a class="btn btn-danger danger-visit-site" href="http://www.thepitcrewautomotive.com" target="_blank">Visit Site</a>&nbsp;
                <!-- <a class="btn btn-primary" href="portfolio-pitCrew.php">Learn More</a> -->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-tally">
                    <img class="img-responsive img-hover" src="/images/portfolio/tally/loginScreenAndMenu.png" alt="tally.franzenit.com screenshot">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style='margin-top: 0px;'><b>Tally</b></h3>
                <h4>HTML5, CSS3, JavaScript, PHP, MySQL, JQuery, AJAX</h4>
                <p>Tally is a web-app that facilitates simultaneous multiple device tally counting.</p>
                <p>This site was developed for a class at BYU-I and features an organization login, multi-user management, and event management (based on location and date).  Users can open this app on their mobile devices and sign in to an event.  Once the event is selected, a tally counter is displayed on the screen with several counting options.  User totals are synced via AJAX to a MySQL database automatically.  Every 5 seconds the app pulls the most recent total count from all of the devices and displays it on each device.</p>
                <ul>
                    <li>Currently Live</li>
                    <li>Database Integration</li>
                    <li>Built from the ground up without a framework</li>
                </ul>
                <a class="btn btn-danger danger-visit-site" href="http://tally.franzenit.com" target="_blank">Visit Site</a>&nbsp;
                <!-- <a class="btn btn-primary" href="portfolio-tally.php">Learn More</a> -->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="portfolio-sabuWorks">
                    <img class="img-responsive img-hover" src="/images/portfolio/sabuWorks/homePage.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style='margin-top: 0px;'><b>Sabu Works</b></h3>
                <h4>HTML5, CSS3, JavaScript, PHP, MySQL</h4>
                <p>I created Sabu Works for a friend who wanted a way to rent his personal camera equipment in the local area.  This site features user account creation (for the general user) along with a full administrator control panel.  This site is FULLY database driven.  All content including menus can be edited and created from within the administration panel.  The panel displayed after login is determined based upon users security level.</p>
                <ul>
                    <li>Still in development</li>
                    <li>Fully database driven</li>
                    <li>Complete user and content management</li>
                    <li>Built from the ground up without a framework</li>
                </ul>
                <a class="btn btn-danger danger-visit-site" href="http://sabuworks.franzenit.com" target="_blank">Visit Site</a>&nbsp;
                <!-- <a class="btn btn-primary" href="portfolio-sabuWorks.php">Learn More</a> -->
            </div>
        </div>
        <!-- /.row -->
        <hr>
         <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-amandaConley">
                    <img class="img-responsive img-hover" src="/images/portfolio/amandaConleyPhotography/amandaConleyPhotography.png" alt="amandaconleyphotography.zenfolio.com screenshot">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style='margin-top: 0px;'><b>Amanda Conley Photography</b></h3>
                <h4>HTML5, CSS3, JavaScript, PHP</h4>
                <p>Amanda Conley Photography is a site hosted through zenfolio.com, and custom web forms are not supported in their drag and drop design.  Amanda Conley contacted me to create custom web forms that would match her site's style scheme.  These web forms are hosted through my domain and included into her site through the implementation of iFrames.</p>
                <a class="btn btn-danger danger-visit-site" href="http://www.amandaconleyphotography.com/senior-questionnaire" target="_blank">Visit Site</a>&nbsp;
                <!-- <a class="btn btn-primary" href="portfolio-amandaConley.php">Learn More</a> -->
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
