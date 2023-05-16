<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top no-repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Faculty Board</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('faculty-organization'); ?>">Faculty Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Meeting Schedule</b></li>
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
         <h1 class="heading mb-1">SCHEDULE OF MEETINGS - <?php echo $meeting_schedule_detail[0]->vYear; ?></h1>
          <?php echo $meeting_schedule_detail[0]->tContent; ?>
        </div>

      </div>

      <div class="clearfix"></div>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">

          <?php foreach($meeting_schedule_data as $meeting_schedule) { ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
              <div class="gray_text_div dean_des_div">

                <blockquote class="blockquote" style="margin-bottom: 0px;">
                    <p>SCHEDULE OF MEETINGS - <?php echo $meeting_schedule->vYear; ?></p>
                </blockquote>
                <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo base_url('faculty-board/').$meeting_schedule->vYear; ?>'>
                  <span class='the-arrow -left'>
                      <span class='shaft'></span>
                  </span>
                    <span class='main'>
                      <span class='text'>Click here to view</span>
                      <span class='the-arrow -right'>
                      <span class='shaft'></span>
                    </span>
                  </span>
                </a>
                <!-- arrow link -->

                </div>
          </div>

          <?php } ?>

          <!-- ============== -->

        </div>

      </div>

    </div>

</div>

  <!-- mission section -->



<div class="clearfix"></div>
<br>
<br>