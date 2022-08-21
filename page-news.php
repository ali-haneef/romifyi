<?php get_header(); ?>

 <!-- end header -->
   <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Letest News</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news section -->

        <!-- news section -->
        <div class="news mb-5">
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

<?php get_footer(); ?>