<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/FWDLogoWhite.png" alt="FWD Logo" style="height:35px; margin-top: -5px;"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($page == "home"){echo "class='active'";}?>>
                        <a href="/">Home</a>
                    </li>
                    <li <?php if ($page == "portfolio"){echo "class='active'";}?>>
                        <a href="/portfolio.php">Personal Works Portfolio</a>
                    </li>
                    <li <?php if ($page == "contact"){echo "class='active'";}?>>
                        <a href="/contact.php">Contact</a>
                    </li>
                    <li class="dropdown <?php if ($mainPage == "assignments"){echo "active";}?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CS313 Assignments <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php if ($page == "assignment1"){echo "class='active'";}?>>
                                <a href="/assignments/assignment1">PHP Survey</a>
                            </li>
                            <li <?php if ($page == "thePitCrew"){echo "class='active'";}?>>
                                <a href="/assignments/thePitCrew">PHP Database Interaction (The Pit Crew Automotive)</a>
                            </li>
                            <li <?php if ($page == "databaseModify"){echo "class='active'";}?>>
                                <a href="/assignments/thePitCrew/databaseModification.php">PHP Database Modification (The Pit Crew Automotive)</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>