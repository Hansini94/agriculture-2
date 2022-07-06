<?php
if ($cSaveStatus == "E") {
    $id = $edit_schedule[0]->id;  
	$vTitle = $edit_schedule[0]->vTitle;  
	$tDescription = $edit_schedule[0]->tDescription;  
	$cEnable = $edit_schedule[0]->cEnable; 
} else {
    $id = "";    
	$vTitle = "";  
	$tDescription = "";
    $cEnable = "";
}
?>
<script language="javascript" type="text/javascript">
    var maxAmount = 300;

    function textCounter(textField, showCountField) {
        if (textField.value.length > maxAmount) {
            textField.value = textField.value.substring(0, maxAmount);
        } else {
            showCountField.value = maxAmount - textField.value.length;
        }
    }
</script>
<style>
    .noofCharactor {
        background: #f00 none repeat scroll 0 0;
        border: medium none #fff;
        color: #fff;
        font-size: 12px;
        height: 15px;
        line-height: 12px;
        padding: 2px;
        text-align: center;
        vertical-align: middle;
    }
</style>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div style="text-align:center;">
            <div id="dialog" title="Error" style="display: none;">
                <p>Please fill required information.</p>
            </div>
            <?php
            $showinput = 1;
            if ($this->session->flashdata('message_saved') != "") {
                $showinput = 0;
            ?>
                <div style="color:#096;">
                    <?php echo $this->session->flashdata('message_saved'); ?>
                </div>
            <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_restricted') != "") {
                $showinput = 0;
            ?>
                <div style="color:#F00;">
                    <?php echo $this->session->flashdata('message_restricted'); ?>
                </div>
            <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_error') != "" || validation_errors() != "") {
                $showinput = 0;
            ?>
                <div style="color:#F00;">
                    <?php
                    echo validation_errors('<div style="height:22px; padding:0px; margin-bottom:5px; " class="alert alert-danger" role="alert">', '</div>');
                    echo $this->session->flashdata('message_error');
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h2>FQAC - Schedule Of Meetings</h2>
                        </div>
                        <!-- <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Edit Faculty Statistic</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                        </ul> -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_meeting_schedule" name="edit_meeting_schedule" action="<?php echo base_url('adminpanel/quality/schedule_of_meetings/save_schedule'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Title <span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle" name="vTitle" value="<?php echo $edit_schedule[0]->vTitle; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Description <span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" id="tDescription" name="tDescription" value="<?php echo $edit_schedule[0]->tDescription; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 50px;" >

                                <div class="row" >
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Month</label>
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="vProTitle">Date</label>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vProTitle">Status</label>
                                    </div>
                                </div>
                                <?php foreach($list_data as $value) { ?>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 50px;">
                                <div class="row" > 
                                 
                                    <input type="hidden" id="id" name="id[]" value="<?php echo $value->id; ?>" class="form-control col-md-4 col-sm-4 col-xs-12">

                                    <label class="input">                                            
                                        <input type="text" id="vMonth" name="vMonth[]" value="<?php echo $value->vMonth; ?>" readonly class="form-control col-md-4 col-sm-4 col-xs-12">
                                    </label>

                                    <label class="input">
                                    <div class="col-md-11 xdisplay_inputx  has-feedback" style="padding-left:0px; padding-right:0px;">
                                    <input type="text" class="form-control has-feedback-left dDate" id="dDate"  name="dDate[]" aria-describedby="inputSuccess2Status" value="<?php echo $value->dDate; ?>" autocomplete="off">
                                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                </div>
                                                </label>

                                    <label class="input">
                                        <input type="text" id="vStatus" name="vStatus[]" value="<?php echo $value->vStatus; ?>" class="form-control col-md-4 col-sm-4 col-xs-12">
                                    </label>

                                </div>
                                </div>

                                <?php } ?>

                                <br />

                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"> -->

                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="<?php echo $cEnable ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/quality/schedule_of_meetings'); ?>';">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .DTTT_container {
            display: none !important;
            visibility: hidden !important;
        }

        .alert {
            margin-left: 161px;
            border-style: none;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dDate').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1",
				format: 'YYYY-MM-DD'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            
        });
    </script>

</div>