<!-- Static navbar -->
<nav class="navbar navbar-default container-fluid">
    <div class="container-fluid">
        <div class="navbar-header" style="background-color: #f8f8f8;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo-nav">
                <a href="index.php" class="site_title" style="color: black !important;">
                    <i class="fa fa-rocket"></i>
                    <span> C<small>eredigion</small> P<small>lumbers</small> C<small>ollective</small></span>
                </a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="margin-left: 100px;">

            <?php

                if(!isset($_COOKIE['user'])){

            ?>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

            <?php

                }else{

            ?>

            <ul class="nav navbar-nav navbar-right">

                <?php

                if($_COOKIE["user"] == "admin") {
                    echo '
                    <li role="presentation" class="dropdown" data-toggle="tooltip" data-placement="bottom" data-original-title="Admin Panel">
                        <a href="admin.php" class="dropdown-toggle info-number">
                            Admin Panel
                            <i class="fa fa-shield"></i>
                        </a>
                    </li>
                    ';
                }else{
                    echo '
                    <li role="presentation" class="dropdown" data-toggle="tooltip" data-placement="bottom" data-original-title="You have 3 news Jobs">
                        <a href="jobs.php" class="dropdown-toggle info-number">
                            Jobs
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">3</span>
                        </a>
                    </li>
                    ';
                }

                ?>
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="img/plumber.jpg" alt=""><?php echo $_COOKIE["user"] ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <?php if($_COOKIE["user"] == "plumber") { ?>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="editProfile.php">
<!--                                <span class="badge bg-red pull-right">50%</span>-->
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <?php }; ?>

        </div>
    </div>
</nav>