<?php include_once("header.php"); ?>

    <div class="row">
        <div class="col-md-12 x_panel">
            <div class="right_col" role="main">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plumbers in Ceredigion</h3>
                    </div>
                    <div class="title_right">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <?php
                                    srand(78);
                                    for($i = 0; $i < PLUMBERS; $i++){
                                    $photo = rand(0,4);
                                    include("modules/pumbler_profile_thumbail.php");
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("footer_info.php"); ?>
        </div>
    </div>

<?php include_once("footer.php"); ?>