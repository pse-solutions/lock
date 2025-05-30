<?php
/**
 * ACF fields for Blog Tag Template
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_blog_tag_template',
        'title' => 'Blog Tag Template',
        'fields' => array(
            array(
                'key' => 'field_tag_title',
                'label' => 'Tag Title',
                'name' => 'tag_title',
                'type' => 'text',
                'instructions' => 'Enter the title for this tag page',
                'default_value' => 'Old Doors',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_tag_description',
                'label' => 'Tag Description',
                'name' => 'tag_description',
                'type' => 'textarea',
                'instructions' => 'Enter a short description for this tag (optional)',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 3,
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_tag_featured_image',
                'label' => 'Featured Image',
                'name' => 'tag_featured_image',
                'type' => 'image',
                'instructions' => 'Upload a featured image for this tag page',
                'required' => 0,
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'mime_types' => 'jpg, jpeg, png',
            ),
            array(
                'key' => 'field_tag_posts',
                'label' => 'Posts',
                'name' => 'tag_posts',
                'type' => 'relationship',
                'instructions' => 'Select blog posts to display on this tag page',
                'required' => 0,
                'conditional_logic' => 0,
                'return_format' => 'id',
                'post_type' => array(
                    0 => 'post',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                ),
                'min' => '',
                'max' => '',
                'elements' => array(
                    0 => 'featured_image',
                ),
            ),
            array(
                'key' => 'field_old_doors_blog_image',
                'label' => 'Old Doors Tag Image',
                'name' => 'old_doors_blog_image',
                'type' => 'url',
                'instructions' => 'Enter the URL for the main tag image (from old site)',
                'default_value' => 'https://images.squarespace-cdn.com/content/v1/64864a0f6459c271adb893d5/53badce9-9947-4ef2-ae36-60123a30fdfd/pexels-la-miko-3754595.jpg?format=2500w',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mortise_locks_post_image',
                'label' => 'Mortise Locks Post Image',
                'name' => 'mortise_locks_post_image',
                'type' => 'url',
                'instructions' => 'Enter the URL for the blog post featured image (from old site)',
                'default_value' => 'https://images.squarespace-cdn.com/content/v1/64864a0f6459c271adb893d5/1717014335172-MTASKKCJ0E7JGUEAHHTD/Untitled+design+%282%29.png?format=2500w',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mortise_locks_post_title',
                'label' => 'Mortise Locks Post Title',
                'name' => 'mortise_locks_post_title',
                'type' => 'text',
                'instructions' => 'Enter the title for the Mortise Locks blog post',
                'default_value' => 'Time to upgrade your old locks? A guide to retrofitting new mortise locks to your old door.',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mortise_locks_post_author',
                'label' => 'Mortise Locks Post Author',
                'name' => 'mortise_locks_post_author',
                'type' => 'text',
                'instructions' => 'Enter the author for the Mortise Locks blog post',
                'default_value' => 'Derek Boudreau',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mortise_locks_post_date',
                'label' => 'Mortise Locks Post Date',
                'name' => 'mortise_locks_post_date',
                'type' => 'text',
                'instructions' => 'Enter the date for the Mortise Locks blog post',
                'default_value' => '2024-05-29',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mortise_locks_post_url',
                'label' => 'Mortise Locks Post URL',
                'name' => 'mortise_locks_post_url',
                'type' => 'url',
                'instructions' => 'Enter the URL for the Mortise Locks blog post',
                'default_value' => 'https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/blog-tag-template.php',
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