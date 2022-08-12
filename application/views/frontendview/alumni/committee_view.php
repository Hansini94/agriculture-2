<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up"> Alumni  </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("alumni"); ?>">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b> Committee  </b></li>
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

     <div class="container">
    
        <div class="row">

          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row m-auto">

              <!-- ================== -->
           <!-- ================== -->
           <!-- tab section -->

           <div class="row">
        
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Current Committee </p></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Previous Committee</p></button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <br>
                   <h1 class="heading mb-3">Current FaURS Committee </h1>
                   <br>

                   <div class="row">
                   <?php $i=0; foreach($current as $ccom){ ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 dean_div">
                      <img src="<?php echo base_url().'/front_img/'.$ccom->fImg; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down" style="border: 2px solid #ad9d8e;">
                      <div class="gray_text_div dean_des_div">

                        <blockquote class="blockquote">
                          <p class="sub_heading"><?php echo $ccom->vName; ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <?php echo $ccom->tContent; ?>
                        </figcaption>
                      </div>
                    </div>
                    <?php 
                $i++; 
                if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                } ?>  
                    <!-- =========== -->


                  </div>
                   
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <br>
                   <h1 class="heading mb-3">Previous FaURS Committee</h1>
                   <br>
                    
                   <div class="row">
                   <?php $i=0; foreach($previous as $prev){ ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 dean_div">
                      <img src="<?php echo base_url().'/front_img/'.$prev->fImg; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down" style="border: 2px solid #ad9d8e;">
                      <div class="gray_text_div dean_des_div">

                        <blockquote class="blockquote">
                          <p class="sub_heading"><?php echo $prev->vName; ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <?php echo $prev->tContent; ?>
                        </figcaption>
                      </div>
                    </div>
                    <?php 
                $i++; 
                if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                } ?> 
                    <!-- =========== -->



                  </div>

                </div>
              </div>

            </div>

           <!-- ================== -->
           <!-- ================== -->
           <!-- tab section -->


            </div>

          </div>

        </div>

      </div>


  <!--=============================================-->