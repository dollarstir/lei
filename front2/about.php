<?php
involve('functions.php');

begin2('About'); 

?>
<body>

<?php topnav2(); ?>
    <!-- navbar end -->
    
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('front2/assets/img/banner/breadcrumb.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title mb-0">
                            <h2 class="page-title">ABOUT US</h2>
                            <ul class="page-list">
                                <li><a href="home">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->  

    <!-- about area start -->
    <div class="about-area pd-top-120 pd-bottom-240">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb-wrap">
                            <img class="img-1" src="front2/assets/img/about/shape.png" alt="img">
                            <img class="img-2" src="front2/assets/img/about/1.png" alt="img">
                            <img class="img-3" src="front2/assets/img/about/2.png" alt="img">
                            <div class="exprience-wrap">
                                <img src="front2/assets/img/about/shape-3.png" alt="img">
                                <div class="details">
                                    <h1>4</h1>
                                    <p>YEARS EXPERIENCE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-inner-wrap">  
                            <div class="section-title mb-0">
                                <h4 class="subtitle">ABOUT US</h4>
                                <h2 class="title">WELCOME WORLD WIDE BEST
                                        TRANSPORT COMPANY</h2>
                                <p class="content left-line"><?= app1('appabout') ?></p>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="list-inner-wrap mb-lg-0 mb-4">
                                            <li><img src="front2/assets/img/icon/check.png" alt="img"> Unlimited Revisions</li>
                                            <li><img src="front2/assets/img/icon/check.png" alt="img">Best Fitness Excercise</li>
                                            <li><img src="front2/assets/img/icon/check.png" alt="img">Combine Fitness and</li>
                                            <li><img src="front2/assets/img/icon/check.png" alt="img">Best Solutions</li>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 align-self-center">
                                        <div class="thumb"><img src="front2/assets/img/about/3.png" alt="img"></div>
                                    </div>
                                </div>
                                <div class="btn-wrap">
                                    <a class="btn btn-base" href="about">ABOUT MORE</a>
                                    <!-- <div class="author-wrap">
                                        <div class="thumb"><img src="front2/assets/img/about/4.png" alt="img"></div>
                                        <div class="details">
                                            <img src="front2/assets/img/about/signature.png" alt="img">
                                            <p>CEO, Of Company</p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



    <!--skill-area start-->
    <div class="skill-area pd-top-120 pd-bottom-120" style="background: #f9f9f9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="thumb">
                                <img class="w-100" src="https://www.wowtheme7.com/tf/transpro/assets/img/about/5.png" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thumb img-2">
                                <img class="w-100" src="https://www.wowtheme7.com/tf/transpro/assets/img/about/6.png" alt="img">
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="section-title mt-lg-0 mt-5">
                        <h4 class="subtitle style-2">OUR SKILLS</h4>
                        <h2 class="title">WHY CHOOSE FOR US?</h2>
                        <p>Globally foster client-centered convergence through accurate deliverables. Synergistically actualize transparent.</p>
                    </div>
                    <div class="skill-progress-area">
                        <div class="single-progressbar">
                            <div class="title" style="width: 85%;">
                                <h6>Cargo Freight
                                </h6>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="85">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                            <div class="progress-item" id="progress-running">
                                <div class="progress-bg">
                                    <div id="progress" class="progress-rate" data-value="85">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <div class="title" style="width: 80%;">
                                <h6>Air Freight
                                </h6>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="80">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                            <div class="progress-item" id="progress-running-1">
                                <div class="progress-bg">
                                    <div id="progress-1" class="progress-rate" data-value="80">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <div class="title" style="width: 90%;">
                                <h6>Road Freight
                                </h6>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="90">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                            <div class="progress-item" id="progress-running-2">
                                <div class="progress-bg">
                                    <div id="progress-2" class="progress-rate" data-value="90">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <div class="title" style="width: 75%;">
                                <h6>Train Freight
                                </h6>
                                <div class="progress-count-wrap">
                                    <span class="progress-count counting" data-count="75">0</span>
                                    <span class="counting-icons">%</span>
                                </div>
                            </div>
                            <div class="progress-item mb-0" id="progress-running-3">
                                <div class="progress-bg">
                                    <div id="progress-3" class="progress-rate" data-value="75">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--skill-area end-->

    <!--video-area start-->
    <div class="video-area pd-top-120 pd-bottom-120" style="background: #080C24;">
        <div class="video-thumb-wrap">
            <img src="front2/assets/img/video/1.png" alt="img">
            <a class="video-play-btn" href="" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-inner-wrap" style="background: url(assets/img/video/bg.png);">
                        <div class="section-title style-white mb-0">
                            <h4 class="subtitle style-2">LET’S TALK</h4>
                            <h2 class="title">YOU NEED ANY HELP?
                                GET FREE CONSULTATION</h2>
                        </div>
                        <div class="single-cta-wrap">
                            <div class="icon">
                                <svg class="svg-inline--fa fa-phone-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg><!-- <i class="fa fa-phone-alt"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="details">
                                <h6>Have Any Question</h6>
                                <h3><?= app1('appcontact')?></h3>
                            </div>
                        </div>
                        <a class="btn btn-white" href="contact.html">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--video-area end-->

    

  

   

    <?php foot2(); ?>