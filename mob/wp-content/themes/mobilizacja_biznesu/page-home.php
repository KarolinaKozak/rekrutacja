<?php
// Template Name: Strona główna

get_header(); ?>
<main>
  <div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="hero-content">
            <?php if( get_field('main_section') ): the_field('main_section'); endif; ?>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <?php $image = get_field('main_section_image'); ?>
	        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
      </div>
    </div>
  </div>
  <div class="second-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <?php $image = get_field('second_section_image'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <div class="col-12 col-md-6">
          <div class="second-section-content">
            <?php if( get_field('second_section') ): the_field('second_section'); endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="third-section">
    <div class="container">
      <div class="row">
      <?php
      if( have_rows('sekcja_trzecia') ):
        while ( have_rows('sekcja_trzecia') ) : the_row(); ?>
          <div class="col-12 col-md-4">
            <div class="third-section-tile">
              <div class="third-section-title">            
                <?php $title = get_sub_field('title'); 
                  echo $title;
                ?> 
              </div>
              <div class="third-section-content">
                <?php
                $text = get_sub_field('content');
                echo $text;
                ?>
              </div>
            </div>
          </div>
        <?php endwhile;
      endif;
      ?>
      </div>
      <hr class="hr">
        <div class="third-section-button-container">
          <?php 
            $link = get_field('third_section_button');
            if( $link ): ?>
                <a class="button" href="<?php echo esc_url( $link ); ?>"><?php echo $GLOBALS['cgv']['see'] ?></a>
            <?php endif; 
          ?>
        </div>
    </div>
  </div>
  <div class="fourth-section">
    <div class="container">
      <h2><?php if( get_field('fourth-section-title') ): the_field('fourth-section-title'); endif; ?></h2>
      <div class="row">
      <?php
        if( have_rows('fourth-section-tiles') ):
          while ( have_rows('fourth-section-tiles') ) : the_row(); ?>
            <div class="col-12 col-md-3">
              <div class="fourth-section-tile">
                <div class="fourth-section-img">            
                  <?php
                  $image = get_sub_field('img');
                  echo wp_get_attachment_image( $image['ID'], 'full' ); 
                  ?>
                </div>
                <div class="fourth-section-content">
                  <?php
                  $title = get_sub_field('title');
                  echo $title;
                  ?>
                </div>
              </div>
            </div>
          <?php endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
  <div class="blog-section">
    <div class="container">
      <div class="blog-section-top">
        <h2><?php if( get_field('blog_section_title') ): the_field('blog_section_title'); endif; ?></h2>
        <?php if( get_field('blog_section_url') ): the_field('blog_section_url'); endif; ?>
      </div>
      <div class="row">
      <?php
        $publications = new WP_Query([
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
          'cat' => '4'
        ]);
        if ($publications->have_posts()) : ?>
          <?php
          while ($publications->have_posts()) : $publications->the_post();?>
            <div class="col-12 col-xl-4 col-md-6">
              <?php get_template_part('template-parts/content', get_post_type()); ?>
            </div>
          <?php endwhile;
        endif;
        wp_reset_postdata();
      ?>
      </div>
    </div>
  </div>
</main>





<?php get_footer(); ?>


