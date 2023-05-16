<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Staff</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("Staff"); ?>">Staff</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Directorate</b></li>
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
      
       <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 mb-4">

        <div class="row ms-auto">
        
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
            <img src="<?php echo base_url('front_img/').$detail->fImage; ?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
          </div>

          <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">

            <div class="gray_text_div">
              <h1 class="sub_heading mb-3"><?php echo $detail->vName; ?></h1>

                <figcaption class="blockquote-footer" style="margin-bottom: 15px;">
                <?php echo $detail->tPosition; ?>
              </figcaption>

              <!-- <figcaption class="blockquote-footer" style="margin-bottom: 10px;">
                (Head of the Department)
              </figcaption> -->

              <hr>

              <p class="mb-1"><?php echo $detail->vTelephone1; ?>  |  <?php echo $detail->vTelephone2; ?></p>

              <p><?php echo $detail->vEmail1; ?>  |  <?php echo $detail->vEmail2; ?></p>
              <div class="clearfix"></div>
              <?php if($detail->fStaffCv !== '') {?>
               <!-- Start copy--> 
               <a href="<?php echo base_url('front_img/').$detail->fStaffCv; ?>" target="_blank">
                  <button class="btn" type="button" style="color: #fff;background-color: #ad9d8e;" >View CV</button>
               </a>
               <!-- end copy--> 
               <?php } ?>
            </div>

          </div>

        </div>

       </div>

       <!-- =========== -->

       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
         
        <h1 class="heading mb-1">Academic and Professional Qualifications</h1>


          <div class="row">
            
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
              <div class="gray_text_div dean_des_div">
              <?php echo $detail->tContent1; ?>
                <!-- <h1 class="sub_heading mb-1">Prof Sarath S Kodithuwakku</h1>
                  <p class="fst-italic mb-1">
                   Thesis Title : The role of LEUNIG_HOMOLOG in regulating mucilage release from the Arabidopsis testa
                  </p>
                  <p class="fst-italic mb-1">
                    Department of Genetics,University of Melbourne, Australia
                  </p> -->
              </div>
            </div>

            <!-- =========== -->

             <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
              <div class="gray_text_div dean_des_div">
              <?php echo $detail->tContent2; ?>
                <!-- <h1 class="sub_heading mb-1">M.Sc. Biotechnology (2008)</h1>
                  <p class="fst-italic mb-1">
                   Postgraduate Institute of Agriculture, University of Peradeniya, Sri Lanka
                  </p>
                  <p class="fst-italic mb-1">
                    FGPA 4.00
                  </p> -->
              </div>
            </div>

            <!-- =========== -->

             <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
              <div class="gray_text_div dean_des_div">
              <?php echo $detail->tContent3; ?>
                <!-- <h1 class="sub_heading mb-1">B.Sc. Agriculture (2006)</h1>
                  <p class="fst-italic mb-1">
                    Faculty of Agriculture, University of Peradeniya.
                  </p>
                  <p class="fst-italic mb-1">
                   First Class Honors
                  </p>
                  <p class="fst-italic mb-1">
                    FGPA 3. 86
                  </p>
                  <p class="fst-italic mb-1">
                    Majoring module : Agricultural Biology
                  </p> -->
              </div>
            </div>

            <!-- =========== -->

          </div>

          <div class="clearfix"></div>

        <h1 class="heading">ACADEMIC DISTINCTIONS  &  AWARDS</h1>
        <?php echo $detail->tContent4; ?>

          <!-- <h1 class="sub_heading mb-3">Fellowships</h1>
          <ul class="custome_ul">
            <li>United Nations Office for South-South Cooperation (UNOSSC)  and the ICGEB, EMPOWER Fellowship 2021 (New Delhi, India).</li>
            <li>Norman E. Borlaug International Agricultural Science and Technology Fellowship Program 2020 (Michigan, USA).</li>
          </ul>

          <div class="clearfix"></div>
          <br> -->

          <!-- ================== -->

          <!-- <h1 class="sub_heading mb-3">Medals</h1>
          <ul class="custome_ul">
            <li>Golden Jubilee Gold Medal for the most out standing performance in the coreprogram of the B.Sc. Agriculture curriculum. Faculty of Agriculture, University of Peradeniya (10/12/2006).</li>
            <li>Dr. J W L Peiris Gold Medal in Agriculture Biology. Faculty of Agriculture, University of Peradeniya (10/12/2006).</li>
            <li>Gold Medal for the Best performer in the subject Principles of Agribusiness Management. Faculty of Agriculture, University of Peradeniya (10/12/2006).</li>
            <li>Gold Medal for the most outstanding performance in Agricultural Economics and Business Management. Faculty of Agriculture, University of Peradeniya (10/12/2006).</li>
          </ul>

          <div class="clearfix"></div>
          <br> -->

          <!-- ================== -->

          <!-- <h1 class="sub_heading mb-3">Awards/Prizes</h1>
          <ul class="custome_ul">
            <li>The Genetics Research Award–Department of Genetics, University of Melbourne (2012).</li>
            <li>Dr. A.W.R. Joachim Memorial Prize for obtaining the Highest GPA in the year 2008 at the Postgraduate Institute of Agriculture, Sri Lanka. (11/20/2009).</li>
            <li>The Upali Ekanayake Memorial Prize for obtaining the highest marks in allcourses offered in Entomology. Faculty of Agriculture, University of Peradeniya(02/10/2006)</li>
            <li>The E M R B Ekanayake Memorial Prize for the best overall performance atthe final Examination in Agriculture. Faculty of Agriculture, University of Peradeniya (10/12/2006).</li>
          </ul>

          <div class="clearfix"></div>
          <br> -->

          <!-- ================== -->

          <!-- <h1 class="sub_heading mb-3">Scholarships</h1>
          <ul class="custome_ul">
            <li>The International Postgraduate Research Scholarship and Australian Postgraduate Award- University of Melbourne (2011).</li>
            <li>The Kundanmal scholarship for meritorious performance at the 2000 series examination in Agriculture. (01/18/2005).</li>
            <li>The C de S W Siriwardena Scholarship for the best performance at the 3100 examination. (05/12/2005).</li>
            <li>The R R Appadurai Memorial Scholarship awarded on the performance at the examinations held during the core program in Agriculture. (02/10/2006).</li>
          </ul>

          <div class="clearfix"></div>
          <br> -->

          <!-- ================== -->

       </div>

       <!--  <div class="clearfix"></div>
        <br><br> -->

    </div>

  </div>
