<?php /* Template Name: appeal */ ?>

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
$appeal_first = get_field('appeal_first_section');
?>
    <div class="second-section-appeal">
        <div class="container">
            <div class="col-lg-7">
                <div class="component-content">
                <?php echo $appeal_first['appeal_first_section_left_heading']; ?>
                <?php echo $appeal_first['appeal_first_section_left_text']; ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="component-content">
                <?php echo $appeal_first['appeal_first_section_right_heading']; ?>
                <?php echo $appeal_first['appeal_first_section_right_text']; ?>
                </div>
            </div>

        </div>

    </div>
    <?php
$appeal_second = get_field('appeal_second_section');
?>
    <div id="demo">
        <div class="container">
        <?php echo $appeal_second['appeal_second_section_heading']; ?>
            <label><input type="radio" name="example1" value="yes"><span></span><?php echo $appeal_second['appeal_second_section_left_circle_text']; ?></label>
            <label><input type="radio" name="example1" value="no"><span></span><?php echo $appeal_second['appeal_second_section_right_circle_text']; ?></label>

            <div class="conditional" data-cond-option="example1" data-cond-value="yes">
            <?php echo $appeal_second['appeal_second_section_left_answer']; ?>


                <!-- <div class="conditional" data-cond-option="example2" data-cond-value="on">
                    Hooray!
                </div>
                <div class="conditional" data-cond-option="example3" data-cond-value="on">
                    Don't get cocky!
                </div> -->
            </div>
            <?php
$appeal_third = get_field('appeal_third_section');
?>
            <div class="conditional" data-cond-option="example1" data-cond-value="no">
            <?php echo $appeal_third['appeal_third_section_heading']; ?>
                <label><input type="radio" name="example4" value="yes"><span></span><?php echo $appeal_third['appeal_third_section_left_circle_text']; ?><br><br>
                </label>
                <label><input type="radio" name="example4" value="yes"><span></span><?php echo $appeal_third['appeal_third_section_right_circle_text']; ?>
                </label>

                <div class="conditional" data-cond-option="example4" data-cond-value="yes">
                    <h4 style="font-size: 18px;" data-sc-field-key="0F3F0B11C04B4AD4B7F8044061D3666B" class=""><?php echo $appeal_third['appeal_third_section_sub_heading']; ?><br><br></h4>
                    <div class="appeal">
                        <label class="label-appeal"><input type="radio" name="example6" value="yes"><span></span>
                        <?php echo $appeal_third['appeal_third_section_sub_first_circle_text']; ?>
                        </label>
                        <label class="label-appeal"><input type="radio" name="example6" value="yes"><span></span>
                        <?php echo $appeal_third['appeal_third_section_sub_second_circle_text']; ?>

                        </label>
                        <label class="label-appeal "><input type="radio" name="example6" value="yes"><span></span>
                        <?php echo $appeal_third['appeal_third_section_sub_third_circle_text']; ?>

                        </label>
                        <label class="label-appeal"><input type="radio" name="example6" value="yes"><span></span>
                        <?php echo $appeal_third['appeal_third_section_sub_fourth_circle_text']; ?>

                        </label>
                        <?php echo $appeal_third['appeal_third_section_sub_answer']; ?>
                    </div>
                    <?php echo apply_shortcodes( '[contact-form-7 id="1249" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    


<?php
get_footer();
?>