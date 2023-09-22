<?php /* Template Name: start-screening-at-age-45 */ ?>

<?php
get_header();
?>
<?php
$page_title = get_field('page_title');
?>
<section>
  <div class="slide">
    <img class="img-fluid banner" src="<?php echo $page_title['page_image']; ?>" alt="1-banner">
    <div class="slider-content">
      <h2>
        <?php echo $page_title['page_heading']; ?></h2>
    </div>
</section>
<?php
$age_second = get_field('age_second_section');
?>
<!-- ------second section---- -->
<div class="second-section-45">
  <div class="container">
    <div class="row padding-40 second-section-row">

      <ul>
        <h2><?php echo $age_second['age_second_section_heading']; ?></h2><br>
        <?php echo $age_second['age_second_section_text']; ?><br>
        <h4><?php echo $age_second['age_second_section_sub_text']; ?></h4><br>
        <?php if( have_rows('age_third_section') ): ?>
        <?php while( have_rows('age_third_section') ): the_row();
     $image = get_sub_field('age_third_section_image'); ?>
        <li class="d-flex">
          <img src="<?php the_sub_field('age_third_section_image'); ?>" alt="">
          <?php the_sub_field('age_third_section_text'); ?>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <br>
        <?php
$age_fourth = get_field('age_fourth_section');
?>
        <h4><?php echo $age_fourth['age_fourth_section_heading']; ?></h4>
        <?php while ( have_rows( 'age_fourth_section' ) ) : the_row();
                  if( have_rows('age_fourth_sub_section_') ):
                  while ( have_rows('age_fourth_sub_section_') ) : the_row();                
                  $image = get_sub_field('age_fourth_sub_section_image'); 
                  ?>
        <li class="d-flex">
          <img src="<?php echo get_sub_field('age_fourth_sub_section_image'); ?>" alt="">
          <?php echo get_sub_field('age_fourth_sub_section_text'); ?>
          <br>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php
$age_fifth = get_field('age_fifth_section');
?>
        <?php echo $age_fifth['age_fifth_section_text1']; ?>
        <?php echo $age_fifth['age_fifth_section_text2']; ?><br>
        <a href="<?php echo $age_fifth['age_fifth_section_button_url']; ?>"><?php echo $age_fifth['age_fifth_section_button']; ?></a>
      </ul>
    </div>
  </div>
</div>
<?php
$age_sixth = get_field('age_sixth_section');
?>
<!-- --------third section--- -->
<div class="third-container-45">
  <div class="container">
    <h3>
      <?php echo $age_sixth['age_sixth_section_heading']; ?>
    </h3><br>
    <?php echo $age_sixth['age_sixth_section_text']; ?>
  </div>
</div>
<?php
get_footer();
?>