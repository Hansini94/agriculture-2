<?php
if ($cSaveStatus == "E") {
    $id = $edit_special_note[0]->id;
    $vTitle = $edit_special_note[0]->vTitle;
    $vTitleChinese = $edit_special_note[0]->vTitleChinese;
    $tDescription = $edit_special_note[0]->tDescription;
    $tDescriptionChinese = $edit_special_note[0]->tDescriptionChinese;
    $fComprofileEn = $edit_special_note[0]->fComprofileEn;
    $fComprofileChinese = $edit_special_note[0]->fComprofileChinese;
    $tProductCatDesc = $edit_special_note[0]->tProductCatDesc;
    $tFeaturedProDesc = $edit_special_note[0]->tFeaturedProDesc;
    $tAcheiveDesc = $edit_special_note[0]->tAcheiveDesc;
    $tFeaturedProjDesc = $edit_special_note[0]->tFeaturedProjDesc;
    $vMarketShare = $edit_special_note[0]->vMarketShare;
    $cEnable = $edit_special_note[0]->cEnable;
	
} else {
    $id = "";
    $vTitle = "";
    $vTitleChinese = "";
    $tDescription = "";
    $tDescriptionChinese = "";
    $fComprofileEn = "";
    $fComprofileChinese = "";
    $tProductCatDesc = "";
    $tFeaturedProDesc = "";
    $tAcheiveDesc = "";
    $tFeaturedProjDesc = "";
    $vMarketShare = "";
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
                    <?php /*?><div class="x_title">
                        <h2><a class="collapse-link" style="cursor:pointer; text-decoration:none;"><span class="btn btn-dark"  style="color:#FFF;">Add Image</span></a></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                            </li>
                        </ul>
                    </div><?php */?>
                    
                    
                    <div class="x_title">
                                	<div class="col-md-9 col-sm-9 col-xs-9">
                                    <h2>Home Page Details</h2>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                        </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                
                                
                    <div class="x_content" <?php
                    if ($cSaveStatus != "E") {
                        echo 'style="display:none;"';
                    }
                    ?>>
                        <br />
                        <form id="Edit_hotel" name="Edit_hotel" action="<?php echo base_url('adminpanel/home_page/home_detail/save_home_details'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Title (English)
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitle" name="vTitle" required value="<?php echo $vTitle; ?>" class="form-control col-md-7 col-xs-12">  
                                         
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Title (Chinese)
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleChinese" name="vTitleChinese" required value="<?php echo $vTitleChinese; ?>" class="form-control col-md-7 col-xs-12">  
                                         
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Description <br>(English)
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tDescription" id="tDescription" required class="form-control col-md-7 col-xs-12"><?php echo $tDescription; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor); ?>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Description<br>(Chinese)
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tDescriptionChinese" id="tDescriptionChinese" required class="form-control col-md-7 col-xs-12"><?php echo $tDescriptionChinese; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor_tDescriptionChinese); ?>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Company Profile Document English </label>
                                        <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                            <input type="file" id="fComprofileEn" name="fComprofileEn" >
                                        </div>
                                        
                                    </div>
                                    <?php 
                                    if($fComprofileEn){
                                        
                                    
                                            ?>
                                    <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">&nbsp;</label>
                                        <div class="col-md-7 col-sm-6 col-xs-10">
                                        <a href="<?php echo base_url().'front_img/'.$fComprofileEn;?>" target="_blank"> View Document </a>
                                            <?php /*?><img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage;?>"   style="height:100px;" /><?php */?>
                                        </div>
                                        <div class="col-md-1 col-sm-3 col-xs-2" style="display:none;">
                                            <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('');" title="Delete Link"></span>
                                        </div>
                                    </div>
                                    <?php }  ?>
                          
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Company Profile Document Chinese </label>
                                        <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                            <input type="file" id="fComprofileChinese" name="fComprofileChinese" >
                                        </div>
                                        
                                    </div>
                                    <?php 
                                    if($fComprofileChinese){
                                        
                                    
                                            ?>
                                    <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">&nbsp;</label>
                                        <div class="col-md-7 col-sm-6 col-xs-10">
                                        <a href="<?php echo base_url().'front_img/'.$fComprofileChinese;?>" target="_blank"> View Document </a>
                                            <?php /*?><img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage;?>"   style="height:100px;" /><?php */?>
                                        </div>
                                        <div class="col-md-1 col-sm-3 col-xs-2" style="display:none;">
                                            <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('');" title="Delete Link"></span>
                                        </div>
                                    </div>
                                    <?php }  ?>
                          
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Our Product Categories
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tProductCatDesc" id="tProductCatDesc" required class="form-control col-md-7 col-xs-12" required><?php echo $tProductCatDesc; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor_tProductCatDesc); ?>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Featured Products
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tFeaturedProDesc" id="tFeaturedProDesc" required class="form-control col-md-7 col-xs-12" required><?php echo $tFeaturedProDesc; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor_tFeaturedProDesc); ?>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Achievements
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tAcheiveDesc" id="tAcheiveDesc" required class="form-control col-md-7 col-xs-12" required><?php echo $tAcheiveDesc; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor_tAcheiveDesc); ?>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Our Featured Projects
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tFeaturedProjDesc" id="tFeaturedProjDesc" required class="form-control col-md-7 col-xs-12" required><?php echo $tFeaturedProjDesc; ?></textarea>

                                        <?php echo display_ckeditor($ckeditor_tFeaturedProjDesc); ?>
                                    </div>
                                </div>
                            </div> 

                            <div class="x_title">
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h2>Share Market Value</h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>                                   
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Share Market Value (Rs.)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" id="vMarketShare" name="vMarketShare" value="<?php echo $vMarketShare; ?>" class="form-control col-md-7 col-xs-12" required>
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/home_page/home_detail/edit_home_detail'); ?>';">Cancel</button>
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
