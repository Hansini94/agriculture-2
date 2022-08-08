<?php
if ($cSaveStatus == "E") {
    $id = $edit_data['id'];    
    $fImg = $edit_data['fImg']; 
    $vTitleEnglish = $edit_data['vTitleEnglish'];
	$tContentEnglish = $edit_data['tContentEnglish'];   
    $vTitleSinhala = $edit_data['vTitleSinhala'];
	$tContentSinhala = $edit_data['tContentSinhala'];  
    $vTitleTamil = $edit_data['vTitleTamil'];
	$tContentTamil = $edit_data['tContentTamil'];  
    $cEnable = $edit_data['cEnable'];
} else {
    $id = ""; 
    $fImg = ""; 
    $vTitleEnglish = "";    
	$tContentEnglish = "";  
    $vTitleSinhala = "";    
	$tContentSinhala = ""; 
    $vTitleTamil = "";    
	$tContentTamil = ""; 
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
                            <h2>Student Life Home</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <ul class="nav navbar-right">
                                <?php if($cSaveStatus == "E") { ?>
                                <li>
                                    <!-- <a class="collapse-link" href=" -->
                                    <?php 
                                    // echo base_url('adminpanel/student/student_societies'); 
                                    ?>
                                    <!-- " style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Socity</span>&nbsp;</a></li> -->
                                <?php } else { ?>
                                <!-- <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Socity</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li> -->
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
                        <form id="edit_data" name="edit_data" action="<?php echo base_url('adminpanel/student/home/save_tab'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >Image (1200 * 800px) </label>
                                    <div class="col-md-5 col-sm-6 col-xs-10" style="padding-top:8px;">
                                        <input type="file" id="fImg" name="fImg" >
                                    </div>                                    
                                </div>                                
                                
                                 <?php 
								    if($fImg){
								?>
                                <div class="form-group" id="image_delete_<?php echo $id; ?>">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">&nbsp;</label>
                                    <div class="col-md-7 col-sm-6 col-xs-10">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImg;?>"  style="width:250px;" />
                                    </div>
                                    <!-- <div class="col-md-1 col-sm-3 col-xs-2" >
                                        <span class="glyphicon glyphicon-trash" style="line-height:30px; cursor:pointer;" onclick="delete_image('<?php echo $id; ?>');" title="Delete Link"></span>
                                    </div> -->
                                </div>
                                <?php }
                                ?>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">English Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleEnglish" name="vTitleEnglish" value="<?php echo $vTitleEnglish; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">English Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContentEnglish" id="tContentEnglish" class="form-control col-md-7 col-xs-12" required><?php echo $tContentEnglish; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContentEnglish); ?>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sinhala Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleSinhala" name="vTitleSinhala" value="<?php echo $vTitleSinhala; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Sinhala Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContentSinhala" id="tContentSinhala" class="form-control col-md-7 col-xs-12" required><?php echo $tContentSinhala; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContentSinhala); ?>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Tamil Heading<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                       <input type="text" id="vTitleTamil" name="vTitleTamil" value="<?php echo $vTitleTamil; ?>" class="form-control col-md-7 col-xs-12" required> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Tamil Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContentTamil" id="tContentTamil" class="form-control col-md-7 col-xs-12" required><?php echo $tContentTamil; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContentTamil); ?>
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/student/home'); ?>';">Cancel</button>
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
                                    <th>Title English </th>      
                                    <th>Title Sinhala </th> 
                                    <th>Title Tamil</th>                       
                                    <th style="width:8%; text-align:center">Edit </th>
                                    <th style="width:8%; text-align:center">Status </th>
                                    <th style="width:8%; text-align:center">Delete </th>
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
                                            <td><?php echo $rowlist->vTitleEnglish;?></td> 
                                            <td><?php echo $rowlist->vTitleSinhala;?></td>                                            
                                            <td><?php echo $rowlist->vTitleTamil;?></td> 
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/student/home/edit/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/student/home/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/student/home/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
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
