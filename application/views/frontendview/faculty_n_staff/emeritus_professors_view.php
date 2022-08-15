<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Emeritus Professors</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Faculty and Staff</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Emeritus Professors</b></li>
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

           <div class="row">
           <?php foreach($emeritus as $list){ ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="<?php echo base_url().'/front_img/'.$list->fImage;?>" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading"> <?php echo $list->vName; ?></p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                ( <?php echo $list->vYear; ?>)
              </figcaption>
            </div>
          </div>
          <?php 
                } ?>  
          <!-- =========== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme02.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor H.M.W. Herath</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (1999)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme03.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

             <blockquote class="blockquote">
                <p class="sub_heading">Prof. T. Yogaratnam</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2000)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ================ -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme04.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Prof. M.W. Thenabadu</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2003)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme05.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor H.P.M. Gunasena</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2003)
              </figcaption>
            </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme06.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor A.S.B. Rajaguru</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2005)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme07.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

             <blockquote class="blockquote">
                <p class="sub_heading">Professor U. Samarajeewa</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
               (2012)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ================ -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme08.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor A.L.T. Perera</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2013)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme09.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor C. Bogahawatta</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2013)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme10.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor C. Sivayoganathan</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2014)
              </figcaption>
            </div>
          </div> -->

          <!-- =========== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme11.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor R.O. Thattil</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
               (2014)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme12.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

             <blockquote class="blockquote">
                <p class="sub_heading">Professor K.G.A. Goonesekera</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2015)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ================ -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme13.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor R.B. Mapa</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2015)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme14.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor A.N. Jayakody</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2015)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme15.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

             <blockquote class="blockquote">
                <p class="sub_heading">Professor A.N.F. Perera</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2016)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ================ -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme16.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor H.W. Cyril</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2017)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme17.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Professor E.R.K. Perera</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2017)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme18.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Prof. B.C.N. Peiris</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2017)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme19.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

             <blockquote class="blockquote">
                <p class="sub_heading">Prof. S.E. Peiris</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2017)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ================ -->

          <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dean_div">
            <img src="images/eme20.jpg" alt="" class="d-block w-100 rounded-circle" data-aos="fade-down">
            <div class="gray_text_div dean_des_div">

              <blockquote class="blockquote">
                <p class="sub_heading">Prof. S. Premaratne</p>
              </blockquote>
              <figcaption class="blockquote-footer" style="margin-bottom: 0px;">
                (2018)
              </figcaption>
              
            </div>
          </div> -->

          <!-- ============== -->


               <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="gray_text_div">

                    <img src="images/pdf.png" alt="" class="d-block float-start">

                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                      <p class="sub_heading">list of Emeritus Professorst</p>
                    </blockquote>
                    <!-- arrow link -->
                      <a class='animated-arrow' href=''>
                      <span class='the-arrow -left'>
                        <span class='shaft'></span>
                      </span>
                      <span class='main'>
                        <span class='text'>
                         Click here to Download
                        </span>
                        <span class='the-arrow -right'>
                          <span class='shaft'></span>
                        </span>
                      </span>
                    </a>
                    <!-- arrow link -->
                  </div>
                </div>

                <!-- =========== -->

              </div>


        </div>

        </div>

      </div>

    </div>

  </div>

  <!-- mission section -->



     <div class="clearfix"></div>
     <br>
