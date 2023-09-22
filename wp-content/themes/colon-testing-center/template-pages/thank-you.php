<?php /* Template Name: thank-you */ ?>

<?php 
  get_header();
?>
<?php
$thankyou = get_field('thank_you');
?>
   <div class="main-menu">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9">
                <?php echo $thankyou['thank_you_heading']; ?>
                </div>
                <div class="col-lg-3">
                    <img src="<?php echo $thankyou['thank_you_image']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="second-section-thankyou">
        <div class="container">
            <div class="component-content padding-40">
            <?php echo $thankyou['thank_you_main_text']; ?>

            </div>
        </div>
    </div>

<?php
get_footer();
?>