<?php
if ($cSaveStatus == "E") {
    $id = $introduction_data[0]->id;
    $vHeading = $introduction_data[0]->vHeading;
    $vSubHeading1 = $introduction_data[0]->vSubHeading1;
    $tContent1 = $introduction_data[0]->tContent1;
    $vTitleFigure1 = $introduction_data[0]->vTitleFigure1;
    $fFigure1 = $introduction_data[0]->fFigure1;
    $vSubHeading2 = $introduction_data[0]->vSubHeading2;
    $tContent2 = $introduction_data[0]->tContent2;
    $tContent3 = $introduction_data[0]->tContent3;
    $vTitleFigure2 = $introduction_data[0]->vTitleFigure2;
    $fFigure2 = $introduction_data[0]->fFigure2;
    $cEnable = $introduction_data[0]->cEnable;
} else {
    $id = '';
    $vHeading = '';
    $vSubHeading1 = '';
    $tContent1 = '';
    $vTitleFigure1 = '';
    $fFigure1 = '';
    $vSubHeading2 = '';
    $tContent2 = '';
    $tContent3 = '';
    $vTitleFigure2 = '';
    $fFigure2 = '';
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
                            <h2>B.Sc. Degree in Agricultural Technology and Management Introduction</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/academics/bsc_agtech_introduction/save_bsc_agtech'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vHeading" name="vHeading" value="<?php echo $vHeading; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sub Heading 1<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vSubHeading1" name="vSubHeading1" value="<?php echo $vSubHeading1; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">First Section Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent1" id="tContent1" class="form-control col-md-7 col-xs-12" required><?php echo $tContent1; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent1); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Title (Figure 1)<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleFigure1" name="vTitleFigure1" value="<?php echo $vTitleFigure1; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image (Figure 1)<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fFigure1" name="fFigure1" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fFigure1!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fFigure1;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sub Heading 2<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vSubHeading2" name="vSubHeading2" value="<?php echo $vSubHeading2; ?>" class="form-control col-md-7 col-xs-12" required> 
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
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Second Section Content 2<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent3" id="tContent3" class="form-control col-md-7 col-xs-12" required><?php echo $tContent3; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent3); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Title (Figure 2)<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleFigure2" name="vTitleFigure2" value="<?php echo $vTitleFigure2; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image (Figure 2)<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fFigure2" name="fFigure2" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fFigure2!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fFigure2;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
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