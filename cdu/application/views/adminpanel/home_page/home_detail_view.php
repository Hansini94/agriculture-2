<?php
if ($cSaveStatus == "E") {
    $id = $edit_data[0]->id;   
    $fFacultyLogo = $edit_data[0]->fFacultyLogo; 
    $fFacultyImage = $edit_data[0]->fFacultyImage;
    $vFacultyTitle = $edit_data[0]->vFacultyTitle;
    $tFacultyContent = $edit_data[0]->tFacultyContent;
    
    $fRagIcon = $edit_data[0]->fRagIcon;
    $vRagTitle = $edit_data[0]->vRagTitle;
    $vRagLink = $edit_data[0]->vRagLink;
    $tRagContent = $edit_data[0]->tRagContent;

    $fOtherIcon = $edit_data[0]->fOtherIcon;    
    $vOtherTitle = $edit_data[0]->vOtherTitle;  
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

    $vOther2Title1 = $edit_data[0]->vOther2Title1;
    $vOther2Link1 = $edit_data[0]->vOther2Link1;
    $vOther2Title2 = $edit_data[0]->vOther2Title2;
    $vOther2Link2 = $edit_data[0]->vOther2Link2;
    $vOther2Title3 = $edit_data[0]->vOther2Title3;
    $vOther2Link3 = $edit_data[0]->vOther2Link3;
    $vOther2Title4 = $edit_data[0]->vOther2Title4;
    $vOther2Link4 = $edit_data[0]->vOther2Link4;
    
    $cEnable = $edit_data[0]->cEnable;
	
} else {
    $id = "";    
    $fFacultyImage = "";
    $vFacultyTitle = "";
    $tFacultyContent = "";

    $fRagIcon = "";
    $vRagTitle = "";
    $vRagLink = "";
    $tRagContent = "";

    $fOtherIcon = "";    
    $vOtherTitle = "";  
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

    $vOther2Title1 = "";
    $vOther2Link1 = "";
    $vOther2Title2 = "";
    $vOther2Link2 = "";
    $vOther2Title3 = "";
    $vOther2Link3 = "";
    $vOther2Title4 = "";
    $vOther2Link4 = "";

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
                                    <h5><b>Agriculture biology</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Logo ( 400 x 400 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fFacultyLogo" name="fFacultyLogo">
                                    </div>
                                </div>                                
                                <?php if($fFacultyLogo!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fFacultyLogo;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="100px" />
                                    </div>
                                </div>
								<?php } ?>                                 
                            </div>     
                            <div class="col-md-6 col-sm-6 col-xs-12">                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image ( 800 x 1200 px )
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
                            <div class="clearfix"></div><hr>
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
                                    <h5><b>Other2</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 1 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Title1" name="vOther2Title1" value="<?php echo $vOther2Title1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 1 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Link1" name="vOther2Link1" value="<?php echo $vOther2Link1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 2 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Title2" name="vOther2Title2" value="<?php echo $vOther2Title2; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 2<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Link2" name="vOther2Link2" value="<?php echo $vOther2Link2; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 3 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Title3" name="vOther2Title3" value="<?php echo $vOther2Title3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 3 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Link3" name="vOther2Link3" value="<?php echo $vOther2Link3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 4 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Title4" name="vOther2Title4" value="<?php echo $vOther2Title4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 4 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vOther2Link4" name="vOther2Link4" value="<?php echo $vOther2Link4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Other 3</b></h5>
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
                                        <textarea id="tOtherContent2" name="tOtherContent2" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tOtherContent2; ?></textarea>
                                        
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
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus"
                                        value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right"
                                        onclick="document.location.href = '<?php echo base_url('adminpanel/home_page/home_detail/edit_home_detail'); ?>';">Cancel</button>
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


</div>
