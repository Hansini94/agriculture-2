<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Research</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Student Research</b></li>
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

<div class="clearfix"></div>
      <br>

      <div class="container">
    
        <div class="row">

              <!-- sub student_research section -->
    <div class="container">
      
      <div class="row">
      <?php if(isset($all)){$i=0; foreach($all as $all_data){ ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="student_research_div">
            
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                  <img src="<?php echo base_url().'front_img/'.$all_data->fThumbnail;?>" class="d-block w-100" alt="...">
                </div>

                <div class="clearfix"></div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $all_data->vPerson; ?></small></p>
                  <a href='<?php  
                                    $heading = $all_data->tTitle; 
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    echo base_url('student-research/student-detail/'. $all_data->id . '/' .$name)
                            ?>'>
                        <h1 class="sub_heading">
                          <?php echo $all_data->tTitle; ?>
                        </h1>
                      </a>
                    <p data-aos="fade-up">
                      <?php 
                          if(strlen($all_data->tDescription) > 100){
                              echo substr($all_data->tDescription,0,100) . " ...";
                          }
                          else{
                              echo $all_data->tDescription;
                          }
                      ?>
                    </p>
                    <!-- arrow link -->
                    <a class='animated-arrow' href='<?php 
                                                          $heading = $all_data->tTitle; 
                                    $name = str_replace(' ', '-', $heading); 
                                    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                                    echo base_url('student-research/student-detail/'. $all_data->id . '/' .$name) ?>'>
                    <span class='the-arrow -left'>
                      <span class='shaft'></span>
                    </span>
                    <span class='main'>
                      <span class='text'>
                        Read More
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
 
        </div>
        <?php 
                $i++; 
                if($i ==3){ echo '<div class="clearfix"></div>'; $i=0; }
                }
              } else{
                echo "No Data Found";
              }
        ?> 

        

      

      <div class="row">
        
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          
            <!-- pagination -->
            <nav class="float-end">
            <?php echo $links; ?>
              <!-- <ul class="pagination" style="padding-left: 0px !important;">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page">
                  <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul> -->
            </nav>
            <!-- pagination -->

        </div>

      </div>

    </div>
    <!-- sub student_research section -->



        </div>

      </div>
