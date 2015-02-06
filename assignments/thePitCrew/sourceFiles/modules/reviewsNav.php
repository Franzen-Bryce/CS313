<nav id="navigation2" class="" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" style="width: 100%; margin-left: auto; color: #fff; text-align: center; background: none; border: none;"><i class="fa fa-bars"></i> Sub-menu</button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if ($subPage == "pendingReviews"){echo "class='active'";}?>>
                        <a href="/admin/?action=pendingReviews">Pending Reviews</a>
                    </li>
                    <li <?php if ($subPage == "activeReviews"){echo "class='active'";}?>>
                        <a href="/admin/?action=editReviews">Active Reviews</a>
                    </li>
                </ul>
            </div>
    </div>
</nav> <!--navigation-->
