<div class="col-md-3 col-sm-12 col-xs-12 profile_left">

    <div class="row">

        <div class="col-md-12 col-sm-5 col-xs-12">
            <div id="crop-avatar">
                <div class="avatar-view" title="Change the avatar">
                    <img src="img/picture.jpg" alt="Avatar">
                </div>
                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
            </div>
        </div>

        <div class="col-md-12 col-sm-7 col-xs-12">
            <h3>AberPlumber</h3>
            <ul class="list-unstyled user_data">
                <li><i class="fa fa-home user-profile-icon"></i> 111, Hadley Park Road</li>
                <li><i class="fa fa-bank user-profile-icon"></i> Leegomery, Telford</li>
                <li><i class="fa fa-map-marker user-profile-icon"></i> TF1 6PS</li>
                <li><i class="fa fa-phone user-profile-icon"></i> 01952 811118</li>
                <li class="m-top-xs">
                    <i class="fa fa-external-link user-profile-icon"></i>
                    <a href="http://www.shropshireplumber.com/" target="_blank">www.AberPlumber.com</a>
                </li>
            </ul>

            <div class="clearfix"></div>

            <?php

            if(!isset($_COOKIE["user"])) {
                include_once("contract.php");
            }else {
                $files = get_included_files();
                $boool = false;
                foreach ($files as $f){
                    if(basename($f) == "editProfile.php"){
                        $boool = true;
                    }
                };
                if ($_COOKIE["user"] == "plumber" && !$boool) {
                    echo '
                        <a href="editProfile.php">
                        <button type="button" class="btn btn-success btn-lg col-md-12 col-sm-12 col-xs-12">
                        <i class="fa fa-edit m-right-xs"></i> Edit Profile
                        </button>
                        </a>';
                }elseif($_COOKIE["user"] == "admin" && !$boool){
                    include_once("contract.php");
                }
            }

            ?>

        </div>
    </div>
</div>