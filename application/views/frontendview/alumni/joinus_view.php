<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Alumni</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('alumni'); ?>">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Join Us</b></li>
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

        <div class="row m-auto">

          <h1 class="heading mb-3"><?php echo $joinus_data->vTitle; ?></h1>

          <p data-aos="fade-down">
          <?php echo $joinus_data->tContent; ?>
          </p>

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">Application form </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$joinus_data->fApplication;?>'>
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

          <div class="clearfix"></div>
          <br>
        
          <h1 class="heading"><?php echo $joinus_data->vTitle2; ?> </h1>
          <!-- <h1 class="sub_heading mb-3"></h1> -->

          <p data-aos="fade-down">
            <?php echo $joinus_data->tContent_benefits; ?>
          </p>

          

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->