<?php include_once("header.php"); ?>

    <div class="row">
        <div class="col-md-12 x_panel">
            <div class="x_content">

                <?php include_once ("modules/profile/profile_thumbail.php"); ?>

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="x_content">
                        <div class="x_panel">
                            <div class="x_title"><h1>Skills</h1></div>
                            <div class="x_content">
                                <div class="x_content text-center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-info"> Add Skill</button>
                                        <button class="btn btn-warning"> Remove Skill</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sd-6 col-xs-12">
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p>Bathrooms</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="50" onchange="range1.value=value">
                                                <output id="range1">50</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Domestic work</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="70" onchange="range2.value=value">
                                                <output id="range2">70</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Commercial Work</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="30" onchange="range3.value=value">
                                                <output id="range3">30</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Gas Work</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="95" onchange="range4.value=value">
                                                <output id="range4">95</output>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sd-6 col-xs-12">
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p>Power Flushing</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="75" onchange="range5.value=value">
                                                <output id="range5">75</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>SureStop Water</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="23" onchange="range6.value=value">
                                                <output id="range6">23</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Agricultural Work</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="25" onchange="range7.value=value">
                                                <output id="range7">25</output>
                                            </div>
                                        </li>
                                        <li>
                                            <p>House Hold Plumbing</p>
                                            <div class="range range-info">
                                                <input type="range" name="range" min="1" max="100" value="69" onchange="range8.value=value">
                                                <output id="range8">69</output>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                                    <button type="submit" class="btn btn-default">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>

                        <div class="x_panel">
                            <div class="x_title"><h1>About Us</h1></div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Company Name" value="AberPlumber">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>Street</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Address" value="111, Hadley Park Road">
                                            <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>City</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="City" value="Leegomery, Telford">
                                            <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>PostCode</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="PostCode" value="TF1 6PS">
                                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>TelePhone</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="TelePhone" value="01952 811118">
                                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <label>WebSite</label>
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="WebSite" value="www.AberPlumber.com">
                                            <span class="fa fa-link form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_content">
                                            <div id="alerts"></div>
                                            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li><li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li><li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li><li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li><li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li><li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li><li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li><li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li><li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li><li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li><li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li><li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li><li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li><li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li><li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li></ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a data-edit="fontSize 5">
                                                                <p style="font-size:17px">Huge</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-edit="fontSize 3">
                                                                <p style="font-size:14px">Normal</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-edit="fontSize 1">
                                                                <p style="font-size:11px">Small</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                                    <a class="btn" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                                    <a class="btn" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>
                                                    <a class="btn" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="icon-list-ul"></i></a>
                                                    <a class="btn" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="icon-list-ol"></i></a>
                                                    <a class="btn" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                                                    <a class="btn" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                                                    <a class="btn" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                                                    <a class="btn" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                                                    <a class="btn" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="icon-link"></i></a>
                                                    <div class="dropdown-menu input-append">
                                                        <input class="span2" placeholder="URL" type="text" data-edit="createLink">
                                                        <button class="btn" type="button">Add</button>
                                                    </div>
                                                    <a class="btn" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="icon-cut"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="icon-picture"></i></a>
                                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 41px; height: 34px;">
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                                                    <a class="btn" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                                                </div>
                                            </div>
                                            <div id="editor" contenteditable="true">
                                            </div>
                                            <textarea style="resize: vertical" rows="5" id="message" required="required" class="form-control" name="message" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ante risus. Nulla placerat nec orci efficitur sollicitudin. In eleifend quis purus in cursus. In mauris lorem, interdum quis enim nec, gravida tincidunt augue. Donec nec lacus quis felis consequat facilisis eget in nisi. Proin quis ante placerat neque luctus porta non non purus. Fusce blandit porttitor aliquam. Donec condimentum ex id mi congue pharetra. Nulla lacinia est sed mi sodales sodales. Duis ipsum libero, tempor ullamcorper convallis convallis, condimentum vitae tellus. porttitor ante tellus, nec gravida metus bibendum laoreet. Mauris consectetur molestie porta.
                                            </textarea>

                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                                        <button type="submit" class="btn btn-default">Discard</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>

                                    </div>
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