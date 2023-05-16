<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top no-repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">B.Sc. Agricultural Technology and Management</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('faculty-statistic-undergraduate'); ?>">Faculty Statistics</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Undergraduate</b></li>
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

  <!-- mission section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
            <?php 
              $count=0;
              foreach($undergraduate_data as $undergraduate) { 
                // var_dump($count);exit();
            ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link <?php if($count==0) { echo "active"; } ?>" id="pills-home-tab_<?php echo $undergraduate->id; ?>" data-bs-toggle="pill" data-bs-target="#pills-home_<?php echo $undergraduate->id; ?>" type="button" role="tab" aria-controls="pills-home" aria-selected="<?php if($count==0) { echo 'true'; } else { echo 'false'; } ?>"><p><?php echo $undergraduate->vMHeading; ?></p></button>
            </li>
            <?php $count++; } ?>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <?php 
              $count=0;
              foreach($undergraduate_data as $undergraduate) { ?>
            <div class="tab-pane fade show <?php if($count==0) { echo "active"; } ?>" id="pills-home_<?php echo $undergraduate->id; ?>" role="tabpanel" aria-labelledby="pills-home-tab_<?php echo $undergraduate->id; ?>">
              <h1 class="heading mb-1"><?php echo $undergraduate->vHeading; ?></h1>
              <?php echo $undergraduate->tContent; ?>
            </div>
            <?php $count++; } ?>
          </div>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->

  <div class="w-100 d-none d-md-block"></div>
    <br>