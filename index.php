<?php get_header(); ?>

   <!-- Latest News Area Start -->
   <section class="blog-area pb-100 pt-100" id="blog">
      <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
               <h3><span>who we are?</span> latest news</h3>
         </div>
         <div class="col-md-6">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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

<?php get_footer(); ?>