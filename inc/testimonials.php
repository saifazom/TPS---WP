<?php $homepage_id = 29; if(is_front_page() || is_home()): ?>
    <div class="c-testimonials">
        <div class="container is-max-widescreen">
            <div class="columns is-0 is-align-items-center">
                <div class="column is-7">
                    <div class="c-testimonials__text-box">
                        <h4 class="wow wow-visible fadeInUp"><?php echo get_field('tst_small_title', $homepage_id); ?></h4>

                        <div class="c-testimonials__quote">
                            <div class="wow wow-visible fadeInUp"><?php echo get_field('tst_quote', $homepage_id); ?></div>

                            <div class="c-testimonials__name wow wow-visible fadeInUp">
                                <strong><?php echo get_field('tst_name', $homepage_id); ?></strong>
                                <?php echo get_field('tst_designation', $homepage_id); ?>
                            </div>
                        </div>
                    </div>
                </div><!--/ Quote -->

                <div class="column is-5">
                    <div class="c-testimonials-carousel wow wow-visible fadeInUp">
                        <div class="js-testimonials">
                            <?php if( have_rows('testimonials', $homepage_id) ): ?>
                                <?php while( have_rows('testimonials', $homepage_id) ): the_row(); ?>
                                    <div class="c-testimonials-carousel__item">
                                        <div class="c-testimonials-carousel__stars">
                                            <img src="<?php echo get_sub_field('starts_img'); ?>" alt="">
                                        </div>

                                        <p>"<?php echo get_sub_field('testimonials_quote'); ?>”</p>

                                        <div class="c-testimonials-carousel__name">
                                            <strong><?php echo get_sub_field('testimonials_name'); ?></strong>
                                            <?php echo get_sub_field('testimonials_designation'); ?>
                                        </div>
                                    </div><!--/ Slider Item -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="c-testimonials-carousel__nav">
                            <img id="testimonial-prev" src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-left-dgreen.png" alt="">
                            <img id="testimonial-next" src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-right-green.png" alt="">
                        </div>
                    </div>
                </div><!--/ Carousel -->
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="c-testimonials">
        <div class="container is-max-widescreen">
            <div class="columns is-0 is-align-items-center">
                <div class="column is-7">
                    <div class="c-testimonials__text-box">
                        <h4 class="wow wow-visible fadeInUp"><?php echo get_field('tst_small_title'); ?></h4>

                        <div class="c-testimonials__quote">
                            <div class="wow wow-visible fadeInUp"><?php echo get_field('tst_quote'); ?></div>

                            <div class="c-testimonials__name wow wow-visible fadeInUp">
                                <strong><?php echo get_field('tst_name'); ?></strong>
                                <?php echo get_field('tst_designation'); ?>
                            </div>
                        </div>
                    </div>
                </div><!--/ Quote -->

                <div class="column is-5">
                    <div class="c-testimonials-carousel wow wow-visible fadeInUp">
                        <div class="js-testimonials">
                            <?php if( have_rows('testimonials') ): ?>
                                <?php while( have_rows('testimonials') ): the_row(); ?>
                                    <div class="c-testimonials-carousel__item">
                                        <div class="c-testimonials-carousel__stars">
                                            <img src="<?php echo get_sub_field('starts_img'); ?>" alt="Stars">
                                        </div>

                                        <p>"<?php echo get_sub_field('testimonials_quote'); ?>”</p>

                                        <div class="c-testimonials-carousel__name">
                                            <strong><?php echo get_sub_field('testimonials_name'); ?></strong>
                                            <?php echo get_sub_field('testimonials_designation'); ?>
                                        </div>
                                    </div><!--/ Slider Item -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="c-testimonials-carousel__nav">
                            <img id="testimonial-prev" src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-left-dgreen.png" alt="">
                            <img id="testimonial-next" src="<?php echo _TSF_THEME_URI; ?>/assets/img/arrow-right-green.png" alt="">
                        </div>
                    </div>
                </div><!--/ Carousel -->
            </div>
        </div>
    </div>
<?php endif;?>