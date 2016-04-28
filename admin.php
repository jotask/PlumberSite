<?php include_once("header.php"); ?>

    <div class="row">
        <div class="col-md-11 x_panel">
            <div class="x_title">
                <h2>Responsive example <small>Users</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="btn-group" style="width: 100%">
                    <button type="button" class="btn btn-lg btn-info btn-block" data-toggle="modal" data-target=".newplumber">Add New Plumber</button>

                    <div class="modal fade newplumber" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add New Plumber to the website</h4>
                                </div>
                                <form class="form-horizontal form-label-left input_mask">
                                    <div class="modal-body">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Company Name" required="required">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-right" id="inputSuccess4" placeholder="Email" required="required">
                                            <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="First Name" required="required">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name" required="required">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Password" required="required">
                                            <span class="fa fa-ellipsis-h form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add New Plumber</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mail</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    for($i = 0; $i < PLUMBERS; $i++){

                        ?>
                        <tr>
                            <td><?php echo $array[$i] -> name ?></td>
                            <td><?php echo $array[$i] -> name ?>@mail.com</td>
                            <td>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-block"><i class="fa fa-bell"></i> Reset Password</button>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target=".delete"><i class="fa fa-ban"></i> Remove</button>
                                </div>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <div class="modal fade delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Delete This plumber</h4>
                            </div>
                            <div class="modal-body">
                                <h2>
                                    <label>Are you sure you want delete this plumber from the system? This action can't be undo.</label>
                                </h2>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">
                                    <i class="fa fa-close user-profile-icon"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">
                                    <i class="fa fa-warning user-profile-icon"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php include_once("footer_info.php"); ?>
        </div>
    </div>

<?php include_once("footer.php"); ?>