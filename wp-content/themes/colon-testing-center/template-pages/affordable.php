<?php /* Template Name: affordable */ ?>

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
$affordable_first = get_field('affordable_first_section');
?>
<!-- ---second-section--- -->
<div class="second-section-45">
  <div class="container">
    <div class="row second-section-row">
      <div class="col-lg-9 left-second-section-45">
        <h2><?php echo $affordable_first['affordable_first_section_heading']; ?></h2>
        <p class="fontsize-18"><?php echo $affordable_first['affordable_first_section_text1']; ?></p><br>
        <p class="fontsize-18"><?php echo $affordable_first['affordable_first_section_text2']; ?></p><br>
        <?php
$affordable_second = get_field('affordable_second_section');
?>
        <p class="fontsize-18"><?php echo $affordable_second['affordable_second_section_heading']; ?></p><br>
        <p class="fontsize-18"><?php echo $affordable_second['affordable_second_section_text1']; ?></p><br>
        <p class="fontsize-18"><?php echo $affordable_second['affordable_second_section_text2']; ?><a
            class="moreless-button-5">Read more</a>
            <?php
$affordable_third = get_field('affordable_third_section');
?>
        <div class="component-content">
          <div class="field-content moretext-5">
            <div><?php echo $affordable_third['affordable_third_section_heading1']; ?></div>
            <?php echo $affordable_third['affordable_third_section_text1']; ?>
            <div><?php echo $affordable_third['affordable_third_section_heading2']; ?></div>
            <?php echo $affordable_third['affordable_third_section_text2']; ?>
            <div>&nbsp;</div>
            <div><?php echo $affordable_third['affordable_third_section_heading3']; ?></div>
            <?php echo $affordable_third['affordable_third_section_text3']; ?>
            <div>&nbsp;</div>
            <div><?php echo $affordable_third['affordable_third_section_heading4']; ?></div>
            <?php echo $affordable_third['affordable_third_section_text4']; ?>
            <div>&nbsp;</div>
            <div><?php echo $affordable_third['affordable_third_section_text5']; ?>
            <div>&nbsp;</div>
            <div><strong><?php echo $affordable_third['affordable_third_section_heading6']; ?></strong></div>
            <?php echo $affordable_third['affordable_third_section_text6']; ?>
          </div>
        </div>
        </p>
      </div>
      <div class="col-lg-3 question">
        <h4 class="title field-promotext-1" style="color: white;">
          <?php echo $affordable_first['affordable_first_section_right_heading']; ?></h4>
        <p style="color: white;"><?php echo $affordable_first['affordable_first_section_right_text']; ?><br>
          <img src="<?php echo $affordable_first['affordable_first_section_image']; ?>" alt=" ">
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