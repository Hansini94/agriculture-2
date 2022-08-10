<?php
if ($cSaveStatus == "E") {
    $id = $introduction_data[0]->id;
    $vHeading = $introduction_data[0]->vHeading;
    $tIntroduction = $introduction_data[0]->tIntroduction;
    $tContent1 = $introduction_data[0]->tContent1;
    $tCalendarDate = $introduction_data[0]->tCalendarDate;
    $fPdf = $introduction_data[0]->fPdf;
    $cEnable = $introduction_data[0]->cEnable;
} else {
    $id = '';
    $vHeading = '';
    $tIntroduction = '';
    $tContent1 = '';
    $tCalendarDate = '';
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
                            <h2>B.Sc. Degree in Food Science and Technology</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/academics/bsc_fst_introduction/save_bsc_fst'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vHeading" name="vHeading" value="<?php echo $vHeading; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Introduction<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tIntroduction" id="tIntroduction" class="form-control col-md-7 col-xs-12" required><?php echo $tIntroduction; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tIntroduction); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Course Sequence<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent1" id="tContent1" class="form-control col-md-7 col-xs-12" required><?php echo $tContent1; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent1); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Calendar of Dates<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tCalendarDate" id="tCalendarDate" class="form-control col-md-7 col-xs-12" required><?php echo $tCalendarDate; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tCalendarDate); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                
                                <div class="item form-group">                                    
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Document<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fPdf" name="fPdf" >
                                    </div>
                                </div>

                                <?php 
								if($fPdf){

										?>
                                <div class="form-group" id="pdf_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                    <a href="<?php echo base_url().'front_img/'.$fPdf;?>" target="_blank"> View Document</a>
                                        
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/academics/bsc_fst_introduction'); ?>';">Cancel</button>
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