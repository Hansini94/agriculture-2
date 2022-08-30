<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">enewsloads</h1>
              <nav aria-label="breadcrumb" data-aos="fade-enews">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">enewsloads</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Faculty enewsloads</b></li>
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

    <div class="row m-auto">

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              E-Newsletter
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <div class="row">
              <?php foreach($enewsletter as $enews){ ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">

                        <div class="down_div" style="background-color: #f2fde3; padding: 20px 20px 0px 20px;">

                            <p class="sub_heading"><?php echo $enews->vTitle; ?></p>

                            <div class="row">
                        
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="gray_text_div">

                                    <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start" style="width: 55px !important; margin-top: 5px;">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                    <p class="sub_heading" style="font-size: 13px;">PDF Format</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$enews->fFilePdf; ?>' target="_blank">
                                    <span class='the-arrow -left'>
                                        <span class='shaft'></span>
                                    </span>
                                    <span class='main'>
                                        <span class='text'>
                                        enewsload
                                        </span>
                                        <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                        </span>
                                    </span>
                                    </a>
                                    <!-- arrow link -->
                                </div>
                                </div>

                                <!-- ============== -->

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="gray_text_div">

                                    <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                    <p class="sub_heading">Word Format</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$enews->fFileWord; ?>' target="_blank">
                                    <span class='the-arrow -left'>
                                        <span class='shaft'></span>
                                    </span>
                                    <span class='main'>
                                        <span class='text'>
                                        enewsload
                                        </span>
                                        <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                        </span>
                                    </span>
                                    </a>
                                    <!-- arrow link -->
                                </div>
                                </div>

                            </div>

                        </div> <!-- enews div end -->

                    </div>
                    <?php  } ?> 
              </div>

              <!-- ======================= -->
             
            </div>
          </div>
        </div>

        <!-- ------------- -->

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Faurs
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">                
                    <div class="row">
                        <?php $i=0; foreach($faurs as $f_down){ ?>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="enews_div" style="background-color: #f2fde3; padding: 20px 20px 0px 20px;">
                                <p class="sub_heading"><?php echo $f_down->vTitle; ?></p>
                                <div class="row">                            
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="gray_text_div">

                                            <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start" style="width: 55px !important; margin-top: 5px;">

                                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                <p class="sub_heading" style="font-size: 13px;">PDF Format</p>
                                            </blockquote>
                                            <!-- arrow link -->
                                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$f_down->fFilePdf; ?>' target="_blank">
                                                <span class='the-arrow -left'>
                                                    <span class='shaft'></span>
                                                </span>
                                                <span class='main'>
                                                    <span class='text'>
                                                        enewsload
                                                    </span>
                                                    <span class='the-arrow -right'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                </span>
                                            </a>
                                            <!-- arrow link -->
                                        </div>
                                    </div>

                                    <!-- ============== -->

                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="gray_text_div">

                                            <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start">

                                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                                                <p class="sub_heading">Word Format</p>
                                            </blockquote>
                                            <!-- arrow link -->
                                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$f_down->fFileWord; ?>' target="_blank">
                                                <span class='the-arrow -left'>
                                                    <span class='shaft'></span>
                                                </span>
                                                <span class='main'>
                                                    <span class='text'>
                                                        enewsload
                                                    </span>
                                                    <span class='the-arrow -right'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                </span>
                                            </a>
                                            <!-- arrow link -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- enews div end -->
                        </div>
                        <?php 
                            $i++; 
                            if($i ==2){ echo '<div class="clearfix"></div>'; $i=0; }
                            } ?> 
                    </div>
                </div>            
            </div>
        </div>

         <!-- ------------- -->

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Hanthana Blossoms 
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">             
                    <div class="row">     
                        <?php $i=0; foreach($hanthana as $han_down){ ?>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="enews_div" style="background-color: #f2fde3; padding: 20px 20px 0px 20px;">
                                <p class="sub_heading"> <?php echo $han_down->vTitle; ?></p>
                                <div class="row">              
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="gray_text_div">
                                            <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start" style="width: 55px !important; margin-top: 5px;">

                                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                                            <p class="sub_heading" style="font-size: 13px;">PDF Format</p>
                                            </blockquote>
                                            <!-- arrow link -->
                                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$han_down->fFilePdf; ?>' target="_blank">
                                            <span class='the-arrow -left'>
                                                <span class='shaft'></span>
                                            </span>
                                            <span class='main'>
                                                <span class='text'>
                                                enewsload
                                                </span>
                                                <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                                </span>
                                            </span>
                                            </a>
                                            <!-- arrow link -->
                                        </div>
                                    </div>

                                    <!-- ============== -->

                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="gray_text_div">
                                            <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start">

                                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                                            <p class="sub_heading">Word Format</p>
                                            </blockquote>
                                            <!-- arrow link -->
                                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$han_down->fFileWord; ?>' target="_blank">
                                            <span class='the-arrow -left'>
                                                <span class='shaft'></span>
                                            </span>
                                            <span class='main'>
                                                <span class='text'>
                                                enewsload
                                                </span>
                                                <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                                </span>
                                            </span>
                                            </a>
                                            <!-- arrow link -->
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- enews div end -->

                        </div>
                        <?php 
                            $i++; 
                            if($i ==2){ echo '<div class="clearfix"></div>'; $i=0; }
                            } ?> 
                    </div>
                </div>
            </div>
        </div>

         <!-- ------------- -->

    </div>

  </div>
    

  </div>

  <!-- mission section -->