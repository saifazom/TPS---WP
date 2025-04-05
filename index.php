<?php 

$homepage_id = 29;

get_header();

?>

<main>
   <section id="hero" class="o-panel o-panel--hero u-mt-145" style="background-image: url(<?php echo get_field('hero_background_image_desktop', $homepage_id); ?>);">
      <div class="c-hero is-flex-tablet is-align-items-center ">
         <div class="c-hero__mbl-img is-hidden-tablet wow wow-visible fadeInUp" style="background-image: url(<?php echo get_field('hero_background_image_mobile', $homepage_id); ?>);"></div>
         <div class="container is-max-widescreen">
            <div class="c-hero__content">
               <h1 class="c-hero__title has-text-white wow wow-visible fadeInUp"><?php echo get_field('hero_title', $homepage_id); ?></h1>
               <p class="c-hero__sub-title hidden-mobile wow wow-visible fadeInUp"><?php echo get_field('hero_text', $homepage_id); ?></p>
               <p class="c-hero__sub-title show-mobile wow wow-visible fadeInUp"><?php echo get_field('hero_text_mobile', $homepage_id); ?></p>
               
               <div class="c-hero__cta-group wow wow-visible fadeInUp">
                  <a href="#intro" class="c-hero__cta u-button u-button--arrow button is-primary js-scroll-btn">Learn More</a>
                  <a href="<?php echo get_field('hero_button_link', $homepage_id); ?>" class="c-hero__link u-button u-button--normal"><?php echo get_field('hero_button_label', $homepage_id); ?></a>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Hero Section -->
   
   <section id="intro" class="o-panel o-panel--intro">
      <div class="c-intro">
         <div class="container is-max-widescreen">
            <div class="columns is-mobile is-flex-wrap-wrap-reverse is-align-items-center">
               <div class="column is-full-mobile is-two-fifths-tablet">
                  <div class="c-intro__img wow wow-visible fadeInUp">
                     <img src="<?php echo get_field('intro_image', $homepage_id); ?>" alt="">
                  </div>
               </div><!--/ Img -->

               <div class="column is-full-mobile is-three-fifths-tablet">
                  <div class="c-intro__text-box">
                     <h4 class="c-intro__sub-title wow wow-visible fadeInUp"><?php echo get_field('intro_small_title', $homepage_id); ?></h4>
                     <h2 class="c-intro__title wow wow-visible fadeInUp"><?php echo get_field('intro_title', $homepage_id); ?></h2>

                     <div class="wow wow-visible fadeInUp">
                        <p><?php echo get_field('intro_text', $homepage_id); ?></p>
                     </div>

                     <div class="has-text-centered-mobile wow wow-visible fadeInUp">
                        <a class="u-button button is-primary c-intro__btn" href="<?php echo get_field('intro_button_link', $homepage_id); ?>"><?php echo get_field('intro_button_label', $homepage_id); ?></a>
                     </div>
                  </div>
               </div><!--/ Text -->
            </div>
         </div>
      </div>
   </section><!-- End Intro Section -->

   <section id="stat-counter" class="o-panel o-panel--stat-counter">
      <div class="c-stat-counter">
         <div class="container is-max-widescreen">
            <div class="columns is-t is-justify-content-center">
               <?php if( have_rows('counter', $homepage_id) ): ?>
                  <?php while( have_rows('counter', $homepage_id) ): the_row(); ?>
                     <div class="column">
                        <div class="c-stat-counter__box wow wow-visible fadeInUp">
                           <h3 class="c-stat-counter__title">
                              <span class="coun-item" data-count="<?php echo get_sub_field('count_number', $homepage_id); ?>"><?php echo get_sub_field('count_number', $homepage_id); ?></span><?php echo get_sub_field('count_symbol', $homepage_id); ?>
                           </h3>
                           <p><?php echo get_sub_field('count_caption', $homepage_id); ?></p>
                        </div>
                     </div><!--/ Counter -->
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section><!-- End Stat Counter Section -->

   <section id="services" class="o-panel o-panel--services">
      <div class="c-services">
         <div class="container is-max-widescreen c-services__container">
            <div class="c-services__header">
               <div class="c-services__heading-box">
                  <h4 class="c-services__sub-title wow wow-visible fadeInUp"><?php echo get_field('os_small_title', $homepage_id); ?></h4>
                  <h2 class="c-services__title wow wow-visible fadeInUp"><?php echo get_field('os_title', $homepage_id); ?></h2>
               </div><!--/ Title -->

               <div class="columns c-services__text-area">
                  <div class="column is-7">
                     <div class="c-services__text wow wow-visible fadeInUp">
                        <p><?php echo get_field('os_text', $homepage_id); ?></p>
                     </div>
                  </div>
                  
                  <div class="column is-5 wow wow-visible fadeInUp">
                     <div class="c-services__sub-heading u-has-link"><?php echo get_field('os_right_column_text', $homepage_id); ?>
                     </div>
                  </div><!-- Sub Heading -->
               </div>
            </div><!--/ Header -->

            <div class="c-service-items">
               <div class="columns is-2 is-flex-wrap-wrap">
                  <?php if( have_rows('services', $homepage_id) ): ?>
                     <?php while( have_rows('services', $homepage_id) ): the_row(); ?>
                        <div class="column is-6">
                           <div class="c-service-items__box wow wow-visible fadeInUp">
                              <div class="columns">
                                 <div class="column is-one-quarter">
                                    <div class="c-service-items__icon">
                                       <img src="<?php echo get_sub_field('service_icon', $homepage_id); ?>" alt="">
                                    </div>
                                 </div><!--/ Icon -->
                                 <div class="column">
                                    <div class="c-service-items__text">
                                       <h3 class="c-service-items__title"><?php echo get_sub_field('service_title', $homepage_id); ?></h3>
                                       <p><?php echo get_sub_field('service_description', $homepage_id); ?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div><!--/ Service Box -->
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section><!-- End Services Section -->

   <section id="industries" class="o-panel o-panel--industries">
      <div class="c-industries">
         <div class="container is-max-widescreen c-industries__container">
            <h4 class="wow wow-visible fadeInUp"><?php echo get_field('is_small_title', $homepage_id); ?></h4>
            <h2 class="c-industries__title wow wow-visible fadeInUp"><?php echo get_field('is_title', $homepage_id); ?></h2>

            <div class="wow wow-visible fadeInUp">
               <p><?php echo get_field('is_text', $homepage_id); ?></p>
            </div>

            <a class="u-button c-industries__btn wow wow-visible fadeInUp" href="<?php echo get_field('is_button_link', $homepage_id); ?>"><?php echo get_field('is_button_label', $homepage_id); ?></a>
         </div>
      </div>
   </section><!-- End Industries Section -->

   <section id="team" class="o-panel o-panel--team bg-gray px-0">
      <div class="c-team">
         <div class="columns">
            <div class="c-team__column c-team__img-column">
               <div class="c-team__img wow wow-visible fadeInUp">
                  <img class="c-team__desktop-img" src="<?php echo get_field('mtt_image_desktop', $homepage_id); ?>" alt="Placeholder Image">
                  <img class="c-team__tab-img" src="<?php echo get_field('mtt_image_mobile', $homepage_id); ?>" alt="Mobile Image">
               </div>
            </div><!--/ Img -->

            <div class="c-team__column c-team__text-column">
               <div class="c-team__text">
                  <div class="c-team__text-wrap">
                     <h2 class="c-team__title wow wow-visible fadeInUp"><?php echo get_field('mtt_title', $homepage_id); ?></h2>

                     <div class="wow wow-visible fadeInUp">
                        <p><?php echo get_field('mtt_text', $homepage_id); ?></p>
                     </div>

                     <div class="c-team__ctas wow wow-visible fadeInUp">
                        <a class="u-button u-button--arrow" href="<?php echo get_field('mtt_button_1_link', $homepage_id); ?>"><?php echo get_field('mtt_button_1_label', $homepage_id); ?></a>
                        <a class="u-button u-button--black" href="<?php echo get_field('mtt_button_2_link', $homepage_id); ?>"><?php echo get_field('mtt_button_2_label', $homepage_id); ?></a>
                     </div>
                  </div>
               </div>
            </div><!--/ Text -->
         </div>
      </div>
   </section><!-- End Team Section -->

   <section id="testimonials" class="o-panel o-panel--testimonials">
      <?php get_template_part('inc/testimonials'); ?>
   </section><!-- End Testimonials Section -->
</main><!-- End Main Body -->

<?php get_footer(); ?>