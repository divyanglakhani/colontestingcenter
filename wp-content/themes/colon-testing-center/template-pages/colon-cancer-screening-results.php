<?php /* Template Name: colon-cancer-screening-results */ ?>

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
$result_first = get_field('result_first_section');
?>
<div class="second-section-45">
  <div class="container">
    <div class="second-section-result second-section-row">
      <div class="row padding-40">
        <div class="col-lg-7">
          <?php echo $result_first['result_first_section_left_heading']; ?>
          <?php echo $result_first['result_first_section_left_text']; ?>
        </div>
        <div class="col-lg-5">
          <div class="right-result">
            <div class="right-p-result">
              <p><?php echo $result_first['result_first_section_right_heading']; ?>

                <?php echo $result_first['result_first_section_right_text']; ?>
              </p>
              <a href="#">Log in</a>

            </div>

          </div>

        </div>
      </div>

      <div class="third-section-result padding-40">
        <?php if( have_rows('result_second_section') ): ?>
        <?php while( have_rows('result_second_section') ): the_row();
     $image = get_sub_field('result_second_section'); ?>
        <div class="left-magnify d-flex">
          <img src="<?php the_sub_field('result_second_section_image'); ?>" alt="">
          <?php the_sub_field('result_second_section_text'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php
$result_third = get_field('result_third_section');
?>
        <div class="component-content-risk" style="padding-top: 20px;">
          <?php echo $result_third['result_third_section_text']; ?>
          <?php echo $result_third['result_third_section_heading']; ?>
        </div>
        </div>
      <div class="tab-container-one" style="padding-top: 20px;">
        <ul class="nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item col-lg-6 active"><a class="nav-link negative-nav active" href="#home" role="tab"
              aria-controls="home" data-bs-toggle="tab"><i class="fa fa-minus"
                aria-hidden="true"></i><?php echo $result_third['result_third_section_left_heading']; ?></a></li>
          <li class="nav-item col-lg-6"><a class="nav-link positive-nav" href="#profile" role="tab"
              aria-controls="profile" data-bs-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i><?php echo $result_third['result_third_section_right_heading']; ?></a></li>
        </ul>
        <?php
$result_fourth = get_field('result_fourth_section');
?> 
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="left-home-result">
              <div class="component-content-risk col-lg-4 content-result">
              <?php echo $result_fourth['result_fourth_section_left_heading']; ?>
              <?php echo $result_fourth['result_fourth_section_left_text']; ?>
              <?php echo $result_fourth['result_fourth_section_left_text1']; ?>
              </div>
              <div class="col-lg-8">
              <?php echo $result_fourth['result_fourth_section_left_video']; ?>
              </div>
            </div>
            <div class="component rich-text">
              <div class="box-left-result">
              <?php echo $result_fourth['result_fourth_section_left_text2']; ?></div>
            </div>

          </div>

          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="component-content-risk col-lg-4 content-result">
            <?php echo $result_fourth['result_fourth_section_right_heading']; ?>
            <?php echo $result_fourth['result_fourth_section_right_text']; ?>
            <?php echo $result_fourth['result_fourth_section_right_text2']; ?>
            </div>
            <div class="col-lg-8">
            <?php echo $result_fourth['result_fourth_section_right_video']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$result_fifth = get_field('result_fifth_section');
?> 
<div class="third-container-45">
  <div class="container">
    <br><br>
    <?php echo $result_fifth['result_fifth_section_heading']; ?><br>
    <?php echo $result_fifth['result_fifth_section_text']; ?>
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