<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top no-repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">ABOUT US</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Mission</b></li>
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
      
       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">

        <div class="row ms-auto">
        
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
            <img src="<?php echo base_url("front_img/").$about_us_data[0]->fMissionIcon; ?>" alt="" class="d-block w-100" data-aos="fade-down">
          </div>

          <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
            <h1 class="heading"><?php echo $about_us_data[0]->vMissionTitle; ?></h1>
            <p>
              <?php echo $about_us_data[0]->tMissionDes; ?>
            </p>
          </div>

        </div>

       </div>

       <!-- =========== -->

         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">

        <div class="row ms-auto">
        
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
            <img src="<?php echo base_url("front_img/").$about_us_data[0]->fVisionIcon; ?>" alt="" class="d-block w-100" data-aos="fade-down">
          </div>

          <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
            <h1 class="heading"><?php echo $about_us_data[0]->vVisionTitle; ?></h1>
            <p>
              <?php echo $about_us_data[0]->tVisionDes; ?>
            </p>
          </div>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->


    <div class="w-100 d-none d-md-block"></div>
    <br>
    <br>

    <!-- dean message -->
      <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 mb-4">

        <div class="row ms-auto">
        
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
            <img src="<?php echo base_url("front_img/").$about_us_data[0]->fDeanImg; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
          </div>

          <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">

            <div class="gray_text_div dean_des_div">
              <h1 class="sub_heading mb-1"><?php echo $about_us_data[0]->vName; ?></h1>
                <!-- <p class="fst-italic mb-1">
                  B.Sc.Agric.(P'deniya); MBA Marketing (Stir); Ph.D. Entrepreneurship (Stir.), MSLIM, FIMSL
                </p>
                <p class="fst-italic mb-1">
                  Dean, Faculty of Agriculture
                </p>
                <p class="fst-italic mb-1">
                  (dean@agri.pdn.ac.lk)
                </p> -->
                <?php echo $about_us_data[0]->tDeanDetails; ?>
            </div>

          </div>

        </div>

       </div>

       <!-- =========== -->


        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <h1 class="heading">Dean’s Message</h1>
          <h1 class="sub_heading mb-3">Welcome to the Premiere Faculty of Agriculture in Sri Lanka.</h1>

          <?php echo $about_us_data[0]->tDeanMsg; ?>

        </div>

    </div>

  </div>
    <!-- dean message -->


     <div class="w-100 d-none d-md-block"></div>
    <br>