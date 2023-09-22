<?php /* Template Name: patient-stories */ ?>

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

<div class="second-section-patient">
  <div class="container">
    <?php
$patient_first = get_field('patient_first_section');
?>
    <div class="component-content">
      <div class="ex-patient-featured-item">
        <a href="#" class="ex-patient-featured-thumblink"><img
            src=" <?php echo $patient_first['patient_first_section_image']; ?>">
        </a>
        <div class="ex-patient-featured-text">
          <span class="ex-patient-featured-topic-name">
            <?php echo $patient_first['patient_first_section_heading']; ?>
          </span>
          <div class="ex-patient-featured-quote">
            <div> <?php echo $patient_first['patient_first_section_text']; ?></div>
          </div>
          <div class="ex-patient-featured-bottom">
            <a href="<?php echo $patient_first['patient_first_section_url']; ?>" class="ex-patient-featured-title">
              <?php echo $patient_first['patient_first_section_name']; ?>
            </a>
            <p class="ex-patient-featured-post-more"><a
                href=" <?php echo $patient_first['patient_first_section_url']; ?>">Read more <i
                  class="fa fa-angle-right" aria-hidden="true"></i>
              </a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="ex-rv-page-content-patient-spotlight-stories">
      <div class="component-content">
        <?php echo $patient_first['patient_first_section_heading1']; ?>
      </div>
      <?php
$patient_second = get_field('patient_second_section');
?>
      <div class="row">
        <div class="col-lg-8">
          <div class="second-left-patient" style="background-color: white;">
            <div class="row left-first-patient">
              <div class="col-lg-4 d-flex align-items-center">
                <div class="ex-patient-stories-text">
                  <span class="ex-patient-stories-topic-name">
                    <?php echo $patient_second['patient_second_section_heading']; ?>
                  </span>
                  <a href="<?php echo $patient_second['patient_second_section_url']; ?>"
                    class="ex-patient-stories-title">
                    <h3 class="ex-patient-stories-grid-title">
                      <?php echo $patient_second['patient_second_section_name']; ?></h3>
                  </a>
                  <div class="ex-patient-stories-intro">
                    <?php echo $patient_second['patient_second_section_text']; ?>
                  </div>
                  <a class="ex-patient-spotlight-stories-button"
                    href="<?php echo $patient_second['patient_second_section_url']; ?>">Learn
                    More
                  </a>
                </div>
              </div>
              <div class="col-lg-8">
                <img src="<?php echo $patient_second['patient_second_section_image']; ?>" alt="">
              </div>
            </div>
          </div>
          <?php
$patient_third = get_field('patient_third_section');
?>
          <div class="row">
            <div class="col-lg-4">
              <div class="share-story-column">
                <h2><?php echo $patient_third['patient_third_section_heading']; ?></h2>
                <p><img alt="smiling Colon Testing character with hands on hips"
                    src="<?php echo $patient_third['patient_third_section_image']; ?>"></p>
                <h3><?php echo $patient_third['patient_third_section_heading2']; ?></h3>
                <a href="<?php echo $patient_third['patient_third_section_button_url']; ?>"
                  class="ex-patient-spotlight-stories-button">Submit Story</a>
              </div>
            </div>
            <?php
$patient_fourth = get_field('patient_fourth_section');
?>
            <div class="col-lg-8">
              <div class="second-right-patient">
                <img src="<?php echo $patient_fourth['patient_fourth_section_image']; ?>" alt="">
                <div class="ex-patient-stories-text">
                  <span class="ex-patient-stories-topic-name">
                    <?php echo $patient_fourth['patient_fourth_section_heading']; ?>
                  </span>
                  <a href="<?php echo $patient_fourth['patient_fourth_section_url']; ?>"
                    class="ex-patient-stories-title">
                    <h3 class="ex-patient-stories-grid-title">
                      <?php echo $patient_fourth['patient_fourth_section_name']; ?></h3>
                  </a>
                  <div class="ex-patient-stories-intro">
                    <?php echo $patient_fourth['patient_fourth_section_text']; ?>
                  </div>
                  <p class="ex-patient-stories-post-more"><a
                      href="<?php echo $patient_fourth['patient_fourth_section_url']; ?>">Read More
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ex-patient-right-column" style="background-color: white;">
            <div class="ex-patient-right-side-stories">
              <?php if( have_rows('patient_fifth_section') ): ?>
              <?php while( have_rows('patient_fifth_section') ): the_row();
     $message = get_sub_field('patient_fifth_section'); ?>
              <div class="ex-patient-stories-side-item">
                <div class="ex-patient-stories-text">
                  <span class="ex-patient-stories-topic-name-1">
                    <?php the_sub_field('patient_fifth_section_heading'); ?>
                  </span>
                  <a href="brenda.html" class="ex-patient-stories-title">
                    <h3 class="ex-patient-stories-grid-title"><?php the_sub_field('patient_fifth_section_name'); ?></h3>
                  </a>
                  <div class="ex-patient-stories-intro">
                    <?php the_sub_field('patient_fifth_section_text'); ?>
                  </div>
                  <p class="ex-patient-stories-post-more"><a
                      href="  <?php the_sub_field('patient_fifth_section_button_url'); ?>">Read
                      More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="third-section-patient">
        <div class="row">
          <div class="col-lg-4">
            <div class="left-third-patient">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scott_1.jpg" alt="">
            </div>
          </div>
          <?php if( have_rows('patient_sixth_section') ): ?>
          <?php while( have_rows('patient_sixth_section') ): the_row();
       $message = get_sub_field('patient_sixth_section'); ?>
          <div class="col-lg-4">
            <div class="center-third-patient">
              <img src="<?php the_sub_field('patient_sixth_section_image'); ?>" alt="">
              <div class="ex-patient-stories-text">
                <span class="ex-patient-stories-topic-name-1">
                  <?php the_sub_field('patient_sixth_section_heading'); ?>
                </span>
                <a href="<?php the_sub_field('patient_sixth_section_button_url'); ?>" class="ex-patient-stories-title">
                  <h3 class="ex-patient-stories-grid-title">
                    <?php the_sub_field('patient_sixth_section_name'); ?>
                  </h3>
                </a>
                <div class="ex-patient-stories-intro">

                  <?php the_sub_field('patient_sixth_section_text'); ?>
                </div>
                <p class="ex-patient-stories-post-more">
                  <a href="<?php the_sub_field('patient_sixth_section_button_url'); ?>">
                    Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
  
      <div class="more-patient-story">
        <a href="brenda.html" class="ex-patient-stories-button-more">
          More Stories
        </a>
      </div>
    </div>
  </div>


  <?php
$patient_eigthth = get_field('patient_eigthth_section');
?>
  <div class="ninth-section-patient">
    <div class="container">
      <p>
        <img src="<?php echo $patient_eigthth['patient_eigthth_section_image']; ?>" alt="">
      </p>
      <div class="promo-text">
        <div>
          <h2 class="field-promotext"><?php echo $patient_eigthth['patient_eigthth_section_heading']; ?></h2>
        </div><a href="<?php echo $patient_eigthth['patient_eigthth_section_button_url']; ?>" data-variantitemid="{11F9D89A-602B-45D4-89BE-4640C3F74AF0}"
          data-variantfieldname="PromoLink">Learn More</a>
      </div>
    </div>
  </div>


  <?php
get_footer();
?>