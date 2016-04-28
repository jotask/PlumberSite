<button type="button" class="btn btn-success btn-lg col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target=".contract">
    <i class="fa fa-gbp m-right-xs"></i> Request Quote
</button>

<div class="modal fade contract" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Request Quote</h4>
            </div>
            <form class="form-horizontal form-label-left input_mask">
                <div class="modal-body">
                    <h2>
                        <label>Contract this plumber for an job. As soon as possible they make contact with you.</label>
                    </h2>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone" required="required">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback right">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess6" placeholder="PostCode" required="required">
                        <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea style="resize: vertical" rows="5" id="message" placeholder="Job Description" required="required" class="form-control" name="message" ></textarea>
                            <span class="fa fa-file-text form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Ld5dxwTAAAAAHmuxg-DPzfAyhLK-fy27tC1NS-R" data-callback="enableBtn"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" disabled class="btn btn-primary" id="applyJob">Request Quote</button>
                </div>
            </form>
        </div>
    </div>
</div>