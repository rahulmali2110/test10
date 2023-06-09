<?php
/**
* Template Name: Contact
* Template Post Type: page
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0 
*/
get_header(); ?>
<section class="section inner--banner">
    <div class="wrap text-center">
        <h1><?php the_title(); ?></h1>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<div id="breadcrumbs"><div class="wrap">','</div></div>' );
            }
        ?>
    </div>
</section>
<section class="section section--contact">
    <div class="pan-gold"></div>
    <div class="wrap">
        <div class="section-heading text-center mb-48">
            <?php if(get_field('touch_with_heading') ){ ?>
            <h2><?php the_field('touch_with_heading'); ?></h2>
            <?php } ?>
            <?php the_content(); ?>
        </div>
        <div class="row">
            <div class="col-4 col-md-6 col-xs-12 mb-md-32">
                <div class="contact__info">
                    <span>
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/ico-address.svg" alt=""> 
                    </span>
                    <h4>Address</h4>
                    <p><?php the_field('address' , 'options'); ?></p>
                </div>
            </div>
            <div class="col-4 col-md-6 col-xs-12 mb-md-32">
                <div class="contact__info">
                    <span>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/ico-contact.svg" alt="">
                    </span>
                    <h4>Contact</h4>
                    <a href="tel:<?php the_field('phone' , 'options'); ?>"><?php the_field('phone_text' , 'options'); ?></a>
                </div>
            </div>
            <div class="col-4 col-md-6 col-xs-12">
                <div class="contact__info">
                    <span>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/ico-gmail.svg" alt="">
                    </span>
                    <h4>E-Mail</h4>
                    <a href="mailto:<?php the_field('email' , 'options'); ?>"><?php the_field('email' , 'options'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--map pt-0">
    <?php if(get_field('map') ){ ?>
    <?php the_field('map'); ?>
    <?php } ?>
    <div class="wrap">
        <div class="contact__form">
            <div class="section-heading text-center">
                <?php if(get_field('feel_contact_heading') ){ ?>
                <h2 class="mt-0"><?php the_field('feel_contact_heading'); ?></h2>
                <?php } ?>

                <?php if(get_field('feel_contact_info') ){ ?>
                <p><?php the_field('feel_contact_info'); ?></p>
                <?php } ?>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="43" title="Contact Us"]'); ?>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/customer-support' ); ?>
<?php get_footer();