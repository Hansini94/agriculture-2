    <header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Frequently asked questions</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Frequently asked questions</b></li>
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

        <!-- ================== -->
              <!-- ================== -->
              <!-- tab section -->
              <div class="">
              <div class="accordion" id="accordionExample">
        <?php $i = $j = 0;
        foreach($faq as $value){ ?>

          <h1 class="heading mb-3" <?php if($j != 0){ echo 'style="margin-top: 30px;';}?>"><?php echo $value->vTitle; ?></h1>
        
            
                <?php $faq_list = get_faq_list($value->id);
                foreach($faq_list as $item){ ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                      <button class="accordion-button <?php if($i !=0){echo 'collapsed';}?> " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php if($i == 0){echo 'true';} else {echo 'false';}?>" aria-controls="collapse<?php echo $i; ?>">
                      <?php echo $item->vTitle; ?>
                      </button>
                    </h2>
                    <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i ==0){echo 'show';}?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <?php echo $item->tContent; ?>

                      </div>
                    </div>
                    </div>
                    <?php $i++;
                        } ?>
            <?php $j++; } ?>


                </div>

              </div>
              <!-- tab section -->
              <!-- ================== -->
              <!-- ================== -->

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->
