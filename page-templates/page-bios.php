<?php
/*
Template Name: Bios Page
*/
get_header(); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>

          <?php

              // check if the repeater field has rows of data
              if( have_rows('bio') ):

                // loop through the rows of data
                  while ( have_rows('bio') ) : the_row();
              ?>
              <div class="row barber-bio">
                

                    <div class="small-12 medium-4 large-4 columns">
                      <img class="bio-image" src="<?php the_sub_field('picture'); ?>" alt="">
                    </div>
                    <div class="small-12 medium-8 large-8 columns">

                      <h3><?php the_sub_field('barber_name'); ?></h3>
                      <?php the_sub_field('bio_text'); ?>
                    </div>
              </div>
              <hr class="double-line">
              <hr class="single-line" />
              <?php    endwhile;

              endif;

              ?>
      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
  </article>
<?php endwhile; ?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
