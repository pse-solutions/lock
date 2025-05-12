<?php
/**
 * ACF fields for IntelliBolt Product Template
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_intelli_bolt_template',
        'title' => 'IntelliBolt Product Template',
        'fields' => array(
            // Hero Section
            array(
                'key' => 'field_bolt_hero_section',
                'label' => 'Hero Section',
                'name' => 'bolt_hero_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_product_title',
                        'label' => 'Product Title',
                        'name' => 'product_title',
                        'type' => 'text',
                        'default_value' => 'IntelliBolt — Smart Deadbolt Replacement',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_bolt_product_intro',
                        'label' => 'Product Introduction',
                        'name' => 'product_intro',
                        'type' => 'textarea',
                        'default_value' => 'Not your typical off-the-shelf deadbolt. Upgrade legacy keyed locks with a fully keyless, cloud-managed solution that still works offline, keeping doors secure even when Wi-Fi drops. Multi-level permissions let owners, staff, and guests create and share their own keys without calling maintenance.',
                        'rows' => 3,
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_hero_image',
                        'label' => 'Hero Image',
                        'name' => 'hero_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'instructions' => 'Upload the main product image (recommended: 800x800px)',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_specs_button_text',
                        'label' => 'Specifications Button Text',
                        'name' => 'specs_button_text',
                        'type' => 'text',
                        'default_value' => 'View Specs',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_quote_button_text',
                        'label' => 'Quote Button Text',
                        'name' => 'quote_button_text',
                        'type' => 'text',
                        'default_value' => 'Get a Quote',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_quote_button_url',
                        'label' => 'Quote Button URL',
                        'name' => 'quote_button_url',
                        'type' => 'text',
                        'default_value' => '#quote',
                        'required' => 0,
                    ),
                ),
            ),
            
            // Features Section
            array(
                'key' => 'field_bolt_features_section',
                'label' => 'Features Section',
                'name' => 'bolt_features_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_features_title',
                        'label' => 'Features Section Title',
                        'name' => 'features_title',
                        'type' => 'text',
                        'default_value' => 'Key features & benefits',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'min' => 0,
                        'max' => 10,
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_bolt_feature_text',
                                'label' => 'Feature Text',
                                'name' => 'feature_text',
                                'type' => 'textarea',
                                'rows' => 3,
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_bolt_feature_image',
                                'label' => 'Feature Image',
                                'name' => 'feature_image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                                'instructions' => 'Optional image to accompany this feature (recommended: 600x400px)',
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Specifications Section
            array(
                'key' => 'field_bolt_specs_section',
                'label' => 'Specifications Section',
                'name' => 'bolt_specs_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_specs_title',
                        'label' => 'Specifications Section Title',
                        'name' => 'specs_title',
                        'type' => 'text',
                        'default_value' => 'Technical specifications',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_specs',
                        'label' => 'Specifications',
                        'name' => 'specs',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'min' => 0,
                        'button_label' => 'Add Specification',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_bolt_spec_name',
                                'label' => 'Specification Name',
                                'name' => 'spec_name',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_bolt_spec_value',
                                'label' => 'Specification Value',
                                'name' => 'spec_value',
                                'type' => 'text',
                                'required' => 0,
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_bolt_specs_image',
                        'label' => 'Specifications Image',
                        'name' => 'specs_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'instructions' => 'Optional image to accompany specifications (e.g., dimensions diagram)',
                        'required' => 0,
                    ),
                ),
            ),
            
            // Use Cases Section
            array(
                'key' => 'field_bolt_use_cases_section',
                'label' => 'Use Cases Section',
                'name' => 'bolt_use_cases_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_use_cases_title',
                        'label' => 'Use Cases Section Title',
                        'name' => 'use_cases_title',
                        'type' => 'text',
                        'default_value' => 'Perfect for…',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_use_cases',
                        'label' => 'Use Cases',
                        'name' => 'use_cases',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'min' => 0,
                        'button_label' => 'Add Use Case',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_bolt_use_case_text',
                                'label' => 'Use Case Text',
                                'name' => 'use_case_text',
                                'type' => 'text',
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
            
            // CTA Section
            array(
                'key' => 'field_bolt_cta_section',
                'label' => 'CTA Section',
                'name' => 'bolt_cta_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_cta_title',
                        'label' => 'CTA Title',
                        'name' => 'cta_title',
                        'type' => 'text',
                        'default_value' => 'Ready to upgrade?',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_cta_text',
                        'label' => 'CTA Text',
                        'name' => 'cta_text',
                        'type' => 'textarea',
                        'default_value' => 'Eliminate key hassles and start deploying IntelliBolt across your portfolio today.',
                        'rows' => 3,
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_primary_cta_text',
                        'label' => 'Primary CTA Button Text',
                        'name' => 'primary_cta_text',
                        'type' => 'text',
                        'default_value' => 'Get a Free Quote',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_primary_cta_url',
                        'label' => 'Primary CTA Button URL',
                        'name' => 'primary_cta_url',
                        'type' => 'text',
                        'default_value' => '/contact',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_show_secondary_cta',
                        'label' => 'Show Secondary CTA Button',
                        'name' => 'show_secondary_cta',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => 'Yes',
                        'ui_off_text' => 'No',
                    ),
                    array(
                        'key' => 'field_bolt_secondary_cta_text',
                        'label' => 'Secondary CTA Button Text',
                        'name' => 'secondary_cta_text',
                        'type' => 'text',
                        'default_value' => 'Order a Sample',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_bolt_show_secondary_cta',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_secondary_cta_url',
                        'label' => 'Secondary CTA Button URL',
                        'name' => 'secondary_cta_url',
                        'type' => 'text',
                        'default_value' => '/sample',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_bolt_show_secondary_cta',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'required' => 0,
                    ),
                ),
            ),
            
            // Related Products Section
            array(
                'key' => 'field_bolt_related_products_section',
                'label' => 'Related Products Section',
                'name' => 'bolt_related_products_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_bolt_related_products_title',
                        'label' => 'Related Products Section Title',
                        'name' => 'related_products_title',
                        'type' => 'text',
                        'default_value' => 'Complete your smart access ecosystem',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_bolt_related_products',
                        'label' => 'Related Products',
                        'name' => 'related_products',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'min' => 0,
                        'max' => 3,
                        'button_label' => 'Add Related Product',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_bolt_related_product_title',
                                'label' => 'Product Title',
                                'name' => 'product_title',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_bolt_related_product_description',
                                'label' => 'Product Description',
                                'name' => 'product_description',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_bolt_related_product_image',
                                'label' => 'Product Image',
                                'name' => 'product_image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_bolt_related_product_url',
                                'label' => 'Product URL',
                                'name' => 'product_url',
                                'type' => 'text',
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/intelli-bolt-template.php',
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