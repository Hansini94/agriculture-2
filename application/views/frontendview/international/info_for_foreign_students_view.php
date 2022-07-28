<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Information for Foreign Students</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">International</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Information for Foreign Students</b></li>
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
           <div class="row">

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

              <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">For More details</p>
              </blockquote>
              <!-- arrow link -->
                <a class='animated-arrow' target="_blank" href='<?php echo $foreign_students_info->vMoreDetailsPdf; ?>'>
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

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="gray_text_div">

              <img src="<?php echo base_url("assets/frontend/"); ?>images/www.png" alt="" class="d-block float-start">

             <blockquote class="blockquote" style="margin-bottom: 0px;">
                <p class="sub_heading">Foreign Students handbook</p>
              </blockquote>
               <!-- arrow link -->
                <a class='animated-arrow' target="_blank" href=<?php echo $foreign_students_info->vStudentHandBook; ?>'>
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

          <!-- ============== -->

          <p>
          <?php echo $foreign_students_info->tContent; ?>
          </p>


        </div>

        </div>

      </div>

    </div>

  </div>

  <!-- mission section -->