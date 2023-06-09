<?php
/**
* Template Name: About Us
* Template Post Type: page
*
* @package WordPress testing new-branch
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
<section class="section section--healthy">
    <div class="pan-gold"></div>
    <div class="wrap">
        <?php if(get_field('healthy_heading') ){ ?>
        <h2 class="text-center"><?php the_field('healthy_heading'); ?></h2>
        <?php } ?>
        <?php if( have_rows('healthy_store') ): ?>
        <div class="row">
            <?php if(get_field('healthy_image') ){ ?>
            <div class="col-5 col-md-12 mb-md-32">
                <<?php echo wp_get_attachment_image( get_field('healthy_image'), 'full'); ?>
            </div>
            <?php } ?>
            <div class="col-7 col-md-12">
                <ul>
                    <?php  while( have_rows('healthy_store') ): the_row();  ?>
                    <li>
                        <?php if(get_sub_field('image') ){ ?>
                            <div>
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full'); ?>
                            </div>
                        <?php } ?>
                        <?php if(get_sub_field('info') ){ ?>
                        <p><?php the_sub_field('info'); ?></p>
                        <?php } ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<section class="section section--freshproduce pt-0">
    <div class="wrap bg-dark">
        <div class="pan-white"></div>
        <div class="row">
            <div class="col-5 col-md-6 col-sm-12 mb-sm-32">
                <?php if(get_field('fresh_heading') ){ ?>
                <h2 class="mt-0"><?php the_field('fresh_heading'); ?></h2>
                <?php } ?>
                <?php the_content(); ?>

                <?php if(get_field('fresh_link_text') ){ ?>
                <a href="<?php the_field('fresh_link'); ?>" class="btn"><?php the_field('fresh_link_text'); ?></a>
                <?php } ?>
            </div>
            <?php if(get_field('fresh_image') ){ ?>
            <div class="col-7 col-md-6 col-sm-12">
                <?php echo wp_get_attachment_image( get_field('fresh_image'), 'full'); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/customer-support' ); ?>
<?php get_footer();