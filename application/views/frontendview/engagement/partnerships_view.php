<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Engagement</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Engagement</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Partnerships </b></li>
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


    <!-- des section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row m-auto">
            <?php $i=0; foreach($partnerships as $part){ ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                <img src="<?php echo base_url('front_img/').$part->fImg; ?>" class="d-block w-50 mb-2" alt="...">

                <h1 class="heading"><?php echo $part->vTitle; ?></h1>
                <p data-aos="fade-up">
                <?php echo $part->tContent; ?>
                </p>
                <!-- arrow link -->
                <a class='animated-arrow' href='<?php echo $part->vUrlLink; ?>' >
                  <span class='the-arrow -left'>
                    <span class='shaft'></span>
                  </span>
                  <span class='main'>
                    <span class='text'>
                      View Web site
                    </span>
                    <span class='the-arrow -right'>
                      <span class='shaft'></span>
                    </span>
                  </span>
                </a>
              <!-- arrow link -->
            </div>
            <?php 
                $i++; 
                if($i ==2){ echo '<div class="clearfix"></div>'; $i=0; }
                } ?>   

        </div>

       </div>

    </div>

  </div>

  <!-- des section -->