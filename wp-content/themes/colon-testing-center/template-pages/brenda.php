<?php /* Template Name: brenda */ ?>

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
$brenda_first = get_field('brenda_first_section');
?>
<div class="first-section-brenda">
  <div class="container">
    <div class="sub-first-section">
      <div class="component link ex-text-left ex-icon-chevron-left">
        <div class="component-content">
          <div class="field-link"><a href="patient-stories.html"
              data-variantitemid="{ABE2F6A0-A737-4929-9812-D60ADAF55069}" data-variantfieldname="Link"> <i
                class="fa fa-angle-left" aria-hidden="true"></i>
              View all stories</a></div>
        </div>
      </div>
      <div class="sub-section-brenda">
        <div class="component-content">
          <p class="ex-font-weight-bolder"><?php echo $brenda_first['brenda_first_section_text1']; ?></p>
          <?php echo $brenda_first['brenda_first_section_heading']; ?>
        </div>
        <?php echo $brenda_first['brenda_first_section_text2']; ?>
        <div class="component-content brenda-1">
        <?php echo $brenda_first['brenda_first_section_heading2']; ?><br>
        </div>
        <?php echo $brenda_first['brenda_first_section_text3']; ?>
      </div>
      <div class="second-section-brenda">
        <div class="row">
          <div class="col-lg-3">
            <img src="<?php echo $brenda_first['brenda_first_section_image']; ?>" alt="">
          </div>
          <div class="col-lg-9">
            <div class="text-brenda">
            <?php echo $brenda_first['brenda_first_section_image_text']; ?>
            </div>
          </div>
        </div>

      </div>
      <?php
$brenda_second = get_field('brenda_second_section');
?>
      <div class="third-section-brenda">
        <div class="component-content">
          <p><?php echo $brenda_second['brenda_second_section_text1']; ?>
          </p>
          <br>
        </div>
        <div class="component-content">
        <?php echo $brenda_second['brenda_second_section_text2']; ?> <br>
        </div>
      </div>

    </div>
    <?php
$brenda_third = get_field('brenda_third_section');
?>
    <div class="fourth-section-brenda">

      <div class="component-content">
      <?php echo $brenda_third['brenda_third_section_text1']; ?><br>
      <?php echo $brenda_third['brenda_third_section_text2']; ?>
      </div>

    </div>

  </div>
</div>


<?php
$page_bottom = get_field('page_bottom_section');
?>
<!-- -------fourth section--- -->
<div class="fourth-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 left-fourth-section">
        <h4 class="field-promotext"><?php echo $page_bottom['page_bottom_section_left_text']; ?>
        </h4>
        <div class="info-btn-1">
          <a href="share-your-colon-cancer-screening-story.html" class="btn-type-3">
            <?php echo $page_bottom['page_bottom_section_left_button']; ?> </a>
        </div>
      </div>
      <div class="col-lg-6 left-fourth-section">
        <h4 class="field-promotext"><?php echo $page_bottom['page_bottom_section_right_text']; ?>
        </h4>
        <div class="info-btn-1">
          <a href="start-screening-at-age-45.html" class="btn-type-3">
            <?php echo $page_bottom['page_bottom_section_right_button']; ?> </a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>