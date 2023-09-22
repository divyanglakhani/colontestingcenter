<?php /* Template Name: pay-bill */ ?>

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
$bill_first = get_field('bill_first_section');
?>
<!-- ---second-section--- -->
<div class="second-section-45">
  <div class="container">
    <div class="row padding-40 second-section-row">
      <div class="component-content-risk">
      <?php echo $bill_first['bill_first_section_heading']; ?><br>
      <?php echo $bill_first['bill_first_section_sub_heading']; ?><br>

      </div>
      <div class="col-lg-6 left-billpay">
        <i class="fa fa-television" aria-hidden="true"></i>
        <div class="left-paybill">
        <?php echo $bill_first['bill_first_section_left_text']; ?><br>
          <a href="<?php echo $bill_first['bill_first_section_left_url']; ?>">Click Here</a>
        </div>

      </div>

      <div class="col-lg-6 right-billpay">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <div class="right-paybill">
        <?php echo $bill_first['bill_first_section_right_text1']; ?><br>
        <?php echo $bill_first['bill_first_section_right_text2']; ?>

        </div>
      </div>

    </div>
  </div>
</div>


<!-- -------fourth section--- -->

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