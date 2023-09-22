<?php /* Template Name: using-and-returning-your-colon-testing-kit */ ?>

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
$kit_first = get_field('kit_first_section');
?>
<div class="second-section-kit">
  <div class="container">


    <div class="col-lg-8">
      <?php echo $kit_first['kit_first_section_video']; ?>
    </div>
    <div class="col-lg-4">
      <h1 class="title field-promotext"><?php echo $kit_first['kit_first_section_heading']; ?>
      </h1>
      <?php echo $kit_first['kit_first_section_sub_heading']; ?>
      <a rel="noopener noreferrer" href="<?php echo $kit_first['kit_first_section_url']; ?>" class="link">Schedule
        pickup<br></a>
      <div class="need">
        <?php echo $kit_first['kit_first_section_text']; ?>
      </div>
    </div>
  </div>
</div>

<div class="third-section-kit">
  <div class="container">
    <div class="component-content">
      <?php echo $kit_first['kit_second_section_heading']; ?>
    </div>
    <div class="row d-flex">
      <?php if( have_rows('kit_second_section') ): ?>
      <?php while( have_rows('kit_second_section') ): the_row();
     $image = get_sub_field('kit_second_section'); ?>
      <div class="item col-lg-2 col-md-6">
        <div class="use-kit" style="background-image: url('<?php the_sub_field('kit_second_section_image'); ?>');">
          <img class="gif-kit" src="<?php the_sub_field('kit_second_section_image2'); ?>" alt="">
        </div>
        <p class="number-one"><?php the_sub_field('kit_second_section_text1'); ?></p>
        <div class="title-kit"> <span class="ex-text-dark"><?php the_sub_field('kit_second_section_text'); ?></span>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php
$kit_third = get_field('kit_third_section');
?>
    <div class="component-content">
      <p class="ex-text-md"><?php echo $kit_third['kit_third_section_heading']; ?></p>
      <?php echo $kit_third['kit_third_section_text']; ?>
    </div>
  </div>
</div>
<div class="fourth-section-kit padding-40">
  <div class="container">
    <div class="row">
      <?php echo $kit_third['kit_third_section_heading1']; ?>
      <?php echo $kit_third['kit_third_section_text1']; ?>
      <div class="col-lg-6 right-border-2px">
        <img class="pickup-img" src="<?php echo $kit_third['kit_third_section_left_image']; ?>" alt="">
        <a href="<?php echo $kit_third['kit_third_section_left_url']; ?>"
          data-variantitemid="{6DC1141C-5E5A-43E8-BFD4-13BFACF44C95}" style="color: #00a2e8;"
          data-variantfieldname="PromoLink">Schedule UPS Pickup</a>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $kit_third['kit_third_section_right_image']; ?>" alt="">
        <a href="<?php echo $kit_third['kit_third_section_right_url']; ?>"
          data-variantitemid="{9B926717-7B32-430C-A050-4EFFCD846B25}" style="color: #00a2e8;"
          data-variantfieldname="PromoLink">Drop off at UPS</a>
      </div>
    </div>
  </div>
</div>
<?php
$kit_fourth = get_field('kit_fourth_section');
?>
<div class="sixth-section-kit padding-40">
  <div class="container">
    <div class="first-sixth">
      <img id="first-image-using" src="<?php echo $kit_fourth['kit_fourth_section_image1']; ?>" alt="">
      <?php echo $kit_fourth['kit_fourth_section_text1']; ?>
    </div>
    <div class="accordion-body-faq">
      <div class="accordion-faq ">
        <div class="container accordion-kit">
          <div class="label"><?php echo $kit_fourth['kit_fourth_section_heading2']; ?></div>
          <div class="content">
            <?php echo $kit_fourth['kit_fourth_section_sub_text2']; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="first-sixth">
      <img src="<?php echo $kit_fourth['kit_fourth_section_image3']; ?>" alt="">
      <p> <a href="<?php echo $kit_fourth['kit_fourth_section_url3']; ?>">Cancel A UPS Pickup</a>
      </p>
    </div>
  </div>
</div>
<?php
$kit_fifth = get_field('kit_fifth_section');
?>
<div class="seventh-section-kit padding-40">
  <div class="container">
    <?php echo $kit_fifth['kit_fifth_section_heading']; ?>
    <div class="accordion-body-faq">
      <div class="accordion-faq ">
        <div class="container accordion-kit">
          <div class="label"><?php echo $kit_fifth['kit_fifth_section_heading1']; ?>
          </div>
          <div class="content">
            <div class="field-content"><?php echo $kit_fifth['kit_fifth_section_text1']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-body-faq">
      <div class="accordion-faq ">
        <div class="container accordion-kit">
          <div class="label"> <?php echo $kit_fifth['kit_fifth_section_heading2']; ?>
          </div>
          <div class="content">
            <div class="field-content"><?php echo $kit_fifth['kit_fifth_section_text2']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-body-faq">
        <div class="accordion-faq ">
          <div class="container accordion-kit">
            <div class="label"><?php echo $kit_fifth['kit_fifth_section_heading3']; ?>
            </div>
            <div class="content">
              <?php echo $kit_fifth['kit_fifth_section_text3']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <i class="faq-icon fa fa-volume-control-phone"
        aria-hidden="true"><?php echo $kit_fifth['kit_fifth_section_bottom_text']; ?>
      </i>
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