<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Training and Research </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Training and Research</b></li>
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
                        <h2 style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;">Training & Research</h2>
                        <div class="clearfix"></div><br>
                        <p>This station has facilities for residential training programs, agricultural demonstrations and research trials. Students of the University of Peradeniya and students from other Sri Lankan and foreign universities conduct their Bachelors, Masters and Doctoral field experiments at this station. In addition, leading local and foreign private organizations use the unit for research purposes. Very importantly, the unit offers very good facilities for academia of the University of Peradeniya to conduct research programs. As well farm conducts training programs in,</p>
                        <br>
                        <ul>
                            <li>Mushroom Cultivation</li>
                            <li>Protected Culture</li>
                            <li>Tissue Culture</li>
                            <li>Organic Farming</li>
                            <li>Farm Machinery</li>
                        </ul>
                        <br>
                        <p>on the request of outside organizations, farmer groups etc.</p>
                    </div>

                    <div class="clearfix"></div><br>
                </div>

            </div>
 
        </div>   

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img
                src="<?php echo base_url("front_img/training&research4.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
                />

                <img
                src="<?php echo base_url("front_img/training&research2.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape"
                />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="<?php echo base_url("front_img/training&research3.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds"
                />

                <img
                src="<?php echo base_url("front_img/training&research6.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
                />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="<?php echo base_url("front_img/training&research5.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea"
                />

                <img
                src="<?php echo base_url("front_img/training&research1.jpg"); ?>"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park"
                />
            </div>

          
        </div>

    </div>
