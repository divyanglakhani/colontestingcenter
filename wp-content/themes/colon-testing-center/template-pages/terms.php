<?php /* Template Name: terms */ ?>

<?php 
  get_header();
?>
<?php
$terms_first = get_field('terms_first_section');
?>
<div class="main-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
      <?php echo $terms_first['terms_first_section_text']; ?>
      </div>
      <div class="col-lg-3">
        <img src="<?php echo $terms_first['terms_first_section_image']; ?>" alt="">
      </div>
    </div>
  </div>
</div>

<!-- ---second-section--- -->
<div class="second-section-45">
  <div class="second-section-terms">
    <div class="container">
      <div class="row padding-40 second-section-row">
      <?php echo $terms_first['terms_first_section_main_text']; ?>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>