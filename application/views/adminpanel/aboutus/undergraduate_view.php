<?php
if ($cSaveStatus == "E") {
    $id = $edit_undergraduate[0]->id;  
	$iDegree = $edit_undergraduate[0]->iDegree;  
	$iStudentType = $edit_undergraduate[0]->iStudentType;  
	$vYear = $edit_undergraduate[0]->vYear;  
    $vBatch = $edit_undergraduate[0]->vBatch;  
    $iMale = $edit_undergraduate[0]->iMale;  
    $iFemale = $edit_undergraduate[0]->iFemale;  
    $cEnable = $edit_undergraduate[0]->cEnable;
    $id = $edit_undergraduate_conferred[0]->id;  
	$iDegree = $edit_undergraduate_conferred[0]->iDegree;  
	$iStudentType = $edit_undergraduate[0]->iStudentType;  
	$vYear = $edit_undergraduate_conferred[0]->vYear;  
    $vBatch = $edit_undergraduate_conferred[0]->vBatch;  
    $iMale = $edit_undergraduate_conferred[0]->iMale;  
    $iFemale = $edit_undergraduate_conferred[0]->iFemale;  
    $cEnable = $edit_undergraduate_conferred[0]->cEnable;
	
} else {
    $id = "";    
	$iDegree = "";  
	$iStudentType = "";    
    $vYear = "";  
    $vBatch = "";  
    $iMale = "";
    $iFemale = "";
    $cEnable = "Y";
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
                            <h2>Faculty Statistics</h2>
                        </div>
                        <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Edit Faculty Statistic</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_meeting_schedule" name="edit_meeting_schedule" action="<?php echo base_url('adminpanel/about_us/undergraduate/save_undergraduate'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Degree <span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" id="iDegree" name="iDegree" value="<?php echo $edit_undergraduate[0]->vName; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <?php if($edit_undergraduate[0]->iStudentType == 1) { ?>

                                <div class="item form-group">
                                    <!-- <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Student Type <span class="required">*</span></label> -->
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="hidden" id="iStudentType" name="iStudentType[]" value="<?php if($edit_undergraduate[0]->iStudentType == 1) { echo "Current"; } else { echo "Conferred"; } ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="row" style="padding-left: 50px;">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Batch</label>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Male</label>
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="vProTitle">Female</label>
                                    </div>
                            </div>
                        
                                <?php foreach($edit_undergraduate as $undergraduate) { ?>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row" style="padding-left: 50px;"> 
                                
                                    <input type="hidden" id="id" name="id[]" value="<?php echo $undergraduate->id; ?>" class="form-control col-md-7 col-xs-12">

                                    <label class="input">                                            
                                        <input type="text" id="vBatch" name="vBatch[]" value="<?php echo $undergraduate->vBatch; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                    </label>

                                    <label class="input">
                                        <input type="text" id="iMale" name="iMale[]" value="<?php echo $undergraduate->iMale; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                    </label>

                                    <label class="input">
                                        <input type="text" id="Female" name="Female[]" value="<?php echo $undergraduate->iFemale; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                    </label>

                                    <!-- <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Batch <span class="required">*</span></label>
                                        <div class="col-md-3 col-sm-7 col-xs-12">
                                            <input type="text" id="vBatch" name="vBatch[]" value="<?php echo $undergraduate->vBatch; ?>" class="form-control col-md-4 col-xs-12" required>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Male <span class="required">*</span></label>
                                        <div class="col-md-3 col-sm-7 col-xs-12">
                                            <input type="number" id="iMale" name="iMale[]" value="<?php echo $undergraduate->iMale; ?>" class="form-control col-md-4 col-xs-12" required>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Female <span class="required">*</span></label>
                                        <div class="col-md-3 col-sm-7 col-xs-12">
                                            <input type="text" id="iFemale" name="iFemale[]" value="<?php echo $undergraduate->iFemale; ?>" class="form-control col-md-4 col-xs-12" required>
                                        </div>
                                    </div> -->

                                </div>
                                </div>

                                <?php } } ?>

                                <br /><br /><br />
                                <div class="x_title">
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <h2>Conferred</h2>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="item form-group">
                                        <!-- <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Student Type <span class="required">*</span></label> -->
                                        <div class="col-md-8 col-sm-7 col-xs-12">
                                            <input type="hidden" id="iStudentType" name="iStudentType[]" value="<?php if($edit_undergraduate_conferred[0]->iStudentType == 1) { echo "Current"; } else { echo "Conferred"; } ?>" class="form-control col-md-7 col-xs-12" readon>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-left: 50px;">
                                        <label class="control col-md-4 col-sm-3 col-xs-12" for="vProTitle">Batch</label>
                                        <label class="control col-md-4 col-sm-3 col-xs-12" for="vProTitle">Male</label>
                                        <label class="control col-md-4 col-sm-3 col-xs-12" for="vProTitle">Female</label>
                                    </div>

                                    

                                    <?php 
                                        if($edit_undergraduate_conferred[0]->iStudentType == 2) {
                                    foreach($edit_undergraduate_conferred as $undergraduate) { ?>
                                    <div class="row" style="padding-left: 50px;"> 
                                    
                                        <input type="hidden" id="id" name="id[]" value="<?php echo $undergraduate->id; ?>" class="form-control col-md-7 col-xs-12">

                                        <label class="input">                                            
                                            <input type="text" id="vBatch" name="vBatch[]" value="<?php echo $undergraduate->vBatch; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                        </label>

                                        <label class="input">
                                            <input type="text" id="iMale" name="iMale[]" value="<?php echo $undergraduate->iMale; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                        </label>

                                        <label class="input">
                                            <input type="text" id="Female" name="Female[]" value="<?php echo $undergraduate->iFemale; ?>" class="form-control col-md-4 col-sm-3 col-xs-12" required>
                                        </label>


                                        <!-- <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Batch <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-7 col-xs-12">
                                                <input type="text" id="vBatch" name="vBatch[]" value="<?php echo $undergraduate->vBatch; ?>" class="form-control col-md-4 col-xs-12" required>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Male <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-7 col-xs-12">
                                                <input type="number" id="iMale" name="iMale[]" value="<?php echo $undergraduate->iMale; ?>" class="form-control col-md-4 col-xs-12" required>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Female <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-7 col-xs-12">
                                                <input type="text" id="iFemale" name="iFemale[]" value="<?php echo $undergraduate->iFemale; ?>" class="form-control col-md-4 col-xs-12" required>
                                            </div>
                                        </div> -->

                                    </div>

                                <?php } } ?>
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
                                    <th>Degree </th>                              
                                    <th style="width:80px; text-align:center">Edit </th>
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
                                            <td><?php echo $rowlist->vName;?></td>   
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/about_us/undergraduate/edit_undergraduate/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
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
                            

                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"> -->

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


</div>///