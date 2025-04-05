         <footer id="footer" class="o-panel o-panel--footer">
            <div class="c-footer">
               <div class="container is-max-widescreen">
                  <div class="columns is-mobile c-footer__columns">
                     <div class="c-footer__col c-footer__logo-col">
                        <div class="c-footer__logo">
                           <a href="<?php bloginfo('url'); ?>">
                              <img src="<?php echo _TSF_THEME_URI; ?>/assets/img/logo-white.png" alt="TFS Logo">
                           </a>
                           <p class="c-footer__copyright hidden-mobile">© 2025 Trusted Facility Solutions.<br /> All Rights Reserved. <span>Website by <a href="https://r1creative.net/" target="_blank">R1 Creative</a></span></p>
                        </div>
                     </div><!--/ Logo Col -->

                     <div class="c-footer__col c-footer-inner-cols">
                        <div class="c-footer-inner-cols__column">
                           <div class="c-footer__nav">
                              <h4 class="c-footer__title">Quick Links</h4>
                              
                              <?php
                                 $defaults = array(
                                       'theme_location'  => 'quick_links',
                                       'menu'            => '',
                                       'container'       => '',
                                       'container_class' => '',
                                       'container_id'    => '',
                                       'menu_class'      => '',
                                       'menu_id'         => '',
                                       'echo'            => true,
                                       'fallback_cb'     => 'wp_page_menu',
                                       'before'          => '',
                                       'after'           => '',
                                       'link_before'     => '',
                                       'link_after'      => '',
                                       'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                       'depth'           => 0,
                                       'walker'          => ''
                                 );

                                 wp_nav_menu( $defaults );
                              ?> 
                              <img class="show-mobile" src="<?php echo get_field('badge_image', 'options'); ?>" alt="">
                           </div>
                        </div><!--/ Quick Links Col -->

                        <div class="c-footer-inner-cols__column">
                           <div class="c-footer__contact">
                              <h4 class="c-footer__title">Get In Touch</h4>
                              
                              <div class="c-footer__contact-box">
                                 <?php echo get_field('get_in_touch', 'options'); ?>
                                 <img class="hidden-mobile" src="<?php echo get_field('badge_image', 'options'); ?>" alt="">

                                 <div class="c-footer__social-links show-mobile">
                                    <h4 class="c-footer__title">Follow Us</h4>
                                    
                                    <div class="c-social c-social--footer">
                                       <?php if( have_rows('font_awesome_class_name', 'options') ): ?>
                                          <?php while( have_rows('font_awesome_class_name', 'options') ): the_row(); ?>
                                             <a href="<?php echo get_sub_field('so_link', 'options'); ?>" target="_blank">
                                                <i class="fa-brands fa-<?php echo get_sub_field('font_awesome_class_name', 'options'); ?>"></i>
                                             </a>
                                          <?php endwhile; ?>
                                       <?php endif;?>
                                    </div><!--/ Social Links -->
   
                                    <a href="#" class="c-footer__scroll-up"><img src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-strt-up-dgreen.png" alt=""></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div><!--/ Info Col -->

                     <div class="c-footer__col c-footer__social-col">
                        <div class="c-footer__social-links hidden-mobile">
                           <h4 class="c-footer__title">Follow Us</h4>
                           
                           <div class="c-footer__social-box">
                              <div class="c-social c-social--footer">
                              <?php while( have_rows('font_awesome_class_name', 'options') ): the_row(); ?>
                                 <?php if(get_sub_field('font_awesome_class_name', 'options')){ ?>
                                 <a href="<?php echo get_sub_field('so_link', 'options'); ?>" target="_blank">
                                    <i class="fa-brands fa-<?php echo get_sub_field('font_awesome_class_name', 'options'); ?>"></i>
                                 </a>
                                 <?php } ?>
                              <?php endwhile; ?>
                              </div>

                              <a href="#" class="c-footer__scroll-up js-scroll-top-btn"><img src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-strt-up-dgreen.png" alt=""></a>
                           </div>
                        </div><!--/ Social Links For Mobile -->

                        <p class="c-footer__copyright show-mobile">© <?php echo date('Y'); ?> Trusted Facility Solutions.<br /> All Rights Reserved. <span>Website by <a href="https://r1creative.net/" target="_blank">R1 Creative</a></span></p>
                     </div><!--/ Social Col -->
                  </div>
               </div>
            </div>      
         </footer><!-- End Footer Section -->
      <?php wp_footer(); ?>
   </body>
</html>