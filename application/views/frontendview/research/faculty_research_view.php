<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Faculty Research</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Research</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Faculty Statistics</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><b>Faculty Research</b></li>
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
          
          <h1 class="heading mb-4">Faculty Research - Volume</h1>

          <?php foreach($faculty_research as $value){ ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <img src="<?php echo base_url("front_img/").$value->fImage; ?>" alt="" class="d-block w-100 mb-2"> 

            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading"><?php echo $value->vTitle ?></p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo base_url("front_img/").$value->fPdf; ?>' target="_blank">
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text'>
                   Click here to view
                  </span>
                  <span class='the-arrow -right'>
                    <span class='shaft'></span>
                  </span>
                </span>
              </a>
              <!-- arrow link -->
            </div>

          </div>

          <?php } ?>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->