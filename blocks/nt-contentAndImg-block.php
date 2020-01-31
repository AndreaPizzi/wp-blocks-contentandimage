<?php
/**
 * Block Name: NTnext - Content and image Block
 *
 * This is the template that displays a basic content and image block - NTnext - ContenAndImage Block.
 */

$id = 'ntnext_block-' . $block['id'];

?>

<section id="<?php echo $id; ?>" class="grid-container block__nt-contentimage  full" style="background-color:<?php echo get_field('background_color'); ?>">
    <div class="<?php if ( get_field('size') ) : ?> <?php echo get_field('size'); ?> <?php endif; ?>">        
        <div class="row contentimage_wrp">
            <div class="col col-md-6 col-lg-8">
            <?php if ( get_field('set_form_title') ) : ?>
                <h2 class="title"><?php echo get_field('set_form_title'); ?></h2>
            <?php endif; ?>
            <?php if ( get_field('set_form_subtitle') ) : ?>
                <small class="sub_title"><?php echo get_field('set_form_subtitle'); ?></small>
            <?php endif; ?>
            <?php if ( get_field('content') ) : ?>
                <div class="conts_wrp"><?php echo get_field('content'); ?></div>
            <?php endif; ?>            
            
            </div>
            <div class="col col-md-6 col-lg-4">
            <?php if ( get_field('image_url') ) : ?>
                <a href="<?php echo get_field('image_url'); ?>" target="_blank">
            <?php endif; ?>  
                <?php $image = get_field('image');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php if ( get_field('image_title') ) : ?>
                    <span class="image_title"><?php echo get_field('image_title'); ?></span>
                <?php endif; ?>    
            <?php if ( get_field('image_url') ) : ?>
                </a>
            <?php endif; ?>  
            </div>
        </div>
    </div>
</section>
