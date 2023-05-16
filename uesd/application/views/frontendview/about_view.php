    <header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">About </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>About</b></li>
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
                        <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Vision</h2>
                        <div class="clearfix"></div><br>
                        <p>Develop the University Experimental Station to an excellent research and demonstration unit for the Department of Crop Science, Faculty of Agriculture, University of Peradeniya</p>
                    </div>

                    <div class="clearfix"></div><br>

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Mission</h2>
                        <div class="clearfix"></div><br>
                        <p>The establishment and maintenance of a facility for teaching, research and outreach activities related to tropical crop production for the University of Peradeniya.</p>
                    </div>

                    <div class="clearfix"></div><br>
                </div>

            </div>
 
        </div>   

        <div class="row">
        
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Management Structure</h2>
                <div class="clearfix"></div><br>
          
                <img src="<?php echo base_url().'front_img/mgtstructure.png';?>" class="d-block w-100" alt="...">

                <div class="clearfix"></div><br>

            </div>

        </div>

    </div>
