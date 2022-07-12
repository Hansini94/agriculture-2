<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Dean's Office</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dean-office') ?>">Faculty Information</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><b>Dean's Office</b></li>
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
        
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h1 class="sub_heading"><?php echo $dean_office_data[0]->vTitle; ?></h1>
            <!-- <p>
             The office of the Dean is responsible for the following:
            </p>
            <ul class="custome_ul">
              <li>The general administration of the Faculty</li>
              <li>Student registration and student services</li>
              <li>Examination</li>
              <li>Financial administration</li>
            </ul> -->
            <?php echo $dean_office_data[0]->tResponsibilities; ?>
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h1 class="sub_heading">Contact Address</h1>
            <p>
              <?php echo $dean_office_data[0]->vAddLine1.','.$dean_office_data[0]->vAddLine2; ?><br><?php echo $dean_office_data[0]->vAddLine3.' '.$dean_office_data[0]->vPostalCode; ?>
            </p>
          </div>

        </div>

       </div>

      <br>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row ms-auto">
        
            <h1 class="sub_heading mb-3">Names and Contact Details of Officers of the Dean’s Office are as follows:</h1>
               <!-- table-->
                <div class="table-responsive">
                    <?php echo $dean_office_data[0]->tContactDetails; ?>
                  <!-- <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Officer</th>
                        <th scope="col">Phone Contact</th>
                        <th scope="col">Email Contact</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for($i=0; $i<count($dean_designation_data); $i++) { 
                                if($dean_designation_data[$i]->iDesignation == 1) {
                                    $designation = "Dean";
                                } else if($dean_designation_data[$i]->iDesignation == 2) {
                                    $designation = "Assistant Registrar";
                                } else if($dean_designation_data[$i]->iDesignation == 3) {
                                    $designation = "Assistant Bursar";
                                } else if($dean_designation_data[$i]->iDesignation == 4) {
                                    $designation = "Senior Staff Assistant";
                                } else if($dean_designation_data[$i]->iDesignation == 5) {
                                    $designation = "Staff Assistant";
                                } else if($dean_designation_data[$i]->iDesignation == 6) {
                                    $designation = "CAA";
                                } else {
                                    $designation = "AV Technical Officer";
                                }

                                $officerlist = get_dean_officers($dean_designation_data[$i]->iDesignation);

                                for($c=0; $c<count($officerlist); $c++) {

                        ?>
                        <tr>
                            <th scope="row">
                                <figcaption class="blockquote-footer">
                                <?php echo $designation; ?>
                                </figcaption>
                                <p><?php echo $officerlist[$c]->vTitle.' '.$officerlist[$c]->vName; ?></p>
                            </th>
                            <td>
                            <p><a href="tel: 0812395010">0812395010 (O)</a></p>
                            <p><a href="tel: 0714933591">0714933591 (M)</a></p>
                            </td>
                            <td>
                            <p><a href="mailto: deanagri@pdn.ac.lk">deanagri@pdn.ac.lk</a></p>
                            <p><a href="mailto: ngpkumara63@gmail.com">ngpkumara63@gmail.com</a></p>
                            </td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                  </table> -->
                </div>
               <!-- table -->

             </div>

      </div>

    </div>

</div>

  <!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>