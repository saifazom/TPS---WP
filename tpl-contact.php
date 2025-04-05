<?php
/*
* Template Name: Contact Page Template 
*/

get_header();
?>

<main>
    <section id="contact-intro" class="o-panel o-panel--contact-intro u-mt-145">
        <div class="c-contact-intro">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column wow wow-visible fadeInUp">
                        <div class="c-contact-intro__headings">
                            <h4><?php echo get_field('intro_small_title'); ?></h4>
                            <h1 class="c-contact-intro__title"><?php echo get_field('intro_title'); ?></h1>
                        </div>
                    </div><!--/ Headings -->
                    <div class="column wow wow-visible fadeInUp">
                        <div class="c-contact-intro__text">
                            <p><?php echo get_field('intro_text'); ?></p>
                        </div>
                    </div><!--/ Text -->
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
            
    <section id="contact-links" class="o-panel o-panel--contact-links">
        <div class="c-contact-links">
            <div class="c-contact-links__container container is-max-widescreen">
                <div class="columns is-mobile is-flex-wrap-wrap">
                    <?php if( have_rows('contact_links') ): ?>
                        <?php while( have_rows('contact_links') ): the_row(); ?>
                        <div class="column is-half-mobile is-one-quarter-desktop wow wow-visible fadeInUp">
                        <?php if( get_sub_field('select_link_type') == 'Phone' ) { ?>
                            <a class="c-contact-links__box" href="tel:<?php echo get_sub_field('contact_phone_number'); ?>">
                        <?php } elseif( get_sub_field('select_link_type') =='Email' ) { ?>
                            <a class="c-contact-links__box" href="mailto:<?php echo get_sub_field('contact_email_address'); ?>" target="_blank">
                        <?php } elseif( get_sub_field('select_link_type') =='External Url' ) { ?>
                            <a class="c-contact-links__box" href="<?php echo get_sub_field('ext_url') ?>" target="_blank">
                        <?php } elseif( get_sub_field('select_link_type') =='Scroll to Map' ) { ?>
                            <a class="c-contact-links__box js-scroll-btn" href="#map-header">
                        <?php } else { ?>
                            <a class="c-contact-links__box js-scroll-btn" href="#contact-form">
                        <?php } ?>
                                <div class="c-contact-links__icon">
                                    <img class="c-contact-links__default" src="<?php echo get_sub_field('cl_icon'); ?>" alt="">
                                    <img class="c-contact-links__hovr" src="<?php echo get_sub_field('icon_hover'); ?>" alt="">
                                </div>
                                <h3 class="c-contact-links__title"><?php echo get_sub_field('cl_title'); ?></h3>
                                <p><?php echo get_sub_field('cl_description'); ?></p>
                            </a>
                        </div><!--/ Link Item -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!-- End Contact Link Section -->

    <section id="map" class="o-panel o-panel--map px-0">
        <div class="c-map">
            <div class="container is-max-widescreen">
                <div id="map-header" class="c-map__header">
                    <div class="columns">
                        <div class="column wow wow-visible fadeInUp">
                            <div class="c-map__heading">
                                <h2 class="c-map__title"><?php echo get_field('map_title'); ?></h2>
                            </div>
                        </div>
                        <div class="column wow wow-visible fadeInUp">
                            <div class="c-map__text">
                                <p><?php echo get_field('map_address'); ?> <a href="<?php echo get_field('map_link2'); ?>" target="_blank"><?php echo get_field('link_label'); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/ Map Header -->

            <div class="c-map__embed">
                <?php echo get_field('map_embed_code');?>
            </div>
        </div>  
    </section><!-- End Map Section -->
                                    
    <section id="contact-form" class="o-panel o-panel--contact-form bg-rteal">
        <div class="c-contact-form">
            <div class="container is-max-widescreen">
                <h2 class="c-contact-form__title has-text-centered"><?php echo get_field('form_title'); ?></h2>

                <div class="c-contact-form__wrap">
                    <?php echo do_shortcode(get_field('form_shortcode')); ?>
                </div>
            </div>
        </div>
    </section><!-- End Form Section -->
</main><!-- End Main Body -->

<?php get_footer(); ?>