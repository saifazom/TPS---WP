<?php
/*
* Template Name: Industries Page Template 
*/

get_header();
?>

<main>
    <section id="ind-intro" class="o-panel o-panel--ind-intro u-mt-145 px-0">
        <div class="c-ind-intro">
            <div class="c-ind-intro__container container is-max-widescreen">
                <div class="c-ind-intro__text-box">
                    <div class="columns">
                        <div class="column is-7 wow wow-visible fadeInUp">
                            <h1 class="c-ind-intro__title"><?php echo get_field('intro_title'); ?></h1>
                        </div>
                        <div class="column is-5 wow wow-visible fadeInUp">
                            <div class="c-ind-intro__text">
                                <p><?php echo get_field('intro_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-ind-intro__img">
                    <div class="c-ind-intro__desktopImg" style="background-image: url(<?php echo get_field('image_desktop'); ?>);">
                        <img src="<?php echo get_field('image_desktop'); ?>" alt="">
                    </div>
                    <div class="c-ind-intro__mobileImg" style="background-image: url(<?php echo get_field('image_mobile'); ?>);">
                        <img src="<?php echo get_field('image_mobile'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Intro Section -->
            
    <section id="ind-weserve" class="o-panel o-panel--ind-weserve bg-gray">
        <div class="c-ind-weserve">
            <div class="container is-max-widescreen">
                <h2 class="c-ind-weserve__title has-text-centered"><?php echo get_field('iws_title'); ?></h2>

                <div class="columns is-flex-wrap-wrap">
                    <?php if( have_rows('industries_we_serve') ): ?>
                        <?php while( have_rows('industries_we_serve') ): the_row(); ?>
                            <div class="column is-half-tablet is-one-third-desktop">
                                <div class="c-ind-weserve__item">
                                    <div class="c-ind-weserve__img wow wow-visible fadeInUp">
                                        <img src="<?php echo get_sub_field('iwsi_image'); ?>" alt="">
                                    </div>
                                    <span><?php echo get_sub_field('iwsi_title'); ?></span>
                                </div>
                            </div><!--/ Industry Item -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><!--/ Industry Items -->

        <div class="c-industries-cta">
            <div class="container is-max-widescreen c-industries-cta__container has-text-centered">    
                <div class="c-industries-cta__text wow wow-visible fadeInUp">
                    <h2 class="c-industries-cta__title"><?php echo get_field('cta_title'); ?></h2>
                </div>
                <div class="c-industries-cta__btns is-align-items-center is-justify-content-center wow wow-visible fadeInUp">
                    <a href="<?php echo get_field('cta_button_1_link'); ?>" class="u-button u-button--arrow button is-primary"><?php echo get_field('cta_button_1_label'); ?></a>
                    <a href="<?php bloginfo( 'url' ); ?>/about-us#leadership" class="u-button u-button--black">Meet the Team</a>  
                </div>
            </div>
        </div><!--/ CTA -->
    </section><!-- End Embedded Form Section -->

    <section id="services" class="o-panel o-panel--services bg-gray">
        <div class="c-services c-services--industries">
            <div class="container is-max-widescreen c-services__container c-services__container--industries">
                <div class="c-services__header c-services__header--industries">
                    <div class="c-services__heading-box c-services__heading-box--industries">
                        <div class="c-services__sub-heading c-services__sub-heading--industries"><?php echo get_field('service_title'); ?></div>
                    </div><!--/ Title -->
                </div><!--/ Header -->

                <div class="c-service-items">
                    <div class="columns is-2 is-flex-wrap-wrap">
                        <?php if( have_rows('services') ): ?>
                            <?php while( have_rows('services') ): the_row(); ?>
                                <div class="column is-6">
                                    <div class="c-service-items__box wow wow-visible fadeInUp">
                                        <div class="columns">
                                            <div class="column is-one-quarter">
                                                <div class="c-service-items__icon">
                                                    <img src="<?php echo get_sub_field('si_icon'); ?>" alt="Icon ">
                                                </div>
                                            </div><!--/ Icon -->
                                            <div class="column">
                                                <div class="c-service-items__text">
                                                    <h3 class="c-service-items__title"><?php echo get_sub_field('si_title'); ?></h3>
                                                    <p><?php echo get_sub_field('si_description'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/ Service Box -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="c-services__btm-cta has-text-centered"><?php echo get_field('service_cta'); ?></div>
            </div>
        </div>
    </section><!-- End Services Section -->
</main><!-- End Main Body -->

<?php get_footer();?>