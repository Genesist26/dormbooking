<!--<link rel="stylesheet" href="public/css/homepate.css">-->
<link rel="stylesheet" href="public/css/user_dashboard.css">
<link rel="stylesheet" href="public/css/bootstrap.css">
<div class="site-main">
    <!--<p align="center">user_dashboard_view.php</p>-->

    <div class="h"> <h2>Dashboard</h2></div>
    <!--<a class="btn btn-large" href="#"><i class="fa fa-wrench fa-2x "></i> Star</a>-->

    <div class="icon1">
        <i class=" fa fa-wrench fa-5x"></i>
        <a href="#"><span class="pull-left"><a href="<?= base_url('repair'); ?>">Repair</a></span>
        </a>
        </a>
    </div>
    <div class="icon2">
        <i class=" fa fa-search  fa-5x"></i>
        <a href="#"><span class="pull-left"><a href="<?= base_url('track'); ?>">Track</a></span>
        </a>
    </div>
    <div class="icon3">
        <i class=" fa fa-exclamation-circle   fa-5x"></i>
        <a href="#"><span class="pull-left"><a href="<?= base_url('information'); ?>">Information</a><br><br></span>
        </a>
    </div>


    <div class="icon4">
        <i class=" fa fa-forward fa-5x"></i>
        <a href="#"><span class="pull-left"><a href="<?= base_url('booking'); ?>">Booking/Move</a></span>
        </a>
    </div>
    <div class="icon5">
        <i class=" fa fa-envelope fa-5x"></i>
        <a href="#"><span class="pull-left"><a href="<?= base_url('contact'); ?>">Contact Us</a></span>
        </a>
    </div>
    <div class="icon6">
        <i class=" fa fa-gears fa-5x"></i>
        <a href="#"><span class="pull-left">  <a href="<?= base_url('Setting'); ?>">Setting</a></span>
        </a>
    </div>


</div>