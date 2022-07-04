<?php
if ($cSaveStatus == "E") {
    $id = $edit_meeting_schedule[0]->id;  
	$vYear = $edit_meeting_schedule[0]->vYear ;  
	$vMonth = $edit_meeting_schedule[0]->vMonth;  
	$vMeetingNo = $edit_meeting_schedule[0]->vMeetingNo;  
    $dDate = $edit_meeting_schedule[0]->dDate;  
    $vStatus = $edit_meeting_schedule[0]->vStatus;  
    $cEnable = $edit_meeting_schedule[0]->cEnable;
	
} else {
    $id = "";    
	$vYear = "";  
	$vMonth = "";    
    $vMeetingNo = "";  
    $dDate = "";  
    $vStatus = "";
    $cEnable = "Y";
}
?>
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
                <div  style="color:#096;">
                    <?php echo $this->session->flashdata('message_saved'); ?>
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_restricted') != "") {
                $showinput = 0;
                ?>
                <div  style="color:#F00;">
                    <?php echo $this->session->flashdata('message_restricted'); ?>
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_error') != "" || validation_errors() != "") {
                $showinput = 0;
                ?>
                <div  style="color:#F00;">
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
                            <h2>Meeting Schedule</h2>
                        </div>
                        <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">
                            <?php if($cSaveStatus == "E") { ?>
                            <li><a class="collapse-link" href="<?php echo base_url('adminpanel/about_us/meeting_schedule'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Meeting</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } else { ?>
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Meeting</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                                
                    <div class="x_content" <?php
                    if ($cSaveStatus != "E") {
                        echo 'style="display:none;"';
                    }
                    ?>>
                        <br />
                        <form id="edit_meeting_schedule" name="edit_meeting_schedule" action="<?php echo base_url('adminpanel/about_us/meeting_schedule/save_meeting_schedules'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Year <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vYear" name="vYear" value="<?php echo $vYear; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Month <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <select name="vMonth" id="vMonth" class="form-control" required>
                                            <option value="">Select a Month</option>
                                            <option value="January" <?php if($vMonth == "January") { ?> selected <?php } ?>>January</option>
                                            <option value="February" <?php if($vMonth == "February") { ?> selected <?php } ?>>February</option>
                                            <option value="March" <?php if($vMonth == "March") { ?> selected <?php } ?>>March</option>
                                            <option value="April" <?php if($vMonth == "April") { ?> selected <?php } ?>>April</option>
                                            <option value="May" <?php if($vMonth == "May") { ?> selected <?php } ?>>May</option>
                                            <option value="June" <?php if($vMonth == "June") { ?> selected <?php } ?>>June</option>
                                            <option value="July" <?php if($vMonth == "July") { ?> selected <?php } ?>>July</option>
                                            <option value="August" <?php if($vMonth == "August") { ?> selected <?php } ?>>August</option>
                                            <option value="September" <?php if($vMonth == "September") { ?> selected <?php } ?>>September</option>
                                            <option value="October" <?php if($vMonth == "October") { ?> selected <?php } ?>>October</option>
                                            <option value="November" <?php if($vMonth == "November") { ?> selected <?php } ?>>November</option>
                                            <option value="December" <?php if($vMonth == "December") { ?> selected <?php } ?>>December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Meeting No.<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vMeetingNo" name="vMeetingNo" value="<?php echo $vMeetingNo; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="first-name" >Date<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <!-- <div class="control-group">
                                            <div class="controls"> -->
                                                <div class="col-md-11 xdisplay_inputx  has-feedback" style="padding-left:0px; padding-right:0px;">
                                                    <input type="text" required class="form-control has-feedback-left" id="dDate"  name="dDate" placeholder="Date" aria-describedby="inputSuccess2Status" value="<?php echo $dDate ?>" autocomplete="off" required>
                                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                </div>
                                            <!-- </div>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Status</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <textarea class="form-control col-md-7 col-xs-12" rows="5" name="vStatus"><?php echo $vStatus; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="<?php echo $cEnable ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/about_us/meeting_schedule'); ?>';">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style=" padding-top:0px;">
                    <div class="x_content">
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th style="display:none;">ID </th>
                                    <th style="width:50px;text-align:center;">No </th>
                                    <th>Year </th>      
                                    <th>Month </th> 
                                    <th>Meeting No</th>       
                                    <th>Date</th>                           
                                    <th style="width:80px; text-align:center">Edit </th>
                                    <th style="width:80px; text-align:center">Status </th>
                                    <th style="width:80px; text-align:center">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $oddeven_count = 0;
                                $no_count = 0;
                                if (count($list_data) != 0) {
                                    foreach ($list_data as $rowlist) {
                                        $oddeven_count++;
                                        $no_count++;
                                        if ($oddeven_count == 1) {
                                            $oddeven = 'even pointer';
                                        } else {
                                            $oddeven = 'odd pointer';
                                            $oddeven_count = 0;
                                        }

                                        $recordid = $rowlist->id;
                                        $cEnable = $rowlist->cEnable;
                                        if ($cEnable == 'Y') {
                                            $clicon = 'fa fa-check';
                                        } else {
                                            $clicon = 'fa fa-remove';
                                        }
                                        ?>
                                         
                                        <tr class="<?php echo $oddeven; ?>">
                                            <td class="a-center " style="display:none;"><?php echo $no_count; ?></td>
                                            <td style="text-align:center;"><?php echo $no_count; ?></td>
                                            <td><?php echo $rowlist->vYear;?></td> 
                                            <td><?php echo $rowlist->vMonth;?></td>                                            
                                            <td><?php echo $rowlist->vMeetingNo;?></td>   
                                            <td><?php echo $rowlist->dDate;?></td>   
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/about_us/meeting_schedule/edit_meeting_schedule/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/about_us/meeting_schedule/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/about_us/meeting_schedule/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash-o"></i></a></td>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .DTTT_container
        {
            display:none !important;
            visibility:hidden !important;
        }
        .alert
        {
            margin-left: 161px;
            border-style: none;
        }			
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#dDate').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1",
				format: 'YYYY-MM-DD'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            
        });
    </script>
   

</div>
