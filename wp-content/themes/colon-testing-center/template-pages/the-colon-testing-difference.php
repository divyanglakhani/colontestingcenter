<?php /* Template Name: the-colon-testing-difference */ ?>

<?php 
  get_header();
?>
<?php
$page_title = get_field('page_title');
?>
<section>
  <div class="slide">
    <img class="img-fluid banner" src="<?php echo $page_title['page_image']; ?>" alt="1-banner">
    <div class="slider-content">
      <h2>
        <?php echo $page_title['page_heading']; ?></h2>
    </div>
</section>
<?php
$difference_second = get_field('difference_second_section');
?>
<!-- ---second-section--- -->
<div class="second-section-difference">
  <div class="container">
    <div class="col-lg-6 col-md-6">
      <div class="component-content">
        <?php echo $difference_second['difference_second_section_left_heading']; ?>
        <h4><?php echo $difference_second['difference_second_section_left_sub_heading']; ?>
        </h4>
      </div>
      <div class="dna">
        <img src="<?php echo $difference_second['difference_second_section_left_image1']; ?>" alt="">
        <?php echo $difference_second['difference_second_section_left_text1']; ?>
      </div>
      <div class="search">
        <img src="<?php echo $difference_second['difference_second_section_left_image2']; ?>" alt="">
        <?php echo $difference_second['difference_second_section_left_text2']; ?>
      </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="component-content">
        <?php echo $difference_second['difference_second_section_right_heading']; ?>
      </div>
      <?php echo $difference_second['difference_second_section_right_video']; ?>
    </div>
  </div>
</div>
<?php
$difference_third = get_field('difference_third_section');
?>
<div class="third-section-difference">
  <?php echo $difference_third['difference_third_section_heading']; ?>
  <?php echo $difference_third['difference_third_section_sub_heading']; ?>
  <?php echo $difference_third['difference_third_section_title']; ?>

  <div class="difference">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 colon-testing-left">
        <header>
          <?php echo $difference_third['difference_third_section_left_text']; ?>
        </header>
        <?php while ( have_rows( 'difference_third_section' ) ) : the_row();
                  if( have_rows('difference_third_sub_section') ):
                  while ( have_rows('difference_third_sub_section') ) : the_row();                
                  $message = get_sub_field('difference_third_sub_section'); 
                  ?>
        <div class="differences">
          <p><span class="ex-text-primary"><?php echo get_sub_field('difference_third_sub_section_left1'); ?></span></p>
          <?php echo get_sub_field('difference_third_sub_section_left2'); ?>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 fit-right">
        <header>
          <?php echo $difference_third['difference_third_section_right_text']; ?>
        </header>

        <?php while ( have_rows( 'difference_third_section' ) ) : the_row();
                  if( have_rows('difference_third_sub_section') ):
                  while ( have_rows('difference_third_sub_section') ) : the_row();                
                  $messase = get_sub_field('difference_third_sub_section'); 
                  ?>
        <div class="differences">
          <p><span class="ex-text-primary"><?php echo get_sub_field('difference_third_sub_section_right1'); ?></span>
          </p>
          <?php echo get_sub_field('difference_third_sub_section_right2'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php
$difference_fourth = get_field('difference_fourth_section');
?>
<div class="fourth-section-difference">
  <div class="container">
    <?php echo $difference_fourth['difference_fourth_section_text1']; ?>

    <?php echo $difference_fourth['difference_fourth_section_text2']; ?>
    <?php echo $difference_fourth['difference_fourth_section_text3']; ?>
  </div>
</div>

<div class="fifth-section-difference">
  <div class="component-content">
    <h6 style="text-align: center;"><span
        class="ex-text-dark"><?php echo $difference_fourth['difference_fourth_section_heading']; ?>
      </span></h6>
    <?php echo $difference_fourth['difference_fourth_section_sub_heading']; ?>
    <?php echo $difference_fourth['difference_fourth_section_title']; ?>
    <?php echo $difference_fourth['difference_fourth_section_video']; ?>

  </div>
</div>

<div class="sixth-section-difference">
  <div class="container">
    <?php if( have_rows('difference_fifth_section') ): ?>
    <?php while( have_rows('difference_fifth_section') ): the_row();
     $image = get_sub_field('difference_fifth_section_image'); ?>
    <div class="col-lg-4">
      <img src=" <?php the_sub_field('difference_fifth_section_image'); ?>" alt="">
      <div class="three-part">
        <?php the_sub_field('difference_fifth_section_heading'); ?>
        <?php the_sub_field('difference_fifth_section_text'); ?> </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php
$difference_sixth = get_field('difference_sixth_section');
?>
<div class="seventh-section-difference">
  <div class="container">
    <div class="col-lg-6">
      <div class="component-content">
        <?php echo $difference_sixth['difference_sixth_section_heading']; ?>
        <?php echo $difference_sixth['difference_sixth_section_text']; ?>
        <div class="info-btn-1">
          <a href="<?php echo $difference_sixth['age_seventh_section_url']; ?>" class="btn-type-3">
            <?php echo $difference_sixth['difference_sixth_section_button']; ?>
          </a>
        </div>
      </div>

    </div>
    <div class="col-lg-6">
      <img src="<?php echo $difference_sixth['difference_sixth_section_image']; ?>
" alt="">
      <?php echo $difference_sixth['difference_sixth_section_image_text']; ?>
    </div>

  </div>
</div>
<div class="eigthth-section-difference">

  <div class="container">
    <div class="component-content">
      <?php echo $difference_sixth['age_seventh_section_heading']; ?>
    </div>
    <div class="accordion-body-faq">
      <div class="accordion-faq">
        <?php if( have_rows('age_seventh_section') ): ?>
        <?php while( have_rows('age_seventh_section') ): the_row();
     $message = get_sub_field('age_seventh_section'); ?>
        <div class="container accordion-difference">
          <?php the_sub_field('age_seventh_section_heading'); ?>
          <div class="content">
            <?php the_sub_field('age_seventh_section_text1'); ?>
            <?php the_sub_field('age_seventh_section_text2'); ?>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php
$difference_eigthth = get_field('difference_eigthth_section');
?>
    <div class="component-content">
      <?php echo $difference_eigthth['difference_eigthth_section_button']; ?>
    </div>
  </div>
</div>

<div class="ninth-section-difference">
  <div class="container">
    <div class="component-content">
      <?php echo $difference_eigthth['difference_eigthth_section_heading']; ?>
      <?php echo $difference_eigthth['difference_eigthth_section_text']; ?>

    </div>
  </div>
</div>
<?php
$difference_ninth = get_field('difference_ninth_section');
?>
<div class="tenth-section-difference">
  <div class="container">
    <img src="<?php echo $difference_ninth['difference_ninth_section_image']; ?>" alt="">
    <div class="right-tenth">
      <div class="promo-text">
        <?php echo $difference_ninth['difference_ninth_section_heading']; ?>
        <?php echo $difference_ninth['difference_ninth_section_text']; ?>
        <div class="info-btn-1">
          <a href="<?php echo $difference_ninth['difference_ninth_section_button_url']; ?>" class="btn-type-3">
            <?php echo $difference_ninth['difference_ninth_section_button']; ?> </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>