<?php /* Template Name: sign-up-for-information */ ?>

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
$signup_first = get_field('signup_first_section');
?>
<div class="secondsection">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 left-signup">
        <div class="component-content-risk">
          <?php echo $signup_first['signup_first_section_heading']; ?>
          <div style="color: #5A5A5A;">
            <?php echo $signup_first['signup_first_section_text']; ?>
          </div>
        </div>
      </div>

      <div class="col-lg-6 right-signup">
        <?php echo $signup_first['signup_first_section_right_heading']; ?>
        <div class="container">
          <div class="accordion accordion-flush" id="accordionExample">

            <?php
$signup_first = get_field('signup_first_right_section_yes');
?>
            <!-- Accordion -->
            <!-- Accordion item 1 -->
            <div class="card">
              <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                <h2 class="mb-0">
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne"
                    class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">Yes</button>
                </h2>
              </div>
              <div id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample"
                class="collapse show">
                <div class="card-body">
                  <div id="flex" style="color:#343434 !important;">
                    <?php echo $signup_first['signup_first_right_section_yes_heading']; ?> 
                    <?php echo $signup_first['signup_first_right_section_yes_text']; ?>
                    <div>&nbsp;</div>
                    <div id="crm-login" style="display:inline-block;"><a class="ex-button-style-blue" href="/info1">Log
                        In <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div id="crm-create" style="display:inline-block;"><a class="ex-button-style-transparent"
                        href="#">Create
                        Account <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End -->
            </div>
            <?php
$signup_first = get_field('signup_first_right_section_no');
?>
            <!-- Accordion item 2 -->
            <div class="card">
              <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                <h2 class="mb-0">
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo"
                    class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">No</button>
                </h2>
              </div>
              <div id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" class="collapse">
                <div class="card-body">
                  <div class="field-content">
                    <div style="color: #343434 !important;">
                    <?php echo $signup_first['signup_first_right_section_no_heading']; ?>
                    <?php echo $signup_first['signup_first_right_section_no_text']; ?>
                      <div>&nbsp;</div>
                      <div><a class="ex-button-style-blue" href="screening/form">Sign Up
                          Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End -->
            <?php
$signup_first = get_field('signup_first_right_section_unsure');
?>
            <!-- Accordion item 3 -->
            <div class="card">
              <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                <h2 class="mb-0">
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree"
                    class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">Unsure</button>
                </h2>
              </div>
              <div id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample"
                class="collapse">
                <div class="card-body">
                  <div class="field-content">
                    <div style="color: #343434 !important;">
                    <?php echo $signup_first['signup_first_right_section_unsure_heading']; ?>
                    <?php echo $signup_first['signup_first_right_section_unsure_text']; ?>
                      <div>&nbsp;</div>
                      <div><span class="ex-button-style-blue open-chat">Live Chat <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End -->
          </div>
        </div><!-- End -->
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>