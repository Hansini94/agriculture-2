<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Biodiversity and Plantation Fields</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Biodiversity and Plantation Fields</b></li>
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
                        <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Biodiversity</h2>
                        <div class="clearfix"></div><br>
                        <p>This station has a high degree of bio diversity, with about 150 species of plants within its premises. This is an added bonus, which is used extensively for student practical.</p>
                        <br>
                        <p>The experimental unit offers a unique opportunity for student training, research and demonstrations.</p>
                    </div>

                    <div class="clearfix"></div><br>
                </div>

                <div class="clearfix"></div><br><br>

                <div class="row">              

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Plantation Fields</h2>
                        <div class="clearfix"></div><br>
                        <p>Perennial crops, principally Teak, Coffee and Coconut cover approximately 50% of the land area of the farm.</p>
                        <br>
                    </div>

                    <div class="clearfix"></div><br>
                </div>



            </div>
 
        </div>   

        

    </div>
