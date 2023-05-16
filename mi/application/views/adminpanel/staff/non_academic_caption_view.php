<?php
if ($cSaveStatus == "E") {
    $id = $edit_data[0]->id; 
    $tCaption = $edit_data[0]->tCaption;
    $cEnable = $edit_data[0]->cEnable;
	
} else {
    $id = ""; 
    $tCaption = ""; 
    $cEnable = ""; 
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
                            <h2>Academic Staff Caption</h2>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="Edit_hotel" name="Edit_hotel"
                            action="<?php echo base_url('adminpanel/staff/non_academic_staff/save_caption'); ?>" method="post"
                            enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                                        
                                                        
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Caption<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <textarea id="tCaption" name="tCaption" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $tCaption; ?></textarea>
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
                                        onclick="document.location.href = '<?php echo base_url('adminpanel/staff/non_academic_staff/'); ?>';">Cancel</button>
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
