<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Faculty Sub Committees </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Quality</a></li>
                <li class="breadcrumb-item"><a href="#">Faculty of Agriculture Quality Assurance Cell (FoAQAC) </a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Functions of FoAQAC</b></li>
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

                  <a href="ffq.html">
                    <button class="nav-link active">
                      Functions of FoAQAC
                    </button>
                  </a>

                  <a href="mfa.html">
                    <button class="nav-link">
                      Members of FQ Assurance Cell
                    </button>
                  </a>

                  <a href="sm.html">
                    <button class="nav-link">
                      Schedule of Meetings 
                    </button>
                  </a>

                </div>
                <!-- nav tabs btn section -->

              </div>

              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                <h1 class="heading mb-3"><?php echo $functions_of_foaqac->vTitle1; ?></h1>

                <p>
                <?php echo $functions_of_foaqac->tContent1; ?>
                </p>

                <div class="clearfix"></div>
                <br>

                <h1 class="heading mb-3"><?php echo $functions_of_foaqac->vTitle2; ?></h1>

                <!-- <ul class="custome_ul"> -->
                <?php echo $functions_of_foaqac->tContent2; ?>
                <!-- </ul> -->

                <div class="clearfix"></div>


              </div>

              <div class="clearfix"></div>



            </div>

          </div>

        </div>

      </div>


  <!--=============================================-->
  <!--===================body====================-->