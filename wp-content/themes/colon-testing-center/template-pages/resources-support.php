<?php /* Template Name: resources-support */ ?>

<?php 
  get_header();
?>

<?php
$page_title = get_field('page_title');
?>
<section>
  <div class="slide">
    <img class="img-fluid banner" style="width: 100%;" src="<?php echo $page_title['page_image']; ?>" alt="1-banner">
    <div class="slider-content">
      <h2>
        <?php echo $page_title['page_heading']; ?></h2>
      <h4><?php echo $page_title['page_text']; ?></h4>
    </div>
</section>
<?php
$support_first = get_field('support_first_section');
?>
<div class="second-section-45">
  <div class="container">
    <div class="second-section-resources second-section-row">
      <div class="row">
        <div class="col-lg-7 padding-40">
          <div class="component-content-risk">
            <?php echo $support_first['support_first_section_heading']; ?>
            <?php echo $support_first['support_first_section_text1']; ?>
            <?php echo $support_first['support_first_section_text2']; ?>
          </div>
        </div>
        <div class="col-lg-5">
          <img src=" <?php echo $support_first['support_first_section_image']; ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$support_second = get_field('support_second_section');
?>
<div class="third-section-resources">
  <div class="container">
    <?php echo $support_second['support_second_section_heading']; ?>
    <div class="first-resource">
      <?php echo $support_second['support_second_sub_section_first_heading']; ?>

      <div class="sub-first">
        <div class="icon-resources">
          <img src="<?php echo $support_second['support_second_sub_section_first_image']; ?>" alt="">
        </div>
        <div class="content-resources">
          <?php echo $support_second['support_second_sub_section_first_text']; ?>
          <br> <a href="#">Log in</a>
        </div>
      </div>

    </div>
    <div class="second-resource">
      <?php echo $support_second['support_second_sub_section_second_heading']; ?>
      </h4>

      <div class="sub-first">
        <div class="icon-resources">
          <img src="<?php echo $support_second['support_second_sub_section_second_image']; ?>" alt="">
        </div>
        <div class="second-content-resources">
          <a href="#"><?php echo $support_second['support_second_sub_section_second_text']; ?></a>
        </div>
      </div>
    </div>
    <div class="third-resource">
      <?php echo $support_second['support_second_sub_section_third_heading']; ?>
      <div class="sub-first">
        <div class="icon-resources">
          <img src="<?php echo $support_second['support_second_sub_section_third_image']; ?>" alt="">
        </div>
        <div class="second-content-resources">
          <a href="#"><?php echo $support_second['support_second_sub_section_third_text']; ?></a>
        </div>
      </div>
    </div>
    <?php
$support_third = get_field('support_third_section');
?>
    <div class="sixth-resource">
      <?php echo $support_third['support_third_sub_section_first_heading']; ?>
      <div class="sub-first">
        <div class="icon-resources">
          <img src="<?php echo $support_third['support_third_sub_section_first_image']; ?>
" alt="">
        </div>
        <div class="content-resources">
          <?php echo $support_third['support_third_sub_section_first_sub_heading']; ?>

          <a href="<?php echo $support_third['support_third_sub_section_first_button']; ?>
">Play Video</a>
        </div>
      </div>
    </div>

    <?php if( have_rows('support_fourth_section') ): ?>
    <?php while( have_rows('support_fourth_section') ): the_row();
     $image = get_sub_field('support_fourth_section'); ?>
    <div class="second-resource">
      <?php the_sub_field('support_third_section_heading'); ?>
      <div class="sub-first">
        <div class="icon-resources">
          <img src="<?php the_sub_field('support_third_section_image'); ?>" alt="">
        </div>
        <div class="second-content-resources">
          <a
            href="<?php the_sub_field('support_third_section_url'); ?>"><?php the_sub_field('support_third_section_text'); ?></a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php
$page_bottom = get_field('page_bottom_section');
?>
<!-- -------Third section--- -->
<div class="fourth-section">
  <div class="container">
    <div class="row fourth-section-row">
      <div class="col-lg-6 left-fourth-section">
        <h4 class="field-promotext"><?php echo $page_bottom['page_bottom_section_left_text']; ?></h4>
        <div class="info-btn-1">
          <a href="<?php echo $page_bottom['page_bottom_section_left_button_url']; ?>" class="btn-type-3">
          <?php echo $page_bottom['page_bottom_section_left_button']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-6 left-fourth-section">
        <h4 class="field-promotext">
        <?php echo $page_bottom['page_bottom_section_right_text']; ?>
        </h4>
        <div class="info-btn-1">
          <a href="<?php echo $page_bottom['page_bottom_section_right_button_url']; ?>" class="btn-type-3">
          <?php echo $page_bottom['page_bottom_section_right_button']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<?php
get_footer();
?>