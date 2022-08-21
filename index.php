<?php get_header(); ?>

<!-- banner -->
<section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Romofyi </span> <br>Trands 2019</h1>
                     <p>A huge fashion collection for ever </p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="<?php echo get_template_directory_uri(); ?>/images/ban_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->

      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
            <?php if (have_rows('header' ,'options')): ?>
					<?php while( have_rows('header', 'options') ) : the_row();                   
					$img_url = get_sub_field('image')['url'];
				?>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx <?php echo get_sub_field('class'); ?>">
                     <i><img src="<?php echo $img_url; ?> " alt="#"/></i>
                     <span><?php echo get_sub_field('text'); ?></span>
                  </div>
               </div>
              <?php endwhile;?>
              <?php endif; ?>
            </div>
         </div>
      </div>
      <!-- end six_box section -->
       
       <!-- project section -->
       <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
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

     <!-- start fashion section -->
    <div class="fashion">
         <img src="<?php echo get_template_directory_uri(); ?>/images/fashion.jpg" alt="#"/>
      </div>
      <!-- end fashion section -->

      <!-- news section -->
      <div class="news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Letest News</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <?php if (have_rows('news' ,'options')): ?>
					<?php while( have_rows('news', 'options') ) : the_row();                   
					$img_url = get_sub_field('image')['url'];
				?>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="<?php echo $img_url; ?>"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3><?php echo get_sub_field('h1'); ?></h3>
                           <span><?php echo get_sub_field('h2'); ?></span> 
                           <div class="date_like">
                              <span><?php echo get_sub_field('h3'); ?></span>
                           </div>
                           <p><?php echo get_sub_field('paragraph'); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
        </div>
    </div>

      <!-- newslatter section -->
      <div  class="newslatter">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <h3 class="neslatter">Subscribe To The Newsletter</h3>
               </div>
               <div class="col-md-7">
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <button class="sumbit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end newslatter section -->

      <!-- three_box section -->
      <div class="three_box">
         <div class="container">
            <div class="row">
            <?php if (have_rows('endbox' ,'options')): ?>
					<?php while( have_rows('endbox', 'options') ) : the_row();                   
					$img_url = get_sub_field('image')['url'];
				?>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="<?php echo $img_url; ?>"></i>
                     <span><?php echo get_sub_field('text'); ?></span>
                  </div>
               </div>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

