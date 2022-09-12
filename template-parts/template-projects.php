<?php 

    /*
        Template Name: Project Page
    */

    get_header(); ?>
<!-- About Promo Area End -->
<section class="about-promo">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="video-btn">
                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-popup"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <div class="col-md-6 pl-50 pr-50">
            <div class="page-title">
                <h4>Client Satifactions is <br /> First Prioirty</h4>
            </div>
            <p>We are dedicated to helping our clients reach their ultimate goals and full potential, to personalising their event experiences, to providing an creative atmosphere, and to making a difference. </p>
            <div class="row">
                <div class="col-md-6">
                <div class="single-about-promo">
                    <i class="fa fa-wrench"></i>
                    <h4>Fast Support Team</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="single-about-promo">
                    <i class="fa fa-pencil"></i>
                    <h4>25 Years Of Service</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="single-about-promo">
                    <i class="fa fa-calendar-plus-o"></i>
                    <h4>Cost Effective Service</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="single-about-promo">
                    <i class="fa fa-user"></i>
                    <h4>Best Customer Care</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- About Promo Area End -->
<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
    <div class="container">
    <div class="row section-title">
        <div class="col-md-6 text-right">
            <h3><span>who we are?</span> latest projects</h3>
        </div>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="portfolio-menu mb-40 text-center">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".cat1" class="">Business </button>
                <button data-filter=".cat2" class="">Finance</button>
                <button data-filter=".cat3">Marketing</button>
                <button data-filter=".cat4">Idea</button>
            </div>
        </div>
    </div>
    <div class="row grid no-gutters">
        <div class="col-md-4 grid-item cat3 cat2">
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/01.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cat2 cat1 cat3">
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/02.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/02.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cat2 cat4 cat3" >
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/03.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/03.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cat2 cat5 cat1">
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/04.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/04.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cat1 cat4 cat5">
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/05.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/05.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cat1 cat4 cat3">
            <div class="single-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/06.jpg" alt="">
                <div class="portfolio-hover">
                <div class="portfolio-content">
                    <h3><a href="assets/img/projects/06.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- projectss Area End -->


<?php get_footer(); ?>