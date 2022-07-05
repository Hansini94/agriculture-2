<?php
if ($cSaveStatus == "E") {
    $id = $overview_data[0]->id;
    $tContent1 = $overview_data[0]->tContent1;
    $tContent2 = $overview_data[0]->tContent2;
    $fCardIcon1 = $overview_data[0]->fCardIcon1;
    $iCardCount1 = $overview_data[0]->iCardCount1;
    $vCardTitle1 = $overview_data[0]->vCardTitle1;
    $fCardIcon2 = $overview_data[0]->fCardIcon2;
    $iCardCount2 = $overview_data[0]->iCardCount2;
    $vCardTitle2 = $overview_data[0]->vCardTitle2;
    $fCardIcon3 = $overview_data[0]->fCardIcon3;
    $iCardCount3 = $overview_data[0]->iCardCount3;
    $vCardTitle3 = $overview_data[0]->vCardTitle3;
    $fCardIcon4 = $overview_data[0]->fCardIcon4;
    $iCardCount4 = $overview_data[0]->iCardCount4;
    $vCardTitle4 = $overview_data[0]->vCardTitle4;
    $fPdf = $overview_data[0]->fPdf;
    $cEnable = $overview_data[0]->cEnable;
} else {
    $id = '';
    $tContent1 = '';
    $tContent2 = '';
    $fCardIcon1 = '';
    $iCardCount1 = '';
    $vCardTitle1 = '';
    $fCardIcon2 = '';
    $iCardCount2 = '';
    $vCardTitle2 = '';
    $fCardIcon3 = '';
    $iCardCount3 = '';
    $vCardTitle3 = '';
    $fCardIcon4 = '';
    $iCardCount4 = '';
    $vCardTitle4 = '';
    $fPdf = '';
    $cEnable = '';
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
                            <h2>Overview</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/international/overview/save_overview'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">First Section Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent1" id="tContent1" class="form-control col-md-7 col-xs-12" required><?php echo $tContent1; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent1); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >First Card Icon<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fCardIcon1" name="fCardIcon1" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fCardIcon1!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fCardIcon1;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">First Card Count<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="iCardCount1" name="iCardCount1" value="<?php echo $iCardCount1; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">First Card Title<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vCardTitle1" name="vCardTitle1" value="<?php echo $vCardTitle1; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Second Card Icon<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fCardIcon2" name="fCardIcon2" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fCardIcon2!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fCardIcon2;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Second Card Count<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="iCardCount2" name="iCardCount2" value="<?php echo $iCardCount2; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Second Card Title<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vCardTitle2" name="vCardTitle2" value="<?php echo $vCardTitle2; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Third Card Icon<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fCardIcon3" name="fCardIcon3" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fCardIcon3!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fCardIcon3;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Third Card Count<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="iCardCount3" name="iCardCount3" value="<?php echo $iCardCount3; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Third Card Title<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vCardTitle3" name="vCardTitle3" value="<?php echo $vCardTitle3; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Fourth Card Icon<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fCardIcon4" name="fCardIcon4" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fCardIcon4!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fCardIcon4;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Fourth Card Count<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="iCardCount4" name="iCardCount4" value="<?php echo $iCardCount4; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Fourth Card Title<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vCardTitle4" name="vCardTitle4" value="<?php echo $vCardTitle4; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Second Section Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent2" id="tContent2" class="form-control col-md-7 col-xs-12" required><?php echo $tContent2; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent2); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                
                                <div class="item form-group">                                    
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >File<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fPdf" name="fPdf"<?php
                                        if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>
                                </div>

                                <?php 
								if($fPdf){

										?>
                                <div class="form-group" id="pdf_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                    <a href="<?php echo base_url().'front_img/'.$fPdf;?>" target="_blank"> View PDF Document</a>
                                        
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_pdf('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>

                            </div>
                        
                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>

                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="<?php echo $cEnable ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/international/overview'); ?>';">Cancel</button>
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