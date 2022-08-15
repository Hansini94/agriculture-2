<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up"><?php echo $data->vName; ?></h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("assets/frontend/"); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("student_life_societies"); ?>">Students</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b><?php echo $data->vName; ?></b></li>
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
        
          <h1 class="heading mb-1"><?php echo $data->vTitle; ?></h1>
          <h1 class="sub_heading mb-3"><?php echo $data->vSubtitle; ?></h1>

          <p>
          <?php echo $data->tContent; ?>
          </p>

          <div class="clearfix"></div>
            <br>

            <div class="row">
            
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="height: auto; min-height: inherit;">
                     <div class="bgimg_div">
                      <img src="<?php echo base_url().'/front_img/'.$data->fImgLeft;?>" alt="" class="dd-block w-100">
                     </div>
                  </div>
                  <!-- <div class="carousel-item" style="height: auto; min-height: inherit;">
                    <div class="bgimg_div">
                      <img src="images/res02.jpg" alt="" class="d-block w-100">
                     </div>
                  </div> -->
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> -->
              </div>

              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 img_text_box_mt_40">
                <p class="mb-3">
                <?php echo $data->tContentLeft; ?>
                </p>

              </div>

            </div>

            <div class="clearfix"></div>
            <br>

             <div class="row">

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 img_text_box_mt_40">
                <p class="mb-3">
                <?php echo $data->tContentRight; ?>
                </p>

              </div>


              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="height: auto; min-height: inherit;">
                     <div class="bgimg_div">
                      <img src="<?php echo base_url().'/front_img/'.$data->fImgRight;?>" alt="" class="dd-block w-100">
                     </div>
                  </div>
                  <!-- <div class="carousel-item" style="height: auto; min-height: inherit;">
                    <div class="bgimg_div">
                      <img src="images/res02.jpg" alt="" class="d-block w-100">
                     </div>
                  </div> -->
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> -->
              </div>

              </div>

            </div>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->



     <div class="w-100 d-none d-md-block"></div>
    <br>