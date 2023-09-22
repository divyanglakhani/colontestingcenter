<?php /* Template Name: about-screening */ ?>

<?php 
  get_header();
?>

<?php
$about_first = get_field('about_first_section');
?>
<div class="first-section-about">
  <div class="container">
    <div class="main-first-about">
      <div class="left-first-about">
        <h1><?php echo $about_first['about_first_section_title']; ?></h1>
        <p><strong><?php echo $about_first['about_first_section_sub_title']; ?>
          </strong></p>
      </div>
      <div class="right-first-about">
        <?php echo $about_first['about_first_section_video']; ?>
      </div>
    </div>
    <?php
$about_second = get_field('about_second_section');
?>
    <div class="second-section-about">
      <div class="component-content">
        <p>
          <?php echo $about_second['about_second_section_title']; ?> </p>
        <div class="second-about-a">
          <a href="#why-screening-matters" ga-tag="external"
            class="ex-style-jump-link"><?php echo $about_second['about_second_section_first_button']; ?></a>
          <a href="#who-should-get-screened" ga-tag="external"
            class="ex-style-jump-link"><?php echo $about_second ['about_second_section_second_button']; ?></a>
          <a href="#ways-to-get-screened" ga-tag="external"
            class="ex-style-jump-link"><?php echo $about_second['about_second_section_third_button']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$about_third = get_field('about_third_section');
?>
<a name="why-screening-matters"></a>
<div class="third-section-about">
  <div class="component-content">
    <h2><?php echo $about_third['about_third_section_heading']; ?></h2>
  </div>
</div>
<div class="fourth-section-about">
  <div class="container">
    <div class="main-fourth-about">
      <div class="col-lg-6">

        <div class="left-fourth-about">
          <div class="component-content">
            <h4><strong><?php echo $about_third['about_third_section_title']; ?></strong></h4>
            <?php echo $about_third['about_third_section_sub_title']; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">

        <div class="right-fourth-about">
          <p>
            <?php echo $about_third['about_third_section_video']; ?></p>
        </div>

      </div>
    </div>

  </div>
</div>

<?php
$about_fourth = get_field('about_fourth_section');
?>
<div class="fifth-section-about">
  <div class="container">
    <div class="component-content">
      <h3><strong> <?php echo $about_fourth['about_fourth_section_title']; ?>
        </strong></h3>
      <div class="first-fifth-about d-flex">
        <img src="<?php echo $about_fourth['about_fourth_section_first_image']; ?>" alt="">
        <?php echo $about_fourth['about_fourth_section_first_title']; ?>
      </div>
      <div class="second-fifth-about d-flex">
        <img src="<?php echo $about_fourth['about_fourth_section_second_image']; ?>" alt="">
        <?php echo $about_fourth['about_fourth_section_second_title']; ?>
      </div>
      <div class="third-fifth-about d-flex">
        <img src="<?php echo $about_fourth['about_fourth_section_third_image']; ?>" alt="">
        <?php echo $about_fourth['about_fourth_section_third_title']; ?>

      </div>
    </div>
  </div>
</div>

<?php
$about_fifth = get_field('about_fifth_section');
?>
<a name="who-should-get-screened"></a>
<div class="third-section-about">
  <div class="component-content">
    <h2><?php echo $about_fifth['about_fifth_section_heading']; ?></h2>
  </div>
</div>
<div class="sixth-section-about">
  <div class="container">
    <div class="left-sixth-about">
      <img src="<?php echo $about_fifth['about_fifth_section_image']; ?>" alt="">
    </div>
    <div class="right-sixth-about">
      <div class="component-content">
        <?php echo $about_fifth['about_fifth_section_title']; ?><?php echo $about_fifth['about_fifth_section_sub_title']; ?>
      </div>
    </div>
  </div>
</div>
<?php
$about_sixth = get_field('about_sixth_section');
?>
<div class="seventh-section-about">
  <div class="component-content">
    <h3><strong><?php echo $about_sixth['about_sixth_section_heading']; ?></strong></h3>
  </div>
  <div class="container">
    <div class="main-seventh-about">
      <div class="left-seventh-about">
        <img src="<?php echo $about_sixth['about_sixth_section_image']; ?>" alt="">
      </div>
      <div class="right-seventh-about">
        <div class="component-content">
          <?php echo $about_sixth['about_sixth_section_text']; ?></div>
      </div>
    </div>
  </div>
</div>

<?php
$about_seventh = get_field('about_seventh_section');
?>
<div class="eight-section-about">
  <div class="container">
    <h3><strong><?php echo $about_seventh['about_seventh_section_heading']; ?> </strong></h3>
    <p> <?php echo $about_seventh['about_seventh_section_sub_heading']; ?> </p>

    <?php
    $true = 1;
    $false = 1;
    $true_message = 1;
    $false_message = 1;
    while ( have_rows( 'about_seventh_section' ) ) : the_row();
                  if( have_rows('about_seventh_sub_section') ):
                  while ( have_rows('about_seventh_sub_section') ) : the_row();                
                  $message = get_sub_field('about_seventh_sub_section'); 
                  ?>
    <div class="first-tf">
      <div class="row">
        <div class="col-lg-9">
          <h2 id="first-default-message"><?php echo get_sub_field('about_seventh_section_default_message'); ?>
            <div id="true<?php echo $true_message++; ?>-message" class="ex-style-quiz-results" style="display: none;">
              <?php echo get_sub_field('about_seventh_section_true_message'); ?></div>
            <div id="false<?php echo $false_message++; ?>-message" class="ex-style-quiz-results" style="display: none;">
              <?php echo get_sub_field('about_seventh_section_false_message'); ?>
            </div>
        </div>
        <div class="col-lg-3">
          <a id="true<?php echo $true++; ?>"
            class="true-btn"><?php echo get_sub_field('about_seventh_section_true'); ?></a>
          <a id="false<?php echo $false++; ?>"
            class="false-btn"><?php echo get_sub_field('about_seventh_section_false'); ?></a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php endwhile; ?>
  </div>
</div>

<?php
$about_eighth = get_field('about_eighth_section');
?>
<a name="ways-to-get-screened"></a>
<div class="third-section-about">
  <div class="component-content">
    <h2> <?php echo $about_eighth['about_eighth_section_title']; ?></h2>

    <?php echo $about_eighth['about_eighth_section_sub_title']; ?>

  </div>
</div>
<div class="ninth-section-about">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 left-ninth-about">
        <img src="<?php echo $about_eighth['about_eighth_section_image1']; ?>" alt="">
        <div class="desc"> <?php echo $about_eighth['about_eighth_section_text1']; ?></div>
      </div>
      <div class="col-lg-4 center-ninth-about">
        <img src="<?php echo $about_eighth['about_eighth_section_image2']; ?>" alt="">
        <div class="desc"> <?php echo $about_eighth['about_eighth_section_text2']; ?></div>
      </div>
      <div class="col-lg-4 right-ninth-about">
        <img src="<?php echo $about_eighth['about_eighth_section_image3']; ?>" alt="">
        <div class="desc"> <?php echo $about_eighth['about_eighth_section_text3']; ?></div>
      </div>
    </div>

    <?php if( have_rows('about_ninth_section') ): ?>
    <div class="row first-sub-about">
      <?php while( have_rows('about_ninth_section') ): the_row();
     $image = get_sub_field('home_second_section_image'); ?>
      <h4><?php the_sub_field('about_ninth_section_heading'); ?>
      </h4>
      <div class="col-lg-4">
        <div class="vertical"><?php the_sub_field('about_ninth_section_text1'); ?>
        </div>
      </div>
      <div class="col-lg-4 center-ninth-about">
        <div class="vertical"><?php the_sub_field('about_ninth_section_text2'); ?></div>
      </div>
      <div class="col-lg-4">
        <div class="vertical"><?php the_sub_field('about_ninth_section_text3'); ?></div>
      </div>
      <?php endwhile; ?>

    </div>
    <?php endif; ?>
  </div>
</div>

<?php
$about_tenth = get_field('about_tenth_section');
?>
<div class="tenth-section-about">
  <div class="container">
    <div class="component-content">
      <h3><?php echo $about_tenth['about_tenth_section_heading']; ?></h3>
      <?php echo $about_tenth['about_tenth_section_text']; ?>
    </div>
    <div class="field-promolink"><a href="<?php echo $about_tenth['about_tenth_section_button_url']; ?>" data-variantitemid="{36C97DEB-3589-4969-9F95-2E78AD49944B}"
        data-variantfieldname="PromoLink"
        class="ex-button"><?php echo $about_tenth['about_tenth_section_button']; ?></a></div>
  </div>
</div>
<?php
$about_eleventh = get_field('about_eleventh_section');
?>
<div class="eleventh-section-about">
  <div class="container">
    <div class="component-content">
      <h3> <?php echo $about_eleventh['about_eleventh_section_heading']; ?></h3>
      <?php echo $about_eleventh['about_eleventh_section_title']; ?>
    </div>
    <div class="row main-eleventh-about">
      <div class="col-lg-6">
        <div class="sub-main-eleventh">
          <img src="<?php echo $about_eleventh['about_eleventh_section_left_image']; ?>" alt="">
          <div class="component-content"><?php echo $about_eleventh['about_eleventh_section_left_text']; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="sub-main-eleventh">
          <img src="<?php echo $about_eleventh['about_eleventh_section_right_image']; ?>" alt="">
          <div class="component-content"><?php echo $about_eleventh['about_eleventh_section_right_text']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$about_twelth = get_field('about_twelth_section');
?>
<div class="twelve-section-about">
  <div class="container">
    <div class="row main-twelve-about">
      <div class="col-lg-6">
        <h3><?php echo $about_twelth['about_twelth_section_heading']; ?></h3>
        <p class="fontsize-18"><?php echo $about_twelth['about_twelth_section_text']; ?></p>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $about_twelth['about_twelth_section_image']; ?>" alt="">
      </div>
    </div>
  </div>
</div>
<?php
$about_second = get_field('about_second_section');
?>
<div class="second-section-about">
  <div class="container">
    <div class="component-content">
      <p>
        <?php echo $about_second['about_second_section_title']; ?> </p>
      <div class="second-about-a">
        <a href="#why-screening-matters" ga-tag="external"
          class="ex-style-jump-link"><?php echo $about_second['about_second_section_first_button']; ?></a>
        <a href="#who-should-get-screened" ga-tag="external"
          class="ex-style-jump-link"><?php echo $about_second ['about_second_section_second_button']; ?></a>
        <a href="#ways-to-get-screened" ga-tag="external"
          class="ex-style-jump-link"><?php echo $about_second['about_second_section_third_button']; ?>
        </a>
      </div>
    </div>
  </div>
</div>
<?php
$about_thirteen = get_field('about_thirteen_section');
?>
<div class="thirteen-section-about">
  <div class="container">
    <div class="component-content">
    <?php echo $about_thirteen['about_thirteen_section_heading']; ?>
    <?php echo $about_thirteen['about_thirteen_section_text']; ?>
 
    </div>
  </div>
</div>

<?php
get_footer();
?>