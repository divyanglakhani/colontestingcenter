<?php /* Template Name: get-colon */ ?>

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
$get_first = get_field('get_first_section');
?>
<div class="second-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 left-second-section">
        <div>
        <img src="<?php echo $get_first['get_first_section_left_image']; ?>" alt="">
        </div>
        <div class="read1">
          <?php echo $get_first['get_first_section_left_heading']; ?>
          <div class="field-promotext2"><?php echo $get_first['get_first_section_left_text1']; ?>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto">
                <div id="getcolon">
                  <div class="article moretext">
                    <div class="field-content-left">
                      <?php echo $get_first['get_first_section_left_text2']; ?>
                    </div>
                  </div>
                  <a class="moreless-button">Read more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="info-btn">
          <a href="#" class="btn-type-1">
            <?php echo $get_first['get_first_section_left_button']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-6 right-second-section">
        <div>
          <img src="<?php echo $get_first['get_first_section_right_image']; ?>" alt="">
        </div>
        <div class="read2">
          <?php echo $get_first['get_first_section_right_heading']; ?>
          <?php echo $get_first['get_first_section_right_text1']; ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto">
                <div id="getcolon">
                  <div class="article moretext-2">
                    <div class="field-content-right">
                      <?php echo $get_first['get_first_section_right_text2']; ?>
                    </div>
                  </div>
                  <a class="moreless-button-2">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-btn">
          <a href="#" class="btn-type-2">
            <?php echo $get_first['get_first_section_right_button']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
$get_second = get_field('get_second_section');
?>
<div class="third-section">
  <div class="container">
    <span class="ex-text-dark">
    <?php echo $get_second['get_second_section_heading']; ?><br>
      <br>
      <?php echo $get_second['get_second_section_text1']; ?><br>
      <br>
      <?php echo $get_second['get_second_section_text2']; ?></span>
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