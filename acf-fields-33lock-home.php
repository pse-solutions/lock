<?php
/**
 * ACF fields for 33Lock Home Page
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_33lock_home_template',
        'title' => '33Lock Home Page Template',
        'fields' => array(
            // Hero Banner
            array(
                'key' => 'field_hero_section',
                'label' => 'Hero Section',
                'name' => 'hero_section',
                'type' => 'group',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hero_image',
                        'label' => 'Hero Image',
                        'name' => 'hero_image',
                        'type' => 'image',
                        'instructions' => 'Upload a hero image (recommended size: 800 x 600px)',
                        'required' => 0,
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'mime_types' => 'jpg, jpeg, png',
                    ),
                    array(
                        'key' => 'field_hero_heading',
                        'label' => 'Heading',
                        'name' => 'heading',
                        'type' => 'text',
                        'default_value' => 'Smart Locks That Pay for Themselves',
                    ),
                    array(
                        'key' => 'field_hero_subheading',
                        'label' => 'Subheading',
                        'name' => 'subheading',
                        'type' => 'text',
                        'default_value' => 'Cloud‑connected access control that cuts check‑in time by 60% and slashes maintenance calls.',
                    ),
                ),
            ),
            
            // Solutions Section
            array(
                'key' => 'field_solutions_section',
                'label' => 'Solutions Section',
                'name' => 'solutions_section',
                'type' => 'group',
                'sub_fields' => array(
                    // Hospitality Tab
                    array(
                        'key' => 'field_hospitality_tab',
                        'label' => 'Hospitality Tab',
                        'name' => 'hospitality_tab',
                        'type' => 'group',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_hospitality_image',
                                'label' => 'Hospitality Image',
                                'name' => 'image',
                                'type' => 'image',
                                'instructions' => 'Upload an image for the hospitality tab',
                                'required' => 0,
                                'return_format' => 'id',
                                'preview_size' => 'medium',
                                'mime_types' => 'jpg, jpeg, png',
                            ),
                            array(
                                'key' => 'field_hospitality_heading',
                                'label' => 'Heading',
                                'name' => 'heading',
                                'type' => 'text',
                                'default_value' => 'Streamline Hotel Operations',
                            ),
                            array(
                                'key' => 'field_hospitality_benefit',
                                'label' => 'Top Benefit',
                                'name' => 'benefit',
                                'type' => 'text',
                                'default_value' => 'Contact-free check-in raises guest satisfaction scores and reduces front desk congestion.',
                            ),
                            array(
                                'key' => 'field_hospitality_feature',
                                'label' => 'Key Feature',
                                'name' => 'feature',
                                'type' => 'text',
                                'default_value' => 'Unique PINs texted automatically to each reservation, with seamless PMS integration.',
                            ),
                        ),
                    ),
                    
                    // Multifamily Tab
                    array(
                        'key' => 'field_multifamily_tab',
                        'label' => 'Multifamily Tab',
                        'name' => 'multifamily_tab',
                        'type' => 'group',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_multifamily_image',
                                'label' => 'Multifamily Image',
                                'name' => 'image',
                                'type' => 'image',
                                'instructions' => 'Upload an image for the multifamily tab',
                                'required' => 0,
                                'return_format' => 'id',
                                'preview_size' => 'medium',
                                'mime_types' => 'jpg, jpeg, png',
                            ),
                            array(
                                'key' => 'field_multifamily_heading',
                                'label' => 'Heading',
                                'name' => 'heading',
                                'type' => 'text',
                                'default_value' => 'Effortless Tenant Turnover',
                            ),
                            array(
                                'key' => 'field_multifamily_benefit',
                                'label' => 'Top Benefit',
                                'name' => 'benefit',
                                'type' => 'text',
                                'default_value' => 'One-tap credential revocation for past tenants, with immediate access for new residents.',
                            ),
                            array(
                                'key' => 'field_multifamily_feature',
                                'label' => 'Key Feature',
                                'name' => 'feature',
                                'type' => 'text',
                                'default_value' => 'Resident app logs entries and reports battery health 24/7, reducing maintenance calls.',
                            ),
                        ),
                    ),
                ),
            ),
            
            // Product Images
            array(
                'key' => 'field_product_images',
                'label' => 'Product Images',
                'name' => 'product_images',
                'type' => 'gallery',
                'instructions' => 'Upload images for the 3 products (IntelliMortise, IntelliLever, and IntelliReader, in that order).',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'min' => 0,
                'max' => 3,
                'mime_types' => 'jpg, jpeg, png',
            ),
            
            // Integration Image
            array(
                'key' => 'field_integration_image',
                'label' => 'Integration Image',
                'name' => 'integration_image',
                'type' => 'image',
                'instructions' => 'Upload an image for the integration section.',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'mime_types' => 'jpg, jpeg, png',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/33lock-home.php',
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