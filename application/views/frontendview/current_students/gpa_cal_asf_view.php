<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Current Students</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url("current_students"); ?>">Current Students </a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>GPA Calculator</b></li>
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


    <!-- des section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$asf->fImg; ?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h1 class="sub_heading"><?php echo $asf->vTitle; ?></h1>
            <p data-aos="fade-up">
            <?php echo $asf->tContent; ?>
           </p>

            <!-- <p data-aos="fade-up">
              Over the past three decades it has achieved substantial progress and has emerged as a “Centre of Excellence” in higher education in agricultural sciences in the country.
            </p> -->

            <div class="row">

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="gray_text_div">

                    <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">   Excel </p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$asf->fFileExcel; ?>' target="_blank">
                      <span class='the-arrow -left'>
                        <span class='shaft'></span>
                      </span>
                      <span class='main'>
                        <span class='text'>
                         Click here
                        </span>
                        <span class='the-arrow -right'>
                          <span class='shaft'></span>
                        </span>
                      </span>
                    </a>
                    <!-- arrow link -->
                  </div>
                </div>

                <!-- =========== -->

              </div>

            
          </div>


        </div>

       </div>

    </div>

  </div>

  <!-- des section -->



     <div class="w-100 d-none d-md-block"></div>
    <br>
    <br>