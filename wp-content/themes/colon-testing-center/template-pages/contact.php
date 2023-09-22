<?php /* Template Name: contact */ ?>

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
$contact_first = get_field('contact_first_section');
?>
    <!-- ---second-section--- -->
    <div class="second-section-45 second-section-contact">
        <div class="container">
            <div class="row padding-40 second-section-row">
                <div class="component-content-contactus">
                    <div class="col-lg-9">
                    <?php echo $contact_first['contact_first_section_heading']; ?><br>
                    <?php echo $contact_first['contact_first_section_sub_heading']; ?><br><br>
                    </div>
                    <div class="col-lg-3">
                        <img src="<?php echo $contact_first['contact_first_section_image']; ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-6 left-contact">
                    <img src="<?php echo $contact_first['contact_first_section_left_image']; ?>" alt="">
                    <div class="left-contactus">
                    <?php echo $contact_first['contact_first_section_left_text']; ?>
                    </div>
                </div>
                <div class="col-lg-6 right-contact">
                    <img src="<?php echo $contact_first['contact_first_section_right_image']; ?>" alt="">
                    <div class="right-contactus">
                    <?php echo $contact_first['contact_first_section_right_text']; ?>
                    </div>

                </div>
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