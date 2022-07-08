<?php
if ($cSaveStatus == "E") {
    $id = $edit_adv_prog_course[0]->id;  
    $iAdvProgId = $edit_adv_prog_course[0]->iAdvProgId; 
    $vCourseType = $edit_adv_prog_course[0]->vCourseType;  
    $vCourseCode = $edit_adv_prog_course[0]->vCourseCode;  
    $vCourseName = $edit_adv_prog_course[0]->vCourseName;  
    $iOrder = $edit_adv_prog_course[0]->iOrder;
    $cEnable = $edit_adv_prog_course[0]->cEnable;
	
} else {
    $id = "";      
    $iAdvProgId = "";  
    $vCourseType = "";  
    $vCourseCode = "";  
    $vCourseName = "";   
    $iOrder = "";  
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
                            <h2>Courses - <?php echo $module_name[0]->vName; ?></h2>
                        </div>
                        <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">                           
                            <?php if($cSaveStatus == "E") { ?>
                            <li><a class="collapse-link" href="<?php echo base_url('adminpanel/academics/agtech_adv_prog_course'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark" style="color:#FFF;">Add Course</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } else { ?>
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Course</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
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
                        <form id="edit_adv_prog_course" name="edit_adv_prog_course" action="<?php echo base_url('adminpanel/academics/agtech_adv_prog_course/save_adv_prog_course'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <?php
                                    if($cSaveStatus == "E") {
                                        $moduleID = $this->uri->segment(6);
                                    } else {
                                        $moduleID = $this->uri->segment(5);
                                    }
                                ?>

                                <input type="text" id="iAdvProgId" name="iAdvProgId" value="<?php echo $moduleID; ?>" class="form-control col-md-7 col-xs-12" required>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Course Type <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <select name="vCourseType" id="vCourseType" class="form-control" required>
                                            <option value="">Select Course Type</option>
                                            <option value="C" <?php if($vCourseType == "C") { ?> selected <?php } ?>>Compulsory</option>
                                            <option value="O" <?php if($vCourseType == "O") { ?> selected <?php } ?>>Optional</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Course Code<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vCourseCode" name="vCourseCode" value="<?php echo $vCourseCode; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                            </div>
                            

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Course Name<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="vCourseName" name="vCourseName" value="<?php echo $vCourseName; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12" for="vProTitle">Display Order <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12" required>
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/academics/agtech_adv_prog_course'); ?>';">Cancel</button>
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
                                    <th>Course Type </th>
                                    <th>Course Code </th>
                                    <th>Course Name</th>                            
                                    <th style="width:80px;text-align:center;">Order </th>
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
                                        $moduleId = $rowlist->iAdvProgId;
                                        $cEnable = $rowlist->cEnable;
                                        if ($cEnable == 'Y') {
                                            $clicon = 'fa fa-check';
                                        } else {
                                            $clicon = 'fa fa-remove';
                                        }

                                        if($rowlist->vCourseType == "C") {
                                            $courseType = "Compulsory";
                                        } else {
                                            $courseType = "Optional";
                                        }
                                        ?>
                                         
                                        <tr class="<?php echo $oddeven; ?>">
                                            <td class="a-center " style="display:none;"><?php echo $no_count; ?></td>
                                            <td style="text-align:center;"><?php echo $no_count; ?></td>
                                            <td><?php echo $courseType;?></td>          
                                            <td><?php echo $rowlist->vCourseCode;?></td>    
                                            <td><?php echo $rowlist->vCourseName;?></td>                                 
                                            <td style="text-align:center;"><?php echo $rowlist->iOrder; ?></td>
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/academics/agtech_adv_prog_course/edit_adv_prog_course/$recordid/$moduleId" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/academics/agtech_adv_prog_course/change_status/status/$recordid/$moduleId" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/academics/agtech_adv_prog_course/delete_record/delete/$recordid/$moduleId" ?>" onclick="return confirm('Are you sure?')">
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
