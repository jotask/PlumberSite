    <div class="x_title">
        <h2>Responsive example <small>Users</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>PostCode</th>
                <th>Date</th>
                <th>State</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php

            const MANY = 20;

            srand(123);
//            $array = array("New Job", "Confirmed", "Deleted", "Completed");

            for($i = 0; $i < MANY; $i++){

                $randName = rand(0, sizeof($names) - 1);
                $pCode = rand(0, sizeof($postcode) - 1);

                $rand = rand(0, sizeof($array) - 1);

                $digits = 11;
                $phone = rand(pow(10, $digits-1), pow(10, $digits)-1);

                ?>
                <tr>
                    <td><?php echo $names[$randName] ?></td>
                    <td><?php echo $postcode[$pCode] ?></td>
                    <td>2015/09/20</td>
                    <td>
                        <?php
                        if($i < 3){
                            echo '<span class="label label-info">New Job</span>';
                        }else {
                            switch ($rand) {
//                                case 0:
//                                    echo '<span class="label label-info">New Job</span>';
//                                    break;
                                case 1:
                                    echo '<span class="label label-primary">Confirmed</span>';
                                    break;
                                case 2:
                                    echo '<span class="label label-danger">Deleted</span>';
                                    break;
                                default:
                                    echo '<span class="label label-success">Completed</span>';
                                    break;
                            };
                        }
                        ?>
                    </td>
                    <td>
                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".job<?php echo $i ?>">
                            <i class="fa fa-search"></i> View
                        </button>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".reply<?php echo $i ?>">
                            <i class="fa fa-envelope"></i> Reply
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete">
                            <i class="fa fa-warning"></i> Delete
                        </button>
                    </td>
                </tr>


                <div class="modal fade job<?php echo $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Information Job n.<?php echo $i ?></h4>
                            </div>
                            <div class="modal-body">
                                <h4>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label>Name: </label> <?php echo $names[$randName] ?>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label>Mail: </label> <?php echo $names[$randName] ?>@mail.com
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label>Phone: </label> <?php echo $phone ?>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label>PostCode: </label> <?php echo $postcode[$pCode] ?>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback right">
                                    <label>Description: </label>
                                    Lorem ipsum dolor sit amet, at volutpat definitiones mei, eam euripidis aliquando at. No etiam dolore omittam pri. Eum ut utinam dissentiet. Ex congue quaestio ius, et pri suscipit patrioque. Vix eu dicant convenire, ad pri erant contentiones.

                                    Eu ferri scaevola accommodare ius, ut ferri graeco mei. Usu et libris definitionem. Zril philosophia vix in. Pro habeo alterum assueverit et, sit no paulo intellegam.

                                    Nam suscipit insolens sadipscing ei. Velit recteque pri ut. Eum esse audiam ei. Mea at dolore graecis accusata. An quem integre nec.

                                    Cu eos numquam qualisque, at nonumes admodum corpora vel, dolorum postulant eu nam. At sit brute mnesarchum, mei ex amet ornatus, at mel graeco convenire explicari. Ullum putant ex per, vel ea tibique vituperata philosophia. Atomorum voluptatum necessitatibus nam at. Clita labores imperdiet ius eu, id sonet copiosae eos, tota volumus percipitur cum ad. No eum summo vocent rationibus, oblique virtute nec te.
                                </div>
                                    </h4>
                            </div>
                            <div class="clear"></div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade reply<?php echo $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Reply to Job n.<?php echo $i ?></h4>
                            </div>
                            <form class="form-horizontal form-label-left input_mask">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Introduce Quote" required="required">
                                            <span class="fa fa-gbp form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                <label class="btn btn-success">
                                                    <input type="radio" name="options" id="option1"> Agree Job
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="options" id="option2"> Refuse Job
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea style="resize: vertical" rows="5" id="message" placeholder="Introduce text" required="required" class="form-control" name="message" ></textarea>
                                            <span class="fa fa-file-text form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="applyJob" data-callback="enableBtn">Reply Job</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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