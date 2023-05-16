<?php
if ($cSaveStatus == "E") {
    $id = $edit_data[0]->id;    
    $fFacultyImage = $edit_data[0]->fFacultyImage;
    $vFacultyTitle = $edit_data[0]->vFacultyTitle;
    $tFacultyContent = $edit_data[0]->tFacultyContent;
    
    $fTabIcon1 = $edit_data[0]->fTabIcon1;
    $fTabIcon2 = $edit_data[0]->fTabIcon2;
    $fTabIcon3 = $edit_data[0]->fTabIcon3;
    $fTabIcon4 = $edit_data[0]->fTabIcon4;
    $fTabIcon5 = $edit_data[0]->fTabIcon5;
    $fTabIcon6 = $edit_data[0]->fTabIcon6;
    $vTabTitle1 = $edit_data[0]->vTabTitle1;
    $vTabTitle2 = $edit_data[0]->vTabTitle2;
    $vTabTitle3 = $edit_data[0]->vTabTitle3;
    $vTabTitle4 = $edit_data[0]->vTabTitle4;
    $vTabTitle5 = $edit_data[0]->vTabTitle5;
    $vTabTitle6 = $edit_data[0]->vTabTitle6;
    $tTabContent1 = $edit_data[0]->tTabContent1;
    $tTabContent2 = $edit_data[0]->tTabContent2;
    $tTabContent3 = $edit_data[0]->tTabContent3;
    $tTabContent4 = $edit_data[0]->tTabContent4;
    $tTabContent5 = $edit_data[0]->tTabContent5;
    $tTabContent6 = $edit_data[0]->tTabContent6;
    $vTabLink1 = $edit_data[0]->vTabLink1;
    $vTabLink2 = $edit_data[0]->vTabLink2;
    $vTabLink3 = $edit_data[0]->vTabLink3;
    $vTabLink4 = $edit_data[0]->vTabLink4;
    $vTabLink5 = $edit_data[0]->vTabLink5;
    $vTabLink6 = $edit_data[0]->vTabLink6;

    $fRagIcon = $edit_data[0]->fRagIcon;
    $fOtherIcon = $edit_data[0]->fOtherIcon;
    $vRagTitle = $edit_data[0]->vRagTitle;
    $vOtherTitle = $edit_data[0]->vOtherTitle;
    $tRagContent = $edit_data[0]->tRagContent;
    $vRagLink = $edit_data[0]->vRagLink;
    $vOtherLink = $edit_data[0]->vOtherLink;

    $fOtherImage1 = $edit_data[0]->fOtherImage1;
    $vOtherTitle1 = $edit_data[0]->vOtherTitle1;
    $tOtherContent1 = $edit_data[0]->tOtherContent1;
    $vOtherLink1 = $edit_data[0]->vOtherLink1;

    $fOtherImage2 = $edit_data[0]->fOtherImage2;
    $vOtherTitle2 = $edit_data[0]->vOtherTitle2;
    $tOtherContent2 = $edit_data[0]->tOtherContent2;
    $vOtherLink2 = $edit_data[0]->vOtherLink2;

    $fOtherImage3 = $edit_data[0]->fOtherImage3;
    $vOtherTitle3 = $edit_data[0]->vOtherTitle3;
    $tOtherContent3 = $edit_data[0]->tOtherContent3;
    $vOtherLink3 = $edit_data[0]->vOtherLink3;
    
    $cEnable = $edit_data[0]->cEnable;

    $iNoOfStaff = $edit_data[0]->iNoOfStaff;
    $iNoOfStudent = $edit_data[0]->iNoOfStudent;
    $iStudentStaffRatio = $edit_data[0]->iStudentStaffRatio;
    $iFieldsOfStudy = $edit_data[0]->iFieldsOfStudy;
    $fNoOfStaff = $edit_data[0]->fNoOfStaff;
    $fNoOfStudent = $edit_data[0]->fNoOfStudent;
    $fStudentStaffRatio = $edit_data[0]->fStudentStaffRatio;
    $fFieldsOfStudy = $edit_data[0]->fFieldsOfStudy;
    
	
} else {
    $id = "";    
    $fFacultyImage = "";
    $vFacultyTitle = "";
    $tFacultyContent = "";

    $fTabIcon1 = "";
    $fTabIcon2 = "";
    $fTabIcon3 = "";
    $fTabIcon4 = "";
    $fTabIcon5 = "";
    $fTabIcon6 = "";
    $vTabTitle1 = "";
    $vTabTitle2 = "";
    $vTabTitle3 = "";
    $vTabTitle4 = "";
    $vTabTitle5 = "";
    $vTabTitle6 = "";
    $tTabContent1 = "";
    $tTabContent2 = "";
    $tTabContent3 = "";
    $tTabContent4 = "";
    $tTabContent5 = "";
    $tTabContent6 = "";
    $vTabLink1 = "";
    $vTabLink2 = "";
    $vTabLink3 = "";
    $vTabLink4 = "";
    $vTabLink5 = "";
    $vTabLink6 = "";

    $fRagIcon = "";
    $fOtherIcon = "";
    $vRagTitle = "";
    $vOtherTitle = "";
    $tRagContent = "";
    $vRagLink = "";
    $vOtherLink = "";

    $fOtherImage1 = "";
    $vOtherTitle1 = "";
    $tOtherContent1 = "";
    $vOtherLink1 = "";

    $fOtherImage2 = "";
    $fOtherTitle2 = "";
    $tOtherContent2 = "";
    $vOtherLink2 = "";

    $vOtherImage3 = "";
    $vOtherTitle3 = "";
    $tOtherContent3 = "";
    $vOtherLink3 = "";

    $cEnable = "Y";

    $iNoOfStaff = "";
    $iNoOfStudent = "";
    $iStudentStaffRatio = "";
    $iFieldsOfStudy = "";
    $fNoOfStaff = "";
    $fNoOfStudent = "";
    $fStudentStaffRatio = "";
    $fFieldsOfStudy = "";
    
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
                            <h2>Home Introduction</h2>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="Edit_hotel" name="Edit_hotel"
                            action="<?php echo base_url('adminpanel/home_page/home_detail/save_home'); ?>" method="post"
                            enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Main Tabs</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 1 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fTabIcon1" name="fTabIcon1">
                                    </div>
                                </div>
                                
                                <?php if($fTabIcon1!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon1;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 1 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabTitle1" name="vTabTitle1" value="<?php echo $vTabTitle1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 1 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabLink1" name="vTabLink1" value="<?php echo $vTabLink1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 1</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tTabContent1" name="tTabContent1" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent1; ?></textarea>
                                       
                                    </div>
                                </div>
                            </div>
                                
                            <div class="clearfix">

                                </div><div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 2 ( 45 x 45 px )
                                     </label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="file" id="fTabIcon2" name="fTabIcon2">
                                     </div>
                                 </div>
                                 
                                 <?php if($fTabIcon2!=''){ ?>
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon2;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                     </div>
                                 </div>
                                 <?php } ?> 
                                 
                             </div>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 2 <span class="required">*</span> </label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="vTabTitle2" name="vTabTitle2" value="<?php echo $vTabTitle2; ?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div> 
                                </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 2 <span class="required">*</span></label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vTabLink2" name="vTabLink2" value="<?php echo $vTabLink2; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 2</label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                        <textarea id="tTabContent2" name="tTabContent2" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent2; ?></textarea>
                                        
                                     </div>
                                 </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 3 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fTabIcon3" name="fTabIcon3">
                                    </div>
                                </div>
                                
                                <?php if($fTabIcon3!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon3;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 3 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabTitle3" name="vTabTitle3" value="<?php echo $vTabTitle3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 3 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabLink3" name="vTabLink3" value="<?php echo $vTabLink3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 3</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tTabContent3" name="tTabContent3" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent3; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 4 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fTabIcon4" name="fTabIcon4">
                                    </div>
                                </div>
                                
                                <?php if($fTabIcon4!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon4;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 4 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabTitle4" name="vTabTitle4" value="<?php echo $vTabTitle4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 4 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabLink4" name="vTabLink4" value="<?php echo $vTabLink4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 4</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tTabContent4" name="tTabContent4" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent4; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 5 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fTabIcon5" name="fTabIcon5">
                                    </div>
                                </div>
                                
                                <?php if($fTabIcon5!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon5;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 5 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabTitle5" name="vTabTitle5" value="<?php echo $vTabTitle5; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 5 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabLink5" name="vTabLink5" value="<?php echo $vTabLink5; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 5</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tTabContent5" name="tTabContent5" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent5; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 6 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fTabIcon6" name="fTabIcon6">
                                    </div>
                                </div>
                                
                                <?php if($fTabIcon6!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fTabIcon6;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 6 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabTitle6" name="vTabTitle6" value="<?php echo $vTabTitle6; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 6 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTabLink6" name="vTabLink6" value="<?php echo $vTabLink6; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 6</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tTabContent6" name="tTabContent6" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tTabContent6; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Other 1</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fRagIcon" name="fRagIcon">
                                    </div>
                                </div>
                                
                                <?php if($fRagIcon!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fRagIcon;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vRagTitle" name="vRagTitle" value="<?php echo $vRagTitle; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vRagLink" name="vRagLink" value="<?php echo $vRagLink; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tRagContent" name="tRagContent" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tRagContent; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Other 2</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fOtherIcon" name="fOtherIcon">
                                    </div>
                                </div>
                                
                                <?php if($fOtherIcon!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fOtherIcon;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOtherTitle" name="vOtherTitle" value="<?php echo $vOtherTitle; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOtherLink" name="vOtherLink" value="<?php echo $vOtherLink; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Faculty Of Agriculture</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Logo ( 400 x 400 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fFacultyImage" name="fFacultyImage">
                                    </div>
                                </div>
                                
                                <?php if($fFacultyImage!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fFacultyImage;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="100px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vFacultyTitle" name="vFacultyTitle" value="<?php echo $vFacultyTitle; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tFacultyContent" name="tFacultyContent" class="form-control col-md-7 col-xs-12" rows="5" required><?php echo $tFacultyContent; ?></textarea>
                                       
                                    </div>
                                </div>
                            </div>
                                
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Staff Icon ( 200 x 200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fNoOfStaff" name="fNoOfStaff">
                                    </div>
                                </div>
                                
                                <?php if($fNoOfStaff!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fNoOfStaff;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="75px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Number Of Staff <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="iNoOfStaff" name="iNoOfStaff" value="<?php echo $iNoOfStaff; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Student Icon ( 200 x 200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fNoOfStudent" name="fNoOfStudent">
                                    </div>
                                </div>
                                
                                <?php if($fNoOfStudent!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fNoOfStudent;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="75px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Number Of Student <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="iNoOfStudent" name="iNoOfStudent" value="<?php echo $iNoOfStudent; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Student Staff Ratio	Icon ( 200 x 200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fStudentStaffRatio" name="fStudentStaffRatio">
                                    </div>
                                </div>
                                
                                <?php if($fStudentStaffRatio!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fStudentStaffRatio;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="75px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Student Staff Ratio <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="iStudentStaffRatio" name="iStudentStaffRatio" value="<?php echo $iStudentStaffRatio; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Fields Of Study	Icon ( 200 x 200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fFieldsOfStudy" name="fFieldsOfStudy">
                                    </div>
                                </div>
                                
                                <?php if($fFieldsOfStudy!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fFieldsOfStudy;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="75px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Fields Of Study <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="iFieldsOfStudy" name="iFieldsOfStudy" value="<?php echo $iFieldsOfStudy; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="clearfix"></div>
                            <hr>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Student Life</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image 1 ( 800 x 1200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fOtherImage1" name="fOtherImage1">
                                    </div>
                                </div>
                                
                                <?php if($fOtherImage1!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fOtherImage1;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   width="150px"/>
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 1 <span class="required">*</span> </label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="vOtherTitle1" name="vOtherTitle1" value="<?php echo $vOtherTitle1; ?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 1 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOtherLink1" name="vOtherLink1" value="<?php echo $vOtherLink1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 1</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tOtherContent1" name="tOtherContent1" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tOtherContent1; ?></textarea>
                                       
                                    </div>
                                </div>
                            </div>
                                
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">   
                                <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image 2 ( 800 x 800 px )
                                     </label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="file" id="fOtherImage2" name="fOtherImage2">
                                     </div>
                                 </div>
                                 
                                 <?php if($fOtherImage2!=''){ ?>
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fOtherImage2;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="150px"/ />
                                     </div>
                                 </div>
                                 <?php } ?> 
                                 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 2 <span class="required">*</span> </label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vOtherTitle2" name="vOtherTitle2" value="<?php echo $vOtherTitle2; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 2 <span class="required">*</span></label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vOtherLink2" name="vOtherLink2" value="<?php echo $vOtherLink2; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 2</label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                        <textarea id="tOtherContent3" name="tOtherContent3" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tOtherContent3; ?></textarea>
                                        
                                     </div>
                                 </div>
                            </div>
                                 
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image 3 ( 800 x 1200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fOtherImage3" name="fOtherImage3">
                                    </div>
                                </div>
                                
                                <?php if($fOtherImage3!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fOtherImage3;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="150px"/ />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 3 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOtherTitle3" name="vOtherTitle3" value="<?php echo $vOtherTitle3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 3 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOtherLink3" name="vOtherLink3" value="<?php echo $vOtherLink3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 3</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tOtherContent3" name="tOtherContent3" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tOtherContent3; ?></textarea>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>      

                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="Y">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/home_page/home_detail/edit_home_detail'); ?>';">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Submit</button>
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
    


</div>
