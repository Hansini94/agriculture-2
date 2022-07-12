<?php
if ($cSaveStatus == "E") {
    $id = $edit_dean_officer[0]->id;  
	$iDesignation = $edit_dean_officer[0]->iDesignation ;  
	$vTitle = $edit_dean_officer[0]->vTitle;  
	$vName = $edit_dean_officer[0]->vName;  
    $vTelephone = $edit_dean_officer[0]->vTelephone;  
    $vMobile = $edit_dean_officer[0]->vMobile;  
    $vEmail1 = $edit_dean_officer[0]->vEmail1;
    $vEmail2 = $edit_dean_officer[0]->vEmail2;
    $cEnable = $edit_dean_officer[0]->cEnable;
	
} else {
    $id = "";    
	$iDesignation = "";  
	$vTitle = "";    
    $vName = "";  
    $vTelephone = "";  
    $vMobile = "";  
    $vEmail1 = "";
    $vEmail2 = "";
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
                            <h2>Dean's Office Officers</h2>
                        </div>
                        <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">
                            <?php if($cSaveStatus == "E") { ?>
                            <li><a class="collapse-link" href="<?php echo base_url('adminpanel/about_us/dean_office_officers'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Officer</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } else { ?>
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Officer</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
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
                        <form id="Edit_dean_officer" name="Edit_dean_officer" action="<?php echo base_url('adminpanel/about_us/dean_office_officers/save_dean_officers'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Designation <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <select name="iDesignation" id="iDesignation" class="form-control" required>
                                            <option value="">Select Designation</option>
                                            <option value="1" <?php if($iDesignation == 1) { ?> selected <?php } ?>>Dean</option>
                                            <option value="2" <?php if($iDesignation == 2) { ?> selected <?php } ?>>Assistant Registrar</option>
                                            <option value="3" <?php if($iDesignation == 3) { ?> selected <?php } ?>>Assistant Bursar</option>
                                            <option value="4" <?php if($iDesignation == 4) { ?> selected <?php } ?>>Senior Staff Assistant</option>
                                            <option value="5" <?php if($iDesignation == 5) { ?> selected <?php } ?>>Staff Assistant</option>
                                            <option value="6" <?php if($iDesignation == 6) { ?> selected <?php } ?>>CAA</option>
                                            <option value="7" <?php if($iDesignation == 7) { ?> selected <?php } ?>>AV Technical Officer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Title <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <select name="vTitle" id="vTitle" class="form-control" required>
                                            <option value="">Select Title</option>
                                            <option value="Prof." <?php if($vTitle == "Prof.") { ?> selected <?php } ?>>Prof.</option>
                                            <option value="Dr." <?php if($vTitle == "Dr.") { ?> selected <?php } ?>>Dr.</option>
                                            <option value="Ms." <?php if($vTitle == "Ms.") { ?> selected <?php } ?>>Ms.</option>
                                            <option value="Mr." <?php if($vTitle == "Mr.") { ?> selected <?php } ?>>Mr.</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Name <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vName" name="vName" value="<?php echo $vName; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Phone No</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vTelephone" name="vTelephone" value="<?php echo $vTelephone; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Mobile No</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vMobile" name="vMobile" value="<?php echo $vMobile; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Email (Official)</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vEmail1" name="vEmail1" value="<?php echo $vEmail1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Email (Personal)</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vEmail2" name="vEmail2" value="<?php echo $vEmail2; ?>" class="form-control col-md-7 col-xs-12">
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/about_us/dean_office_officers'); ?>';">Cancel</button>
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
                                    <th>Designation </th>      
                                    <th>Name </th> 
                                    <th>Phone No</th>       
                                    <th>Email</th>                           
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

                                        if($rowlist->iDesignation == 1) {
                                            $designation = "Dean";
                                        } else if($rowlist->iDesignation == 2) {
                                            $designation = "Assistant Registrar";
                                        } else if($rowlist->iDesignation == 3) {
                                            $designation = "Assistant Bursar";
                                        } else if($rowlist->iDesignation == 4) {
                                            $designation = "Senior Staff Assistant";
                                        } else if($rowlist->iDesignation == 5) {
                                            $designation = "Staff Assistant";
                                        } else if($rowlist->iDesignation == 6) {
                                            $designation = "CAA";
                                        } else {
                                            $designation = "AV Technical Officer";
                                        }
                                        ?>
                                         
                                        <tr class="<?php echo $oddeven; ?>">
                                            <td class="a-center " style="display:none;"><?php echo $no_count; ?></td>
                                            <td style="text-align:center;"><?php echo $no_count; ?></td>
                                            <td><?php echo $designation;?></td> 
                                            <td><?php echo $rowlist->vTitle.' '.$rowlist->vName;?></td>                                            
                                            <td><?php echo $rowlist->vTelephone;?></td>   
                                            <td><?php echo $rowlist->vEmail1;?></td>   
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/about_us/dean_office_officers/edit_dean_officers/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/about_us/dean_office_officers/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/about_us/dean_office_officers/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
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
   

</div>
