<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php putRevSlider('front-gallery', 'homepage'); ?>
<div id="page-full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>

          <div id="services" class="text-block">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('services_section') ):

                // loop through the rows of data
                  while ( have_rows('services_section') ) : the_row();
              ?>
                    <a name="services"></a>
                    
                    <h3><?php the_sub_field('services_title'); ?></h3>
                    <?php the_sub_field('services_text'); ?>
                        
                          <table align="center">
                            <?php //SERVICES OFFERED LOOP

                            // check if the repeater field has rows of data
                            if( have_rows('services_offered') ):

                              // loop through the rows of data
                                while ( have_rows('services_offered') ) : the_row();
                            ?>
                                <tr><td><p><?php the_sub_field('service_name'); ?></p></td><td><p><?php the_sub_field('service_price'); ?></p></td></tr>
                            
                            <?php    endwhile;

                            endif;

                            // END SERVICES OFFERED LOOP

                            ?>
                          </table>

              <?php    endwhile;

              else :

              ?>
                  <a name="services"></a>

              <?php endif;

              ?>
          <div class="full-width-divider" style="background-image:url(<?php the_field('image_divider_1'); ?>);"></div>

          </div>
          <div id="about" class="text-block">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('about_section') ):

                // loop through the rows of data
                  while ( have_rows('about_section') ) : the_row();
              ?>
                    <a name="about"></a>
                    
                    <h3><?php the_sub_field('about_title'); ?></h3>
                    <?php the_sub_field('about_text'); ?>

              <?php    endwhile;

              else :

              ?>
                  <a name="about"></a>

              <?php endif;

              ?>
          <div class="full-width-divider" style="background-image:url(<?php the_field('image_divider_2'); ?>);"></div>

          </div>
          <div id="press" class="text-block">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('press_section') ):

                // loop through the rows of data
                  while ( have_rows('press_section') ) : the_row();
              ?>
                    <a name="about"></a>
                    
                    <h3><?php the_sub_field('press_title'); ?></h3>

                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('testimonial_block') ):

                      // loop through the rows data
                        while ( have_rows('testimonial_block') ) : the_row();
                    ?>

                        <?php the_sub_field('testimonial'); ?>

                        <div class="diamond"></div>

                    <?php    endwhile;

                    endif;

                    ?>


              <?php    endwhile;

              else :

              ?>
                  <a name="press"></a>

              <?php endif;

              ?>

          </div>
          <div id="contact">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('contact_section') ):

                // loop through the rows of data
                  while ( have_rows('contact_section') ) : the_row();
              ?>
                    <a name="contact"></a>
                    
                    <h3><?php the_sub_field('contact_title'); ?></h3>
                    

                    <div class="small-12 medium-6 large-6 columns">
                        <table>
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('opening_times_section') ):

                          // loop through the rows data
                            while ( have_rows('opening_times_section') ) : the_row();
                        ?>

                            <tr><td><?php the_sub_field('days_open'); ?></td><td><?php the_sub_field('hours_open'); ?></td></tr>

                        <?php    endwhile;

                        endif;

                        ?>
                        </table>
                    </div>
                    <div class="small-12 medium-6 large-6 columns">
                        <table id="contact-info">
                          <tr>
                            <td>Address</td>
                            <td><?php the_sub_field('address_text'); ?></td>
                          </tr>
                          <tr>
                            <td>Telephone</td>
                            <td><?php the_sub_field('telephone_text'); ?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php the_sub_field('email_text'); ?></td>
                          </tr>
                        </table>
                    </div>


              <?php    endwhile;
              
               endif;

              ?>
          </div>





      </div><!-- End entry content -->


      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>


<?php get_footer();
