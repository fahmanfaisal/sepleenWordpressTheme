<?php
// <!-- Services Shortcode -->

function service_shortcode( $atts ){
    ob_start();
    $query = new WP_Query(array(
        'post_type'     => 'services',
        'post_per_page' => 6
    ));

    if($query -> have_posts()){ ?>

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
                while ( $query -> have_posts() ) : $query -> the_post();
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
                endwhile;
                wp_reset_postdata();
                ?>  
                </div>
            </div>l
        </div>
</section>

        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'service-short' , 'service_shortcode');
