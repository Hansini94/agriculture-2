<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">B.Sc. Agricultural Technology and Management</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('faculty-statistic-undergraduate'); ?>">Faculty Statistics</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Undergraduate</b></li>
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
        
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>BSc Agtech & Mgt</p></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Bsc ASF</p></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-fst" type="button" role="tab" aria-controls="pills-fst" aria-selected="false"><p>Bsc FST</p></button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               <h1 class="heading mb-1">Undergraduaters Students - B.Sc. Agricultural Technology and Management Degree</h1>
               <?php echo $undergraduate_data[0]->tContent; ?>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
               <h1 class="heading mb-1">Undergraduaters Students - B.Sc. Animal Science and Fisheries Degree</h1>
               <h1 class="sub_heading mb-3">Current Students</h1>
               <!-- table-->
               <?php echo $undergraduate_data[1]->tContent; ?>
               <!-- table -->
            </div>

             <div class="tab-pane fade" id="pills-fst" role="tabpanel" aria-labelledby="pills-fst-tab">
               <h1 class="heading mb-1">UNDERGRADUATER STUDENTS - B.Sc. Food Science and Technology Degree</h1>
               <h1 class="sub_heading mb-3">Current Students</h1>
               <!-- table-->
               <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">New Admissions</th>
                        <td>2018/19</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">1st Year</th>
                        <td>2017/18</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">2nd Year</th>
                        <td>2016/17</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">3rd Year</th>
                        <td>2015/16</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">4th (Final) Year</th>
                        <td>2014/15</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">Total</th>
                        <td></td>
                        <td>256</td>
                        <td>418</td>
                        <td>674</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
               <!-- table -->
               <br>
               <h1 class="sub_heading mb-3">B Sc. Food Science and Technology Degrees Conferred</h1>
               <!-- table-->
               <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">New Admissions</th>
                        <td>2018/19</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">1st Year</th>
                        <td>2017/18</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">2nd Year</th>
                        <td>2016/17</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">3rd Year</th>
                        <td>2015/16</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">4th (Final) Year</th>
                        <td>2014/15</td>
                        <td>7</td>
                        <td>2</td>
                        <td>9</td>
                      </tr>
                      <tr>
                        <th scope="row">Total</th>
                        <td></td>
                        <td>256</td>
                        <td>418</td>
                        <td>674</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
               <!-- table -->
            </div>
          </div>

        </div>

       </div>

    </div>

  </div>

  <!-- mission section -->

  <div class="w-100 d-none d-md-block"></div>
    <br>