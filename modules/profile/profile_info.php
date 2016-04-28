<div class="x_panel">
    <div class="x_title"><h1>About Us</h1></div>
    <div class="x_content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="aboutus">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ante risus. Nulla placerat
                    nec orci efficitur sollicitudin. In eleifend quis purus in cursus. In mauris lorem, interdum
                    quis enim nec, gravida tincidunt augue. Donec nec lacus quis felis consequat facilisis eget
                    in nisi. Proin quis ante placerat neque luctus porta non non purus. Fusce blandit porttitor
                    aliquam. Donec condimentum ex id mi congue pharetra. Nulla lacinia est sed mi sodales sodales.
                    Duis ipsum libero, tempor ullamcorper convallis convallis, condimentum vitae tellus. Praesent
                    porttitor ante tellus, nec gravida metus bibendum laoreet. Mauris consectetur molestie porta.
                </p>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <br><br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <h2>Contact Us</h2>
                <form class="form-horizontal form-label-left input_mask">

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea style="resize: vertical" rows="5" id="message" required="required" class="form-control" name="message" ></textarea>
                            <span class="fa fa-file-text form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
<!--                            <button type="submit" class="btn btn-primary">Cancel</button>-->
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <h2>Where we are</h2>
                <div id="map-canvas" onload="createMap('title', 0, 0)"></div>
            </div>
        </div>
    </div>
</div>