<?php
if ($cSaveStatus == "E") {
    $id = $study_opportunity_data[0]->id;
    $vHeading = $study_opportunity_data[0]->vHeading;
    $vSubHeading = $study_opportunity_data[0]->vSubHeading;
    $vShortTermVisitHeading = $study_opportunity_data[0]->vShortTermVisitHeading;
    $tShortTermVisitContent = $study_opportunity_data[0]->tShortTermVisitContent;
    $vLongTermVisitHeading = $study_opportunity_data[0]->vLongTermVisitHeading;
    $tLongTermVisitContent = $study_opportunity_data[0]->tLongTermVisitContent;
    $vStudentName1 = $study_opportunity_data[0]->vStudentName1;
    $tTestimonial1 = $study_opportunity_data[0]->tTestimonial1;
    $vStudentName2 = $study_opportunity_data[0]->vStudentName2;
    $tTestimonial2 = $study_opportunity_data[0]->tTestimonial2;
    $fImage1 = $study_opportunity_data[0]->fImage1;
    $fImage2 = $study_opportunity_data[0]->fImage2;
    $cEnable = $study_opportunity_data[0]->cEnable;
} else {
    $id = '';
    $vHeading = '';
    $vSubHeading = '';
    $vShortTermVisitHeading = '';
    $tShortTermVisitContent = '';
    $vLongTermVisitHeading = '';
    $tLongTermVisitContent = '';
    $tTestimonial1 = '';
    $tTestimonial2 = '';
    $fImage1 = '';
    $fImage2 = '';
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
                            <h2>Study Abroad Opportunities</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/international/study_abroad_opportunity/save_study_abroad_opportunity'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            
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
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sub Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vSubHeading" name="vSubHeading" value="<?php echo $vSubHeading; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Short Term Visit Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vShortTermVisitHeading" name="vShortTermVisitHeading" value="<?php echo $vShortTermVisitHeading; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Short Term Visit Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tShortTermVisitContent" id="tShortTermVisitContent" class="form-control col-md-7 col-xs-12" required><?php echo $tShortTermVisitContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tShortTermVisitContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Long Term Visit Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vShortTermVisitHeading" name="vShortTermVisitHeading" value="<?php echo $vShortTermVisitHeading; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Long Term Visit Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tLongTermVisitContent" id="tLongTermVisitContent" class="form-control col-md-7 col-xs-12" required><?php echo $tLongTermVisitContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tLongTermVisitContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Student Name 1<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vStudentName1" name="vStudentName1" value="<?php echo $vStudentName1; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Testimonial 1<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tTestimonial1" id="tTestimonial1" class="form-control col-md-7 col-xs-12" required><?php echo $tTestimonial1; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tTestimonial1); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Student Name 2<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vStudentName2" name="vStudentName2" value="<?php echo $vStudentName2; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Testimonial 2<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tTestimonial2" id="tTestimonial2" class="form-control col-md-7 col-xs-12" required><?php echo $tTestimonial2; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tTestimonial2); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image 1<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fImage1" name="fImage1" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fImage1!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage1;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image 2<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fImage2" name="fImage2" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fImage2!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage2;?>" style="height:75px;"   />
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/international/study_abroad_opportunity'); ?>';">Cancel</button>
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