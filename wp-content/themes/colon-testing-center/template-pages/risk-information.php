<?php /* Template Name: risk-information */ ?>

<?php 
  get_header();
?>
<?php
$risk_first = get_field('risk_first_section');
?>
<div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <?php echo $risk_first['risk_first_section_heading']; ?>
                </div>
                <div class="col-lg-3">
                    <img src="<?php echo $risk_first['risk_first_section_image']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- ---second-section--- -->
    <div class="second-section-45">
        <div class="container">
            <div class="row padding-40 second-section-row">
            <?php echo $risk_first['risk_first_section_main_text']; ?>
            </div>
        </div>
    </div>


<?php
get_footer();
?>