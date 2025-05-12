<?php
/**
 * ACF fields for Competitor Analysis Template
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_competitor_analysis',
        'title' => 'Competitor Analysis',
        'fields' => array(
            // Introduction Section
            array(
                'key' => 'field_intro_text',
                'label' => 'Introduction Text',
                'name' => 'intro_text',
                'type' => 'wysiwyg',
                'instructions' => 'Enter the introduction text for the competitor analysis',
                'default_value' => 'This report examines three competitors – DUSAW, GokiTech, and McGrath Locks – across key criteria to inform the redesign of 33lock.com. Each brand is evaluated on visual design, user experience, messaging, SEO, product offerings, pricing, trust signals, and interactive elements. Actionable insights are highlighted to guide 33Lock\'s strategy as a modern, informative product catalog for the hospitality industry.',
            ),
            
            // DUSAW Analysis
            array(
                'key' => 'field_dusaw_visual_design',
                'label' => 'DUSAW Visual Design',
                'name' => 'dusaw_visual_design',
                'type' => 'wysiwyg',
                'instructions' => 'Enter the visual design analysis for DUSAW',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_visual_design_image',
                'label' => 'DUSAW Visual Design Image',
                'name' => 'dusaw_visual_design_image',
                'type' => 'image',
                'instructions' => 'Upload an image for DUSAW visual design',
                'return_format' => 'id',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_dusaw_visual_design_image_caption',
                'label' => 'DUSAW Visual Design Image Caption',
                'name' => 'dusaw_visual_design_image_caption',
                'type' => 'text',
                'instructions' => 'Enter a caption for the image',
            ),
            array(
                'key' => 'field_dusaw_visual_design_insight',
                'label' => 'DUSAW Visual Design Insight',
                'name' => 'dusaw_visual_design_insight',
                'type' => 'wysiwyg',
                'instructions' => 'Enter the insight for 33Lock based on DUSAW\'s visual design',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            // Repeat the pattern for other DUSAW categories
            array(
                'key' => 'field_dusaw_user_experience',
                'label' => 'DUSAW User Experience',
                'name' => 'dusaw_user_experience',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_user_experience_insight',
                'label' => 'DUSAW User Experience Insight',
                'name' => 'dusaw_user_experience_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_messaging',
                'label' => 'DUSAW Messaging',
                'name' => 'dusaw_messaging',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_messaging_insight',
                'label' => 'DUSAW Messaging Insight',
                'name' => 'dusaw_messaging_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_seo',
                'label' => 'DUSAW SEO',
                'name' => 'dusaw_seo',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_seo_insight',
                'label' => 'DUSAW SEO Insight',
                'name' => 'dusaw_seo_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_product_offerings',
                'label' => 'DUSAW Product Offerings',
                'name' => 'dusaw_product_offerings',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_product_offerings_insight',
                'label' => 'DUSAW Product Offerings Insight',
                'name' => 'dusaw_product_offerings_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_pricing',
                'label' => 'DUSAW Pricing',
                'name' => 'dusaw_pricing',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_pricing_insight',
                'label' => 'DUSAW Pricing Insight',
                'name' => 'dusaw_pricing_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_trust_signals',
                'label' => 'DUSAW Trust Signals',
                'name' => 'dusaw_trust_signals',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_trust_signals_insight',
                'label' => 'DUSAW Trust Signals Insight',
                'name' => 'dusaw_trust_signals_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            array(
                'key' => 'field_dusaw_interactive_elements',
                'label' => 'DUSAW Interactive Elements',
                'name' => 'dusaw_interactive_elements',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_dusaw_interactive_elements_insight',
                'label' => 'DUSAW Interactive Elements Insight',
                'name' => 'dusaw_interactive_elements_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            // GokiTech Analysis - repeat the same pattern
            array(
                'key' => 'field_gokitech_visual_design',
                'label' => 'GokiTech Visual Design',
                'name' => 'gokitech_visual_design',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_gokitech_visual_design_image',
                'label' => 'GokiTech Visual Design Image',
                'name' => 'gokitech_visual_design_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_gokitech_visual_design_image_caption',
                'label' => 'GokiTech Visual Design Image Caption',
                'name' => 'gokitech_visual_design_image_caption',
                'type' => 'text',
            ),
            array(
                'key' => 'field_gokitech_visual_design_insight',
                'label' => 'GokiTech Visual Design Insight',
                'name' => 'gokitech_visual_design_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            // GokiTech UX
            array(
                'key' => 'field_gokitech_user_experience',
                'label' => 'GokiTech User Experience',
                'name' => 'gokitech_user_experience',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_gokitech_user_experience_insight',
                'label' => 'GokiTech User Experience Insight',
                'name' => 'gokitech_user_experience_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            // Continue for all GokiTech categories...
            
            // McGrath Locks Analysis - repeat the same pattern
            array(
                'key' => 'field_mcgrath_visual_design',
                'label' => 'McGrath Locks Visual Design',
                'name' => 'mcgrath_visual_design',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_mcgrath_visual_design_image',
                'label' => 'McGrath Locks Visual Design Image',
                'name' => 'mcgrath_visual_design_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_mcgrath_visual_design_image_caption',
                'label' => 'McGrath Locks Visual Design Image Caption',
                'name' => 'mcgrath_visual_design_image_caption',
                'type' => 'text',
            ),
            array(
                'key' => 'field_mcgrath_visual_design_insight',
                'label' => 'McGrath Locks Visual Design Insight',
                'name' => 'mcgrath_visual_design_insight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
            ),
            
            // Continue for all McGrath categories...
            
            // Conclusion Section
            array(
                'key' => 'field_conclusion_content',
                'label' => 'Conclusion Content',
                'name' => 'conclusion_content',
                'type' => 'wysiwyg',
                'instructions' => 'Enter the conclusion and recommendations',
                'tabs' => 'visual',
                'media_upload' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/competitor-analysis-template.php',
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