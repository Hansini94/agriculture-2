<?php
if ($cSaveStatus == "E") {
    $id = $edit_data[0]->id;
    $vTitle = $edit_data[0]->vTitle;
    $tDescription = $edit_data[0]->tDescription;
    $vSubtitle = $edit_data[0]->vSubtitle;
    $vChairman = $edit_data[0]->vChairman;
    $vSecretary = $edit_data[0]->vSecretary;
    $cEnable = $edit_data[0]->cEnable;
    $fImgChairman = $edit_data[0]->fImgChairman ;
    $fImgSecretary = $edit_data[0]->fImgSecretary ;
    $iOrder = $edit_data[0]->iOrder;  
    $vYear = $edit_data[0]->vYear; 
} else {
    $id = '';
    $vTitle = '';
    $tDescription = '';
    $vSubtitle = '';
    $vChairman = '';
    $vSecretary = '';
    $cEnable = 'Y';
    $fImgChairman = '';
    $fImgSecretary = '';
    $iOrder = '';
    $vYear = '';
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
                            <h2>Library Committee</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <ul class="nav navbar-right">
                                <?php if($cSaveStatus == "E") { ?>
                                <li><a class="collapse-link" href="<?php echo base_url('adminpanel/quality/library_committee'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Committee</span>&nbsp;</a></li>
                                <?php } else { ?>
                                <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Committee</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
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
                        <form id="edit_data" name="edit_data" action="<?php echo base_url('adminpanel/quality/library_committee/save_data'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Main Heading<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vTitle" name="vTitle" value="<?php echo $vTitle; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Year<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vYear" name="vYear" value="<?php echo $vYear; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >Chairman Image (500 * 500px) </label>
                                    <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                        <input type="file" id="fImgChairman" name="fImgChairman" >
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImgChairman){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImgChairman;?>"  style="width:100px;" />
                                        <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'adminpanel/quality/library_committee/remove_image/'.$id.'/fImgChairman/'.$fImgChairman;?>">Remove image</a> 
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
                                        <input type="file" id="fImgSecretary" name="fImgSecretary" >
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImgSecretary){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10" >
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImgSecretary;?>"  style="width:100px;"/>
                                        <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'adminpanel/quality/library_committee/remove_image/'.$id.'/fImgSecretary/'.$fImgSecretary;?>">Remove image</a> 
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

                            <div class="clearfix"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="vProTitle">Sub Heading<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                       <input type="text" id="vSubtitle" name="vSubtitle" value="<?php echo $vSubtitle; ?>" class="form-control col-md-7 col-xs-12" required> 
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/quality/library_committee'); ?>';">Cancel</button>
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
                                    <th style="width:10%;text-align:center;">No </th>     
                                    <th>Title</th> 
                                    <th style="width:15%;">Order</th>     
                                    <th style="width:15%;">Add Composition</th>                             
                                    <th style="width:10%; text-align:center">Edit </th>
                                    <th style="width:10%; text-align:center">Status </th>
                                    <th style="width:10%; text-align:center">Delete </th>
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
                                            <td><?php echo $rowlist->vTitle; ?> - <?php echo $rowlist->vYear; ?></td>                                         
                                            <td><?php echo $rowlist->iOrder;?></td>   
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/quality/library_committee/composition/$recordid" ?>" target="_blank">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/quality/library_committee/edit/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/quality/library_committee/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/quality/library_committee/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
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
