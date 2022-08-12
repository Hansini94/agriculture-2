<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Alumni </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b> Scholarships  </b></li>
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

            <div class="row ms-auto">

              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
              
                <!-- nav tabs btn section -->
                <div class="nav flex-column nav-pills me-3 side_nav_btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                
                <?php 
                  $i=0; foreach($schol_data as $schol)
                  { 
                    
                    if($i==0)
                    {                    
                ?>
                    <a href="<?php echo base_url(); ?>alumni_scholarships">
                      <button class="nav-link">
                      <?php echo $schol->vName; ?>
                      </button>
                    </a>
                <?php 
                    }
                    elseif($schol->vName == $scholarship->vName){
                        ?>
                        <a href="<?php 
                                                          $heading = $schol->vName;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_scholarships/scholarships_detail/'.$name) ?>">
                      <button class="nav-link active">
                      <?php echo $schol->vName; ?>
                      </button>
                    </a>
                <?php
                    }
                    else{
                ?>
                <a href="<?php 
                                                          $heading = $schol->vName;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_scholarships/scholarships_detail/'.$name) ?>">
                      <button class="nav-link ">
                      <?php echo $schol->vName; ?>
                      </button>
                    </a>
                <?php

                    }$i++;
                  }
                ?> 
                </div>
                
                <!-- nav tabs btn section -->

              </div>

              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">

                <h1 class="heading mb-3"><?php echo $scholarship->vTitle; ?></h1>

                <p>
                <?php echo $scholarship->tContent; ?>
               </p>

                <!-- <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p> -->

              </div>

              <div class="clearfix"></div>
              <br>



            </div>

          </div>

        </div>

      </div>


  <!--=============================================-->
  <!--===================body====================-->