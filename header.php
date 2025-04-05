<?php
/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      index.php
* Brief:
*      Default file for all pages if appropriate template doesn't found.
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php
        # Enable the code below if you want to output conditional
        # class for IE 6 - IE 8
        # echo r1()->printHtmlIeConditionals(); data-scrollbar
    ?>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if (is_front_page()) : ?>
   <title>Trusted Facility Solutions</title>
<?php else : ?>
   <title><?php wp_title('|', true, 'right'); ?> Trusted Facility Solutions</title>
<?php endif; ?>

   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="apple-touch-icon" href="<?php echo _TSF_THEME_URI; ?>/assets/img/TFS_AppleShare.jpg"  />
   <link rel="shortcut icon" type="image/png" href="<?php echo _TSF_THEME_URI; ?>/assets/img/favicon.ico"/>
   <meta property="og:image" content="<?php echo _TSF_THEME_URI; ?>/assets/img/TFS_ShareImage.jpg" />

   <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js" type="text/javascript"></script>
   <![endif]-->

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <section id="hamburger-menu" class="o-panel o-panel--hamburger-menu">
      <a type="button" class="s-hamburger-menu-btn">
         <span></span>
         <span></span>
         <span></span>
      </a><!--/ Hamburger Button -->

      <div class="s-hamburger-menu">
         <div class="container is-max-widescreen">
            <a class="s-hamburger-menu__logo" href="<?php bloginfo('url'); ?>">
               <img class="is-hidden-mobile" src="<?php echo _TSF_THEME_URI; ?>/assets/img/logo-white.png" alt="TFS Logo">
               <img class="is-hidden-tablet" src="<?php echo _TSF_THEME_URI; ?>/assets/img/logo-mbl-white.png" alt="TFS Logo">
            </a><!--/ Logo -->
            
            <nav class="s-hamburger-menu__nav">
            <?php
               $defaults = array(
                     'theme_location'  => 'primary_nav',
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
            </nav><!--/ Nav -->

            <?php if( have_rows('font_awesome_class_name', 'options') ): ?>
               <div class="c-social">
                  <?php while( have_rows('font_awesome_class_name', 'options') ): the_row(); ?>
                     <?php if(get_sub_field('font_awesome_class_name', 'options')){ ?>
                     <a href="<?php echo get_sub_field('so_link', 'options'); ?>" target="_blank">
                        <i class="fa-brands fa-<?php echo get_sub_field('font_awesome_class_name', 'options'); ?>"></i>
                     </a>
                     <?php } ?>
                  <?php endwhile; ?>
               </div>
            <?php endif;?>
         </div>
      </div><!--/ Menu -->
   </section><!-- End Hamburger Menu -->

   <header id="header" class="o-panel o-panel--header">
      <div id="topbar" class="o-panel o-panel--topbar is-hidden-mobile">
         <div class="c-topbar">
            <div class="container is-max-widescreen">
               <div class="c-topbar__links is-flex is-align-items-center is-justify-content-flex-end has-text-right">
                  <a href="tel:<?php echo get_field('phone_number', 'options'); ?>" class="c-topbar__link" target="_blank"><?php echo get_field('phone_number', 'options'); ?></a>
                  <a href="mailto:<?php echo get_field('email_address', 'options'); ?>" class="c-topbar__link" target="_blank"><?php echo get_field('email_address', 'options'); ?></a>
               </div>
            </div>
         </div>
      </div><!-- End Topbar Section -->

      <div class="c-header">
         <div class="container is-max-widescreen">
            <div class="columns is-vcentered is-mobile c-header__columns">
               <div class="c-header__col c-header__logo-col">
                  <div class="c-header__logo">
                     <a href="<?php bloginfo('url'); ?>">
                        <img class="is-hidden-mobile" src="<?php echo _TSF_THEME_URI; ?>/assets/img/logo-black.png" alt="TFS Logo">

                        <img class="is-hidden-tablet" src="<?php echo _TSF_THEME_URI; ?>/assets/img/logo-mbl-black.png" alt="TFS Logo">
                     </a>
                  </div>
               </div><!--/ Logo -->

               <div class="c-header__col is-hidden-mobile is-hidden-tablet-only c-header__nav-col">
                  <nav class="s-primary-menu">
                  <?php
                     $defaults = array(
                           'theme_location'  => 'primary_nav',
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
                  </nav>
               </div><!--/ Menu -->

               <div class="c-header__col c-header__cta-col">
                  <div class="c-header__cta has-text-right">
                     <a href="<?php bloginfo('url'); ?>/contact" class="u-button u-button--arrow button is-primary">Contact Us</a>
                  </div>
               </div><!--/ CTA -->
            </div>
         </div>
      </div>
   </header><!-- End Header -->