<?php
if ($cSaveStatus == "E") {
    $id = $edit_data[0]->id;    
    $fImage1 = $edit_data[0]->fImage1;
    $fImage2 = $edit_data[0]->fImage2;
    $fImage3 = $edit_data[0]->fImage3;
    $fImage4 = $edit_data[0]->fImage4;
    $fIcon1 = $edit_data[0]->fIcon1;
    $fIcon2 = $edit_data[0]->fIcon2;
    $fIcon3 = $edit_data[0]->fIcon3;
    $fIcon4 = $edit_data[0]->fIcon4;
    $vTitle1 = $edit_data[0]->vTitle1;
    $vTitle2 = $edit_data[0]->vTitle2;
    $vTitle3 = $edit_data[0]->vTitle3;
    $vTitle4 = $edit_data[0]->vTitle4;
    $tContent1 = $edit_data[0]->tContent1;
    $tContent2 = $edit_data[0]->tContent2;
    $tContent3 = $edit_data[0]->tContent3;
    $tContent4 = $edit_data[0]->tContent4;
    $vLink1 = $edit_data[0]->vLink1;
    $vLink2 = $edit_data[0]->vLink2;
    $vLink3 = $edit_data[0]->vLink3;
    $vLink4 = $edit_data[0]->vLink4;

    $fIcon5 = $edit_data[0]->fIcon5;
    $fIcon6 = $edit_data[0]->fIcon6;
    $fIcon7 = $edit_data[0]->fIcon7;
    $fIcon8 = $edit_data[0]->fIcon8;
    $vTitle5 = $edit_data[0]->vTitle5;
    $vTitle6 = $edit_data[0]->vTitle6;
    $vTitle7 = $edit_data[0]->vTitle7;
    $vTitle8 = $edit_data[0]->vTitle8;
    $tContent5 = $edit_data[0]->tContent5;
    $tContent6 = $edit_data[0]->tContent6;
    $tContent7 = $edit_data[0]->tContent7;
    $vLink5 = $edit_data[0]->vLink5;
    $vLink6 = $edit_data[0]->vLink6;
    $vLink7 = $edit_data[0]->vLink7;

    $vTitle9 = $edit_data[0]->vTitle9;
    $tContent9 = $edit_data[0]->tContent9;

    $vTitle10 = $edit_data[0]->vTitle10;
    $tContent10 = $edit_data[0]->tContent10;
    $vLink10 = $edit_data[0]->vLink10;

    $vTitle11 = $edit_data[0]->vTitle11;
    $tContent11 = $edit_data[0]->tContent11;
    $vLink11 = $edit_data[0]->vLink11;

    $vTitle12 = $edit_data[0]->vTitle12;
    $tContent12 = $edit_data[0]->tContent12;
    $vLink12 = $edit_data[0]->vLink12;
    
    $cEnable = $edit_data[0]->cEnable;
	
} else {
    $id = "";    
    $fImage1 = "";
    $fImage2 = "";
    $fImage3 = "";
    $fImage4 = "";
    $fIcon1 = "";
    $fIcon2 = "";
    $fIcon3 = "";
    $fIcon4 = "";
    $vTitle1 = "";
    $vTitle2 = "";
    $vTitle3 = "";
    $vTitle4 = "";
    $tContent1 = "";
    $tContent2 = "";
    $tContent3 = "";
    $tContent4 = "";
    $vLink1 = "";
    $vLink2 = "";
    $vLink3 = "";
    $vLink4 = "";

    $fIcon5 = "";
    $fIcon6 = "";
    $fIcon7 = "";
    $fIcon8 = "";
    $vTitle5 = "";
    $vTitle6 = "";
    $vTitle7 = "";
    $vTitle8 = "";
    $tContent5 = "";
    $tContent6 = "";
    $tContent7 = "";
    $vLink5 = "";
    $vLink6 = "";
    $vLink7 = "";

    $vTitle9 = "";
    $tContent9 = "";

    $vTitle10 = "";
    $tContent10 = "";
    $vLink10 = "";

    $vTitle11 = "";
    $tContent11 = "";
    $vLink11 = "";

    $vTitle12 = "";
    $tContent12 = "";
    $vLink12 = "";
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
                                        <input type="file" id="fIcon1" name="fIcon1">
                                    </div>
                                </div>
                                
                                <?php if($fIcon1!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon1;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 1 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle1" name="vTitle1" value="<?php echo $vTitle1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 1 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink1" name="vLink1" value="<?php echo $vLink1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 1</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent1" name="tContent1" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent1; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix">

                                </div><div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 2 ( 45 x 45 px )
                                     </label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="file" id="fIcon2" name="fIcon2">
                                     </div>
                                 </div>
                                 
                                 <?php if($fIcon2!=''){ ?>
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon2;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                     </div>
                                 </div>
                                 <?php } ?> 
                                 
                             </div>
                             <div class="col-md-6 col-sm-6 col-xs-12">
 
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 2 <span class="required">*</span> </label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vTitle2" name="vTitle2" value="<?php echo $vTitle2; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 2 <span class="required">*</span></label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vLink2" name="vLink2" value="<?php echo $vLink2; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 2</label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                        <textarea id="tContent2" name="tContent2" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent2; ?></textarea>
                                        
                                     </div>
                                 </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 3 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon3" name="fIcon3">
                                    </div>
                                </div>
                                
                                <?php if($fIcon3!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon3;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 3 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle3" name="vTitle3" value="<?php echo $vTitle3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 3 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink3" name="vLink3" value="<?php echo $vLink3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 3</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent3" name="tContent3" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent3; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 4 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon4" name="fIcon4">
                                    </div>
                                </div>
                                
                                <?php if($fIcon4!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon4;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 4 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle4" name="vTitle4" value="<?php echo $vTitle4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 4 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink4" name="vLink4" value="<?php echo $vLink4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 4</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent4" name="tContent4" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent4; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 5 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon5" name="fIcon5">
                                    </div>
                                </div>
                                
                                <?php if($fIcon5!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon5;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 5 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle5" name="vTitle5" value="<?php echo $vTitle5; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 5 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink5" name="vLink5" value="<?php echo $vLink5; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 5</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent5" name="tContent5" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent5; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon 6 ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon6" name="fIcon6">
                                    </div>
                                </div>
                                
                                <?php if($fIcon6!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon6;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 6 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle6" name="vTitle6" value="<?php echo $vTitle6; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 6 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink6" name="vLink6" value="<?php echo $vLink6; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 6</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent6" name="tContent6" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent6; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Rag & Harassment</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon7" name="fIcon7">
                                    </div>
                                </div>
                                
                                <?php if($fIcon7!=''){ ?>
                                <div class="form-group" style="background-color: gray">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon7;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle7" name="vTitle7" value="<?php echo $vTitle7; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink7" name="vLink7" value="<?php echo $vLink7; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent7" name="tContent7" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent7; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Other</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Icon ( 45 x 45 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fIcon8" name="fIcon8">
                                    </div>
                                </div>
                                
                                <?php if($fIcon8!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fIcon8;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle8" name="vTitle8" value="<?php echo $vTitle8; ?>" class="form-control col-md-7 col-xs-12">
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
                                        <input type="file" id="fImage1" name="fImage1">
                                    </div>
                                </div>
                                
                                <?php if($fImage1!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fImage1;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="100px" />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle9" name="vTitle9" value="<?php echo $vTitle9; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent9" name="tContent9" class="form-control col-md-7 col-xs-12" rows="5" required><?php echo $tContent9; ?></textarea>
                                       
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
                                        <input type="file" id="fImage2" name="fImage2">
                                    </div>
                                </div>
                                
                                <?php if($fImage2!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fImage2;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   width="150px"/>
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 1 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle10" name="vTitle10" value="<?php echo $vTitle10; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 1 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink10" name="vLink10" value="<?php echo $vLink10; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 1</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent10" name="tContent10" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent10; ?></textarea>
                                       
                                    </div>
                                </div>
                                </div>
                                
                                <div class="clearfix">

                                </div><div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image 2 ( 800 x 800 px )
                                     </label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="file" id="fImage3" name="fImage3">
                                     </div>
                                 </div>
                                 
                                 <?php if($fImage3!=''){ ?>
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fImage3;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="150px"/ />
                                     </div>
                                 </div>
                                 <?php } ?> 
                                 
                             </div>
                             <div class="col-md-6 col-sm-6 col-xs-12">
 
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 2 <span class="required">*</span> </label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vTitle11" name="vTitle11" value="<?php echo $vTitle11; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 2 <span class="required">*</span></label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input type="text" id="vLink11" name="vLink11" value="<?php echo $vLink11; ?>" class="form-control col-md-7 col-xs-12">
                                     </div>
                                 </div> 
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 2</label>
                                     <div class="col-md-8 col-sm-6 col-xs-12">
                                        <textarea id="tContent12" name="tContent12" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent12; ?></textarea>
                                        
                                     </div>
                                 </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image 3 ( 800 x 1200 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fImage4" name="fImage4">
                                    </div>
                                </div>
                                
                                <?php if($fImage4!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fImage4;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>  width="150px"/ />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title 3 <span class="required">*</span> </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle12" name="vTitle12" value="<?php echo $vTitle12; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Link 3 <span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLink12" name="vLink12" value="<?php echo $vLink12; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Description 3</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="tContent12" name="tContent12" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tContent12; ?></textarea>
                                       
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
