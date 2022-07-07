<?php
if ($cSaveStatus == "E") {
    $id = $welfare_committee_data[0]->id;
    $vTitle = $welfare_committee_data[0]->vTitle;
    $tDescription = $welfare_committee_data[0]->tDescription;
    $vSubtitle = $welfare_committee_data[0]->vSubtitle;
    $vChairman = $welfare_committee_data[0]->vChairman;
    $vSecretary = $welfare_committee_data[0]->vSecretary;
    $cEnable = $welfare_committee_data[0]->cEnable;
    $fImgChairman = $welfare_committee_data[0]->fImgChairman ;
    $fImgSecretary = $welfare_committee_data[0]->fImgSecretary ;
} else {
    $id = '';
    $vTitle = '';
    $tDescription = '';
    $vSubtitle = '';
    $vChairman = '';
    $vSecretary = '';
    $cEnable = '';
    $fImgChairman = '';
    $fImgSecretary = '';
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
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <h2>Student Advisory & Welfare Committee</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                        <ul class="nav navbar-right ">
                            <li><a class="collapse-link" href="<?php echo base_url('adminpanel/quality/welfare_committee_composition'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Composition</span>&nbsp;</a></li>
                        </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" <?php
                                            if ($cSaveStatus != "E") {
                                                echo 'style="display:none;"';
                                            }
                                            ?>>
                        <br />
                        <form id="edit_history" name="edit_history" action="<?php echo base_url('adminpanel/quality/welfare_committee/save_data'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Main Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitle" name="vTitle" value="<?php echo $vTitle; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >Chairman Image (500 * 500px) </label>
                                    <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                        <input type="file" id="fImgChairman" name="fImgChairman" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImgChairman){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImgChairman;?>"  style="width:100px;" />
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Chairman<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vChairman" name="vChairman" value="<?php echo $vChairman; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >Secretary Image (500 * 500px) </label>
                                    <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                        <input type="file" id="fImgSecretary" name="fImgSecretary" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImgSecretary){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10" >
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImgSecretary;?>"  style="width:100px;"/>
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Secretary<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vSecretary" name="vSecretary" value="<?php echo $vSecretary; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sub Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vSubtitle" name="vSubtitle" value="<?php echo $vSubtitle; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tDescription" id="tDescription" class="form-control col-md-7 col-xs-12" required><?php echo $tDescription; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tDescription); ?>
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/quality/welfare_committee'); ?>';">Cancel</button>
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