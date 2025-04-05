<?php
/*
* Template Name: About Page Template 
*/

get_header();
?>

<main>
    <section id="about-hero" class="o-panel o-panel--about-hero u-mt-145 px-0 bg-gray">
        <div class="c-about-hero">
            <div class="columns is-mobile is-flex-wrap-wrap-reverse">
                <div class="c-about-hero__column c-about-hero__text-column is-display-flex is-align-items-center is-justify-content-flex-end">
                    <div class="c-about-hero__text is-display-flex is-justify-content-flex-end">
                        <div class="c-about-hero__text-wrap">
                            <h1 class="c-about-hero__title wow wow-visible fadeInUp"><?php echo get_field('hero_title'); ?></h1>
                            <div class="wow wow-visible fadeInUp">
                                <p><?php echo get_field('hero_text'); ?></p>
                            </div>
                            <div class="c-about-hero__ctas wow wow-visible fadeInUp">
                                <a class="u-button u-button--arrow js-scroll-btn" href="#our-value">Discover Our Story</a>
                                <a class="u-button u-button--black js-scroll-btn" href="#leadership">Meet Our Team</a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Text -->

                <div class="c-about-hero__column c-about-hero__img-column">
                    <div class="c-about-hero__img wow wow-visible fadeInUp">
                        <img class="c-about-hero__desktop-img" src="<?php echo get_field('hero_image'); ?>" alt="Image">
                    </div>
                </div><!--/ Img -->
            </div>
        </div>
    </section><!-- End Hero Section -->
   
    <section id="our-value" class="o-panel o-panel--our-value">
        <div class="c-our-value">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column is-three-fifths-tablet">
                        <div class="c-our-value__text-box">
                            <h4 class="c-our-value__sub-heading wow wow-visible fadeInUp"><?php echo get_field('ov_small_title'); ?></h4>
                            <h2 class="c-our-value__heading wow wow-visible fadeInUp"><?php echo get_field('ov_title'); ?></h2>

                            <div class="c-our-value__text wow wow-visible fadeInUp">
                                <p><?php echo get_field('ov_text'); ?></p>
                            </div>
                        </div>
                    </div><!--/ Text -->

                    <div class="column is-two-fifths-tablet">
                        <ul class="c-our-value__items">
                            <?php if( have_rows('our_values') ): ?>
                                <?php while( have_rows('our_values') ): the_row(); ?>
                                    <li class="c-our-value__item columns is-mobile wow wow-visible fadeInUp">
                                        <div class="has-text-right-mobile column is-3">
                                            <div class="c-our-value__icon pr-2">
                                                <img src="<?php echo get_sub_field('ovi_icon'); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="c-our-value__description column is-9">
                                            <h3 class="c-our-value__title"><?php echo get_sub_field('ovi_title'); ?></h3>
                                            <p><?php echo get_sub_field('ovi_description'); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div><!--/ Img -->
                </div>
            </div>
        </div>
    </section><!-- End Our Value Section -->

    <section id="our-story" class="o-panel o-panel--our-story px-0">
        <div class="c-our-story">
            <div class="container is-max-widescreen">
                <div class="c-our-story__wrap">
                    <div class="columns">
                        <div class="c-our-story__img column is-5 wow wow-visible fadeInUp" style="background-image: url(<?php echo _TSF_THEME_URI; ?>/assets/img/about-img2.jpg);">
                            <img src="<?php echo get_field('os_image'); ?>" alt="Placeholder Image">
                        </div><!--/ Img -->
                        <div class="column is-7">
                            <div class="c-our-story__text wow wow-visible fadeInUp">
                                <h4 class="c-our-story__sub-title wow wow-visible fadeInUp"><?php echo get_field('os_small_title'); ?></h4>
                                <h2 class="c-our-story__title wow wow-visible fadeInUp"><?php echo get_field('os_title'); ?></h2>

                                <div class="wow wow-visible fadeInUp">
                                    <p><?php echo get_field('os_text'); ?></p>
                                </div>
                            </div>
                        </div><!--/ Text -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Our Story Section -->

    <section id="stat-counter" class="o-panel o-panel--stat-counter">
        <div class="c-stat-counter c-stat-counter--green">
            <div class="container is-max-widescreen">
                <div class="columns is-justify-content-center is-align-items-center">
                    <?php if( have_rows('counter') ): ?>
                        <?php while( have_rows('counter') ): the_row(); ?>
                            <div class="column">
                                <div class="c-stat-counter__box c-stat-counter__box--white wow wow-visible fadeInUp">
                                    <h3 class="c-stat-counter__title c-stat-counter__title--white">
                                        <span class="coun-item" data-count="<?php echo get_sub_field('count_number'); ?>"><?php echo get_sub_field('count_number'); ?></span><?php echo get_sub_field('count_symbol'); ?>
                                    </h3>
                                    <p><?php echo get_sub_field('count_caption'); ?></p>
                                </div>
                            </div><!--/ Counter -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!-- End Stat Counter Section -->

    <section id="leadership" class="o-panel o-panel--leadership">
        <div class="c-leadership">
            <div class="c-leadership__header">
                <div class="container is-max-widescreen c-leadership__container">
                    <h4 class="wow wow-visible fadeInUp"><?php echo get_field('lt_small_title'); ?></h4>
                    <h2 class="c-leadership__title wow wow-visible fadeInUp"><?php echo get_field('lt_title'); ?></h2>

                    <div class="wow wow-visible fadeInUp">
                        <p><?php echo get_field('lt_text'); ?></p>
                    </div>
                </div>
            </div><!--/ Leadership Header -->

            <div class="c-team-member">
                <div class="container is-max-widescreen">
                    <div class="columns is-mobile is-justify-content-center is-flex-wrap-wrap is-hidden-mobile">
                        <?php if( have_rows('select_leadership_team') ): $count = 0; ?>
                            <?php while( have_rows('select_leadership_team') ): the_row(); 

                            $leadershipTeam = get_sub_field('leadership_team'); 
                            ?>
                                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                    <div class="c-team-member__item wow wow-visible fadeInUp">
                                        <div class="c-team-member__img">
                                            <?php if(get_field('ot_image', $leadershipTeam->ID)) { ?>
                                            <img src="<?php echo get_field('ot_image', $leadershipTeam->ID); ?>" alt="Team Img <?php echo $count; ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo _TSF_THEME_URI; ?>/assets/img/team-placeholder.jpg" alt="Placeholder Image">
                                            <?php } ?>
                                        </div>
                                        <div class="c-team-member__name">
                                            <strong><?php echo get_the_title($leadershipTeam->ID); ?></strong>
                                            <?php echo get_field('ot_designation', $leadershipTeam->ID); ?>
                                        </div>
                                    </div>
                                </div><!--/ Team Member -->
                                <?php 
                                    $count++;
                                    
                                    if ($count == 2) {
                                        echo '</div><div class="columns is-mobile is-justify-content-center is-flex-wrap-wrap is-hidden-mobile">';
                                    }
                                    if ($count % 5 == 0) {
                                        echo '</div><div class="columns is-mobile is-justify-content-center is-flex-wrap-wrap is-hidden-mobile">';
                                    }
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!--/ Last Row Close -->

                    <div class="columns is-mobile is-justify-content-center is-flex-wrap-wrap is-hidden-tablet">
                        <?php if( have_rows('select_leadership_team') ): $count = 0; ?>
                            <?php while( have_rows('select_leadership_team') ): the_row(); 

                            $leadershipTeam = get_sub_field('leadership_team'); 
                            ?>
                                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                    <div class="c-team-member__item wow wow-visible fadeInUp">
                                        <div class="c-team-member__img">
                                            <?php if(get_field('ot_image', $leadershipTeam->ID)) { ?>
                                            <img src="<?php echo get_field('ot_image', $leadershipTeam->ID); ?>" alt="Team Img <?php echo $count; ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo _TSF_THEME_URI; ?>/assets/img/team-placeholder.jpg" alt="Placeholder Image">
                                            <?php } ?>
                                        </div>
                                        <div class="c-team-member__name">
                                            <strong><?php echo get_the_title($leadershipTeam->ID); ?></strong>
                                            <?php echo get_field('ot_designation', $leadershipTeam->ID); ?>
                                        </div>
                                    </div>
                                </div><!--/ Team Member -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!--/ Last Row Close -->
                </div>
            </div><!--/ Team Members -->
        </div>
    </section><!-- End Leadership Section -->

    <section id="video" class="o-panel o-panel--video">
        <div class="c-video wow wow-visible fadeInUp">
            <div class="container is-max-widescreen">      
                <div id="videoWrapper" class="c-video__wrapper" style="background-image: url(<?php echo get_field('video_placeholder_image'); ?>);">
                    <img src="<?php echo get_field('video_placeholder_image'); ?>" alt="Video Thumbnail">
                    <button id="playButton" class="c-video__playButton"><span>Play</span></button>
                </div><!--/ Thumbnail & Play Button -->

                <div id="playerContainer" class="c-video__container">
                    <div id="player"></div>
                </div><!--/ YouTube Player (Hidden by Default) -->
            </div>
        </div>
    </section><!-- End CTA Section -->

    <section id="about-cta" class="o-panel o-panel--about-cta">
        <div class="c-about-cta">
            <div class="container is-max-widescreen c-about-cta__container">      
                <div class="c-about-cta__text has-text-centered">
                    <h2 class="c-about-cta__title wow wow-visible fadeInUp"><?php echo get_field('cta_text'); ?></h2>

                    <div class="c-about-cta__btns is-flex is-align-items-center is-justify-content-center wow wow-visible fadeInUp">
                        <a href="#our-team" class="u-button button is-primary js-scroll-btn">Meet Our Team</a>
                        <a href="<?php echo get_field('cta_button_link'); ?>" class="u-button u-button--black"><?php echo get_field('cta_button_label'); ?></a>  
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End CTA Section -->

    <section id="our-team" class="o-panel o-panel--our-team bg-gray">
        <?php if(get_field('ot_title') || get_field('select_team_member')) { ?> 
        <div class="c-our-team">
            <div class="container is-max-widescreen">
                <div class="c-team-member">
                    <?php if(get_field('ot_title')) { ?> 
                    <h2 class="c-our-team__title has-text-centered wow wow-visible fadeInUp"><?php echo get_field('ot_title'); ?></h2>
                    <?php } ?>

                    <?php if( have_rows('select_team_member') ): ?>
                        <div class="columns is-mobile is-justify-content-center is-flex-wrap-wrap">
                            <?php while( have_rows('select_team_member') ): the_row(); 
                            
                            $ourTeam = get_sub_field('ot_team_member'); 
                            ?>
                                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                    <div class="c-team-member__item wow wow-visible fadeInUp">
                                        <div class="c-team-member__img">
                                            <?php if(get_field('ot_image', $ourTeam->ID)) { ?>
                                                <img src="<?php echo get_field('ot_image', $ourTeam->ID); ?>" alt="Team Img <?php echo $count; ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo _TSF_THEME_URI; ?>/assets/img/team-placeholder.jpg" alt="Placeholder Image">
                                            <?php } ?>
                                        </div>
                                        <div class="c-team-member__name">
                                            <strong><?php echo get_the_title($ourTeam->ID); ?></strong>
                                            <?php echo get_field('ot_designation', $ourTeam->ID); ?>
                                        </div>
                                    </div>
                                </div><!--/ Team Member -->
                            <?php endwhile; ?>
                        </div><!--/ Team Row -->
                    <?php endif; ?>
                </div>
            </div>
        </div><!--/ Team Members -->
        <?php } ?>

        <?php if(get_field('tcta_title')) { ?>
        <div class="c-about-cta c-about-cta--2">
            <div class="container is-max-widescreen c-about-cta__container2">      
                <div class="c-about-cta__text has-text-centered">
                    <?php if(get_field('tcta_title')) { ?>
                    <h2 class="c-about-cta__title"><?php echo get_field('tcta_title'); ?></h2>
                    <?php } ?>

                    <?php if(get_field('tcta_button_label')) { ?>
                    <div class="c-about-cta__btns">
                        <a href="<?php echo get_field('tcta_button_link'); ?>" class="u-button u-button--arrow button is-primary"><?php echo get_field('tcta_button_label'); ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div><!--/ CTA Section -->
        <?php } ?>
    </section><!-- End Team Section -->
</main><!-- End Main Body -->

<?php get_footer(); ?>