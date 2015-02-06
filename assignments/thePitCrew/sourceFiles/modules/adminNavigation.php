<nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 0px;">
  <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="width: 100%; margin-left: auto; color: #fff; text-align: center; background: none; border: none;"><i class="fa fa-bars"></i> Menu</button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li <?php if ($page == "customerReviews"){echo "class='active'";}?>>
                    <a href="/admin/.?action=pendingReviews">Customer Reviews</a>
                </li>
                <li <?php if ($page == "adminCoupons"){echo "class='active'";}?>>
                    <a href="/admin/.?action=editCoupons">Coupons</a>
                </li>
                <li <?php if ($page == "adminSpecials"){echo "class='active'";}?>>
                    <a href="/admin/.?action=editSpecials">Daily Specials</a>
                </li>
                <li <?php if ($page == "adminHours"){echo "class='active'";}?>>
                    <a href="/admin/hours/index.php">Shop Hours</a>
                </li>
                <li>
                    <a href="" style="color: #000000; pointer-events: none; cursor: default;">MSDS Records</a>
                </li>
                <li>
                    <a href="" style="color: #000000; pointer-events: none; cursor: default;">Shop Photos</a>
                </li>
            </ul>
            </div> 
    </div>
</nav><!--navigation-->    