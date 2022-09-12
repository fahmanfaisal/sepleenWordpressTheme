<?php 

    /*
        Template Name: Contact Page
    */

    get_header(); ?><!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
    <div class="container">
    <div class="row section-title white-section">
        <div class="col-md-6 text-right">
            <h3><span>who we are?</span> contact us</h3>
        </div>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row text-center">
                <div class="col-md-4">
                <div class="contact-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>address <span>123, michighan, usa</span></h4>
                </div>
                </div>
                <div class="col-md-4">
                <div class="contact-address">
                    <i class="fa fa-phone"></i>
                    <h4>phone <span>11223344</span></h4>
                </div>
                </div>
                <div class="col-md-4">
                <div class="contact-address">
                    <i class="fa fa-envelope"></i>
                    <h4>email <span>info@demo.com</span></h4>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                <div class="contact-form">
                    <form action="#">
                        <div class="row">
                            <input type="text" placeholder="name"/>
                            <input type="text" placeholder="email"/>
                            <input type="text" placeholder="subject"/>
                            <textarea placeholder="message"></textarea>
                            <input type="submit" value="send message"/>
                        </div>
                    </form>
                </div>
                </div>
                <div class="col-md-5">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785846.583418618!2d-90.75907970166762!3d44.9208869696666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4caa3dc7ca0411%3A0x97dd48597a62c9b3!2sMichigan%2C+USA!5e0!3m2!1sen!2sbd!4v1540614431885"></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Contact Us Area End -->
<!-- Brand Area End -->
<div class="band pt-50 pb-50">
    <div class="container">
    <div class="row">
        <div class="brand-list owl-carousel">
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand1.png" alt="" /></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand2.png" alt="" /></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand3.png" alt="" /></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand4.png" alt="" /></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand5.png" alt="" /></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/brand6.png" alt="" /></a>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Brand Area End -->

<?php get_footer(); ?>