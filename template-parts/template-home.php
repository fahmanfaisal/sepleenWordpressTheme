<?php 

    /*
        Template Name: Home Page
    */

    get_header(); ?>

<!-- Slider Area Start -->
<section class="slider-area" id="home">
    <div class="slider owl-carousel">

    <?php
        $args = array(
            'post_type' => 'sliders',
            'post_per_page' => 3
        );
        $query = new WP_Query($args);
        while ($query -> have_posts() ) {
            $query -> the_post();
            //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
        ?>

        <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                    <div class="slide-table">
                        <div class="slide-tablecell">

                            <?php
                                if(get_field('slider_subtitle')){    //get_field (ACF dsiplaying the data)
                                ?>
                                    <h4><?php the_field('slider_subtitle'); ?></h4> 
                                <?php
                                }
                            ?>

                            
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>

                            <?php
                                if(get_field('slider_btn_text')){  //get_field (ACF dsiplaying the data)
                                ?>
                                    <a href="<?php the_field('slider_btn_url'); ?>" class="box-btn"><?php the_field('slider_btn_text'); ?><i class="fa fa-angle-double-right"></i></a>
                                <?php
                                }
                            ?>

                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
    wp_reset_postdata();
?>
</div>
</section>
<!-- Slider Area End -->


<!-- Services Area Starts Here -->
<section class="services-area pt-100 pb-50" id="services">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
                    <h3><span><?php echo $redux_sepleen_global['opt-service-subheading'] ?></span> <?php echo $redux_sepleen_global['opt-service-title'] ?></h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo $redux_sepleen_global['opt-service-description'] ?></p>
                </div>
                </div>
                <div class="row">
                <?php
                $args = array(
                    'post_type' => 'services',
                    'post_per_page' => 6
                );
                $query = new WP_Query($args);
                while ($query -> have_posts() ) {
                    $query -> the_post();
                    //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
                ?>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Service -->
                        <div class="single-service">
                                <i class="<?php the_field('service_icon'); ?>"></i>
                                <h4><?php the_title(); ?> </h4>
                                <p><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>  
                </div>
            </div>
        </div>
</section>
<!-- Services Area End Here -->


<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
        <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo $redux_sepleen_global['opt-about-subheading'] ?></span> <?php echo $redux_sepleen_global['opt-about-title'] ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $redux_sepleen_global['opt-about-description'] ?> </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <div class="page-title">
                    <h4>welcome to Sepleen</h4>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                    <a href="#" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="single_about">
                    <i class="fa fa-laptop"></i>
                    <h4>our mission</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                <div class="single_about">
                    <i class="fa fa-user"></i>
                    <h4>our vission</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
                <div class="single_about">
                    <i class="fa fa-pencil"></i>
                    <h4>our history</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
            </div>
        </div>
        </div>
</section>
<!-- About Us area end here:  -->


<!-- Counter Area Start -->
<section class="counter-area">
    <div class="container-fluid">
    <div class="row">
    <?php
                $args = array(
                    'post_type' => 'counters',
                    'post_per_page' => 4
                );
                $query = new WP_Query($args);
                while ($query -> have_posts() ) {
                    $query -> the_post();
                    //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
    ?>
        <div class="col-md-3">
            <div class="single-counter">
                <h4><i class="<?php the_field('counter_text'); ?>"></i><span class="counter"><?php the_field('counter_number'); ?></span><?php the_title(); ?></span></h4>
            </div>
        </div>
        <?php 
                }
                wp_reset_postdata();
        ?>
    </div>
</section>
<!-- Counter Area End -->



<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
    <div class="container">
    <div class="row section-title">
        <div class="col-md-6 text-right">
            <h3><span><?php echo $redux_sepleen_global['opt-team-subheading'] ?></span> <?php echo $redux_sepleen_global['opt-team-title'] ?></h3>
        </div>
        <div class="col-md-6">
            <p><?php echo $redux_sepleen_global['opt-team-description'] ?></p>
        </div>
    </div>
    <div class="row">
    <?php
        $args = array(
            'post_type' => 'teams',
            'post_per_page' => 3
        );
        $query = new WP_Query($args);
        while ($query -> have_posts() ) {
            $query -> the_post();
            //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
    ?>
        <div class="col-md-4">
            <div class="single-team">
                <?php the_post_thumbnail(); ?>
                <div class="team-hover">
                <div class="team-content">
                    <h4><?php the_title(); ?><span><?php the_field('team_destination'); ?></span></h4>
                    <ul>
                        <?php
                            if(get_field('team_facebook')){
                        ?>
                            <li><a href="<?php the_field('team_facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if(get_field('team_twitter')){
                        ?>
                            <li><a href="<?php the_field('team_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if(get_field('team_linkedin')){
                        ?>
                            <li><a href="<?php the_field('team_linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if(get_field('team_google')){
                        ?>
                            <li><a href="<?php the_field('team_google'); ?>"><i class="fa fa-google-plus"></i></a></li>
                        <?php
                            }
                        ?>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <?php 
                }
                wp_reset_postdata();
        ?>
    </div>
    </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
    <div class="container">
    <div class="row section-title white-section">
        <div class="col-md-6 text-right">
            <h3><span><?php echo $redux_sepleen_global['opt-testimonial-subheading'] ?></span> <?php echo $redux_sepleen_global['opt-testimonial-title'] ?></h3>
        </div>
        <div class="col-md-6">
            <p><?php echo $redux_sepleen_global['opt-testimonial-description'] ?></p>
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="testimonials owl-carousel">
                
            <?php
                $args = array(
                    'post_type' => 'testimonials',
                    'post_per_page' => 4
                );
                $query = new WP_Query($args);
                while ($query -> have_posts() ) {
                    $query -> the_post();
                    //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
            ?> 
                
                <div class="single-testimonial">
                <div class="testi-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <p><?php the_field('testimonial_description'); ?></p>
                <h4><?php the_title(); ?> <span><?php the_field('testimonial_sub_heading'); ?></span></h4>
                </div>
            <?php
                }
                wp_reset_postdata();
            ?>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- Testimonilas Area End -->

<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
    <div class="row section-title">
        <div class="col-md-6 text-right">
            <h3><span><?php echo $redux_sepleen_global['opt-blog-subheading'] ?></span> <?php echo $redux_sepleen_global['opt-blog-title'] ?></h3>
        </div>
        <div class="col-md-6">
            <p><?php echo $redux_sepleen_global['opt-blog-description'] ?></p>
        </div>
    </div>
    <div class="row">

    <?php
            $args = array(
                'post_type' => 'post',
                'post_per_page' => 3
            );
            $query = new WP_Query($args);
            while ($query -> have_posts() ) {
                $query -> the_post();
    ?>
        <div class="col-md-4">
            <div class="single-blog">
                <div class="post-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
                <div class="post-content">
                <div class="post-title">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
                <div class="pots-meta">
                    <ul>
                        <li><a href="<?php get_the_author_link(); ?>"><?php the_field('single_blog_date'); ?></a></li>
                        <li><a href="#"><?php echo get_author_name(); ?></a></li>
                    </ul>
                </div>
                <p><?php the_excerpt(); ?></p>
                <?php 
                    if(get_field('button_text')){

                    ?>
                    <a href="<?php the_permalink(); ?>" class="box-btn"><?php the_field('button_text'); ?> <i class="fa fa-angle-double-right"></i></a>
                    <?php

                    }
                ?>
                </div>
            </div>
        </div>
    <?php
            }
    ?>

    </div>
    </div>
</section>
<!-- Latest News Area End -->

<!-- Contact Us Area Start -->
<section class="contact-area pb-100 pt-100" id="contact">
    <div class="container">
    <div class="row section-title white-section">
        <div class="col-md-6 text-right">
            <h3><span><?php echo $redux_sepleen_global['contact-us-subheading'] ?></span> <?php echo $redux_sepleen_global['contact-us-title'] ?></h3>
        </div>
        <div class="col-md-6">
            <p><?php echo $redux_sepleen_global['contact-us-description'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row text-center">
                <div class="col-md-12 footer-css">
                
                <?php
                $args = array(
                    'post_type' => 'footer',
                    'post_per_page' => 3
                );
                $query = new WP_Query($args);
                while ($query -> have_posts() ) {
                    $query -> the_post();
                    //for retriving the meta data we are using the ACF free plugin for doing it dynamiclly.
                ?>
                
                
                <div class="contact-address">
                    <i class="<?php the_field('footer_icon'); ?>"></i>
                    <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                </div>


                <?php
                }
                wp_reset_postdata();
                ?>
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
        <div class="brand-list owl-carousel brand-image">
                <?php 
                
                    $brand = $redux_sepleen_global['opt-gallery'];
                    $brands = explode(',', $brand);

                    foreach($brands as $image){
                        $single_image = wp_get_attachment_image_src($image);
                        ?>
                        <img src="<?php echo $single_image[0]; ?>" alt="">
                        <?php
                    }

                ?>
        </div>
    </div>
    </div>
</div>
<!-- Brand Area End -->


<!-- Contact Us Area End -->


<?php get_footer(); ?>