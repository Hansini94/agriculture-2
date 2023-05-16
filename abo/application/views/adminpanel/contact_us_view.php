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
                                    <h2>Contact Us</h2>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                    
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                    <div class="x_content">
                        <br />
                        <form id="Edit_hotel" name="Edit_hotel" action="<?php echo base_url('adminpanel/contact_us/save_contact_us'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Title <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle" name="vTitle" value="<?php echo $contact_us_data[0]->vTitle; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>                                
								  <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Address line 1</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vAddress1" name="vAddress1" value="<?php echo $contact_us_data[0]->vAddress1; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Address line 2</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vAddress2" name="vAddress2" value="<?php echo $contact_us_data[0]->vAddress2; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Address line 3</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vAddress3" name="vAddress3" value="<?php echo $contact_us_data[0]->vAddress3; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Address line 4</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vAddress4" name="vAddress4" value="<?php echo $contact_us_data[0]->vAddress4; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Dean's E-mail </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vWaEmail" name="vWaEmail" value="<?php echo $contact_us_data[0]->vWaEmail; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">E-mail </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vEmail" name="vEmail" value="<?php echo $contact_us_data[0]->vEmail; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                               
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Phone </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTele" name="vTele" value="<?php echo $contact_us_data[0]->vTele; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Phone 2 </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTele2" name="vTele2" value="<?php echo $contact_us_data[0]->vTele2; ?>"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                        
                            </div>
                            
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Fax </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vFax" name="vFax" value="<?php echo $contact_us_data[0]->vFax; ?>" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Facebook Link </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vFacebook" name="vFacebook" value="<?php echo $contact_us_data[0]->vFacebook; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Twitter Link</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTwitter" name="vTwitter" value="<?php echo $contact_us_data[0]->vTwitter; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Instagram Link </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vInstagram" name="vInstagram" value="<?php echo $contact_us_data[0]->vInstagram; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Linkedin Link </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vLinkedIn" name="vLinkedIn" value="<?php echo $contact_us_data[0]->vLinkedIn; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <h5><b>Footer</b></h5>
                                    </div>
                                </div>
                                <br>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Footer Description</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <textarea id="tFooterDes" name="tFooterDes" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $contact_us_data[0]->tFooterDes; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image ( 331 x 83 px )</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" id="fFooterImage" name="fFooterImage" accept="image/png, image/gif, image/jpeg, image/jpg">
                                        </div>
                                    </div>
                                    
                                    <?php if($contact_us_data[0]->fFooterImage!=''){ ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <img class="img-responsive" src="<?php echo base_url().'front_img/'.$contact_us_data[0]->fFooterImage;?>" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>   />
                                        </div>
                                    </div>
    								<?php } ?> 
                                    
                                </div>
							<div style="clear:both;"></div>                            
                            
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                  
                            </div> -->
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12">                               
                                

                            </div> -->
                            
                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id" name="id" value="<?php echo $contact_us_data[0]->id; ?>">
                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="Y">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $saveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/contact_us'); ?>';">Cancel</button>
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
