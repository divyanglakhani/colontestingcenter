<?php /* Template Name: Home */ ?>

<?php
get_header();
?>


<?php if( have_rows('slider') ): ?>
<section id="slider-section">
  <div id="home-slider" class="slidder">
    <?php while( have_rows('slider') ): the_row();
  $image = get_sub_field('slider_image'); ?>
    <div class="slide">
      <img class="img-fluid banner" src="<?php echo $image; ?>" alt="1-banner">
      <div class="slider-content">
        <h2><?php the_sub_field('title'); ?></h2>
        <p class="fontsize-18"><?php the_sub_field('sub_title'); ?></p>
        <a href="<?php the_sub_field('slider_burtton_url'); ?>"><button
            class="request-now"><?php the_sub_field('slider_button'); ?></button></a>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>


<?php if( have_rows('home_second_section') ): ?>
<section class="info-bar">
  <div class="container">
    <div class="row">
    <?php while( have_rows('home_second_section') ): the_row();
  $image = get_sub_field('home_second_section_image'); ?>
      <div class="col-md-3">
        <div class="info-box">
          <a href="<?php the_sub_field('home_second_section_url'); ?>" class=" d-flex align-items-center">
            <img src="<?php echo $image; ?>" alt="">
            <span><?php the_sub_field('home_second_section_title'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          </a>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="hero_content">
  <div class="container">
    <?php the_field('home_third_section'); ?>
  </div>
</section>
<?php
get_footer();
?>