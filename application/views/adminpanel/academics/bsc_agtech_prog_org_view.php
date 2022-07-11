<?php
if ($cSaveStatus == "E") {
    $id = $prog_org_data[0]->id;
    $iDegree = $prog_org_data[0]->iDegree;
    $tCreditUnitContent = $prog_org_data[0]->tCreditUnitContent;
    $tCreditContent = $prog_org_data[0]->tCreditContent;
    $tGradePointContent = $prog_org_data[0]->tGradePointContent;
    $tGpaContent = $prog_org_data[0]->tGpaContent;
    $tIndependantStudyContent = $prog_org_data[0]->tIndependantStudyContent;
    $tNoCreditContent = $prog_org_data[0]->tNoCreditContent;
    $cEnable = $prog_org_data[0]->cEnable;
} else {
    $id = '';
    $iDegree = '';
    $tCreditUnitContent = '';
    $tCreditContent = '';
    $tGradePointContent = '';
    $tGpaContent = '';
    $tIndependantStudyContent = '';
    $tNoCreditContent = '';
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
                            <h2>B.Sc. Degree in Agricultural Technology and Management - Programme Organization</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/academics/bsc_agtech_prog_org/save_bsc_prog_org'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            
                            <input type="hidden" id="iDegree" name="iDegree" value="<?php echo $iDegree; ?>" class="form-control col-md-7 col-xs-12" required> 

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Credit Unit Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tCreditUnitContent" id="tCreditUnitContent" class="form-control col-md-7 col-xs-12" required><?php echo $tCreditUnitContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tCreditUnitContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Credit Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tCreditContent" id="tCreditContent" class="form-control col-md-7 col-xs-12" required><?php echo $tCreditContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tCreditContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Grade Point Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tGradePointContent" id="tGradePointContent" class="form-control col-md-7 col-xs-12" required><?php echo $tGradePointContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tGradePointContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">GPA Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tGpaContent" id="tGpaContent" class="form-control col-md-7 col-xs-12" required><?php echo $tGpaContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tGpaContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Independant Study Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tIndependantStudyContent" id="tIndependantStudyContent" class="form-control col-md-7 col-xs-12" required><?php echo $tIndependantStudyContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tIndependantStudyContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">No Credit Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tNoCreditContent" id="tNoCreditContent" class="form-control col-md-7 col-xs-12" required><?php echo $tNoCreditContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tNoCreditContent); ?>
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/academics/bsc_agtech_prog_org'); ?>';">Cancel</button>
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