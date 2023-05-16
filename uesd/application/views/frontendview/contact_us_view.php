<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Contact Us</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Contact Us</b></li>
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

            <!-- sub research_projects section -->
            <div class="container">
      
                <div class="row">              

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <p style="text-align:center;">
                            <b>University Experimental Station</b> <br>
                            Faculty of Agriculture<br>
                            University of Peradeniya<br>
                            <a href="tel:+94 812 390 000">+94 812 390 000</a><br>
                            <br><br>
                            <b>Department of Crop Science</b> <br>
                            <a href="tel:+94 812 395 112">+94 812 395 112</a><br>
                            <br><br>
                            <b>University Experimental Station</b> <br>
                            <a href="tel:+94 812 375 104">+94 812 375 104</a><br>
                            <br><br>
                            <b>University Experimental Station</b> <br>
                            Dodangolla, Kundasale,<br>
                            Sri Lanka<br>
                        </p>
                        <br>
                    </div>

                    <div class="clearfix"></div><br>
                </div>

            </div>
 
        </div>  

    </div>
