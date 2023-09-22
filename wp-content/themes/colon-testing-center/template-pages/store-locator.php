<?php /* Template Name: store-locator */ ?>

<?php 
  get_header();
?>
<?php
$store_locator = get_field('store_locator');
?>
<div class="first-section-locator">
  <div class="container">
    <div class="component-content">
      <?php echo $store_locator['store_locator_heading']; ?>
      <?php echo $store_locator['store_locator_text']; ?>
    </div>
    <?php echo apply_shortcodes( '[contact-form-7 id="1419" title="store locator form"]' ); ?>
  </div>
  <div class="second-section-locator">
    <div class="container">
      <div class="component-content">
        <div class="ups-info-locator" style="text-align: center;">
          <img alt="" width="50" class="upsLogo" src="<?php echo $store_locator['store_locator_image']; ?>"
            style="width: 50px;">
          <div class="appVersion-locator"> <?php echo $store_locator['store_locator_image_text']; ?></div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
get_footer();
?>