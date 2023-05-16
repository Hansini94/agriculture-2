<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Units</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <!--<li class="breadcrumb-item"><a href="<?php echo base_url("Undergraduate-Programme"); ?>">Units</a></li>-->
                <li class="breadcrumb-item active" aria-current="page"><b>Processing Units</b></li>
              </ol>
            </nav>
            </div>
          </div>

        </div>
      </div>
    </header>

    <!-- header section -->

    <!--=============================================-->
  <!--===================header====================-->

    <div class="w-100 d-none d-md-block"></div>
    <br>


  <!--=============================================-->
  <!--===================body====================-->

  <div class="clearfix"></div>
      <br>

      <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
        
          <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">-->
          <!--  <li class="nav-item" role="presentation">-->
          <!--  <a href="<?php echo base_url('Undergraduate-Programme'); ?>"><button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Core Program</p></button></a>-->
          <!--  </li>-->
          <!--  <li class="nav-item" role="presentation">-->
          <!--    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Advanced Modules</p></button>-->
          <!--  </li>-->
          <!--</ul>-->
          <!--<div class="tab-content" id="pills-tabContent">-->
            <!-- <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <br>               
                <div class="row">
                    <h1 class="heading mb-1">Core Program</h1>
                    <h1 class="sub_heading mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1> -->
               
                    <!-- table-->
                    <!-- <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">courses Name</th>
                                <th scope="col">Coordinator</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            <tr>
                                <th scope="row">AB1101</th>
                                <td>Lorem Ipsum is simply</td>
                                <td>Lorem Ipsum is simply dummy text of the printing</td>
                            </tr>
                            </tbody>
                        </table>
                        </div> -->
                    <!-- table -->
                <!-- </div>
            </div> -->

            <!--<div class="tab-pane fade  show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">-->
                <br>    
                <div class="row">      
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">    
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">                
                                <!-- nav tabs btn section -->
                                <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                    if(isset($advanced_module)){
                                        $i=0;
                                        foreach($advanced_module as $module )
                                        {
                                    
                                ?>
                                <a href="<?php 
                                    $heading = $module->vTabName; 
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    $module_id = base64_encode($module->id);
                                    // $module_id = $module->id;
                                    echo base_url('processing-units/processing-units-detail/'. $module_id . '/' .$name);
                                // echo base_url('Units/units-detail/'.$module->id) 
                                ?>">
                                    <button class="nav-link <?php if($detail->id === $module->id){echo 'active';}else{echo '';}?>">
                                        <?php echo $module->vTabName; ?>
                                    </button>
                                </a>  
                                <?php 
                                        $i++; 
                                        }
                                    } 
                                ?>                

                                </div>
                                <!-- nav tabs btn section -->
                            </div>
                            <?php 
                            if(isset($detail))
                            {
                                
                            ?>
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">

                                <p>
                                <?php if(isset($detail->tOverview)){ echo $detail->tOverview;}else{echo "No Data Found";} ?>
                                </p>

                                <!-- ============= -->     
                                
                                <div class="row ms-auto">
                                    <?php 
                                    $unit_gallery = get_processing_images($detail->id);
                                    // var_dump($unit_gallery);exit();
                                        if(isset($unit_gallery)){
                                            foreach($unit_gallery as $gallery) {
                                    
                                    ?>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-4 p-5" style="padding-top: 0px !important; padding-bottom: 0px !important;">
                                        <div class="row">
                                            <div class="bgimg_div">
                                                <img src="<?php echo base_url('front_img/').$gallery->fImage; ?>" alt="" class="dd-block w-100">
                                            </div> 
                                            <p><?php echo $gallery->vCaption; ?></p>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>

                                <!-- =========== -->
                            </div>

                            <?php 
                            }
                            else if(isset($advanced_module[0]->tOverview)){
                                
                             ?>
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">

                                <p>
                                <?php echo $advanced_module[0]->tOverview; ?>
                                </p>

                                <!-- ============= -->  
                                
                                <div class="row ms-auto">
                                    <?php 
                                        $unit_gallery = get_processing_images($advanced_module[0]->id);
                                        // var_dump($unit_gallery);
                                        if(isset($unit_gallery)){
                                            foreach($unit_gallery as $gallery) {
                                                
                                    
                                    ?>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-4 p-5" style="padding-top: 0px !important; padding-bottom: 0px !important;">
                                        <div class="row">
                                            <div class="bgimg_div">
                                                <img src="<?php echo base_url('front_img/').$gallery->fImage; ?>" alt="" class="dd-block w-100">
                                            </div> 
                                           <p><?php echo $gallery->vCaption; ?></p>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                    
                                </div>

                                <!-- =========== -->
                                
                            </div>
                            <?php }
                            else{
                                echo "No data found";
                            }?>
                        </div>
                        <br>
                    </div>
                </div>
            <!--</div>-->
          <!--</div>-->

        </div>

       </div>

    </div>

  </div>