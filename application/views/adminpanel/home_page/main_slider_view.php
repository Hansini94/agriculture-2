<?php
if ($cSaveStatus == "E") {
    $id = $edit_main_slider[0]->id;    
    $fImage = $edit_main_slider[0]->fImage;
    $vTitle = $edit_main_slider[0]->vTitle;
    $vCaption = $edit_main_slider[0]->vCaption;
    $vUrl = $edit_main_slider[0]->vUrl;
    $iOrder = $edit_main_slider[0]->iOrder;
    $cEnable = $edit_main_slider[0]->cEnable;
	
} else {
    $id = "";    
    $fImage = "";
    $vTitle = "";
    $vCaption ="";
    $vUrl = "";
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
                                	<div class="col-md-9 col-sm-9 col-xs-9">
                                    <h2>Home Main Slider</h2>
                                    </div>
                                    <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Slider</span>&nbsp;<i class="fa fa-chevron-down"></i></a>
                            </li>
                        </ul>
                                    <div class="clearfix"></div>
                                </div>
                                
                                
                                
                    <div class="x_content" <?php
                    if ($cSaveStatus != "E") {
                        echo 'style="display:none;"';
                    }
                    ?>>
                        <br />
                        <form id="Edit_hotel" name="Edit_hotel" action="<?php echo base_url('adminpanel/home_page/main_slider/save_main_slider'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" style="padding-top:8px;" for="first-name" >Image ( 1920 x 1080 px )
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="fImage" name="fImage">
                                    </div>
                                </div>
                                
                                <?php if($fImage!=''){ ?>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name" >&nbsp;</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage;?>"   />
                                    </div>
                                </div>
								<?php } ?> 
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Caption Title </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vTitle" name="vTitle" value="<?php echo $vTitle; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Caption </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea id="vCaption" name="vCaption" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $vCaption; ?></textarea>
                                       
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Read More </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="vUrl" name="vUrl" value="<?php echo $vUrl; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 


                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="vProTitle">Display Order </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12">
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
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/home_page/main_slider'); ?>';">Cancel</button>
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
                                    <th>Image </th>                                    
                                    <th style="width:80px;text-align:center;">Order </th>
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
                                            <td><img height="75" src="<?php echo base_url().'/front_img/'.$rowlist->fImage;?>"   /></td>                                            
                                            
                                            <td style="text-align:center;"><?php echo $rowlist->iOrder; ?></td>
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/home_page/main_slider/edit_main_slider/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/home_page/main_slider/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/home_page/main_slider/delete_record/$recordid" ?>" onclick="return confirm('Are you sure?')">
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
