<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Faurs</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("research"); ?>">Research</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>FAuRS</b></li>
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
          <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="gray_text_div">

                    <img src="images/www.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">   Committee </p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href='<?php echo base_url('faurs-committee'); ?>'>
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

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="gray_text_div">

                    <img src="images/www.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">   Competitions</p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href='<?php echo base_url(); ?>faurs-competition'>
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

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="gray_text_div">

                    <img src="images/www.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">   FAuRS downloads </p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href='<?php echo base_url(); ?>faurs_downloads'>
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

        
        <div class="clearfix"></div>
        <br>


        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
            <img src="<?php echo base_url().'/front_img/'.$faurs->fImg;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h1 class="heading"> <?php echo $faurs->vTitle ?></h1>
            <p data-aos="fade-up">
                <?php echo $faurs->tContent ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.            
            </p> -->

          </div>


        </div>

        

       </div>

    </div>

  </div>

  <!-- des section -->