<?php
if ($cSaveStatus == "E") {
    $committeeId = $this->uri->segment(6);
    $id = $edit_member[0]->id;   
	$vDesignation = $edit_member[0]->vDesignation;  
    $tName = $edit_member[0]->tName; 
	$iOrder = $edit_member[0]->iOrder;   
    $cEnable = $edit_member[0]->cEnable;
	
} else {
    $committeeId = $this->uri->segment(5);
    $id = "";    
	$vDesignation = "";  
    $tName = "";  
    $iOrder = "";  
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
                    <div class="x_title">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                            <h2>Composition</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <ul class="nav navbar-right">
                                <?php if($cSaveStatus == "E") { ?>
                                <li><a class="collapse-link" href="<?php echo base_url('adminpanel/quality/computer_unit/composition/'.$committeeId); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Member</span>&nbsp;</a></li>
                                <?php } else { ?>
                                <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Member</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                                <?php } ?>
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
                        <form id="edit_member" name="edit_member" action="<?php echo base_url('adminpanel/quality/computer_unit/save_data_composition'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Designation<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vDesignation" name="vDesignation" value="<?php echo $vDesignation; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Name<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                        <textarea rows="5" name="tName" id="tName" class="form-control col-md-7 col-xs-12" required><?php echo $tName; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Order<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="number" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12" required> 
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
                                    <input type="hidden" id="iCommitteeId" name="iCommitteeId" value="<?php echo $committeeId ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/quality/computer_unit/composition/'.$committeeId); ?>';">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style=" padding-top:0px;">
                    <div class="x_content">
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th style="display:none;">ID </th>
                                    <th style="width:50px;text-align:center;">No </th>
                                    <th>Designation</th>      
                                    <th>Name </th> 
                                    <th>Order</th>                                
                                    <th style="width:80px; text-align:center">Edit </th>
                                    <th style="width:80px; text-align:center">Status </th>
                                    <th style="width:80px; text-align:center">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $oddeven_count = 0;
                                $no_count = 0;
                                if (count($list_data) != 0) {
                                    foreach ($list_data as $rowlist) {
                                        $oddeven_count++;
                                        $no_count++;
                                        if ($oddeven_count == 1) {
                                            $oddeven = 'even pointer';
                                        } else {
                                            $oddeven = 'odd pointer';
                                            $oddeven_count = 0;
                                        }

                                        $recordid = $rowlist->id;
                                        $iCommitteeId = $rowlist->iCommitteeId;
                                        $cEnable = $rowlist->cEnable;
                                        if ($cEnable == 'Y') {
                                            $clicon = 'fa fa-check';
                                        } else {
                                            $clicon = 'fa fa-remove';
                                        }
                                        ?>
                                         
                                        <tr class="<?php echo $oddeven; ?>">
                                            <td class="a-center " style="display:none;"><?php echo $no_count; ?></td>
                                            <td style="text-align:center;"><?php echo $no_count; ?></td>
                                            <td><?php echo $rowlist->vDesignation; ?></td> 
                                            <td><?php echo $rowlist->tName; ?></td>                                         
                                            <td><?php echo $rowlist->iOrder;?></td>   
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/quality/computer_unit/edit_member/$recordid/$iCommitteeId" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/quality/computer_unit/change_status_member/status/$recordid/$iCommitteeId" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/quality/computer_unit/delete_record_composition/delete/$recordid/$iCommitteeId" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash-o"></i></a></td>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#dDate').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1",
				format: 'YYYY-MM-DD'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            
        });
    </script>
   

</div>
