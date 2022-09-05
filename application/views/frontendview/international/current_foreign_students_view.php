<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Current Foreign Students</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('international-overview'); ?>">International</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Current Foreign Students</b></li>
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
           <div class="row">
        <?php foreach($foreign_students as $value){ ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 dean_div">
            <img src="<?php echo base_url('front_img/').$value->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down" style="border: 2px solid #ad9d8e;">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading"><?php echo $value->vTitle; ?> <?php echo $value->vName; ?></p>
              </blockquote>
              <figcaption class="blockquote-footer">
              Registration Number : <?php echo $value->vRegistrationNo; ?>
              </figcaption>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                Country : <?php echo $value->vCountry; ?>
              </figcaption>
            </div>
          </div>

        <?php } ?>
        </div>

        </div>

      </div>

    </div>

  </div>

  <!-- mission section -->



     <div class="clearfix"></div>
    <br>