<?php
/**
 * ACF fields for IntelliLever Product Template
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_intelli_lever_template',
        'title' => 'IntelliLever Product Template',
        'fields' => array(
            // Hero Section
            array(
                'key' => 'field_lever_hero_section',
                'label' => 'Hero Section',
                'name' => 'lever_hero_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_product_title',
                        'label' => 'Product Title',
                        'name' => 'product_title',
                        'type' => 'text',
                        'default_value' => 'Meet IntelliLever',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_lever_product_subtitle',
                        'label' => 'Product Subtitle',
                        'name' => 'product_subtitle',
                        'type' => 'text',
                        'default_value' => 'Effortless smart access for interior doors',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_product_intro',
                        'label' => 'Product Introduction',
                        'name' => 'product_intro',
                        'type' => 'textarea',
                        'default_value' => 'No deadbolt? No problem. IntelliLever replaces almost any lever or knob set, turning back‑of‑house, staff, and guest‑room doors into fully connected entry points—without breaking the bank or the drywall.',
                        'rows' => 3,
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_hero_image',
                        'label' => 'Hero Image',
                        'name' => 'hero_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'instructions' => 'Upload the main product image (recommended: 800x800px)',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_specs_button_text',
                        'label' => 'Specifications Button Text',
                        'name' => 'specs_button_text',
                        'type' => 'text',
                        'default_value' => 'View Specs',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_quote_button_text',
                        'label' => 'Quote Button Text',
                        'name' => 'quote_button_text',
                        'type' => 'text',
                        'default_value' => 'Get a Quote',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_quote_button_url',
                        'label' => 'Quote Button URL',
                        'name' => 'quote_button_url',
                        'type' => 'text',
                        'default_value' => '#quote',
                        'required' => 0,
                    ),
                ),
            ),
            
            // Benefits Section
            array(
                'key' => 'field_lever_benefits_section',
                'label' => 'Benefits Section',
                'name' => 'lever_benefits_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_benefits_title',
                        'label' => 'Benefits Section Title',
                        'name' => 'benefits_title',
                        'type' => 'text',
                        'default_value' => 'Why properties choose IntelliLever',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_benefits',
                        'label' => 'Benefits',
                        'name' => 'benefits',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'min' => 0,
                        'max' => 6,
                        'button_label' => 'Add Benefit',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_lever_benefit_icon',
                                'label' => 'Benefit Icon (SVG)',
                                'name' => 'benefit_icon',
                                'type' => 'textarea',
                                'rows' => 3,
                                'instructions' => 'Enter SVG code for the icon (24x24 viewBox recommended)',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_benefit_title',
                                'label' => 'Benefit Title',
                                'name' => 'benefit_title',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_benefit_description',
                                'label' => 'Benefit Description',
                                'name' => 'benefit_description',
                                'type' => 'textarea',
                                'rows' => 3,
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Specifications Section
            array(
                'key' => 'field_lever_specs_section',
                'label' => 'Specifications Section',
                'name' => 'lever_specs_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_specs_title',
                        'label' => 'Specifications Section Title',
                        'name' => 'specs_title',
                        'type' => 'text',
                        'default_value' => 'At‑a‑Glance Specifications',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_specs',
                        'label' => 'Specifications',
                        'name' => 'specs',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'min' => 0,
                        'button_label' => 'Add Specification',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_lever_spec_name',
                                'label' => 'Specification Name',
                                'name' => 'spec_name',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_spec_value',
                                'label' => 'Specification Value',
                                'name' => 'spec_value',
                                'type' => 'text',
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Features Section
            array(
                'key' => 'field_lever_features_section',
                'label' => 'Features Section',
                'name' => 'lever_features_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_features_title',
                        'label' => 'Features Section Title',
                        'name' => 'features_title',
                        'type' => 'text',
                        'default_value' => 'Feature Checklist',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'min' => 0,
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_lever_feature_text',
                                'label' => 'Feature Text',
                                'name' => 'feature_text',
                                'type' => 'text',
                                'required' => 0,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Use Cases Section
            array(
                'key' => 'field_lever_use_cases_section',
                'label' => 'Use Cases Section',
                'name' => 'lever_use_cases_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_use_cases_title',
                        'label' => 'Use Cases Section Title',
                        'name' => 'use_cases_title',
                        'type' => 'text',
                        'default_value' => 'Perfect for…',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_use_cases',
                        'label' => 'Use Cases',
                        'name' => 'use_cases',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'min' => 0,
                        'button_label' => 'Add Use Case',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_lever_use_case_text',
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
                'key' => 'field_lever_cta_section',
                'label' => 'CTA Section',
                'name' => 'lever_cta_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_cta_title',
                        'label' => 'CTA Title',
                        'name' => 'cta_title',
                        'type' => 'text',
                        'default_value' => 'Ready to upgrade?',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_cta_text',
                        'label' => 'CTA Text',
                        'name' => 'cta_text',
                        'type' => 'textarea',
                        'default_value' => 'Book a 10‑minute demo to see IntelliLever in action or request a volume quote today.',
                        'rows' => 3,
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_cta_supplement',
                        'label' => 'CTA Supplement Text',
                        'name' => 'cta_supplement',
                        'type' => 'textarea',
                        'default_value' => 'Pair IntelliLever with IntelliMortise for suite entrances and enjoy a unified, cost‑effective smart‑access ecosystem.',
                        'rows' => 3,
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_cta_button_text',
                        'label' => 'CTA Button Text',
                        'name' => 'cta_button_text',
                        'type' => 'text',
                        'default_value' => 'Get My Quote',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_cta_button_url',
                        'label' => 'CTA Button URL',
                        'name' => 'cta_button_url',
                        'type' => 'text',
                        'default_value' => '/contact',
                        'required' => 0,
                    ),
                ),
            ),
            
            // Related Products Section
            array(
                'key' => 'field_lever_related_products_section',
                'label' => 'Related Products Section',
                'name' => 'lever_related_products_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_lever_related_products_title',
                        'label' => 'Related Products Section Title',
                        'name' => 'related_products_title',
                        'type' => 'text',
                        'default_value' => 'Complete your smart access ecosystem',
                        'required' => 0,
                    ),
                    array(
                        'key' => 'field_lever_related_products',
                        'label' => 'Related Products',
                        'name' => 'related_products',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'min' => 0,
                        'max' => 3,
                        'button_label' => 'Add Related Product',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_lever_related_product_title',
                                'label' => 'Product Title',
                                'name' => 'product_title',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_related_product_description',
                                'label' => 'Product Description',
                                'name' => 'product_description',
                                'type' => 'text',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_related_product_image',
                                'label' => 'Product Image',
                                'name' => 'product_image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'required' => 0,
                            ),
                            array(
                                'key' => 'field_lever_related_product_url',
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
                    'value' => 'page-templates/intelli-lever-template.php',
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