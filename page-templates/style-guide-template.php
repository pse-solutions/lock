<?php
/**
 * Template Name: Style Guide Template
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <div class="container mx-auto max-w-5xl bg-white p-6 md:p-10 rounded-lg shadow-xl">

            <header class="mb-12 text-center">
                <?php 
                $header_title = get_field('header_title') ?: '33 Lock';
                $header_subtitle = get_field('header_subtitle') ?: 'Visual Style Guide';
                ?>
                <h1 class="font-montserrat font-bold text-5xl text-[#3D4A5D]"><?php echo esc_html($header_title); ?></h1>
                <p class="font-montserrat text-3xl text-[#00AEEF] mt-2"><?php echo esc_html($header_subtitle); ?></p>
            </header>

            <?php if(get_field('display_color_palette')): ?>
            <section class="mb-12">
                <h2 class="section-title"><?php echo esc_html(get_field('color_palette_title') ?: 'Color Palette'); ?></h2>

                <h3 class="subsection-title"><?php echo esc_html(get_field('primary_colors_title') ?: 'Primary Colors'); ?></h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <?php 
                    // Check if ACF data exists, otherwise use the imported values
                    if(have_rows('primary_colors')): 
                        while(have_rows('primary_colors')): the_row(); 
                            $color_hex = get_sub_field('color_hex');
                            $color_name = get_sub_field('color_name');
                            $color_description = get_sub_field('color_description');
                            $color_rgb = get_sub_field('color_rgb');
                            $dark_text = get_sub_field('dark_text');
                    ?>
                    <div>
                        <div class="swatch <?php echo $dark_text ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color_hex); ?>;"><span><?php echo esc_html($color_name); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color_description); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color_hex); ?></p>
                        <?php if($color_rgb): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color_rgb); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endwhile; 
                    else:
                        // Use the imported color values if no ACF data exists
                        $primary_colors = array(
                            array('hex' => '#00AEEF', 'name' => 'Teal', 'description' => 'Brand Teal', 'rgb' => '0, 174, 239', 'dark_text' => false),
                            array('hex' => '#3D4A5D', 'name' => 'Slate', 'description' => 'Deep Slate', 'rgb' => '61, 74, 93', 'dark_text' => false)
                        );
                        
                        foreach($primary_colors as $color):
                    ?>
                    <div>
                        <div class="swatch <?php echo $color['dark_text'] ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color['hex']); ?>;"><span><?php echo esc_html($color['name']); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color['description']); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color['hex']); ?></p>
                        <?php if(!empty($color['rgb'])): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color['rgb']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>

                <h3 class="subsection-title"><?php echo esc_html(get_field('secondary_colors_title') ?: 'Secondary/Accent Colors'); ?></h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <?php 
                    if(have_rows('secondary_colors')): 
                        while(have_rows('secondary_colors')): the_row(); 
                            $color_hex = get_sub_field('color_hex');
                            $color_name = get_sub_field('color_name');
                            $color_description = get_sub_field('color_description');
                            $color_rgb = get_sub_field('color_rgb');
                            $dark_text = get_sub_field('dark_text');
                    ?>
                    <div>
                        <div class="swatch <?php echo $dark_text ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color_hex); ?>;"><span><?php echo esc_html($color_name); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color_description); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color_hex); ?></p>
                        <?php if($color_rgb): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color_rgb); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Use the imported color values if no ACF data exists
                        $secondary_colors = array(
                            array('hex' => '#B0BEC5', 'name' => 'Silver', 'description' => 'Warm Silver', 'rgb' => '176, 190, 197', 'dark_text' => true),
                            array('hex' => '#D4AF37', 'name' => 'Gold', 'description' => 'Accent Gold', 'rgb' => '212, 175, 55', 'dark_text' => false),
                            array('hex' => '#F5E8D7', 'name' => 'Beige', 'description' => 'Warm Beige', 'rgb' => '245, 232, 215', 'dark_text' => true)
                        );
                        
                        foreach($secondary_colors as $color):
                    ?>
                    <div>
                        <div class="swatch <?php echo $color['dark_text'] ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color['hex']); ?>;"><span><?php echo esc_html($color['name']); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color['description']); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color['hex']); ?></p>
                        <?php if(!empty($color['rgb'])): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color['rgb']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>

                <h3 class="subsection-title"><?php echo esc_html(get_field('neutral_colors_title') ?: 'Neutral Colors'); ?></h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6">
                    <?php 
                    if(have_rows('neutral_colors')): 
                        while(have_rows('neutral_colors')): the_row(); 
                            $color_hex = get_sub_field('color_hex');
                            $color_name = get_sub_field('color_name');
                            $color_description = get_sub_field('color_description');
                            $color_rgb = get_sub_field('color_rgb');
                            $dark_text = get_sub_field('dark_text');
                            $border = get_sub_field('border');
                    ?>
                    <div>
                        <div class="swatch <?php echo $dark_text ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color_hex); ?>;<?php echo $border ? 'border: 1px solid #eee;' : ''; ?>"><span><?php echo esc_html($color_name); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color_description); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color_hex); ?></p>
                        <?php if($color_rgb): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color_rgb); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endwhile; 
                    else:
                        // Use the imported color values if no ACF data exists
                        $neutral_colors = array(
                            array('hex' => '#333333', 'name' => 'Charcoal', 'description' => 'Dark Text', 'rgb' => '', 'dark_text' => false, 'border' => false),
                            array('hex' => '#777777', 'name' => 'Med Gray', 'description' => 'Medium Gray', 'rgb' => '', 'dark_text' => false, 'border' => false),
                            array('hex' => '#F0F0F0', 'name' => 'BG Gray', 'description' => 'Light BG Gray', 'rgb' => '', 'dark_text' => true, 'border' => false),
                            array('hex' => '#FFFFFF', 'name' => 'White', 'description' => 'White', 'rgb' => '', 'dark_text' => true, 'border' => true)
                        );
                        
                        foreach($neutral_colors as $color):
                    ?>
                    <div>
                        <div class="swatch <?php echo $color['dark_text'] ? 'dark-text' : ''; ?>" style="background-color: <?php echo esc_attr($color['hex']); ?>;<?php echo $color['border'] ? 'border: 1px solid #eee;' : ''; ?>"><span><?php echo esc_html($color['name']); ?></span></div>
                        <p class="mt-2 text-sm font-medium"><?php echo esc_html($color['description']); ?></p>
                        <p class="text-xs text-gray-600">HEX: <?php echo esc_html($color['hex']); ?></p>
                        <?php if(!empty($color['rgb'])): ?>
                        <p class="text-xs text-gray-600">RGB: <?php echo esc_html($color['rgb']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if(get_field('display_typography')): ?>
            <section class="mb-12">
                <h2 class="section-title"><?php echo esc_html(get_field('typography_title') ?: 'Typography'); ?></h2>

                <div class="mb-8 p-6 bg-gray-50 rounded-lg">
                    <h3 class="subsection-title mt-0"><?php echo esc_html(get_field('primary_typeface')[0]['title'] ?: 'Primary Typeface (Headings & CTAs)'); ?></h3>
                    <p class="text-sm text-gray-600 mb-1"><?php echo esc_html(get_field('primary_typeface')[0]['description'] ?: 'Recommended: Montserrat or Roboto Slab'); ?></p>

                    <?php 
                    if(have_rows('primary_typeface')): 
                        while(have_rows('primary_typeface')): the_row();
                            if(have_rows('heading_examples')): 
                                while(have_rows('heading_examples')): the_row(); 
                                    $font_family = get_sub_field('font_family');
                                    $heading_level = get_sub_field('heading_level');
                                    $font_weight = get_sub_field('font_weight');
                                    $font_size = get_sub_field('font_size');
                                    $text = get_sub_field('text');
                                    $text_color = get_sub_field('text_color') ?: '#3D4A5D';
                    ?>
                    <p class="font-<?php echo esc_attr($font_family); ?> text-<?php echo esc_attr($font_size); ?> font-<?php echo esc_attr($font_weight); ?> text-[<?php echo esc_attr($text_color); ?>] my-3"><?php echo esc_html($text); ?></p>
                    <?php 
                                endwhile; 
                            endif;
                    
                            if(have_rows('button_examples')): 
                                while(have_rows('button_examples')): the_row(); 
                                    $font_family = get_sub_field('font_family');
                                    $font_weight = get_sub_field('font_weight');
                                    $text = get_sub_field('text');
                                    $bg_color = get_sub_field('bg_color') ?: '#00AEEF';
                                    $hover_color = get_sub_field('hover_color') ?: '#0095CC';
                    ?>
                    <button class="font-<?php echo esc_attr($font_family); ?> font-<?php echo esc_attr($font_weight); ?> text-white bg-[<?php echo esc_attr($bg_color); ?>] hover:bg-[<?php echo esc_attr($hover_color); ?>] py-2 px-6 rounded-md text-lg my-3 transition-colors duration-150">
                        <?php echo esc_html($text); ?>
                    </button>
                    <?php 
                                endwhile; 
                            endif;
                        endwhile; 
                    else:
                        // Fallback heading examples if ACF data is not available
                        $heading_examples = array(
                            array('font_family' => 'montserrat', 'font_weight' => 'bold', 'font_size' => '4xl', 'text' => 'H1: Montserrat Bold 700', 'text_color' => '#3D4A5D'),
                            array('font_family' => 'roboto-slab', 'font_weight' => 'bold', 'font_size' => '4xl', 'text' => 'H1: Roboto Slab Bold 700', 'text_color' => '#3D4A5D'),
                            array('font_family' => 'montserrat', 'font_weight' => 'medium', 'font_size' => '3xl', 'text' => 'H2: Montserrat Medium 500', 'text_color' => '#3D4A5D'),
                            array('font_family' => 'roboto-slab', 'font_weight' => 'normal', 'font_size' => '3xl', 'text' => 'H2: Roboto Slab Regular 400', 'text_color' => '#3D4A5D'),
                            array('font_family' => 'montserrat', 'font_weight' => 'medium', 'font_size' => 'xl', 'text' => 'H3: Montserrat Medium 500', 'text_color' => '#3D4A5D'),
                            array('font_family' => 'roboto-slab', 'font_weight' => 'normal', 'font_size' => 'xl', 'text' => 'H3: Roboto Slab Regular 400', 'text_color' => '#3D4A5D')
                        );
                        
                        foreach($heading_examples as $example):
                    ?>
                    <p class="font-<?php echo esc_attr($example['font_family']); ?> text-<?php echo esc_attr($example['font_size']); ?> font-<?php echo esc_attr($example['font_weight']); ?> text-[<?php echo esc_attr($example['text_color']); ?>] my-3"><?php echo esc_html($example['text']); ?></p>
                    <?php 
                        endforeach;
                        
                        // Fallback button examples
                        $button_examples = array(
                            array('font_family' => 'montserrat', 'font_weight' => 'semibold', 'text' => 'CTA Button (Montserrat)', 'bg_color' => '#00AEEF', 'hover_color' => '#0095CC'),
                            array('font_family' => 'roboto-slab', 'font_weight' => 'bold', 'text' => 'CTA Button (Roboto Slab)', 'bg_color' => '#00AEEF', 'hover_color' => '#0095CC')
                        );
                        
                        foreach($button_examples as $example):
                    ?>
                    <button class="font-<?php echo esc_attr($example['font_family']); ?> font-<?php echo esc_attr($example['font_weight']); ?> text-white bg-[<?php echo esc_attr($example['bg_color']); ?>] hover:bg-[<?php echo esc_attr($example['hover_color']); ?>] py-2 px-6 rounded-md text-lg my-3 transition-colors duration-150">
                        <?php echo esc_html($example['text']); ?>
                    </button>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>

                <div class="p-6 bg-gray-50 rounded-lg">
                    <h3 class="subsection-title mt-0"><?php echo esc_html(get_field('secondary_typeface')[0]['title'] ?: 'Secondary Typeface (Body Text & UI)'); ?></h3>
                    <p class="text-sm text-gray-600 mb-1"><?php echo esc_html(get_field('secondary_typeface')[0]['description'] ?: 'Recommended: Open Sans or Roboto'); ?></p>

                    <?php 
                    if(have_rows('secondary_typeface')): 
                        while(have_rows('secondary_typeface')): the_row();
                            if(have_rows('body_text_examples')): 
                                while(have_rows('body_text_examples')): the_row(); 
                                    $font_family = get_sub_field('font_family');
                                    $font_weight = get_sub_field('font_weight');
                                    $font_size = get_sub_field('font_size') ?: 'base';
                                    $text_color = get_sub_field('text_color') ?: '#333333';
                                    $text = get_sub_field('text');
                                    $caption = get_sub_field('caption');
                    ?>
                    <p class="font-<?php echo esc_attr($font_family); ?> text-<?php echo esc_attr($font_size); ?> text-[<?php echo esc_attr($text_color); ?>] my-3 leading-relaxed">
                        <?php echo esc_html($text); ?>
                    </p>
                    <?php if($caption): ?>
                    <p class="font-<?php echo esc_attr($font_family); ?> text-sm text-gray-600 my-3">
                        <?php echo esc_html($caption); ?>
                    </p>
                    <?php endif; ?>
                    <?php 
                                endwhile; 
                            endif; 
                        endwhile; 
                    else:
                        // Fallback body text examples
                        $body_text_examples = array(
                            array(
                                'font_family' => 'open-sans', 
                                'font_weight' => 'normal', 
                                'font_size' => 'base', 
                                'text_color' => '#333333',
                                'text' => 'Body (Open Sans Regular 400): Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                'caption' => 'Caption/Label (Open Sans Regular 400): Supporting text or metadata.'
                            ),
                            array(
                                'font_family' => 'roboto', 
                                'font_weight' => 'normal', 
                                'font_size' => 'base', 
                                'text_color' => '#333333',
                                'text' => 'Body (Roboto Regular 400): Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                'caption' => 'Caption/Label (Roboto Light 300): Supporting text or metadata.'
                            )
                        );
                        
                        foreach($body_text_examples as $example):
                    ?>
                    <p class="font-<?php echo esc_attr($example['font_family']); ?> text-<?php echo esc_attr($example['font_size']); ?> text-[<?php echo esc_attr($example['text_color']); ?>] my-3 leading-relaxed">
                        <?php echo esc_html($example['text']); ?>
                    </p>
                    <p class="font-<?php echo esc_attr($example['font_family']); ?> text-sm text-gray-600 my-3">
                        <?php echo esc_html($example['caption']); ?>
                    </p>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if(get_field('display_iconography')): ?>
            <section class="mb-12">
                <h2 class="section-title"><?php echo esc_html(get_field('iconography_title') ?: 'Iconography'); ?></h2>
                <p class="mb-4 text-gray-700"><?php echo esc_html(get_field('iconography_description') ?: 'Style: Minimal line-art with soft shadows. Primarily use Brand Teal, Deep Slate, and Warm Silver. SVGs preferred.'); ?></p>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6">
                    <?php 
                    if(have_rows('icon_examples')): 
                        while(have_rows('icon_examples')): the_row(); 
                            $icon_svg = get_sub_field('icon_svg');
                            $icon_description = get_sub_field('icon_description');
                    ?>
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <?php echo $icon_svg; // This is already escaped by ACF ?>
                        </div>
                        <p class="mt-2 text-sm text-gray-600"><?php echo esc_html($icon_description); ?></p>
                    </div>
                    <?php 
                        endwhile;
                    else: 
                        // Fallback icon examples
                        $icon_examples = array(
                            array(
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3D4A5D" class="w-12 h-12">
    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
</svg>',
                                'description' => 'Example: Lock Icon'
                            ),
                            array(
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF" class="w-12 h-12">
     <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.219 12.768 11 12 11c-.768 0-1.536.219-2.121.659L9 12.5m3 2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 14.219 12.768 14 12 14c-.768 0-1.536.219-2.121.659L9 15.5m-3-1.5a.75.75 0 100-1.5.75.75 0 000 1.5zM12 21a.75.75 0 100-1.5.75.75 0 000 1.5zM3 12a.75.75 0 100-1.5.75.75 0 000 1.5z" />
</svg>',
                                'description' => 'Example: Cost Icon'
                            ),
                            array(
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#B0BEC5" class="w-12 h-12">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
</svg>',
                                'description' => 'Example: API Icon'
                            )
                        );
                        
                        foreach($icon_examples as $example):
                    ?>
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <?php echo $example['svg']; ?>
                        </div>
                        <p class="mt-2 text-sm text-gray-600"><?php echo esc_html($example['description']); ?></p>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>
            <?php endif; ?>

            <?php if(get_field('display_photography')): ?>
            <section class="mb-12">
                <h2 class="section-title"><?php echo esc_html(get_field('photography_title') ?: 'Photography Style'); ?></h2>
                <?php 
                $content_description = get_field('content_description') ?: 'Content: High-resolution lifestyle photos. Chic hotel corridors, guests, people interacting with tech.'; 
                $mood_description = get_field('mood_description') ?: 'Mood: Warm, inviting, modern, secure, efficient.';
                $palette_description = get_field('palette_description') ?: 'Palette: Emphasize warm neutral tones, cinematic lighting.';
                ?>
                <p class="mb-1 text-gray-700"><?php echo esc_html($content_description); ?></p>
                <p class="mb-1 text-gray-700"><?php echo esc_html($mood_description); ?></p>
                <p class="mb-4 text-gray-700"><?php echo esc_html($palette_description); ?></p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php 
                    if(have_rows('photo_examples')): 
                        while(have_rows('photo_examples')): the_row(); 
                            $photo = get_sub_field('photo');
                            $photo_alt = get_sub_field('photo_alt');
                    ?>
                    <div class="photo-placeholder h-64">
                        <?php if($photo): ?>
                            <?php echo wp_get_attachment_image($photo, 'large', false, array('alt' => esc_attr($photo_alt), 'class' => 'w-full h-full object-cover')); ?>
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-500">
                                <?php echo esc_html($photo_alt ?: 'Photo placeholder'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Fallback photo examples
                        $photo_examples = array(
                            'Chic Hotel Corridor (Warm Neutrals)',
                            'Guest Interaction (Modern Tech)'
                        );
                        
                        foreach($photo_examples as $example):
                    ?>
                    <div class="photo-placeholder h-64">
                        <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-500">
                            <?php echo esc_html($example); ?>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>
            <?php endif; ?>

            <footer class="mt-12 pt-8 border-t border-gray-300 text-center">
                <p class="text-sm text-gray-500"><?php echo esc_html(get_field('footer_text') ?: '&copy; 2023-2025 33 Lock. All Rights Reserved.'); ?></p>
            </footer>

        </div>
        
    </main>
</div>

<?php
get_footer();
?>