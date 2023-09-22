  <?php if( have_rows('slidder') ): ?>
    <ul class="slidder">
    <?php while( have_rows('slidder') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <li>
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            <p><?php the_sub_field('caption'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>