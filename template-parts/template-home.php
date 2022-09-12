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
                    <h3><span>who we are?</span> our services</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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
            <h3><span>who we are?</span> creative team</h3>
        </div>
        <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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


<?php get_footer(); ?>