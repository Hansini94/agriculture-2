<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Services</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Outreach Centers</b></li>
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
            <img src="<?php echo base_url().'/front_img/'.$centers->fImg;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h1 class="sub_heading"><?php echo $centers->vTitle2; ?> </h1>
            <p data-aos="fade-up">
                <?php echo $centers->tContent1; ?>
            </p>

            
          </div>

        </div>

        <div class="clearfix"></div>
        <br>
        <br>

      <div class="row m-auto">

        <h1 class="heading"><?php echo $centers->vTitle2; ?></h1>
            <p data-aos="fade-up">
            <?php echo $centers->tContent2; ?>
        </p>

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agribusiness Centre  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='https://agri.pdn.ac.lk/abc/' target="_blank">
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

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agricultural Biotechnology Centre  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='https://agri.pdn.ac.lk/agbc/' target="_blank">
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

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agriculture Education Unit  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='https://agri.pdn.ac.lk/aeu/' target="_blank">
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

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Gender Education & Women’s Initiative Unit  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='http://www.pgia.pdn.ac.lk/gewiu' target="_blank">
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

  <!-- des section -->