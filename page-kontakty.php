<?php
   get_header('post'); ?>
   <main class="site-main">
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <div class="post-content">
            <div class="container">
               <h1 class="post-contactus-title"><?php the_title(); ?> </h1>
               <div class="post-contactus-text">
                  <?php the_content(); ?>
               </div>
               <!-- /.post-content-text -->

               <div class="post-contactus-wrapper">
                  <div class="post-contactus-info">
                     <h2 class="post-contactinfo-title"><?php echo get_post_meta(101, 'kontakty-info-title', true) ?></h2>

                     <?php
                        $address = get_post_meta(101, 'kontakty-info-address', true);
                        if ($address) {echo
                        '<div class="post-contactinfo-item">
                           <div class="post-contactinfo-sign">
                              <svg width="22" height="22" fill="000000" class="icon contactinfo-icon">
                                 <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#address"></use>
                              </svg>
                           </div>
                           <address href="' . get_post_meta(101, 'kontakty-info-address', true) . '"class="post-contactinfo-address" target="_blank">' .  get_post_meta(101, 'kontakty-info-address', true) . '</address>
                        </div>' ?>
                        <?php }
                     ?>

                     <?php
                        $phone = get_post_meta(101, 'kontakty-info-phone', true);
                        if ($phone) {echo
                        '<div class="post-contactinfo-item">
                           <div class="post-contactinfo-sign">
                              <svg width="22" height="22" fill="000000" class="icon contactinfo-icon">
                                 <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#phone"></use>
                              </svg>
                           </div>
                           <a href="tel:' . get_post_meta(101, 'kontakty-info-phone', true) . '"class="post-contactinfo-phone" target="_blank">' .  get_post_meta(101, 'kontakty-info-phone', true) . '</a>
                        </div>' ?>
                        <?php }
                     ?>

                     <?php
                        $email = get_post_meta(101, 'kontakty-info-email', true);
                        if ($email) {echo
                        '<div class="post-contactinfo-item">
                           <div class="post-contactinfo-sign">
                              <svg width="22" height="22" fill="000000" class="icon contactinfo-icon">
                                 <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#email"></use>
                              </svg>
                           </div>
                           <a href="mailto:' . get_post_meta(101, 'kontakty-info-email', true) . '"class="post-contactinfo-email" target="_blank">' .  get_post_meta(101, 'kontakty-info-email', true) . '</a>
                        </div>' ?>
                        <?php }
                     ?>

                     <?php
                        $website = get_post_meta(101, 'kontakty-info-website', true);
                        if ($website) {echo
                        '<div class="post-contactinfo-item">
                           <div class="post-contactinfo-sign">
                              <svg width="22" height="22" fill="000000" class="icon contactinfo-icon">
                                 <use xlink:href="' . get_template_directory_uri() . '/assets/images/sprite.svg#website"></use>
                              </svg>
                           </div>
                           <a href="' . get_post_meta(101, 'kontakty-info-website', true) . '"class="post-contactinfo-website" target="_blank">' .  get_post_meta(101, 'kontakty-info-website', true) . '</a>
                        </div>' ?>
                        <?php }
                     ?>

                     
                     
                  </div>
                  <!-- /.post-contactus-info -->

                  <div class="post-contactus-form">
                     <?php echo do_shortcode( '[contact-form-7 id="163" title="Контакты"]' )?>
                  </div>
                  <!-- /.post-contactus-form -->
               </div>
               <!-- /.post-content-wrapper -->

            </div>
            <!-- .container -->
            

         </div>
         <!-- .post-content -->
         
      </article>

      <?php
         $map = get_post_meta(101, 'kontakty-info-map', true);
         if ($map) {
            echo $map ;
         }
      ?>      

   </main>

<?php get_footer(); ?>