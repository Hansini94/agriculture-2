<?php
if ($cSaveStatus == "E") {
    $id = $edit_data['id'];  
    $vName = $edit_data['vName']; 
    $vYear = $edit_data['vYear']; 
	$fImage = $edit_data['fImage'];   
    $cEnable = $edit_data['cEnable'];
    $iOrder = $edit_data['iOrder'];
    
} else {
    $id = ""; 
    $vName = "";    
	$vYear = "";    
    $fImage = "";  
    $cEnable = "Y";
    $iOrder = "";
 
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
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h2>Emeritus Professor</h2>
                        </div>
                        
                            <?php if($cSaveStatus == "E") { ?>
                                <a class="collapse-link" href="<?php echo base_url('adminpanel/faculty_staff/emeritus_professor'); ?>" style="text-align:right;cursor:pointer;float:right;"><span class="btn btn-dark"  style="color:#FFF;">Add Professor</span>&nbsp;</a>
                                <?php } else { ?>
                                <a class="collapse-link" style="text-align:right;cursor:pointer;float:right;"><span class="btn btn-dark"  style="color:#FFF;">Add Professor</span>&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <?php } ?> 
                                <a href="<?php echo base_url('adminpanel/faculty_staff/emeritus_professor/list_index'); ?>" style="text-align:right;cursor:pointer; float:right;"><span class="btn btn-dark" style="color:#FFF;">List of Professor</span></a>                                                                             
                               
                            <!-- <ul class="nav navbar-right col-md-2 col-sm-2 col-xs-2">                                
                                
                            </ul> -->
                            <!-- <ul class="nav navbar-right col-md-2 col-sm-2 col-xs-2">             
                                
                            </ul> -->
                        <div class="clearfix"></div>
                    </div>
                                
                    <div class="x_content" <?php
                    if ($cSaveStatus != "E") {
                        echo 'style="display:none;"';
                    }
                    ?>>
                        <br />
                        <form id="edit_data" name="edit_data" action="<?php echo base_url('adminpanel/faculty_staff/emeritus_professor/save_data'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Name<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vName" name="vName" value="<?php echo $vName; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >Image (500 * 500px) </label>
                                    <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                        <input type="file" id="fImage" name="fImage" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImage){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10" >
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage;?>"  style="width:100px;"/>
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Year<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vYear" name="vYear" value="<?php echo $vYear; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Order<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="number" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12" required> 
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/faculty_staff/emeritus_professor'); ?>';">Cancel</button>
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
                                    <th style="width:8%;text-align:center;">No </th>
                                    <th style="width:35%;">Name </th>    
                                    <th style="width:15%;">Year </th>     
                                    <th style="width:8%; text-align:center">Order</th>                       
                                    <th style="width:8%; text-align:center">Edit </th>
                                    <th style="width:8%; text-align:center">Status </th>
                                    <th style="width:8%; text-align:center">Delete </th>
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
                                            <td><?php echo $rowlist->vYear;?></td> 
                                            <td><?php echo $rowlist->iOrder;?></td> 
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/faculty_staff/emeritus_professor/edit/$recordid" ?>"><i class="fa fa-edit"></i></a></td>  
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/faculty_staff/emeritus_professor/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/faculty_staff/emeritus_professor/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash-o"></i></a></td>
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
