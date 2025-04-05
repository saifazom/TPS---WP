<?php
/*
* Template Name: Service Page Template 
*/

get_header();
?>

<main>
    <section id="service-intro" class="o-panel o-panel--service-intro u-mt-145">
        <div class="c-service-intro">
            <div class="c-service-intro__container container is-max-widescreen">
                <div class="c-service-intro__text has-text-centered">
                    <h1 class="c-service-intro__title wow wow-visible fadeInUp"><?php echo get_field('intro_title'); ?></h1>
                    <div class="wow wow-visible fadeInUp">
                        <p><?php echo get_field('intro_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Intro Section -->
    
    <section id="sp-service" class="o-panel o-panel--sp-service">
        <div class="c-sp-service">
            <div class="container is-max-widescreen">
                <?php if( have_rows('select_services') ): ?>
                    <?php while( have_rows('select_services') ): the_row(); 

                    $serviceItems = get_sub_field('services'); 
                    ?>
                        <div class="columns is-align-items-center c-sp-service__item">
                            <div class="column c-sp-service__imgCol wow wow-visible fadeInUp">
                                <div class="c-sp-service__img">
                                    <?php echo get_the_post_thumbnail($serviceItems->ID); ?>
                                </div>
                            </div><!--/ Image -->
                            <div class="column wow wow-visible fadeInUp">
                                <div class="c-sp-service__text">
                                    <h3 class="c-sp-service__title"><?php echo get_the_title($serviceItems->ID); ?></h3>
                                    <?php echo get_post_field('post_content', $serviceItems->ID); ?>
                                </div>
                            </div><!--/ Text -->
                        </div><!--/ Service Item -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- End Embedded Form Section -->

    <section id="service-cta" class="o-panel o-panel--service-cta">
        <div class="c-service-cta">
            <div class="container is-max-widescreen c-service-cta__container">    
                <div class="columns c-service-cta__columns">  
                    <div class="column is-5 wow wow-visible fadeInUp">
                        <div class="c-service-cta__heading">
                            <h2 class="c-service-cta__title"><?php echo get_field('cta_title'); ?></h2>
                        </div>
                    </div>
                    <div class="column is-7 wow wow-visible fadeInUp">
                        <div class="c-service-cta__text">
                            <p><?php echo get_field('cta_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="c-service-cta__btns is-align-items-center is-justify-content-center wow wow-visible fadeInUp">
                    <a href="<?php echo get_field('cta_button_1_link'); ?>" class="u-button u-button--arrow button is-primary"><?php echo get_field('cta_button_1_label'); ?></a>
                    <a href="<?php echo get_field('cta_button_2_link'); ?>" class="u-button u-button--black"><?php echo get_field('cta_button_2_label'); ?></a>  
                </div>
            </div>
        </div>
    </section><!-- End CTA Section -->

    <section id="testimonials" class="o-panel o-panel--testimonials bg-gray">
        <?php get_template_part('inc/testimonials'); ?>
   </section><!-- End Testimonials Section -->
</main><!-- End Main Body -->

<?php get_footer(); ?>