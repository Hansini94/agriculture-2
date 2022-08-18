<header>
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <?php if(isset($slider)){foreach($slider as $slid){ ?>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url('<?php echo base_url().'/front_img/'.$slid->fImage;?>')">
            <div class="container carousel-caption">
              <div class="row">
                <div class="col-xxl-6 offset-xxl-6 col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 col-md-6 offset-md-6 col-sm-12 carousel_caption_col angled-bottom-left">
                  <h5><?php echo $slid->vTitle; ?></h5>
                  <p><?php echo $slid->vCaption; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php  } }?> 
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
</header>

    <!-- header section -->

    <!--=============================================-->
  <!--===================header====================-->


  <!--=============================================-->
  <!--===================body====================-->


    <!-- mobile slider section -->
    <div class="container-fluid no_padding d-none">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <?php if(isset($slider)){foreach($slider as $slid){ ?>
          <div class="carousel-item active">
            <img src="<?php echo base_url().'/front_img/'.$slid->fImage;?>" class="d-block w-100" alt="...">
          </div>
          <?php  }} ?> 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- mobile slider section -->

    
    <div class="clearfix"></div>
    <br>
    <br>

       <!-- des section -->

  <div class="container">
    
    <div class="row">
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

          <div class="row m-auto">
          
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <img src="<?php echo base_url().'/front_img/'.$content->fImg;?>" class="d-block w-100" alt="...">
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <h1 class="sub_heading"><?php echo $content->vTitle; ?></h1>
              <p data-aos="fade-up">
              <?php echo $content->tContent; ?>
              </p>

              <!-- <p data-aos="fade-up">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
              </p> -->
              
            </div>


          </div>

       </div>

    </div>

  </div>

    <!-- des section -->

    <br>
    <br>

    <!-- news section -->
    <div class="container-fluid" style="background-color: #efd2d1;">
      <br>
      <br>
      <div class="container">

        <!-- mobile show -->
        <div class="row d-lg-none d-xl-none d-xxl-none" style="margin-bottom: 30px;">
            <!-- uni about section -->
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
              <img src="<?php echo base_url().'/front_img/'.$content->fImg;?>" alt="" class="d-block w-100 align-self-center">
            </div>

            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-8">
              <h1 class="heading"><?php echo $content->vTitle; ?></h1>
              <p data-aos="fade-up">
              <?php echo $content->tContent; ?> 
              </p>

              <!-- <p data-aos="fade-up">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p> -->
            </div>
            <!-- uni about section -->
        </div>
        <!-- mobile show -->
        
      <div class="row"> 

        <h1 class="heading mb-3">News & Updates</h1>
<?php  if(!empty($news_data[0])){?>
        <!-- news carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">          
          <div class="carousel-inner">            
            <div class="carousel-item active" style="height: auto;">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <img src="<?php echo base_url().'/front_img/'.$news_data[0]->fThumbnail;?>" class="d-block w-100" alt="...">
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[0]->dRDate; ?></small></p>
                  <h1 class="sub_heading"><?php echo $news_data[0]->vTitle; ?></h1>
                  <p data-aos="fade-up">
                    <?php echo $news_data[0]->tContent; ?>
                  </p>
                  <!-- <p data-aos="fade-up">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it tto make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </p> -->
                  <!-- arrow link -->
                  <a class='animated-arrow' href='<?php 
                                                          $heading = $news_data[0]->vTitle;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_news/news_detail/'.$name) ?>'>
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
            </div>
            <!-- ================= -->          
          </div>
          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button> -->
        </div>
        <!-- news carousel -->
      </div>
    </div>
    <br>
</div>
<!-- news section -->

<div class="w-100 d-none d-md-block"></div>
<br>

<!-- sub news section -->
<div class="container">
  <div class="row">
    <?php  if($news_data[1]->vTitle === ''){?>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">  
        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url('front_img/').$news_data[1]->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[1]->dRDate; ?></small></p>
            <h1 class="sub_heading"><?php echo $news_data[1]->vTitle; ?></h1>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                          $heading = $news_data[1]->vTitle;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_news/news_detail/'.$name) ?>'>
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
      </div>
    </div>
    <?php } ?>
    <?php  if($news_data[2]->vTitle === ''){?>
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12">
      <div class="news_div">
        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[2]->dRDate; ?></small></p>
        <h1 class="sub_heading"><?php echo $news_data[2]->vTitle; ?></h1>
        <p data-aos="fade-up">
          <?php 
            if(strlen($news_data[2]->tContent) > 50){
              echo substr($news_data[2]->tContent,0,50) . " ...";
            }
            else{
              echo $news_data[2]->tContent;
            } 
          ?>
        </p>
        <!-- arrow link -->
        <a class='animated-arrow' href='<?php 
                                                          $heading = $news_data[2]->vTitle;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_news/news_detail/'.$name) ?>'>
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
    <?php } ?>
    <?php  if($news_data[3]->vTitle === ''){?>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">  
        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <img src="<?php echo base_url().'/front_img/'.$news_data[3]->fThumbnail;?>" class="d-block w-100" alt="...">
          </div>

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[3]->dRDate; ?></small></p>
            <h1 class="sub_heading"><?php echo $news_data[3]->vTitle; ?></h1>
            <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                          $heading = $news_data[3]->vTitle;
                                                          $name = str_replace(' ', '_', $heading);
                                                          echo base_url('alumni_news/news_detail/'.$name) ?>'>
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

      </div>
    </div>
    <?php } ?>
    <!-- ============================== -->
    <div class="clearfix"></div>
    <!-- ============================== -->
    <?php  if($news_data[4]->vTitle === ''){?>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">
        
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <img src="<?php echo base_url().'/front_img/'.$news_data[4]->fThumbnail;?>" class="d-block w-100" alt="...">
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[4]->dRDate; ?></small></p>
              <h1 class="sub_heading"><?php echo $news_data[4]->vTitle; ?></h1>
                <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                                                $heading = $news_data[4]->vTitle;
                                                                $name = str_replace(' ', '_', $heading);
                                                                echo base_url('alumni_news/news_detail/'.$name) ?>'>
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

      </div>
    </div>
    <?php } ?>
    <?php  if($news_data[5]->vTitle === ''){?>
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12">
      <div class="news_div">
        <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[5]->dRDate; ?></small></p>
        <h1 class="sub_heading"><?php echo $news_data[5]->vTitle; ?></h1>
        <p data-aos="fade-up">
          <?php 
              if(strlen($news_data[5]->tContent) > 80){
                echo substr($news_data[5]->tContent,0,80) . " ...";
              }
              else{
                  echo $news_data[5]->tContent;
              }
          ?>
        </p>
        <!-- arrow link -->
            <a class='animated-arrow' href='<?php 
                                                                $heading = $news_data[5]->vTitle;
                                                                $name = str_replace(' ', '_', $heading);
                                                                echo base_url('alumni_news/news_detail/'.$name) ?>'>
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
    <?php } ?>
    <?php  if($news_data[6]->vTitle === ''){?>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
      <div class="news_div">
        
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <img src="<?php echo base_url().'/front_img/'.$news_data[6]->fThumbnail;?>" class="d-block w-100" alt="...">
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <p style="margin-top: 0px; margin-bottom: 0px; color: #2c4f93;"><small><?php echo $news_data[6]->dRDate; ?></small></p>
              <h1 class="sub_heading"><?php echo $news_data[6]->vTitle; ?></h1>
                <!-- arrow link -->
                <a class='animated-arrow' href='<?php 
                                                                $heading = $news_data[6]->vTitle;
                                                                $name = str_replace(' ', '_', $heading);
                                                                echo base_url('alumni_news/news_detail/'.$name) ?>'>
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

      </div>
    </div>
    <?php } ?>
  </div>
</div>
<!-- sub news section -->
<?php } ?>
<div class="w-100 d-none d-md-block"></div>
<br>


<!-- shortcut links -->
<div class="container-fluid">

<div class="row">

<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">
<div class="short_link_div short_link_div_full_height" style="background-image: url(<?php echo base_url().'/front_img/'.$links[0]->fImage;?>);">
  <h1 class="heading"><?php echo $links[0]->vTitle; ?> </h1>
  <p data-aos="fade-up">
  <?php echo $links[0]->vCaption; ?>
  </p>
  <!-- arrow link -->
    <a class='animated-arrow' href='<?php echo base_url(); ?>student-life'>
    <span class='the-arrow -left'>
      <span class='shaft'></span>
    </span>
    <span class='main'>
      <span class='text'>
        Ecplore More
      </span>
      <span class='the-arrow -right'>
        <span class='shaft'></span>
      </span>
    </span>
  </a>
  <!-- arrow link -->
</div>
</div>

<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">
<div class="short_link_div short_link_div_middle_height mb-2" style="background-image: url(<?php echo base_url().'/front_img/'.$links[1]->fImage;?>) !important; background-position:center top;"></div>

 <div class="short_link_div short_link_div_middle_height" style="background-color: #c4df9b;">
  <h1 class="heading"><?php echo $links[1]->vTitle; ?></h1>
  <p data-aos="fade-up">
  <?php echo $links[1]->vCaption; ?>
  </p>
  <!-- arrow link -->
    <a class='animated-arrow' href='<?php echo base_url(); ?>research-stories'>
    <span class='the-arrow -left'>
      <span class='shaft'></span>
    </span>
    <span class='main'>
      <span class='text'>
        Ecplore More
      </span>
      <span class='the-arrow -right'>
        <span class='shaft'></span>
      </span>
    </span>
  </a>
  <!-- arrow link -->
</div>
</div>

<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-1">

 <div class="short_link_div short_link_div_middle_height" style="background-color: #d5b79f;">
  <h1 class="heading"><?php echo $links[2]->vTitle; ?></h1>
  <p data-aos="fade-up">
  <?php echo $links[2]->vCaption; ?>
  </p>
  <!-- arrow link -->
    <a class='animated-arrow' href='<?php echo base_url(); ?>international-overview'>
    <span class='the-arrow -left'>
      <span class='shaft'></span>
    </span>
    <span class='main'>
      <span class='text'>
        Ecplore More
      </span>
      <span class='the-arrow -right'>
        <span class='shaft'></span>
      </span>
    </span>
  </a>
  <!-- arrow link -->
</div>

 <div class="short_link_div short_link_div_middle_height mt-2" style="background-image: url(<?php echo base_url().'/front_img/'.$links[2]->fImage;?>) !important; background-position:center top;"></div>

</div>


</div>

</div>
<!-- shortcut links -->


<div class="w-100 d-none d-md-block"></div>
<br>
<br>