<style>

    body.nav-md .container.body .right_col{
        height: 100vh !important;
        background-image:url('http://173.231.230.98/~tgcss/kelani_cables_css/images/product_bg.jpg') !important;
        background-repeat:no-repeat !important;
        background-size:cover !important;
        background-position:center left !important;
    }
    
    .x_panel{
        background-color: #998675;
        background-image:url('http://173.231.230.98/~tgcss/kelani_cables_css/images/shape_bg.png') !important;
        background-repeat:no-repeat !important;
        background-size:cover !important;
        background-position:center center !important;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    .dash_bg{

        background-position: center center;

        background-repeat: no-repeat;

        background-size: cover;

        display: flex;

        flex-direction: column;

        justify-content: center;

        text-align: center;

        /*background-image: url('<?php echo base_url('assets/images/dashboardBG.png'); ?>');*/

        height: 200px;

    }

</style>

<?php

//echo date('Y-m-d', strtotime('last Sunday', strtotime('2016-07-06')));





$hour = date('H', time());

$gritting = "";

if ($hour > 4 && $hour <= 11) {

    $gritting = "Good Morning";

} else if ($hour > 11 && $hour <= 16) {

    $gritting = "Good Afternoon";

} else if ($hour > 16 && $hour <= 23) {

    $gritting = "Good Evening";

} else {

    

}

?>





<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3 style="color: #ffffff;">

                    Dashboard

                </h3>

            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                    <div class="x_content" >

                        <div class="dash_bg">

                            <div style="color: #ffffff;">

                                <h1><?php echo $gritting . ", " . $this->session->userdata('vUserNamebackendsession'); ?></h1>

                            </div>

                           

                        </div>

                    </div>

                </div>

            </div>





            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-6 col-sm-6 col-xs-12">                  

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <?php /*?><div class="x_panel">

                            <div class="x_content">

                                <div class="form-group">

                                    <h4>Get your site ready for search engines</h4>

                                    <div class="buttons">

                                        <a href="<?php echo base_url('adminpanel/meta/meta_tags/view'); ?>"><button type="button" class="btn btn-default btn-sm">Edit your online store information</button></a>

                                        <br>

                                    </div>

                                </div>

                            </div>

                        </div><?php */?>

                    </div>

                </div>

            

            </div>



        </div>

    </div>

</div>



