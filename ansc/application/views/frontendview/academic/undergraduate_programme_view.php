<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?> ) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Academic</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("Undergraduate-Programme"); ?>">Academic</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Undergraduate Programme</b></li>
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
      
       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Core Program</p></button>
            </li>
            <li class="nav-item" role="presentation">
            <a href="<?php echo base_url('Advanced-Module'); ?>"><button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Advanced Modules</p></button></a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <br>
               
                <div class="row">
                  <h1 class="heading mb-1">Core Program</h1>
                  <?php if(isset($core_program->vCourseName)){?>
                  <h1 class="sub_heading mb-3"><?php echo $core_program->vCourseName; ?></h1>
               
                  <!-- table-->
                    <div class="table-responsive">
                        <?php echo $core_program->tDescription; ?>
                      <!-- <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Code</th>
                            <th scope="col">courses Name</th>
                            <th scope="col">Coordinator</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                          <tr>
                            <th scope="row">AB1101</th>
                            <td>Lorem Ipsum is simply</td>
                            <td>Lorem Ipsum is simply dummy text of the printing</td>
                          </tr>
                        </tbody>
                      </table> -->
                    </div>
                  <!-- table -->
                  <?php } 
                  else{
                    echo "No data";
                  }?>
                </div>


            </div>            
          </div>

        </div>

       </div>

    </div>

  </div>
