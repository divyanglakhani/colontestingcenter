<?php /* Template Name: schedule-pickup */ ?>

<?php 
  get_header();
?>
 <?php
$schedule_first = get_field('schedule_pickup_first_section');
?>
<div class="first-section-pickup">
        <div class="container">
            <div class="component-content">
                <div class="schedule-pickup-instructions">
                <?php echo $schedule_first['schedule_pickup_first_section_heading']; ?>
                <?php echo $schedule_first['schedule_pickup_first_section_text1']; ?>
                </div>
            </div>
            <div class="sub-section-pickup">
                <p data-sc-field-key="9E5E0EAE05184FE38C160549DF430009" class="ex-pb-3"><?php echo $schedule_first['schedule_pickup_first_section_text2']; ?></p>
                    <?php echo apply_shortcodes( '[contact-form-7 id="1404" title="Schedule pickup form"]' ); ?>
                    <?php
$schedule_second = get_field('schedule_pickup_bottom_section');
?>      
                <div class="component-content">
                    <div class="ups-info" style="text-align: center;">
                        <img alt="" width="50" class="upsLogo"
                            src="<?php echo $schedule_second['schedule_pickup_bottom_section_image']; ?>"
                            style="width: 50px;">
                        <div class="appVersion"><?php echo $schedule_second['schedule_pickup_bottom_section_text']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>