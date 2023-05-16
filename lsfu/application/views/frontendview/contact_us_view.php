<header>
      <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php $pageBanner = get_innerpage_banner($this->uri->segment(1)); if($pageBanner !== false){ foreach($pageBanner as $banner){if($this->uri->segment(1) == $banner->vPageRoute){echo base_url().'front_img/'.$banner->fImage;}}}else{echo base_url().'/assets/frontend/images/slider01.jpg';}  ?>) center top repeat;">
          
          <div class="container inner_page_top_heading">
            <div class="row ms-auto">
              <h1 class="heading" data-aos="fade-up">Contact Us</h1>
              <nav aria-label="breadcrumb" data-aos="fade-down">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("/"); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Contact Us</b></li>
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
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-2">
                       <div class="shadow p-3 bg-body rounded">
                        <p class="mb-1"><b>Address</b></p>
                        <p class="mb-0"><?php echo $contactus->vAddress1; ?>,</p>
                        <p class="mb-0"><?php echo $contactus->vAddress2; ?>,</p>
                        <p class="mb-0"><?php echo $contactus->vAddress3; ?></p>
                       </div>
                      </div>
        
                      <!-- === -->
        
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-2">
                       <div class="shadow p-3 bg-body rounded">
                        <p class="mb-1"><b>Telephone</b></p>
                        <p class="mb-0">
                          <a href="tel:<?php echo $contactus->vTele; ?>" style="color: #735f4d;"><?php echo $contactus->vTele; ?></a><br>
                          <?php 
                            if($contactus->vTele2 != 0){
                          ?>
                          <a href="tel:<?php echo $contactus->vTele2; ?>" style="color: #735f4d;"><?php echo $contactus->vTele2; ?></a>
                          <?php 
                            }
                          ?>
                        </p>
                       </div>
                      </div>
        
                      <!-- === -->
        
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-2">
                       <div class="shadow p-3 bg-body rounded">
                        <p class="mb-1"><b>Email</b></p>
                        <p class="mb-0"><a href="mailto:<?php echo $contactus->vEmail; ?>" style="color: #735f4d;"><?php echo $contactus->vEmail; ?></a></p>
                       </div>
                      </div>
                </div>
      
                <div class="row">   
                
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <iframe src="<?php echo $contactus->tMapLink; ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <br>
                    </div>

                    <div class="clearfix"></div><br>
                    
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="shadow p-3 bg-body rounded">
                        <?php
                            $showinput = 1;
                            if (validation_errors() != "") {
                                $showinput = 0;
                                ?>
                                <div class="alert alert-block alert-info">
                                    <a class="close" data-dismiss="alert" href="#">×</a>
                                    <h6 class="alert-heading" style="text-align: center;"><?php echo validation_errors(); ?></h6>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($this->session->flashdata('message_error') != "") {
                                $showinput = 0;
                                ?>
                                <div class="alert alert-block alert-danger">
                                    <a class="close" data-dismiss="alert" href="#">×</a>
                                    <h6 class="alert-heading" style="text-align: center;"><?php echo $this->session->flashdata('message_error'); ?></h6>
                                </div>
                            <?php
                                }
                                ?>
                                <?php
                                if ($this->session->flashdata('message_saved') != "") {
                                    $showinput = 0;
                                    ?>
                                    <div class="alert alert-block alert-success">
                                        <a class="close" data-dismiss="alert" href="#">×</a>
                                        <h6 class="alert-heading" style="text-align: center;"><b><?php echo $this->session->flashdata('message_saved'); ?></b></h6>
                                    </div>
                                    <?php
                                } ?>
                                <?php
                                if ($this->session->flashdata('message_warning') != "") {
                                    $showinput = 0;
                                    ?>
                                    <div class="alert alert-block alert-warning">
                                        <a class="close" data-dismiss="alert" href="#">×</a>
                                        <h6 class="alert-heading" style="text-align: center;"><?php echo $this->session->flashdata('message_warning'); ?></h6>
                                    </div>
                                    <?php
                                }
                            ?>
                        <form id="inquiry_form" name="inquiry_form" action="<?php echo base_url('contactus/save_content'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate>

            <div class="row">
              
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                  <input type="text" class="form-control" id="vFirstName" name="vFirstName" placeholder="First Name" onclick="changeClass(this.id);" required>
                  <label for="vFirstName" id="FirstName">First Name</label>
                </div>
                <!--<div id="FName_div" style="display:none; color:#F00; margin-top: -3px"> Please enter first name</div> -->
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                  <input type="text" class="form-control" id="vLastName" name="vLastName" placeholder="Last Name" required>
                  <label for="vLastName" id="LastName">Last Name</label>
                </div>
                <!--<div id="LName_div" style="display:none; color:#F00; margin-top: -3px"> Please enter last name</div> -->
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                  <input type="email" class="form-control" id="vEmail" name="vEmail" onkeyup="validate_email()" placeholder="name@example.com" required>
                  <label for="vEmail" id="Email">Email address</label>
                </div>
                <!--<div id="email_div" style="display:none; color:#F00;margin-top: -3px"> Please enter valid email address</div>-->
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                  <input type="text" class="form-control" id="vTelephone" name="vTelephone" placeholder="0XXXXXXXXX" required>
                  <label for="vTelephone" id="Telephone">Telephone</label>
                </div>
                <!--<div id="phone_div" style="display:none; color:#F00;margin-top: -3px"> Please enter a phone number</div> -->
              </div>

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-floating" data-aos="fade-up">
                  <textarea class="form-control" placeholder="Leave a comment here" id="tMessage" name="tMessage" style="height: 150px;" required></textarea>
                  <label for="tMessage" id="Message">Comments</label>
                </div>
                <!--<div id="message_div" style="display:none; color:#F00;margin-bottom: 10px"> Please enter a message</div> -->
              </div>
              
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="">
                    <div id="recaptcha" class="g-recaptcha en" data-sitekey="6LfvHsYlAAAAAALQsXCzd2U2dTNfwgF6kUy7NQJS" style="transform:scale(0.77);transform-origin:0;-webkit-transform:scale(0.97);transform:scale(0.97);-webkit-transform-origin:0 0;transform-origin:0 0;width: 304px;height: 68px;margin-top: 1%;"></div> 
                </div>
                <br>
                <div class="form-floating mb-3">
                    <div style="color:#F00; display:none" id="div_cpterror">* Please Complete Captcha </div>
  			    </div>
              </div>

              <input type="hidden" class="form-control" id="cEnable" name="cEnable" value="Y" required>
              <input type="hidden" class="form-control" id="iOrder" name="iOrder" value="<?php if(isset($id->iOrder)){$i = $id->iOrder; $x = $i +1; echo $x;} else{echo 1;} ?>" required>

            </div>

            <div class="clearfix"></div>
            <br>

            <button type="button" class="btn btn-primary brown_btn" onClick="checkempty();"><b>SUMBIT NOW</b></button>

          </form>
                        </div>
                    </div>
                </div>

            </div>
 
        </div>  

    </div>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">

    function validate_email(){
           var email = $("#vEmail").val();
           var testEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
            if (testEmail.test(email)){
                $("#email_div").css('display', 'none');
               }
            else{
                $("#email_div").css('display', 'block');
                
            }
    }
       
    function  checkempty() {
    var Fname = $("#vFirstName").val();
    var Lname = $("#vLastName").val();
    var Email = $("#vEmail").val();
    var phone = $("#vTelephone").val();
    var tMessage = $("#tMessage").val();
    
    var error;
    var alphaExpNum = /^[0-9]+$/;
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    var letters = /^[A-Za-z]+$/;

    var googleResponse = document.getElementById('g-recaptcha-response').value;
    if (googleResponse == '')
    {
        error = true;
        document.getElementById('div_cpterror').style.display = "block";
        console.log(error);
    }
    else
    {
        document.getElementById('div_cpterror').style.display = "none";
    }
    
    if(Fname =='' || !Fname.match(letters)) {
        document.getElementById('vFirstName').className = "form-control_error";
        $('#FName_div').show();
        $('#FirstName').hide();
		error = true;
    }
    else
    { 
        document.getElementById('vFirstName').className = "form-control";
    }
    
    if(Lname =='' || !Lname.match(letters)) {
        document.getElementById('vLastName').className = "form-control_error";
        $('#LName_div').show();
        $('#LastName').hide();
		error = true;
          
    }
    else
    { 
        document.getElementById('vLastName').className = "form-control";
    }
    
    if(phone =='' ||phone.length < 10 ||phone.length > 10 || !phone.match(alphaExpNum)) {
        document.getElementById('vTelephone').className = "form-control_error";
        $('#FName_div').show();
        $('#Telephone').hide();
		error = true;
          
    }
    else
    { 
        document.getElementById('vTelephone').className = "form-control";
    }
    
    if(Email =='' || !(Email.match(emailExp))) {
        document.getElementById('vEmail').className = "form-control_error";
        $('#FName_div').show();
        $('#Email').hide();
		error = true;
          
    }
    else
    { 
        document.getElementById('vEmail').className = "form-control";
    }
    
    
    if(tMessage =='') {
        document.getElementById('tMessage').className = "form-control_error";
        $('#FName_div').show();
        $('#Message').hide();
		error = true;
          
    }
    else
    { 
        document.getElementById('tMessage').className = "form-control";
    }
    
    
    if (error == true) {
        return false;
    } else {
        document.forms["inquiry_form"].submit();
    }
 }
</script>
<script>

function changeClass(id){
	document.getElementById(id).className = "form-control";
  if(id == "vFirstName") 
  {
    $('#fnameerror').hide();
  } 
  else if(id == "vLastName") 
  {
    $('#lnameerror').hide();
  } 
  else if(id == "vEmail") 
  {
    $('#emailerror').hide();
  } 
  else if(id == "vTelephone") 
  {
    $('#telnumerror').hide();
  } 
  else 
  {
    $('#commenterror').hide();
  }
	}
</script>
