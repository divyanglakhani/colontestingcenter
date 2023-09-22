<?php /* Template Name: share-your-colon-cancer-screening-story */ ?>

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
$sharestory_first = get_field('share_story_first_section');
?>
<div class="first-section-story">
  <div class="container">
    <div class="component-content">
      <?php echo $sharestory_first['share_story_first_section_heading']; ?>
      <?php echo $sharestory_first['share_story_first_section_text1']; ?>
      <?php echo $sharestory_first['share_story_first_section_text2']; ?>
    </div>
    <?php
$sharestory_second = get_field('share_story_second_section');
?>
    <div class="component-content">
      <?php echo $sharestory_second['share_story_second_section_heading']; ?>
    </div>
    <div class="story-column">
      <div class="row">
        <div class="col-lg-4">
          <div class="three-layer-first d-flex">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            <?php echo $sharestory_second['share_story_second_section_left_text']; ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="three-layer-second d-flex">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <?php echo $sharestory_second['share_story_second_section_center_text']; ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="three-layer-three d-flex">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <?php echo $sharestory_second['share_story_second_section_right_text']; ?>
          </div>
        </div>
      </div>
    </div>
    <?php echo $sharestory_second['share_story_second_section_bottom_text']; ?>
  </div>
  <?php echo apply_shortcodes( '[contact-form-7 id="1438" title="Share Story Form"]' ); ?>

</div>


<?php
get_footer();
?>