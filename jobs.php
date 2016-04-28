<?php include_once("header.php"); ?>

<?php
$names = array("John", "Smith", "Paco" , "Jose", "Mario", "Luigi", "Zelda", "Link", "Ganondorf");
$postcode = array("SY23 2DN", "SY23 23N", "SY23 ER4", "SY23 8E4", "SY23 8JF", "SY23 1JF")
?>

<div class="row">
    <div class="x_panel">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_content">

                    <?php include_once("modules/profile/profile_thumbail.php"); ?>

                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="x_content">
                            <?php include_once("modules/profile/job_profile.php"); ?>
                        </div>
                    </div>
                    
                </div>
        </div>
        <?php include_once("footer_info.php"); ?>
    </div>
</div>

<?php include_once("footer.php"); ?>