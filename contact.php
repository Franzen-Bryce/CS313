<?php $page = "contact";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Franzen-IT - Contact Details</title>
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
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Bryce Franzen</h3>
                <p>
                    Rexburg, ID 83440<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"></abbr> 503.927.1984</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"></abbr><a href="mailto:bryce@franzenit.com">bryce@franzenit.com</a>
                </p>
                <!--Social Media Buttons-->
                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/bryce.franzen.925" target="_blank" style="float: left; margin-right: 10px; margin-left: 0px;">
                    <i class="fa fa-facebook"></i>
                </a>
                 <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/reg/join-pprofile?_ed=0_6z-TvuXKildI8zdGHbGhxKDBtnIiOJxUrOjmtmwtOdQHofbVm2Y-mf9zhkbvzZaNcWRTC2PiZSSGqiFbINBmkcvqFtrNHBujlogBaeKTAi9&trk=ndir_viewmore" target="_blank" style="float: left; margin-right: 10px; margin-left: 0px;">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="btn btn-social-icon btn-google-plus" href="https://plus.google.com/u/0/102447292539777214751/posts" target="_blank" style="float: left; margin-right: 10px; margin-left: 0px;">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="col-md-8">
                <h3>Send Bryce a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div><br>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-4" style="margin-top:-360px;">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46051.89475206868!2d-111.78818289999998!3d43.83005045000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53540a4b807a98b1%3A0x4a49d8d1d2181c73!2sRexburg%2C+ID!5e0!3m2!1sen!2sus!4v1420838214512"></iframe>
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