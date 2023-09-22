<?php /* Template Name: effective-and-easy */ ?>

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
$easy_second = get_field('easy_second_section');
?>

<div class="second-section-45">
  <div class="container">
    <div class="row padding-40 second-section-row">
      <?php echo $easy_second['easy_second_section_heading']; ?>
      <div class="col-lg-6">
        <ul>
          <li class="d-flex">
            <i class="pr fa fa-percent" aria-hidden="true"></i>
            <?php echo $easy_second['easy_second_section_left_text']; ?>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul>
          <li class="d-flex">
            <i class="pr fa fa-percent" aria-hidden="true"></i>
            <?php echo $easy_second['easy_second_section_right_text']; ?>
          </li>
        </ul>
      </div>
      <div class="component-content-1">
        <?php echo $easy_second['easy_second_section_text1']; ?>
        <br>
        <?php echo $easy_second['easy_second_section_text2']; ?>
        <br>
      </div>
      <div class="component-content-1">
        <?php echo $easy_second['easy_third_section_heading']; ?>
      </div>

      <div class="accordion-body">
        <div class="accordion">
          <?php if( have_rows('easy_third_section') ): ?>
          <?php while( have_rows('easy_third_section') ): the_row();
     $message = get_sub_field('easy_third_section'); ?>
          <div class="container">
            <?php the_sub_field('easy_third_section_heading'); ?>
            <?php the_sub_field('easy_third_section_text'); ?>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <?php
$easy_fourth = get_field('easy_fourth_section');
?>
        <a href="risk-information.html"><?php echo $easy_fourth['easy_fourth_section_button']; ?></a>
      </div>
      <div class="second-container">
        <div class="container">
          <?php echo $easy_fourth['easy_fourth_section_heading']; ?>
          <div class="row padding-40">
            <div class="col-lg-4" style="color: white;">
              <?php echo $easy_fourth['easy_fourth_section_sub_heading']; ?>
              <?php echo $easy_fourth['easy_fourth_section_text1']; ?>
              <?php echo $easy_fourth['easy_fourth_section_text2']; ?>
            </div>
            <div class="col-lg-8">
              <?php echo $easy_fourth['easy_fourth_section_video']; ?>
            </div>
          </div>
        </div>
      </div>
      <?php
$easy_fifth = get_field('easy_fifth_section');
?>
      <div class="component-content-1">
        <br>
        <?php echo $easy_fifth['easy_fifth_section_heading']; ?><br>
        <?php echo $easy_fifth['easy_fifth_section_text']; ?><br>
        <?php echo $easy_fifth['easy_fifth_section_heading2']; ?><br>
        <?php echo $easy_fifth['easy_fifth_section_text2']; ?>
        <?php echo $easy_fifth['easy_fifth_section_bottom_title']; ?>
      </div>
    </div>
  </div>
  <?php
$easy_sixth = get_field('easy_sixth_section');
?>
  <!-- --------third section--- -->
  <div class="third-container-45">

    <div class="container">
      <br><br>
      <?php echo $easy_sixth['easy_sixth_section_heading']; ?>
      <br>
      <?php echo $easy_sixth['easy_sixth_section_text']; ?>
    </div>
    <?php
$easy_seventh = get_field('easy_seventh_section');
?>
    <!-- -------fourth section--- -->
    <div class="fourth-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 left-fourth-section">
            <h4 class="field-promotext"><?php echo $easy_seventh['easy_seventh_section_left_text']; ?>

            </h4>
            <div class="info-btn-1">
              <a href="patient-stories.html" class="btn-type-3">
              <?php echo $easy_seventh['easy_seventh_section_left_button']; ?>              </a>
            </div>
          </div>
          <div class="col-lg-6 left-fourth-section">
            <h4 class="field-promotext"><?php echo $easy_seventh['easy_seventh_section_right_text']; ?>
            </h4>
            <div class="info-btn-1">
              <a href="get-colon.html" class="btn-type-3">
              <?php echo $easy_seventh['easy_seventh_section_right_button']; ?>              </a>
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