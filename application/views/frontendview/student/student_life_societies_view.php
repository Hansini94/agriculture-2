<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Students Societies</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("student_life"); ?>">Student Life</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Students Societies</b></li>
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


  <!--=============================================-->
  <!--===================body====================-->

  <!-- welcome section -->
  <div class="container-fluid no_padding footer_row angled-top-right mb-4 mt-1" style="background-color: #c8cfe9;">

    <div class="container">
    
      <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$content->fImg;?>" class="d-block w-100 mb-4" alt="...">
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h1 class="heading"><?php echo $content->vTitleMain; ?></h1>
            <p data-aos="fade-up">
            <?php echo $content->tContentMain; ?>
            </p>

            <!-- <p data-aos="fade-up">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            </p> -->

            
          </div>

        </div>
        <br>

       </div>

    </div>

    </div>

  </div>
  <!-- welcome section -->


  <!-- mission section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">

        <h1 class="heading"><?php echo $content->vTitleSub; ?></h1>
        <h1 class="sub_heading"><?php echo $content->tContentSub; ?></h1>
        <div class="clearfix"></div>
        <br>
        
        <?php $i=0; foreach($society as $societies){?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   <?php echo $societies->vName; ?>  </p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                                    $heading = $societies->vName;
                                                    $name = str_replace(' ', '_', $heading);
                                                    echo base_url('student-life-societies/student-life-societies-detail/'.$societies->id.'/'.$name) 
                                                ?>'>
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
          <?php 
                } ?> 
          <!-- =========== -->

          <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agriculture Faculty Chess Club  </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agriculture Faculty Engineering Students’ Society </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">     Agriculture Faculty English Literary Association </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->

           <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">     Agriculture Faculty Students’ Union (AFSU) </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">     Agriculture Faculty Social Science Society </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="gray_text_div">

              <img src="images/f_student.png" alt="" class="d-block float-start" style="margin-bottom: 20px;">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">   Agriculture Faculty Management Science Society </p>
              </blockquote> -->
              <!-- arrow link -->
                <!-- <a class='animated-arrow' href='student_societies.html'>
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
              </a> -->
              <!-- arrow link -->
            <!-- </div>
          </div> -->

          <!-- =========== -->



        </div>

       </div>

    </div>

    <div class="clearfix"></div>
    <hr>

  </div>

  <!-- mission section -->



     <div class="w-100 d-none d-md-block"></div>
    <br>