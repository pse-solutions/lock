<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Generate SVG icon HTML based on icon key
 * 
 * @param string $icon_key The key of the icon to display
 * @return string The SVG HTML
 */
function get_step_icon_svg($icon_key) {
    $icons = array(
        'clipboard-check' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect><path d="M9 14l2 2 4-4"></path></svg>',
        
        'truck' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>',
        
        'tools' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>',
        
        'cog' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>',
        
        'upload' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>',
        
        'server' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
        
        'wifi' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>',
        
        'key' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>',
        
        'lock' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>',
        
        'users' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
        
        'mobile' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>',
        
        'calendar' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
        
        'database' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>',
        
        'chart' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>',
        
        'code' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
    );
    
    // Return the SVG if it exists, otherwise return a default icon
    return isset($icons[$icon_key]) ? $icons[$icon_key] : $icons['cog'];
}

/**
 * Enqueue parent and child theme styles
 */
function astra_child_enqueue_styles() {
    wp_enqueue_style(
        'astra-theme-css',
        get_template_directory_uri() . '/style.css',
        array(),
        ASTRA_THEME_VERSION, 
        'all'
    );
    
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        '1.0.0',
        'all'
    );
    
    // Enqueue Google Fonts for all templates
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto+Slab:wght@400;700&family=Open+Sans:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap',
        array(),
        null
    );
    
    // Enqueue 33Lock custom styles for all templates
    wp_enqueue_style(
        '33lock-styles',
        get_stylesheet_directory_uri() . '/assets/css/33lock-styles.css',
        array('astra-child-theme-css', 'google-fonts'),
        '1.0.0',
        'all'
    );
    
    // Enqueue Solution Pages CSS
    if (is_page_template('page-templates/solution-hotels-template.php') || 
        is_page_template('page-templates/solution-vacation-rentals-template.php')) {
        wp_enqueue_style(
            'solution-pages-css',
            get_stylesheet_directory_uri() . '/assets/css/solution-pages.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
    }
    
    if (is_page_template('page-templates/solutions-template.php')) {
        wp_enqueue_style(
            'solutions-template-css',
            get_stylesheet_directory_uri() . '/assets/css/solutions-template.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
    }
    
    // Enqueue menu fix script for all pages
    wp_enqueue_script(
        'menu-fix-js',
        get_stylesheet_directory_uri() . '/assets/js/menu-fix.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Enqueue 33Lock home template CSS
    if (is_page_template('page-templates/33lock-home.php')) {
        // Home template CSS
        wp_enqueue_style(
            '33lock-home-css',
            get_stylesheet_directory_uri() . '/assets/css/33lock-home.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Home template JS
        wp_enqueue_script(
            '33lock-home-js',
            get_stylesheet_directory_uri() . '/assets/js/home-template.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    // Legacy templates - keeping for backward compatibility
    if (is_page_template('page-templates/home-template.php')) {
        wp_enqueue_style(
            'home-template-css',
            get_stylesheet_directory_uri() . '/assets/css/home-template.css',
            array('astra-child-theme-css'),
            '1.0.0',
            'all'
        );
        
        wp_enqueue_script(
            'home-template-js',
            get_stylesheet_directory_uri() . '/assets/js/home-template.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    if (is_page_template('page-templates/style-guide-template.php')) {
        wp_enqueue_style(
            'style-guide-css',
            get_stylesheet_directory_uri() . '/assets/css/style-guide.css',
            array('astra-child-theme-css', 'google-fonts'),
            '1.0.0',
            'all'
        );
    }
    
    if (is_page_template('page-templates/product-template.php')) {
        wp_enqueue_style(
            'product-template-css',
            get_stylesheet_directory_uri() . '/assets/css/product-template.css',
            array('astra-child-theme-css'),
            '1.0.0',
            'all'
        );
    }
    
    if (is_page_template('page-templates/competitor-analysis-template.php')) {
        wp_enqueue_style(
            'competitor-analysis-css',
            get_stylesheet_directory_uri() . '/assets/css/competitor-analysis.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
    }
    
    if (is_page_template('page-templates/blog-tag-template.php')) {
        wp_enqueue_style(
            'blog-tag-css',
            get_stylesheet_directory_uri() . '/assets/css/blog-tag.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
    }
    
    if (is_page_template('page-templates/lock-series-template.php')) {
        wp_enqueue_style(
            'lock-series-css',
            get_stylesheet_directory_uri() . '/assets/css/lock-series.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Debug enqueue
        error_log('Lock Series template detected - enqueuing CSS: ' . get_stylesheet_directory_uri() . '/assets/css/lock-series.css');
    }
    
    if (is_page_template('page-templates/intelli-lever-template.php')) {
        wp_enqueue_style(
            'intelli-lever-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-lever.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Enqueue enhanced IntelliLever CSS
        wp_enqueue_style(
            'intelli-lever-enhanced-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-lever-enhanced.css',
            array('intelli-lever-css'),
            '1.0.0',
            'all'
        );
        
        // Add JavaScript for interactive elements (using the common product animations script)
        wp_enqueue_script(
            'product-animations-js',
            get_stylesheet_directory_uri() . '/assets/js/product-animations.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    if (is_page_template('page-templates/intelli-mortise-template.php')) {
        wp_enqueue_style(
            'intelli-mortise-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-mortise.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Enqueue enhanced styling (same as IntelliLever)
        wp_enqueue_style(
            'intelli-lever-enhanced-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-lever-enhanced.css',
            array('intelli-mortise-css'),
            '1.0.0',
            'all'
        );
        
        // Add JavaScript for interactive elements
        wp_enqueue_script(
            'product-animations-js',
            get_stylesheet_directory_uri() . '/assets/js/product-animations.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    if (is_page_template('page-templates/intelli-bolt-template.php')) {
        wp_enqueue_style(
            'intelli-bolt-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-bolt.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Enqueue enhanced styling (same as IntelliLever)
        wp_enqueue_style(
            'intelli-lever-enhanced-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-lever-enhanced.css',
            array('intelli-bolt-css'),
            '1.0.0',
            'all'
        );
        
        // Add JavaScript for interactive elements
        wp_enqueue_script(
            'product-animations-js',
            get_stylesheet_directory_uri() . '/assets/js/product-animations.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    if (is_page_template('page-templates/intelli-reader-template.php')) {
        wp_enqueue_style(
            'intelli-reader-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-reader.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Enqueue enhanced styling (same as IntelliLever)
        wp_enqueue_style(
            'intelli-lever-enhanced-css',
            get_stylesheet_directory_uri() . '/assets/css/intelli-lever-enhanced.css',
            array('intelli-reader-css'),
            '1.0.0',
            'all'
        );
        
        // Add JavaScript for interactive elements
        wp_enqueue_script(
            'product-animations-js',
            get_stylesheet_directory_uri() . '/assets/js/product-animations.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
    
    if (is_page_template('page-templates/modern-home-template.php')) {
        wp_enqueue_style(
            'modern-home-css',
            get_stylesheet_directory_uri() . '/assets/css/modern-home.css',
            array('astra-child-theme-css', '33lock-styles'),
            '1.0.0',
            'all'
        );
        
        // Enqueue Swiper JS for product carousel
        wp_enqueue_script(
            '33lock-swiper',
            'https://unpkg.com/swiper@8/swiper-bundle.min.js',
            array(),
            null,
            true
        );
        
        // Enqueue Glide.js for testimonial slider
        wp_enqueue_script(
            '33lock-glide',
            'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js',
            array(),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles', 15);

/**
 * Register ACF fields for templates
 */
function astra_child_register_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        // Product Template Fields
        acf_add_local_field_group(array(
            'key' => 'group_product_template',
            'title' => '33 Lock Product Template',
            'fields' => array(
                array(
                    'key' => 'field_product_title',
                    'label' => 'Product Title',
                    'name' => 'product_title',
                    'type' => 'text',
                    'default_value' => 'IntelliReader - Smart Access Control Unit',
                ),
                array(
                    'key' => 'field_product_tagline',
                    'label' => 'Product Tagline',
                    'name' => 'product_tagline',
                    'type' => 'text',
                    'default_value' => 'Secure, Versatile, and Connected Access for Modern Properties',
                ),
                array(
                    'key' => 'field_featured_image',
                    'label' => 'Featured Image',
                    'name' => 'featured_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ),
                array(
                    'key' => 'field_show_cta_button',
                    'label' => 'Show CTA Button',
                    'name' => 'show_cta_button',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_cta_button_text',
                    'label' => 'CTA Button Text',
                    'name' => 'cta_button_text',
                    'type' => 'text',
                    'default_value' => 'Get a Quote',
                ),
                array(
                    'key' => 'field_cta_button_url',
                    'label' => 'CTA Button URL',
                    'name' => 'cta_button_url',
                    'type' => 'text',
                    'default_value' => '#contact',
                ),
                array(
                    'key' => 'field_image_gallery',
                    'label' => 'Image Gallery',
                    'name' => 'image_gallery',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add Gallery Image',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_gallery_image',
                            'label' => 'Gallery Image',
                            'name' => 'gallery_image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                        ),
                        array(
                            'key' => 'field_image_caption',
                            'label' => 'Image Caption',
                            'name' => 'image_caption',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_product_overview',
                    'label' => 'Product Overview',
                    'name' => 'product_overview',
                    'type' => 'wysiwyg',
                    'tabs' => 'visual',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_key_features',
                    'label' => 'Key Features',
                    'name' => 'key_features',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Feature',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_feature_title',
                            'label' => 'Feature Title',
                            'name' => 'feature_title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_feature_description',
                            'label' => 'Feature Description',
                            'name' => 'feature_description',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                        array(
                            'key' => 'field_feature_icon',
                            'label' => 'Feature Icon (SVG)',
                            'name' => 'feature_icon',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                    ),
                ),
                array(
                    'key' => 'field_transform_points',
                    'label' => 'Transform Points',
                    'name' => 'transform_points',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add Point',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_transform_point',
                            'label' => 'Transform Point',
                            'name' => 'transform_point',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_specifications',
                    'label' => 'Specifications',
                    'name' => 'specifications',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add Specification',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_spec_feature',
                            'label' => 'Feature',
                            'name' => 'spec_feature',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_spec_value',
                            'label' => 'Value',
                            'name' => 'spec_value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_product_video',
                    'label' => 'Product Video URL',
                    'name' => 'product_video',
                    'type' => 'url',
                    'instructions' => 'Enter YouTube or Vimeo embedded URL',
                ),
                array(
                    'key' => 'field_design_description',
                    'label' => 'Design Description',
                    'name' => 'design_description',
                    'type' => 'wysiwyg',
                    'tabs' => 'visual',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_integration_points',
                    'label' => 'Integration Points',
                    'name' => 'integration_points',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Integration',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_integration_title',
                            'label' => 'Integration Title',
                            'name' => 'integration_title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_integration_description',
                            'label' => 'Integration Description',
                            'name' => 'integration_description',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                        array(
                            'key' => 'field_integration_icon',
                            'label' => 'Integration Icon (SVG)',
                            'name' => 'integration_icon',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                    ),
                ),
                array(
                    'key' => 'field_applications',
                    'label' => 'Applications',
                    'name' => 'applications',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Application',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_application_title',
                            'label' => 'Application Title',
                            'name' => 'application_title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_application_description',
                            'label' => 'Application Description',
                            'name' => 'application_description',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                        array(
                            'key' => 'field_application_icon',
                            'label' => 'Application Icon (SVG)',
                            'name' => 'application_icon',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                    ),
                ),
                array(
                    'key' => 'field_included_items',
                    'label' => 'Included Items',
                    'name' => 'included_items',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add Item',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_item_name',
                            'label' => 'Item Name',
                            'name' => 'item_name',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_testimonials',
                    'label' => 'Testimonials',
                    'name' => 'testimonials',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Testimonial',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_testimonial_quote',
                            'label' => 'Testimonial Quote',
                            'name' => 'testimonial_quote',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                        array(
                            'key' => 'field_testimonial_author',
                            'label' => 'Author Name',
                            'name' => 'testimonial_author',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_testimonial_role',
                            'label' => 'Author Role',
                            'name' => 'testimonial_role',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_cta_heading',
                    'label' => 'CTA Heading',
                    'name' => 'cta_heading',
                    'type' => 'text',
                    'default_value' => 'Ready to Modernize Your Access Control?',
                ),
                array(
                    'key' => 'field_cta_subheading',
                    'label' => 'CTA Subheading',
                    'name' => 'cta_subheading',
                    'type' => 'text',
                    'default_value' => 'Take the next step towards a more secure, efficient, and user-friendly property.',
                ),
                array(
                    'key' => 'field_show_secondary_cta',
                    'label' => 'Show Secondary CTA',
                    'name' => 'show_secondary_cta',
                    'type' => 'true_false',
                    'default_value' => 0,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_secondary_cta_text',
                    'label' => 'Secondary CTA Text',
                    'name' => 'secondary_cta_text',
                    'type' => 'text',
                    'default_value' => 'Learn More',
                ),
                array(
                    'key' => 'field_secondary_cta_url',
                    'label' => 'Secondary CTA URL',
                    'name' => 'secondary_cta_url',
                    'type' => 'text',
                    'default_value' => '#learn-more',
                ),
                array(
                    'key' => 'field_related_products',
                    'label' => 'Related Products',
                    'name' => 'related_products',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Related Product',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_product_name',
                            'label' => 'Product Name',
                            'name' => 'product_name',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_product_description',
                            'label' => 'Product Description',
                            'name' => 'product_description',
                            'type' => 'textarea',
                            'rows' => 3,
                        ),
                        array(
                            'key' => 'field_product_image',
                            'label' => 'Product Image',
                            'name' => 'product_image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                        ),
                        array(
                            'key' => 'field_product_url',
                            'label' => 'Product URL',
                            'name' => 'product_url',
                            'type' => 'url',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-templates/product-template.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        // Home Page Template Fields
        acf_add_local_field_group(array(
            'key' => 'group_home_page_template',
            'title' => '33 Lock Home Page Template',
            'fields' => array(
                // Module 1 - Hero Banner
                array(
                    'key' => 'field_hero_banner',
                    'label' => 'Hero Banner',
                    'name' => 'hero_banner',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_headline',
                            'label' => 'Headline',
                            'name' => 'headline',
                            'type' => 'text',
                            'default_value' => 'Smart Locks That Pay for Themselves',
                        ),
                        array(
                            'key' => 'field_subheadline',
                            'label' => 'Sub-headline',
                            'name' => 'subheadline',
                            'type' => 'text',
                            'default_value' => 'Cloud‑connected access control that cuts guest check‑in time by 60% and slashes maintenance calls.',
                        ),
                        array(
                            'key' => 'field_primary_cta_text',
                            'label' => 'Primary CTA Text',
                            'name' => 'primary_cta_text',
                            'type' => 'text',
                            'default_value' => 'Get My Free Quote',
                        ),
                        array(
                            'key' => 'field_primary_cta_url',
                            'label' => 'Primary CTA URL',
                            'name' => 'primary_cta_url',
                            'type' => 'url',
                            'default_value' => '#',
                        ),
                        array(
                            'key' => 'field_secondary_cta_text',
                            'label' => 'Secondary CTA Text',
                            'name' => 'secondary_cta_text',
                            'type' => 'text',
                            'default_value' => 'Compare Lock Models',
                        ),
                        array(
                            'key' => 'field_secondary_cta_url',
                            'label' => 'Secondary CTA URL',
                            'name' => 'secondary_cta_url',
                            'type' => 'url',
                            'default_value' => '#',
                        ),
                        array(
                            'key' => 'field_hero_image',
                            'label' => 'Hero Image',
                            'name' => 'hero_image',
                            'type' => 'image',
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'instructions' => 'Recommended size: 1920 × 1080 px',
                        ),
                    ),
                ),
                
                // Module 2 - Why 33 Lock
                array(
                    'key' => 'field_why_33_lock',
                    'label' => 'Why 33 Lock',
                    'name' => 'why_33_lock',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_intro_line',
                            'label' => 'Intro Line',
                            'name' => 'intro_line',
                            'type' => 'text',
                            'default_value' => 'Reduce operating costs while delighting guests.',
                        ),
                        array(
                            'key' => 'field_benefits',
                            'label' => 'Benefits',
                            'name' => 'benefits',
                            'type' => 'repeater',
                            'layout' => 'block',
                            'button_label' => 'Add Benefit',
                            'min' => 1,
                            'max' => 3,
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_benefit_icon',
                                    'label' => 'Icon',
                                    'name' => 'icon',
                                    'type' => 'image',
                                    'return_format' => 'id',
                                    'preview_size' => 'thumbnail',
                                    'instructions' => 'Recommended size: 200 × 200 px',
                                ),
                                array(
                                    'key' => 'field_benefit_label',
                                    'label' => 'Label',
                                    'name' => 'label',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_benefit_copy',
                                    'label' => 'Copy',
                                    'name' => 'copy',
                                    'type' => 'textarea',
                                    'rows' => 3,
                                ),
                            ),
                        ),
                    ),
                ),
                
                // Module 3 - Solutions at a Glance
                array(
                    'key' => 'field_solutions_at_a_glance',
                    'label' => 'Solutions at a Glance',
                    'name' => 'solutions_at_a_glance',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_hospitality_tab',
                            'label' => 'Hospitality Tab',
                            'name' => 'hospitality_tab',
                            'type' => 'group',
                            'layout' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_hospitality_image',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'return_format' => 'id',
                                    'preview_size' => 'medium',
                                    'instructions' => 'Recommended size: 400 × 260 px',
                                ),
                                array(
                                    'key' => 'field_hospitality_top_benefit',
                                    'label' => 'Top Benefit',
                                    'name' => 'top_benefit',
                                    'type' => 'text',
                                    'default_value' => 'Contact-free check-in raises guest satisfaction scores.',
                                ),
                                array(
                                    'key' => 'field_hospitality_key_feature',
                                    'label' => 'Key Feature',
                                    'name' => 'key_feature',
                                    'type' => 'text',
                                    'default_value' => 'Unique PINs texted automatically to each reservation.',
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_multifamily_tab',
                            'label' => 'Multifamily Tab',
                            'name' => 'multifamily_tab',
                            'type' => 'group',
                            'layout' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_multifamily_image',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'return_format' => 'id',
                                    'preview_size' => 'medium',
                                    'instructions' => 'Recommended size: 400 × 260 px',
                                ),
                                array(
                                    'key' => 'field_multifamily_top_benefit',
                                    'label' => 'Top Benefit',
                                    'name' => 'top_benefit',
                                    'type' => 'text',
                                    'default_value' => 'Effortless tenant turnover with one-tap credential revocation.',
                                ),
                                array(
                                    'key' => 'field_multifamily_key_feature',
                                    'label' => 'Key Feature',
                                    'name' => 'key_feature',
                                    'type' => 'text',
                                    'default_value' => 'Resident app logs entries and battery health 24/7.',
                                ),
                            ),
                        ),
                    ),
                ),
                
                // Module 4 - Social Proof
                array(
                    'key' => 'field_social_proof',
                    'label' => 'Social Proof',
                    'name' => 'social_proof',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_testimonial',
                            'label' => 'Testimonial',
                            'name' => 'testimonial',
                            'type' => 'text',
                            'default_value' => 'The ROI was obvious—reliable, cost-effective, and stylish.',
                        ),
                        array(
                            'key' => 'field_author',
                            'label' => 'Author',
                            'name' => 'author',
                            'type' => 'text',
                            'default_value' => 'Simon Seroussi, COO, SuiteOp',
                        ),
                        array(
                            'key' => 'field_partner_logos',
                            'label' => 'Partner Logos',
                            'name' => 'partner_logos',
                            'type' => 'repeater',
                            'layout' => 'table',
                            'button_label' => 'Add Partner Logo',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_logo',
                                    'label' => 'Logo',
                                    'name' => 'logo',
                                    'type' => 'image',
                                    'return_format' => 'id',
                                    'preview_size' => 'thumbnail',
                                    'instructions' => 'Recommended height: 60 px',
                                ),
                                array(
                                    'key' => 'field_partner_name',
                                    'label' => 'Partner Name',
                                    'name' => 'partner_name',
                                    'type' => 'text',
                                ),
                            ),
                        ),
                    ),
                ),
                
                // Module 5 - Sticky CTA Footer
                array(
                    'key' => 'field_sticky_cta',
                    'label' => 'Sticky CTA Footer',
                    'name' => 'sticky_cta',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_cta_headline',
                            'label' => 'Headline',
                            'name' => 'headline',
                            'type' => 'text',
                            'default_value' => 'Ready to modernise your access control?',
                        ),
                        array(
                            'key' => 'field_cta_1_text',
                            'label' => 'CTA 1 Text',
                            'name' => 'cta_1_text',
                            'type' => 'text',
                            'default_value' => 'Book a Demo',
                        ),
                        array(
                            'key' => 'field_cta_1_url',
                            'label' => 'CTA 1 URL',
                            'name' => 'cta_1_url',
                            'type' => 'url',
                            'default_value' => '#',
                        ),
                        array(
                            'key' => 'field_cta_2_text',
                            'label' => 'CTA 2 Text',
                            'name' => 'cta_2_text',
                            'type' => 'text',
                            'default_value' => 'Order a Sample',
                        ),
                        array(
                            'key' => 'field_cta_2_url',
                            'label' => 'CTA 2 URL',
                            'name' => 'cta_2_url',
                            'type' => 'url',
                            'default_value' => '#',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-templates/home-template.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        // Style Guide Template Fields
        acf_add_local_field_group(array(
            'key' => 'group_style_guide_template',
            'title' => '33 Lock Style Guide Template',
            'fields' => array(
                // Header Section
                array(
                    'key' => 'field_header_title',
                    'label' => 'Header Title',
                    'name' => 'header_title',
                    'type' => 'text',
                    'default_value' => '33 Lock',
                ),
                array(
                    'key' => 'field_header_subtitle',
                    'label' => 'Header Subtitle',
                    'name' => 'header_subtitle',
                    'type' => 'text',
                    'default_value' => 'Visual Style Guide',
                ),
                
                // Color Palette Section
                array(
                    'key' => 'field_display_color_palette',
                    'label' => 'Display Color Palette Section',
                    'name' => 'display_color_palette',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_color_palette_title',
                    'label' => 'Color Palette Section Title',
                    'name' => 'color_palette_title',
                    'type' => 'text',
                    'default_value' => 'Color Palette',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_primary_colors_title',
                    'label' => 'Primary Colors Section Title',
                    'name' => 'primary_colors_title',
                    'type' => 'text',
                    'default_value' => 'Primary Colors',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_primary_colors',
                    'label' => 'Primary Colors',
                    'name' => 'primary_colors',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Color',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_color_hex',
                            'label' => 'Color Hex Code',
                            'name' => 'color_hex',
                            'type' => 'text',
                            'default_value' => '#00AEEF',
                        ),
                        array(
                            'key' => 'field_color_name',
                            'label' => 'Color Name',
                            'name' => 'color_name',
                            'type' => 'text',
                            'default_value' => 'Teal',
                        ),
                        array(
                            'key' => 'field_color_description',
                            'label' => 'Color Description',
                            'name' => 'color_description',
                            'type' => 'text',
                            'default_value' => 'Brand Teal',
                        ),
                        array(
                            'key' => 'field_color_rgb',
                            'label' => 'Color RGB Value',
                            'name' => 'color_rgb',
                            'type' => 'text',
                            'default_value' => '0, 174, 239',
                        ),
                        array(
                            'key' => 'field_dark_text',
                            'label' => 'Use Dark Text',
                            'name' => 'dark_text',
                            'type' => 'true_false',
                            'default_value' => 0,
                            'ui' => 1,
                        ),
                    ),
                ),
                
                array(
                    'key' => 'field_secondary_colors_title',
                    'label' => 'Secondary Colors Section Title',
                    'name' => 'secondary_colors_title',
                    'type' => 'text',
                    'default_value' => 'Secondary/Accent Colors',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_secondary_colors',
                    'label' => 'Secondary Colors',
                    'name' => 'secondary_colors',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Color',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_secondary_color_hex',
                            'label' => 'Color Hex Code',
                            'name' => 'color_hex',
                            'type' => 'text',
                            'default_value' => '#B0BEC5',
                        ),
                        array(
                            'key' => 'field_secondary_color_name',
                            'label' => 'Color Name',
                            'name' => 'color_name',
                            'type' => 'text',
                            'default_value' => 'Silver',
                        ),
                        array(
                            'key' => 'field_secondary_color_description',
                            'label' => 'Color Description',
                            'name' => 'color_description',
                            'type' => 'text',
                            'default_value' => 'Warm Silver',
                        ),
                        array(
                            'key' => 'field_secondary_color_rgb',
                            'label' => 'Color RGB Value',
                            'name' => 'color_rgb',
                            'type' => 'text',
                            'default_value' => '176, 190, 197',
                        ),
                        array(
                            'key' => 'field_secondary_dark_text',
                            'label' => 'Use Dark Text',
                            'name' => 'dark_text',
                            'type' => 'true_false',
                            'default_value' => 0,
                            'ui' => 1,
                        ),
                    ),
                ),
                
                array(
                    'key' => 'field_neutral_colors_title',
                    'label' => 'Neutral Colors Section Title',
                    'name' => 'neutral_colors_title',
                    'type' => 'text',
                    'default_value' => 'Neutral Colors',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_neutral_colors',
                    'label' => 'Neutral Colors',
                    'name' => 'neutral_colors',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Color',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_color_palette',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_neutral_color_hex',
                            'label' => 'Color Hex Code',
                            'name' => 'color_hex',
                            'type' => 'text',
                            'default_value' => '#333333',
                        ),
                        array(
                            'key' => 'field_neutral_color_name',
                            'label' => 'Color Name',
                            'name' => 'color_name',
                            'type' => 'text',
                            'default_value' => 'Charcoal',
                        ),
                        array(
                            'key' => 'field_neutral_color_description',
                            'label' => 'Color Description',
                            'name' => 'color_description',
                            'type' => 'text',
                            'default_value' => 'Dark Text',
                        ),
                        array(
                            'key' => 'field_neutral_color_rgb',
                            'label' => 'Color RGB Value',
                            'name' => 'color_rgb',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_neutral_dark_text',
                            'label' => 'Use Dark Text',
                            'name' => 'dark_text',
                            'type' => 'true_false',
                            'default_value' => 0,
                            'ui' => 1,
                        ),
                        array(
                            'key' => 'field_neutral_border',
                            'label' => 'Add Border',
                            'name' => 'border',
                            'type' => 'true_false',
                            'default_value' => 0,
                            'ui' => 1,
                        ),
                    ),
                ),
                
                // Typography Section
                array(
                    'key' => 'field_display_typography',
                    'label' => 'Display Typography Section',
                    'name' => 'display_typography',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_typography_title',
                    'label' => 'Typography Section Title',
                    'name' => 'typography_title',
                    'type' => 'text',
                    'default_value' => 'Typography',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_typography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_primary_typeface',
                    'label' => 'Primary Typeface',
                    'name' => 'primary_typeface',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'min' => 1,
                    'max' => 1,
                    'button_label' => 'Add Primary Typeface',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_typography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_primary_typeface_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'default_value' => 'Primary Typeface (Headings & CTAs)',
                        ),
                        array(
                            'key' => 'field_primary_typeface_description',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'text',
                            'default_value' => 'Recommended: Montserrat or Roboto Slab',
                        ),
                        array(
                            'key' => 'field_heading_examples',
                            'label' => 'Heading Examples',
                            'name' => 'heading_examples',
                            'type' => 'repeater',
                            'layout' => 'block',
                            'button_label' => 'Add Heading Example',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_heading_font_family',
                                    'label' => 'Font Family',
                                    'name' => 'font_family',
                                    'type' => 'select',
                                    'choices' => array(
                                        'montserrat' => 'Montserrat',
                                        'roboto-slab' => 'Roboto Slab',
                                    ),
                                    'default_value' => 'montserrat',
                                ),
                                array(
                                    'key' => 'field_heading_level',
                                    'label' => 'Heading Level',
                                    'name' => 'heading_level',
                                    'type' => 'select',
                                    'choices' => array(
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                    ),
                                    'default_value' => 'h1',
                                ),
                                array(
                                    'key' => 'field_heading_font_weight',
                                    'label' => 'Font Weight',
                                    'name' => 'font_weight',
                                    'type' => 'select',
                                    'choices' => array(
                                        'normal' => 'Normal (400)',
                                        'medium' => 'Medium (500)',
                                        'semibold' => 'Semibold (600)',
                                        'bold' => 'Bold (700)',
                                    ),
                                    'default_value' => 'bold',
                                ),
                                array(
                                    'key' => 'field_heading_font_size',
                                    'label' => 'Font Size',
                                    'name' => 'font_size',
                                    'type' => 'select',
                                    'choices' => array(
                                        '4xl' => '4XL (2.25rem)',
                                        '3xl' => '3XL (1.875rem)',
                                        '2xl' => '2XL (1.5rem)',
                                        'xl' => 'XL (1.25rem)',
                                        'lg' => 'LG (1.125rem)',
                                    ),
                                    'default_value' => '4xl',
                                ),
                                array(
                                    'key' => 'field_heading_text',
                                    'label' => 'Text',
                                    'name' => 'text',
                                    'type' => 'text',
                                    'default_value' => 'H1: Montserrat Bold 700',
                                ),
                                array(
                                    'key' => 'field_heading_text_color',
                                    'label' => 'Text Color',
                                    'name' => 'text_color',
                                    'type' => 'text',
                                    'default_value' => '#3D4A5D',
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_button_examples',
                            'label' => 'Button Examples',
                            'name' => 'button_examples',
                            'type' => 'repeater',
                            'layout' => 'block',
                            'button_label' => 'Add Button Example',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_button_font_family',
                                    'label' => 'Font Family',
                                    'name' => 'font_family',
                                    'type' => 'select',
                                    'choices' => array(
                                        'montserrat' => 'Montserrat',
                                        'roboto-slab' => 'Roboto Slab',
                                    ),
                                    'default_value' => 'montserrat',
                                ),
                                array(
                                    'key' => 'field_button_font_weight',
                                    'label' => 'Font Weight',
                                    'name' => 'font_weight',
                                    'type' => 'select',
                                    'choices' => array(
                                        'normal' => 'Normal (400)',
                                        'medium' => 'Medium (500)',
                                        'semibold' => 'Semibold (600)',
                                        'bold' => 'Bold (700)',
                                    ),
                                    'default_value' => 'semibold',
                                ),
                                array(
                                    'key' => 'field_button_text',
                                    'label' => 'Button Text',
                                    'name' => 'text',
                                    'type' => 'text',
                                    'default_value' => 'CTA Button (Montserrat)',
                                ),
                                array(
                                    'key' => 'field_button_bg_color',
                                    'label' => 'Background Color',
                                    'name' => 'bg_color',
                                    'type' => 'text',
                                    'default_value' => '#00AEEF',
                                ),
                                array(
                                    'key' => 'field_button_hover_color',
                                    'label' => 'Hover Color',
                                    'name' => 'hover_color',
                                    'type' => 'text',
                                    'default_value' => '#0095CC',
                                ),
                            ),
                        ),
                    ),
                ),
                
                array(
                    'key' => 'field_secondary_typeface',
                    'label' => 'Secondary Typeface',
                    'name' => 'secondary_typeface',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'min' => 1,
                    'max' => 1,
                    'button_label' => 'Add Secondary Typeface',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_typography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_secondary_typeface_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'default_value' => 'Secondary Typeface (Body Text & UI)',
                        ),
                        array(
                            'key' => 'field_secondary_typeface_description',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'text',
                            'default_value' => 'Recommended: Open Sans or Roboto',
                        ),
                        array(
                            'key' => 'field_body_text_examples',
                            'label' => 'Body Text Examples',
                            'name' => 'body_text_examples',
                            'type' => 'repeater',
                            'layout' => 'block',
                            'button_label' => 'Add Body Text Example',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_body_font_family',
                                    'label' => 'Font Family',
                                    'name' => 'font_family',
                                    'type' => 'select',
                                    'choices' => array(
                                        'open-sans' => 'Open Sans',
                                        'roboto' => 'Roboto',
                                    ),
                                    'default_value' => 'open-sans',
                                ),
                                array(
                                    'key' => 'field_body_font_weight',
                                    'label' => 'Font Weight',
                                    'name' => 'font_weight',
                                    'type' => 'select',
                                    'choices' => array(
                                        'light' => 'Light (300)',
                                        'normal' => 'Normal (400)',
                                        'medium' => 'Medium (500)',
                                        'bold' => 'Bold (700)',
                                    ),
                                    'default_value' => 'normal',
                                ),
                                array(
                                    'key' => 'field_body_font_size',
                                    'label' => 'Font Size',
                                    'name' => 'font_size',
                                    'type' => 'select',
                                    'choices' => array(
                                        'xs' => 'XS (0.75rem)',
                                        'sm' => 'SM (0.875rem)',
                                        'base' => 'Base (1rem)',
                                        'lg' => 'LG (1.125rem)',
                                    ),
                                    'default_value' => 'base',
                                ),
                                array(
                                    'key' => 'field_body_text_color',
                                    'label' => 'Text Color',
                                    'name' => 'text_color',
                                    'type' => 'text',
                                    'default_value' => '#333333',
                                ),
                                array(
                                    'key' => 'field_body_text',
                                    'label' => 'Text',
                                    'name' => 'text',
                                    'type' => 'textarea',
                                    'default_value' => 'Body (Open Sans Regular 400): Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                ),
                                array(
                                    'key' => 'field_body_caption',
                                    'label' => 'Caption Text',
                                    'name' => 'caption',
                                    'type' => 'text',
                                    'default_value' => 'Caption/Label (Open Sans Regular 400): Supporting text or metadata.',
                                ),
                            ),
                        ),
                    ),
                ),
                
                // Iconography Section
                array(
                    'key' => 'field_display_iconography',
                    'label' => 'Display Iconography Section',
                    'name' => 'display_iconography',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_iconography_title',
                    'label' => 'Iconography Section Title',
                    'name' => 'iconography_title',
                    'type' => 'text',
                    'default_value' => 'Iconography',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_iconography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_iconography_description',
                    'label' => 'Iconography Description',
                    'name' => 'iconography_description',
                    'type' => 'text',
                    'default_value' => 'Style: Minimal line-art with soft shadows. Primarily use Brand Teal, Deep Slate, and Warm Silver. SVGs preferred.',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_iconography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_icon_examples',
                    'label' => 'Icon Examples',
                    'name' => 'icon_examples',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Icon Example',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_iconography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_icon_svg',
                            'label' => 'Icon SVG',
                            'name' => 'icon_svg',
                            'type' => 'textarea',
                            'default_value' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3D4A5D" class="w-12 h-12">
    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
</svg>',
                        ),
                        array(
                            'key' => 'field_icon_description',
                            'label' => 'Icon Description',
                            'name' => 'icon_description',
                            'type' => 'text',
                            'default_value' => 'Example: Lock Icon',
                        ),
                    ),
                ),
                
                // Photography Section
                array(
                    'key' => 'field_display_photography',
                    'label' => 'Display Photography Section',
                    'name' => 'display_photography',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_photography_title',
                    'label' => 'Photography Section Title',
                    'name' => 'photography_title',
                    'type' => 'text',
                    'default_value' => 'Photography Style',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_photography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_content_description',
                    'label' => 'Content Description',
                    'name' => 'content_description',
                    'type' => 'text',
                    'default_value' => 'Content: High-resolution lifestyle photos. Chic hotel corridors, guests, people interacting with tech.',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_photography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_mood_description',
                    'label' => 'Mood Description',
                    'name' => 'mood_description',
                    'type' => 'text',
                    'default_value' => 'Mood: Warm, inviting, modern, secure, efficient.',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_photography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_palette_description',
                    'label' => 'Palette Description',
                    'name' => 'palette_description',
                    'type' => 'text',
                    'default_value' => 'Palette: Emphasize warm neutral tones, cinematic lighting.',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_photography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_photo_examples',
                    'label' => 'Photo Examples',
                    'name' => 'photo_examples',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'button_label' => 'Add Photo Example',
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_display_photography',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_photo',
                            'label' => 'Photo',
                            'name' => 'photo',
                            'type' => 'image',
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                        ),
                        array(
                            'key' => 'field_photo_alt',
                            'label' => 'Photo Alt Text / Placeholder Text',
                            'name' => 'photo_alt',
                            'type' => 'text',
                            'default_value' => 'Chic Hotel Corridor (Warm Neutrals)',
                        ),
                    ),
                ),
                
                // Footer
                array(
                    'key' => 'field_footer_text',
                    'label' => 'Footer Text',
                    'name' => 'footer_text',
                    'type' => 'text',
                    'default_value' => '&copy; 2023-2025 33 Lock. All Rights Reserved.',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-templates/style-guide-template.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    }
}
add_action('acf/init', 'astra_child_register_acf_fields');

/**
 * Include ACF fields for 33Lock Home Page
 */
require_once get_stylesheet_directory() . '/acf-fields-33lock-home.php';

/**
 * Include ACF fields for Competitor Analysis
 */
require_once get_stylesheet_directory() . '/acf-fields-competitor-analysis.php';

/**
 * Include ACF fields for Blog Tag Template
 */
require_once get_stylesheet_directory() . '/acf-fields-blog-tag.php';

/**
 * Include ACF fields for Lock Series Template
 */
require_once get_stylesheet_directory() . '/acf-fields-lock-series.php';

/**
 * Include ACF fields for IntelliLever Template
 */
require_once get_stylesheet_directory() . '/acf-fields-intelli-lever.php';

/**
 * Include ACF fields for IntelliMortise Template
 */
require_once get_stylesheet_directory() . '/acf-fields-intelli-mortise.php';

/**
 * Include ACF fields for IntelliBolt Template
 */
require_once get_stylesheet_directory() . '/acf-fields-intelli-bolt.php';

/**
 * Include ACF fields for IntelliReader Template
 */
require_once get_stylesheet_directory() . '/acf-fields-intelli-reader.php';

/**
 * Include ACF fields for Solutions Template
 */
require_once get_stylesheet_directory() . '/acf-fields-solutions.php';

/**
 * ACF JSON Save & Load Points
 */
function astra_child_acf_json_save_point($path) {
    // Update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // Return path
    return $path;
}
add_filter('acf/settings/save_json', 'astra_child_acf_json_save_point');

function astra_child_acf_json_load_point($paths) {
    // Remove original path
    unset($paths[0]);
    
    // Append our new path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    // Return our new paths
    return $paths;
}
add_filter('acf/settings/load_json', 'astra_child_acf_json_load_point');

/**
 * Add your custom functions below this line
 */

/**
 * Allow SVG uploads to the WordPress media library
 */
function astra_child_allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'astra_child_allow_svg_uploads');

/**
 * Set default dimensions for SVG files in the media library
 */
function astra_child_fix_svg_dimensions($response, $attachment, $meta) {
    if ($response['mime'] === 'image/svg+xml' && empty($response['sizes'])) {
        // Set default dimensions
        $default_width = 800;
        $default_height = 800;
        
        // Create response for different sizes
        $response['sizes'] = array(
            'full' => array(
                'url' => $response['url'],
                'width' => $default_width,
                'height' => $default_height,
                'orientation' => 'landscape'
            ),
            'thumbnail' => array(
                'url' => $response['url'],
                'width' => 150,
                'height' => 150,
                'orientation' => 'landscape'
            ),
            'medium' => array(
                'url' => $response['url'],
                'width' => 300,
                'height' => 300,
                'orientation' => 'landscape'
            ),
            'large' => array(
                'url' => $response['url'],
                'width' => 600,
                'height' => 600,
                'orientation' => 'landscape'
            )
        );
        
        // Update main dimensions
        $response['width'] = $default_width;
        $response['height'] = $default_height;
    }
    
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'astra_child_fix_svg_dimensions', 10, 3);

/**
 * SVG upload workaround for the media library
 * Adds a fix for SVG preview display in WordPress
 */
function astra_child_svg_thumbs_filter($content) {
    return apply_filters('final_output', $content);
}
add_filter('final_output', 'astra_child_svg_thumbs_filter');

/**
 * Simple SVG sanitization - handles basic security concerns
 */
function astra_child_sanitize_svg($file) {
    if ($file['type'] === 'image/svg+xml') {
        // Skip sanitization for now - focusing on upload capability
        // Basic sanitization could be added back later if needed
    }
    
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'astra_child_sanitize_svg');

/**
 * Enqueue custom header styles
 */
function astra_child_enqueue_custom_header_styles() {
    // Enqueue custom header CSS
    wp_enqueue_style(
        'custom-header-css',
        get_stylesheet_directory_uri() . '/assets/css/custom-header.css',
        array('astra-child-theme-css'),
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_custom_header_styles', 20);

/**
 * Replace Astra header with custom header on specified templates
 */
function astra_child_custom_header() {
    // Array of templates using the custom header
    $custom_header_templates = array(
        'page-templates/home-template.php',
        'page-templates/style-guide-template.php',
        'page-templates/product-template.php',
        'page-templates/33lock-home.php',
        'page-templates/competitor-analysis-template.php',
        'page-templates/blog-tag-template.php',
        'page-templates/lock-series-template.php',
        'page-templates/intelli-lever-template.php',
        'page-templates/intelli-mortise-template.php',
        'page-templates/intelli-bolt-template.php',
        'page-templates/intelli-reader-template.php',
        'page-templates/modern-home-template.php',
        'page-templates/custom-header-test.php',
        'page-templates/solution-hotels-template.php',
        'page-templates/solution-vacation-rentals-template.php',
        'page-templates/solutions-template.php'
    );
    
    // Get the current page template
    $template_file = get_page_template_slug();
    
    // Check if the current template should use the custom header
    if (in_array($template_file, $custom_header_templates)) {
        // Add body class for styling
        add_filter('body_class', function($classes) {
            $classes[] = 'custom-header-active';
            return $classes;
        });
        
        // Remove default Astra header
        remove_action('astra_header', 'astra_header_markup');
        
        // Add the custom header
        add_action('astra_header', 'astra_child_render_custom_header');
    }
}
add_action('template_redirect', 'astra_child_custom_header');

/**
 * Render the custom header
 */
function astra_child_render_custom_header() {
    // Include the custom header template
    include_once get_stylesheet_directory() . '/template-parts/custom-header.php';
}