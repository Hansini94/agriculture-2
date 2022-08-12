<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Dean’s List </h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("current_students"); ?>">Current Undergraduates</a></li>
                <li class="breadcrumb-item"><a href="#">Academic</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Dean’s List </b></li>
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
        <?php foreach($dean as $list){ ?>
           <h1 class="heading"><?php echo $list->vTitle; ?></h1>

          <!-- table-->
               <div class="table-responsive">
               <?php echo $list->tContent; ?>
                  <!-- <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Registration No</th>
                        <th scope="col">Name</th>
                        <th scope="col">GPA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">AG/15/066</th>
                        <td>LMDDM Pitawala</td>
                        <td>4.00</td>
                      </tr>
                       <tr>
                        <th scope="row">AG/15/149</th>
                        <td>JBSK Jayantha</td>
                        <td>4.00</td>
                      </tr>
                       <tr>
                        <th scope="row">AG/15/061</th>
                        <td>HH Nethma</td>
                        <td>4.00</td>
                      </tr>
                       <tr>
                        <th scope="row">AG/15/060</th>
                        <td>HAH Navodya</td>
                        <td>4.00</td>
                      </tr>
                       <tr>
                        <th scope="row">AG/15/028</th>
                        <td>HAIT Hettiarachchi</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/012</th>
                        <td>DT de Alwis</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/059</th>
                        <td>JPS Mimasha</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/071</th>
                        <td>RMPI Rajapaksha</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/081</th>
                        <td>UBE Sasanka</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/087</th>
                        <td>WASM Senanayake</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <th scope="row">AG/15/AI/903</th>
                        <td>KGNAB Wijethunga</td>
                        <td>4.00</td>
                      </tr>
                       
                    </tbody>
                  </table> -->
                </div>
               <!-- table -->

               <div class="clearfix"></div>
               <br>
               <?php 
                } ?>  
        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->



     <div class="w-100 d-none d-md-block"></div>
    <br>