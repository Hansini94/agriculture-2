<?php
if ($cSaveStatus == "E") {
    $CatId = $this->uri->segment(6);
    $id = $edit_data['id'];
    $fImage = $edit_data['fImage'];
    $vName = $edit_data['vName'];
    $tPosition = $edit_data['tPosition'];
    $vTelephone1 = $edit_data['vTelephone1'];
    $vTelephone2 = $edit_data['vTelephone2'];
    $vEmail1 = $edit_data['vEmail1'];
    $vEmail2 = $edit_data['vEmail2'];
    $tContent1 = $edit_data['tContent1'];
    $tContent2 = $edit_data['tContent2'];
    $tContent3 = $edit_data['tContent3'];
    $tContent4 = $edit_data['tContent4'];
    $fStaffCv = $edit_data['fStaffCv'];
    $cEnable = $edit_data['cEnable'];
    $iOrder = $edit_data['iOrder'];
} else {
    $CatId = $this->uri->segment(5);
    $id = '';
    $fImage = '';
    $vName = '';
    $tPosition = '';
    $vTelephone1 = '';
    $vTelephone2 = '';
    $vEmail1 = '';
    $vEmail2 = '';
    $tContent1 = '';
    $tContent2 = '';
    $tContent3 = '';
    $tContent4 = '';
    $fStaffCv = '';
    $cEnable = 'Y';
    $iOrder = '';
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
                            <h2>Academic Staff</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <ul class="nav navbar-right">
                                <?php if($cSaveStatus == "E") { ?>
                                <li><a class="collapse-link" href="<?php echo base_url('adminpanel/staff/academic_staff/academic_staffs'.$CatId); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Staff</span>&nbsp;</a></li>
                                <?php } else { ?>
                                <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Staff</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
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
                        <form id="list_data" name="list_data" action="<?php echo base_url('adminpanel/staff/academic_staff/save_data'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                        
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Name <span class="required">*</span> </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <input type="text" id="vName" name="vName" value="<?php echo $vName; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">                                
                               <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" style="padding-top:8px;" for="first-name" >Image ( 1920 x 1080 px )
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-1">
                                        <input type="file" id="fImage" name="fImage">
                                    </div>
                                </div>
                                
                                <?php if($fImage!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-10 col-sm-10 col-xs-1">
                                        <img class="img-responsive" src="<?php echo base_url().'front_img/'.$fImage;?>"   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>  
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Position <span class="required">*</span> </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea id="tPosition" name="tPosition" class="form-control col-md-7 col-xs-12" rows="2"><?php echo $tPosition; ?></textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Telephone Number 1 <span class="required">*</span> </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <input type="text" id="vTelephone1" name="vTelephone1" value="<?php echo $vTelephone1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Telephone Number 2 </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <input type="text" id="vTelephone2" name="vTelephone2" value="<?php echo $vTelephone2; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Mail Address 1 <span class="required">*</span> </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <input type="text" id="vEmail1" name="vEmail1" value="<?php echo $vEmail1; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Mail Address 2 <span class="required">*</span> </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <input type="text" id="vEmail2" name="vEmail2" value="<?php echo $vEmail2; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >CV </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fStaffCv" name="fStaffCv" <?php if ($cSaveStatus != "E") {?> required  <?php } ?> accept="application/pdf">
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fStaffCv){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-710 col-sm-10 col-xs-12">
                                    <a href="<?php echo base_url().'/front_img/'.$fStaffCv;?>" target="_blank"><?php echo $fStaffCv; ?></a>
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Academic & Professional Qualifications</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Topic 1<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tContent1" id="tContent1" class="form-control col-md-7 col-xs-12" required><?php echo $tContent1; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent1); ?>
                                    </div>
                                </div>
                            </div>             
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Topic 2</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tContent2" id="tContent2" class="form-control col-md-7 col-xs-12" ><?php echo $tContent2; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent2); ?>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Topic 3</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tContent3" id="tContent3" class="form-control col-md-7 col-xs-12" ><?php echo $tContent3; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent3); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <h5><b>Academic Distinctions & Awards</b></h5>
                                </div>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Topic 4</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="6" name="tContent4" id="tContent4" class="form-control col-md-7 col-xs-12"><?php echo $tContent4; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent4); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Order<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <input type="number" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12" required> 
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
                                    <input type="hidden" id="cEnable" name="cEnable" value="<?php echo $cEnable ?>">
                                    <input type="hidden" id="iCatId" name="iCatId" value="<?php echo $CatId; ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/staff/academic_staff/academic_staffs'); ?>';">Cancel</button>
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
                                    <th style="width:8%;text-align:center;">No </th>
                                    <th style="">Name </th>  
                                    <th style="">Position </th>     
                                    <th style="width:8%;text-align:center">Order</th>                   
                                    <th style="width:8%;text-align:center">Edit </th>
                                    <th style="width:8%;text-align:center">Status </th>
                                    <th style="width:8%;text-align:center">Delete </th>
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
                                        $iCatId = $rowlist->iCatId;
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
                                            <td><?php echo $rowlist->vName;?></td>     
                                            <td><?php echo $rowlist->tPosition;?></td>                                       
                                            <td><?php echo $rowlist->iOrder;?></td> 
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/staff/academic_staff/edit/$recordid/$iCatId" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/staff/academic_staff/change_status/status/$recordid/$iCatId" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/staff/academic_staff/delete_record/delete/$recordid/$iCatId" ?>" onclick="return confirm('Are you sure?')">
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
   

</div>