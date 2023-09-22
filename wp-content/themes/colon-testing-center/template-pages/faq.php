<?php /* Template Name: faq */ ?>

<?php 
  get_header();
?>
<?php
$faq_first = get_field('faq_first_section');
?>
<div class="main-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <?php echo $faq_first['faq_first_section_heading']; ?>
      </div>
      <div class="col-lg-3">
        <img src="<?php echo $faq_first['faq_first_section_image']; ?>" alt="">
      </div>
    </div>
  </div>
</div>

<?php
$faq_second = get_field('faq_second_section');
?>
<!-- ---second-section--- -->
<div class="second-section-45">
  <div class="container">
    <div class="row second-section-row padding-40">
      <div class="faq-second-section">
        <div class="component-content-risk">
          <?php echo $faq_second['faq_second_section_heading']; ?>
        </div>
        <input type="search" name="Search" id="Search" placeholder="Search...">
      </div>
      <?php echo $faq_second['faq_second_section_sub_heading']; ?>
      <div class="accordion-body-faq">
        <div class="accordion-faq">
          <?php if( have_rows('faq_third_section_repeater') ): ?>
          <?php while( have_rows('faq_third_section_repeater') ): the_row();
     $message = get_sub_field('faq_third_section_repeater'); ?>
          <div class="container">
            <div class="label"><?php the_sub_field('faq_third_section_heading'); ?></div>
            <div class="content">
              <div class="field-content"><?php the_sub_field('faq_third_section_text1'); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php
$faq_heading = get_field('faq_heading_section');
?>
      <?php echo $faq_heading['faq_heading_section_second_heading']; ?>
      <div class="accordion-body-faq">
        <div class="accordion-faq">

          <?php if( have_rows('faq_fourth_section_repeater') ): ?>
          <?php while( have_rows('faq_fourth_section_repeater') ): the_row();
     $message = get_sub_field('faq_fourth_section_repeater'); ?>
          <div class="container">
            <div class="label"><?php the_sub_field('faq_fourth_section_repeater_heading'); ?></div>
            <div class="content">
              <div class="field-content"><?php the_sub_field('faq_fourth_section_repeater_text'); ?></div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php echo $faq_heading['faq_heading_section_third_heading']; ?>
      <div class="accordion-body-faq">
        <div class="accordion-faq">

          <?php if( have_rows('faq_fifth_section_repeater') ): ?>
          <?php while( have_rows('faq_fifth_section_repeater') ): the_row();
     $message = get_sub_field('faq_fifth_section_repeater'); ?>
          <div class="container">
            <div class="label"><?php the_sub_field('faq_fifth_section_repeater_heading'); ?></div>
            <div class="content">
              <div class="field-content"><?php the_sub_field('faq_fifth_section_repeater_text'); ?></div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php echo $faq_heading['faq_heading_section_fourth_heading']; ?>
      <div class="accordion-body-faq">
        <div class="accordion-faq accordion">
          <?php if( have_rows('faq_sixth_section_repeater') ): ?>
          <?php while( have_rows('faq_sixth_section_repeater') ): the_row();
     $message = get_sub_field('faq_sixth_section_repeater'); ?>
          <div class="container">
            <div class="label"><?php the_sub_field('faq_sixth_section_repeater_heading'); ?></div>
            <div class="content">
              <div class="field-content"><?php the_sub_field('faq_sixth_section_repeater_text'); ?></div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php
$faq_bottom = get_field('faq_bottom_section');
?>
          <a href="<?php echo $faq_bottom['faq_bottom_section_url']; ?>">See Important Risk Information</a>
        </div>
      </div>
    </div>
    <div class="row">
      <i class="faq-icon fa fa-volume-control-phone"
        aria-hidden="true"><b><?php echo $faq_bottom['faq_bottom_section_text']; ?></b></i>
    </div>
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
<?php
get_footer();
?>