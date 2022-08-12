<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Downloads</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Downloads</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Student Downloads</b></li>
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
            <?php $i=0; foreach($student as $down){ ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">

                <div class="down_div" style="background-color: #f2fde3; padding: 20px 20px 0px 20px;">

                <p class="sub_heading"><?php echo $down->vTitle; ?></p>

                    <div class="row">
                    
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="gray_text_div">

                            <img src="<?php echo base_url("assets/frontend/"); ?>images/pdf.png" alt="" class="d-block float-start" style="width: 55px !important; margin-top: 5px;">

                            <blockquote class="blockquote" style="margin-bottom: 0px;">
                            <p class="sub_heading" style="font-size: 13px;">PDF Format</p>
                            </blockquote>
                            <!-- arrow link -->
                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$down->fFilePdf; ?>' target="_blank">
                            <span class='the-arrow -left'>
                                <span class='shaft'></span>
                            </span>
                            <span class='main'>
                                <span class='text'>
                                Download
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
                            <a class='animated-arrow' href='<?php echo base_url().'/front_img/'.$down->fFileWord; ?>' target="_blank">
                            <span class='the-arrow -left'>
                                <span class='shaft'></span>
                            </span>
                            <span class='main'>
                                <span class='text'>
                                Download
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

                </div> <!-- down div end -->

            </div>
            <?php $i++; if($i ==2){ echo '<div class="clearfix"></div>'; $i=0; }   } ?> 
          <!-- ======================= -->

          </div>

          <!-- ======================= -->


        </div>

        <!-- ======================= -->
        <!-- ======================= -->

       </div>

    </div>

  </div>

  <!-- mission section -->