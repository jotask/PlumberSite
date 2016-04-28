<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="well well-sm">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <img src="img/<?php echo $photo ?>.jpg" alt="" class="img-rounded img-responsive" />
            </div>
            <div class="col-sm-6 col-md-8">
                <h3> <?php echo $array[$i] -> name; ?></h3>
                <small><cite title="San Francisco, USA"> Aberystwyth, WALES <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                <p>
                    <i class="glyphicon glyphicon-envelope"></i> email@example.com
                    <br />
                    <i class="glyphicon glyphicon-globe"></i><a href="#"> www.examplewebsite.com</a>
                    <br />
                <!-- Split button -->
                <div class="btn-group text-center">
                    <button onclick="location.href='profile.php';" type="button" class="btn btn-primary">
                        Visit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>