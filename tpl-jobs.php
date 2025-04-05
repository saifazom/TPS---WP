<?php
/*
* Template Name: Jobs Page Template 
*/

get_header();
?>

<main>
    <section id="jobs-hero" class="o-panel o-panel--jobs-hero u-mt-145">
        <div class="c-jobs-hero">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column">
                        <div class="c-jobs-hero__text">
                            <h1 class="c-jobs-hero__title wow wow-visible fadeInUp"><?php echo get_field('hero_title'); ?></h1>
                            <div class="wow wow-visible fadeInUp">
                                <p><?php echo get_field('hero_text'); ?></p>
                            </div>
                            <div class="c-jobs-hero__ctas wow wow-visible fadeInUp">
                                <a class="u-button u-button--arrow js-scroll-btn" href="#embedded-form">Apply Now</a>
                            </div>
                        </div>
                    </div><!--/ Text -->
                    <div class="column c-jobs-hero__imgColumn">
                        <div class="c-jobs-hero__img is-flex is-align-items-flex-end is-justify-content-center wow wow-visible fadeInUp">
                            <img src="<?php echo get_field('hero_image'); ?>" alt="Hero Image">
                        </div>
                    </div><!--/ Img -->
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
            
    <section id="embedded-form" class="o-panel o-panel--embedded-form">
        <div class="c-embedded-form">
            <div class="c-embedded-form__header container is-max-widescreen">
                <h2 class="c-embedded-form__title wow wow-visible fadeInUp"><?php echo get_field('form_heading'); ?></h2>
                <div class="c-embedded-form__text has-text-centered wow wow-visible fadeInUp">
                    <?php if( get_field('form_description')){ ?>
                    <p><?php echo get_field('form_description'); ?></p>
                    <?php } ?>
                </div>
            </div><!--/ Header -->
            <?php if( get_field('state_links_on_off') == 'On' ) { ?>
            <div class="c-state-links">
                <div class="c-state-links__container container is-max-widescreen">
                    <?php if(have_rows('state_links')): ?>
                        <ul class=" is-flex is-flex-wrap-wrap is-justify-content-center">
                            <?php while(have_rows('state_links')): the_row(); ?>
                            <li><a class="u-button" href="<?php echo get_sub_field('sl_link'); ?>" target="_blank"><?php echo get_sub_field('sl_label'); ?></a></li>
                            <?php endwhile; ?> 
                        </ul>
                    <?php endif;?>
                </div>
            </div><!--/ State Links -->
            <?php } ?>

            <!-- Form embed code gose here -->
            <div class="c-embedded-form__container container is-max-widescreen">
                <div class="c-embedded-form__wrap">
                    <?php echo get_field('form_embed_code'); ?>
                </div>
            </div>
        </div>
    </section><!-- End Embedded Form Section -->
</main><!-- End Main Body -->

<?php get_footer(); ?>