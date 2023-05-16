
    <header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(2)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(2) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Ethical Clearance Committee</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Research</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Faculty Statistics</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><b>Ethical Clearance Committee</b></li>
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
          
          <h1 class="heading mb-4">Ethical Clearance Process and Applications</h1>

          <?php foreach($commitee as $value){ ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">

              <div class="gray_text_div">
                <?php $file_type = explode(".", $value->fFile);
                    if($file_type[1] == 'pdf'){
                        $file_logo = 'pdf.png';
                    } else {
                        $file_logo = 'word.png';
                    }
                ?>
                <img src="<?php echo base_url("assets/frontend/images/").$file_logo; ?>" alt="" class="d-block float-start">

                <blockquote class="blockquote" style="margin-bottom: 0px;">
                  <p class="sub_heading"><?php echo $value->vTitle; ?></p>
                </blockquote>
                <!-- arrow link -->
                  <a class='animated-arrow' href='<?php echo base_url("front_img/"),$value->fFile; ?>' target="_blank">
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
          <?php } ?>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->