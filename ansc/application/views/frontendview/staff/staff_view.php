<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Staff</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Staff </b></li>
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
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Academic</p></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Non-Academic </p></button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <br>               
              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <?php 
                    if(isset($academic_category))
                    {
                      $j=0;
                      foreach($academic_category as $category )
                      {
                  ?>
                  <div class="row m-auto">
                    <h1 class="heading mb-1"><?php echo $category->vName; ?></h1>
                    <!-- <h1 class="sub_heading mb-3"><?php echo $academic_caption->tCaption; ?></h1> -->
                    <div class="clearfix"></div>
                    <br>
                    <div class="row">                      
                      <?php
                            if(isset($academic_details))
                            {
                              $i=0;
                              foreach($academic_details as $academic )
                              {     
                                if($category->id == $academic->iCatId)   
                                {                            
                      ?>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
                          <img src="<?php echo base_url('front_img/').$academic->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                          <div class="gray_text_div dean_des_div">
                            <blockquote class="blockquote">
                              <p class="sub_heading"><?php echo $academic->vName; ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer" style="margin-bottom: 15px;">
                              <?php echo $academic->tPosition; ?>
                            </figcaption>

                            <!-- <figcaption class="blockquote-footer" style="margin-bottom: 10px;">
                              (Head of the Department)
                            </figcaption> -->

                            <hr>

                            <p class="mb-1"><?php echo $academic->vTelephone1; ?>  |  <?php echo $academic->vTelephone2; ?></p>

                            <p><?php echo $academic->vEmail1; ?>  |  <?php echo $academic->vEmail2; ?></p>

                            <!-- arrow link -->
                            <a class='animated-arrow' href='<?php  
                                                                $id = $academic->id; 
                                                                // $name = str_replace(' ', '_', $heading); 
                                                                echo base_url('staff/academic_staff_detail/'.$id);
                                                            ?>'>
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
                        <!-- =========== -->
                      <?php 
                                }
                                $i++; 
                              }
                            } 
                      ?>              
                    </div>
                  </div>
                  <?php
                        $j++;
                      }
                    }
                  ?>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <br>
              <div class="row m-auto">
                <?php 
                  if(isset($non_category))
                  {
                    $j=0;
                    foreach($non_category as $non_cat )
                    {
                ?>
                <h1 class="heading mb-1"><?php echo $non_cat->vName; ?></h1>
                <!-- <h1 class="sub_heading mb-3"><?php echo $non_caption->tCaption; ?></h1> -->
                <div class="clearfix"></div>
                <br>        
                <div class="row">
                  <?php 
                    if(isset($non_details))
                    {
                      $i=0;
                      foreach($non_details as $non )
                      {
                        if($non_cat->id == $non->iCatId)   
                        {
                  ?>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
                    <img src="<?php echo base_url('front_img/').$non->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
                    <div class="gray_text_div dean_des_div">
                      <blockquote class="blockquote">
                        <p class="sub_heading"><?php echo $non->vName; ?></p>
                      </blockquote>
                      <figcaption class="blockquote-footer" style="margin-bottom: 15px;">
                        <?php echo $non->tPosition; ?>
                      </figcaption>
                      <!-- <figcaption class="blockquote-footer" style="margin-bottom: 10px;">
                        (Head of the Department)
                      </figcaption> -->
                      <hr>
                      <p class="mb-1"><?php echo $non->vTelephone1; ?>  |  <?php echo $non->vTelephone2; ?></p>

                      <p><?php echo $non->vEmail1; ?>  |  <?php echo $non->vEmail2; ?></p>

                      <!-- arrow link -->
                      <a class='animated-arrow' href='<?php  
                                                      $id = $non->id; 
                                                      // $name = str_replace(' ', '_', $heading); 
                                                      echo base_url('staff/non_academic_staff_detail/'.$id);
                                                  ?>'>
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
                  <!-- =========== -->
                    <?php 
                          }
                          $i++; 
                        }
                      } 
                    ?>
                </div>
                <?php
                        $j++;
                      }
                    }
                ?>
              </div>

            </div>
          </div>

        </div>

       </div>

    </div>

  </div>

     
