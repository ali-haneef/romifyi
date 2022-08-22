 <?php get_header(); ?>

 <div class="mt-5 mb-5">
    <?php
    $params = array('posts_per_page' => 1, 'post_type' => 'product');
    $wc_query = new WP_Query($params);
    ?>
    <?php if ($wc_query->have_posts()) : ?>
    <?php while ($wc_query->have_posts()) :
           $wc_query->the_post(); ?>
       <?php the_title(); ?>
       <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
    <p>
       <?php _e( 'No Products'); ?>
    </p>
    <?php endif; ?>
 </div>
    <?php get_footer(); ?>