<?php get_header(); ?>


        <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- project section -->
    <div id="project" class="project">
         <div class="container">
            <div class="row">
                <div class="product_main">
                   <?php
                   	$args = array(
                        'post_type' => 'product'
                        );
                    $loop = new WP_Query( $args );

                    if ($loop->have_posts()): ?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                        <?php
                            $id = get_the_ID();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
                        ?>
                        <div class="project_box ">
                            <div class="dark_white_bg" >
                                <img  src="<?php echo $image[0]; ?>" />
                            </div>
                            <h3><?php echo the_title(); ?></h3>
                            <span class="price"><?php echo $product->get_price_html(); ?></span>
                        </div>
                    <?php endwhile; ?>
                    <?php else:?>
			        <?php echo __( 'No products found' ); ?>
		            <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project section -->


<?php get_footer(); ?>