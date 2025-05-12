<?php
/**
 * Template Name: Product Page Template
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main product-template">
        
        <div class="container mx-auto max-w-5xl">
            <!-- Product Header -->
            <section class="product-header mb-12">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                        <h1 class="product-title text-4xl md:text-5xl font-bold mb-3 text-slate"><?php echo get_field('product_title') ?: 'IntelliReader - Smart Access Control Unit'; ?></h1>
                        <p class="product-tagline text-xl md:text-2xl mb-6 text-gray-700"><?php echo get_field('product_tagline') ?: 'Secure, Versatile, and Connected Access for Modern Properties'; ?></p>
                        
                        <?php if(get_field('show_cta_button')): ?>
                        <a href="<?php echo get_field('cta_button_url') ?: '#contact'; ?>" class="primary-button inline-block bg-teal hover:bg-teal-dark text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200"><?php echo get_field('cta_button_text') ?: 'Get a Quote'; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="md:w-1/2">
                        <?php 
                        $featured_image = get_field('featured_image');
                        if($featured_image): ?>
                            <img src="<?php echo esc_url($featured_image['url']); ?>" alt="<?php echo esc_attr($featured_image['alt']); ?>" class="w-full h-auto rounded-lg shadow-lg">
                        <?php else: ?>
                            <div class="featured-image-placeholder bg-gray-200 rounded-lg flex items-center justify-center" style="height: 400px;">
                                <p class="text-gray-500">Featured Image Placeholder</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <!-- Image Gallery -->
            <section class="product-gallery mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Product Gallery</h2>
                
                <div class="gallery-grid grid grid-cols-1 md:grid-cols-3 gap-4">
                    <?php 
                    if(have_rows('image_gallery')): 
                        while(have_rows('image_gallery')): the_row();
                            $image = get_sub_field('gallery_image');
                            $caption = get_sub_field('image_caption');
                    ?>
                    <div class="gallery-item">
                        <?php if($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-64 object-cover rounded shadow-md mb-2">
                        <?php else: ?>
                            <div class="gallery-placeholder bg-gray-200 rounded flex items-center justify-center h-64 mb-2">
                                <p class="text-gray-500">Gallery Image</p>
                            </div>
                        <?php endif; ?>
                        <?php if($caption): ?>
                            <p class="text-sm text-gray-600"><?php echo esc_html($caption); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default gallery items if no ACF data
                        $default_gallery = array(
                            array(
                                'caption' => 'A sleek IntelliReader installed on a contemporary door, a hand shown interacting with its responsive tempered glass interface.'
                            ),
                            array(
                                'caption' => 'A detailed close-up of the IntelliReader, highlighting its durable aluminum alloy body and the clear digital keypad on the tempered glass surface.'
                            ),
                            array(
                                'caption' => 'The IntelliReader showcased alongside other 33 Lock products like the IntelliMortise and IntelliLever, demonstrating a cohesive and stylish product family.'
                            )
                        );
                        
                        foreach($default_gallery as $item):
                    ?>
                    <div class="gallery-item">
                        <div class="gallery-placeholder bg-gray-200 rounded flex items-center justify-center h-64 mb-2">
                            <p class="text-gray-500 px-4">IntelliReader Visual</p>
                        </div>
                        <p class="text-sm text-gray-600"><?php echo esc_html($item['caption']); ?></p>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>

            <!-- Product Overview -->
            <section class="product-overview mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Elevate Your Access Control with IntelliReader</h2>
                
                <div class="overview-content text-gray-700 leading-relaxed mb-6">
                    <?php if(get_field('product_overview')): ?>
                        <?php echo get_field('product_overview'); ?>
                    <?php else: ?>
                        <p>The 33 Lock IntelliReader is a sophisticated access control unit designed to operate any 12V electric lock, offering a robust and flexible solution for hotels, multifamily properties, and commercial buildings. Engineered for both online and offline operation, the IntelliReader ensures seamless access and enhanced security, integrating effortlessly into your existing infrastructure and the wider 33 Lock ecosystem.</p>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Key Features -->
            <section class="key-features mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Key Features & Benefits</h2>
                
                <div class="features-grid grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <?php 
                    if(have_rows('key_features')): 
                        while(have_rows('key_features')): the_row();
                            $feature_title = get_sub_field('feature_title');
                            $feature_description = get_sub_field('feature_description');
                            $feature_icon = get_sub_field('feature_icon');
                    ?>
                    <div class="feature-item flex">
                        <?php if($feature_icon): ?>
                            <div class="feature-icon mr-4 text-teal">
                                <?php echo $feature_icon; ?>
                            </div>
                        <?php else: ?>
                            <div class="feature-icon mr-4 text-teal">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        <?php endif; ?>
                        
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate"><?php echo esc_html($feature_title); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html($feature_description); ?></p>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default features if no ACF data
                        $default_features = array(
                            array(
                                'title' => 'Versatile Access Methods',
                                'description' => 'Empower users with multiple ways to enter, including PIN code, RFID card, digital key (via app), WiFi open, and even fingerprint access. A mechanical key option provides reliable backup.'
                            ),
                            array(
                                'title' => 'Online & Offline Reliability',
                                'description' => 'Operates effectively in both online and offline modes, ensuring continuous access regardless of network status.'
                            ),
                            array(
                                'title' => 'Customizable Security',
                                'description' => 'Set 4-9 digit PIN codes tailored to your security needs.'
                            ),
                            array(
                                'title' => 'Advanced Scheduling & Control',
                                'description' => 'Implement door schedules, passage mode for high traffic, and auto re-lock features for enhanced security and convenience.'
                            ),
                            array(
                                'title' => 'Comprehensive Monitoring',
                                'description' => 'Keep track of access with detailed logs and receive tamper alerts for unauthorized attempts.'
                            ),
                            array(
                                'title' => 'Universal Electric Lock Compatibility',
                                'description' => 'Designed to operate any standard 12V electric lock, offering broad compatibility.'
                            ),
                            array(
                                'title' => 'Independent Door Management',
                                'description' => 'Controls each door independently for precise access management.'
                            ),
                            array(
                                'title' => 'Durable & Weatherproof',
                                'description' => 'Constructed from high-quality aluminum alloy and tempered glass, with an IP66 waterproof rating, making it suitable for various environments.'
                            ),
                            array(
                                'title' => 'Seamless Ecosystem Integration',
                                'description' => 'Works harmoniously with other 33 Lock smart lock products and the TTLock app for a unified access control experience.'
                            )
                        );
                        
                        foreach($default_features as $feature):
                    ?>
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate"><?php echo esc_html($feature['title']); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>

            <!-- Transform Section -->
            <section class="transform-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Transform Your Property Management</h2>
                
                <div class="transform-content mb-6">
                    <p class="mb-4 text-gray-700">The IntelliReader isn't just an access unit; it's a cornerstone of modern, efficient property management:</p>
                    
                    <ul class="transform-list space-y-3">
                        <?php 
                        if(have_rows('transform_points')): 
                            while(have_rows('transform_points')): the_row();
                                $transform_point = get_sub_field('transform_point');
                        ?>
                        <li class="flex items-start">
                            <span class="text-teal mr-2">→</span>
                            <span class="text-gray-700"><?php echo esc_html($transform_point); ?></span>
                        </li>
                        <?php 
                            endwhile;
                        else:
                            // Default transform points if no ACF data
                            $default_points = array(
                                'Uncompromised Security: Robust materials and multiple access credentials protect your property.',
                                'Streamlined Operations: Simplify access for guests, residents, and staff, reducing the need for physical key management.',
                                'Enhanced User Experience: Offer a modern, keyless experience that users appreciate.',
                                'Flexible & Scalable: Adaptable to various door types and property sizes, from single doors to large complexes.'
                            );
                            
                            foreach($default_points as $point):
                        ?>
                        <li class="flex items-start">
                            <span class="text-teal mr-2">→</span>
                            <span class="text-gray-700"><?php echo esc_html($point); ?></span>
                        </li>
                        <?php 
                            endforeach;
                        endif; 
                        ?>
                    </ul>
                </div>
            </section>

            <!-- Specifications Table -->
            <section class="specifications mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Detailed Specifications</h2>
                
                <div class="overflow-x-auto">
                    <table class="specs-table w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 text-left border border-gray-300 font-semibold text-slate">Feature</th>
                                <th class="py-3 px-4 text-left border border-gray-300 font-semibold text-slate">Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(have_rows('specifications')): 
                                while(have_rows('specifications')): the_row();
                                    $spec_feature = get_sub_field('spec_feature');
                                    $spec_value = get_sub_field('spec_value');
                            ?>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300 font-medium"><?php echo esc_html($spec_feature); ?></td>
                                <td class="py-3 px-4 border border-gray-300"><?php echo esc_html($spec_value); ?></td>
                            </tr>
                            <?php 
                                endwhile;
                            else:
                                // Default specifications if no ACF data
                                $default_specs = array(
                                    array('feature' => 'Materials', 'value' => 'Aluminum alloy (body), Tempered glass (interface)'),
                                    array('feature' => 'Dimensions', 'value' => '125mm (H) x 79mm (W) x 15.5mm (D)'),
                                    array('feature' => 'Power Requirement', 'value' => '12V DC'),
                                    array('feature' => 'Operating Temp.', 'value' => '-35°C to 55°C'),
                                    array('feature' => 'Operating Humidity', 'value' => '0% to 95%'),
                                    array('feature' => 'Waterproof Rating', 'value' => 'IP66'),
                                    array('feature' => 'Connectivity', 'value' => 'WiFi Enabled'),
                                    array('feature' => 'Access Methods', 'value' => 'PIN, RFID, Digital Key, WiFi, Fingerprint, Metal Key'),
                                    array('feature' => 'PIN Code Length', 'value' => '4-9 digits, customizable'),
                                    array('feature' => 'Battery', 'value' => 'Powered by 12V DC (external source)'),
                                    array('feature' => 'Security Certs.', 'value' => 'Details not specified in available information'),
                                    array('feature' => 'Warranty', 'value' => 'Details not specified in available information')
                                );
                                
                                foreach($default_specs as $spec):
                            ?>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300 font-medium"><?php echo esc_html($spec['feature']); ?></td>
                                <td class="py-3 px-4 border border-gray-300"><?php echo esc_html($spec['value']); ?></td>
                            </tr>
                            <?php 
                                endforeach;
                            endif; 
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Design Section -->
            <section class="design-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Designed for Clarity and Durability</h2>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-2/3">
                        <div class="video-container mb-4">
                            <?php 
                            $video_url = get_field('product_video');
                            if($video_url): ?>
                                <div class="responsive-video-container relative pt-[56.25%]">
                                    <iframe class="absolute top-0 left-0 w-full h-full rounded" src="<?php echo esc_url($video_url); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <div class="video-placeholder bg-gray-200 rounded flex items-center justify-center" style="height: 300px;">
                                    <p class="text-gray-500">Video Showcase: "Watch: IntelliReader Installation & Feature Walkthrough – See how easily the IntelliReader integrates and the convenience it offers."</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="design-content text-gray-700">
                            <?php if(get_field('design_description')): ?>
                                <?php echo get_field('design_description'); ?>
                            <?php else: ?>
                                <p>The IntelliReader combines elegant design with rugged construction. Its tempered glass interface is both stylish and resilient, while the aluminum alloy body ensures longevity, even in demanding conditions.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Integration Section -->
            <section class="integration-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Integrates with Your World</h2>
                
                <div class="integration-list grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    if(have_rows('integration_points')): 
                        while(have_rows('integration_points')): the_row();
                            $integration_title = get_sub_field('integration_title');
                            $integration_description = get_sub_field('integration_description');
                            $integration_icon = get_sub_field('integration_icon');
                    ?>
                    <div class="integration-item bg-gray-50 p-6 rounded-lg">
                        <?php if($integration_icon): ?>
                            <div class="integration-icon mb-4 text-teal">
                                <?php echo $integration_icon; ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($integration_title); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($integration_description); ?></p>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default integration points if no ACF data
                        $default_integrations = array(
                            array(
                                'title' => 'TTLock App Ready',
                                'description' => 'Manage and monitor your IntelliReader units through the industry-leading TTLock application.'
                            ),
                            array(
                                'title' => '33 Lock Ecosystem',
                                'description' => 'Designed to work flawlessly with IntelliMortise, IntelliLever, and IntelliBolt for a comprehensive security solution.'
                            ),
                            array(
                                'title' => 'API Availability',
                                'description' => 'Leverage 33 Lock\'s API capabilities for custom integrations and advanced automation (based on general 33 Lock offerings).'
                            )
                        );
                        
                        foreach($default_integrations as $integration):
                    ?>
                    <div class="integration-item bg-gray-50 p-6 rounded-lg">
                        <div class="integration-icon mb-4 text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($integration['title']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($integration['description']); ?></p>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>

            <!-- Applications Section -->
            <section class="applications-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Ideal Applications</h2>
                
                <div class="applications-grid grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    if(have_rows('applications')): 
                        while(have_rows('applications')): the_row();
                            $application_title = get_sub_field('application_title');
                            $application_description = get_sub_field('application_description');
                            $application_icon = get_sub_field('application_icon');
                    ?>
                    <div class="application-item border border-gray-200 rounded-lg p-6">
                        <?php if($application_icon): ?>
                            <div class="application-icon mb-4 text-teal">
                                <?php echo $application_icon; ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($application_title); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($application_description); ?></p>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default applications if no ACF data
                        $default_applications = array(
                            array(
                                'title' => 'Hotels, Motels & Resorts',
                                'description' => 'Streamline guest check-in/out, manage staff access to secure areas, and monitor entry points in real-time.'
                            ),
                            array(
                                'title' => 'Multifamily Residential Buildings',
                                'description' => 'Simplify resident access, manage visitor entry, facilitate secure property viewings, and control access to common areas like gyms and parking garages.'
                            ),
                            array(
                                'title' => 'Commercial Offices & Facilities',
                                'description' => 'Secure main entrances, individual offices, server rooms, and other sensitive areas with flexible access credentials.'
                            )
                        );
                        
                        foreach($default_applications as $application):
                    ?>
                    <div class="application-item border border-gray-200 rounded-lg p-6">
                        <div class="application-icon mb-4 text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($application['title']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($application['description']); ?></p>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>

            <!-- What's Included Section -->
            <section class="included-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">What's Included</h2>
                
                <div class="included-content bg-gray-50 p-6 rounded-lg">
                    <ul class="included-list space-y-2">
                        <?php 
                        if(have_rows('included_items')): 
                            while(have_rows('included_items')): the_row();
                                $item_name = get_sub_field('item_name');
                        ?>
                        <li class="flex items-start">
                            <span class="text-teal mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <span class="text-gray-700"><?php echo esc_html($item_name); ?></span>
                        </li>
                        <?php 
                            endwhile;
                        else:
                            // Default included items if no ACF data
                            $default_items = array(
                                'IntelliReader Access Control Unit',
                                'Mounting Hardware & Template',
                                'Quick Start & Installation Guide (Note: Requires a 12V DC power supply, typically sourced separately based on installation needs.)'
                            );
                            
                            foreach($default_items as $item):
                        ?>
                        <li class="flex items-start">
                            <span class="text-teal mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <span class="text-gray-700"><?php echo esc_html($item); ?></span>
                        </li>
                        <?php 
                            endforeach;
                        endif; 
                        ?>
                    </ul>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="testimonials-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">What Our Customers Say</h2>
                
                <div class="testimonials-grid grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php 
                    if(have_rows('testimonials')): 
                        while(have_rows('testimonials')): the_row();
                            $testimonial_quote = get_sub_field('testimonial_quote');
                            $testimonial_author = get_sub_field('testimonial_author');
                            $testimonial_role = get_sub_field('testimonial_role');
                    ?>
                    <div class="testimonial-item bg-gray-50 p-6 rounded-lg">
                        <div class="quote-icon text-teal mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 opacity-30">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                        </div>
                        <blockquote class="text-gray-700 italic mb-4">"<?php echo esc_html($testimonial_quote); ?>"</blockquote>
                        <div class="testimonial-author">
                            <p class="font-semibold text-slate"><?php echo esc_html($testimonial_author); ?></p>
                            <?php if($testimonial_role): ?>
                                <p class="text-sm text-gray-600"><?php echo esc_html($testimonial_role); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default testimonials if no ACF data
                        $default_testimonials = array(
                            array(
                                'quote' => 'The IntelliReader has been a game-changer for our boutique hotel. Guests love the seamless access, and our staff finds it incredibly easy to manage.',
                                'author' => 'Alex P.',
                                'role' => 'Hotel Manager'
                            ),
                            array(
                                'quote' => 'We installed IntelliReaders across our new apartment complex. The security, combined with the modern aesthetic, is exactly what we were looking for.',
                                'author' => 'Sarah T.',
                                'role' => 'Property Developer'
                            )
                        );
                        
                        foreach($default_testimonials as $testimonial):
                    ?>
                    <div class="testimonial-item bg-gray-50 p-6 rounded-lg">
                        <div class="quote-icon text-teal mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 opacity-30">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                        </div>
                        <blockquote class="text-gray-700 italic mb-4">"<?php echo esc_html($testimonial['quote']); ?>"</blockquote>
                        <div class="testimonial-author">
                            <p class="font-semibold text-slate"><?php echo esc_html($testimonial['author']); ?></p>
                            <?php if(!empty($testimonial['role'])): ?>
                                <p class="text-sm text-gray-600"><?php echo esc_html($testimonial['role']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section mb-16">
                <div class="cta-container bg-slate text-white p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4"><?php echo get_field('cta_heading') ?: 'Ready to Modernize Your Access Control?'; ?></h2>
                    <p class="mb-6 text-white/80"><?php echo get_field('cta_subheading') ?: 'Take the next step towards a more secure, efficient, and user-friendly property.'; ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo get_field('cta_button_url') ?: '#contact'; ?>" class="inline-block bg-teal hover:bg-teal-dark text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200 mr-4"><?php echo get_field('cta_button_text') ?: 'Get a Quote'; ?></a>
                        <?php if(get_field('show_secondary_cta')): ?>
                        <a href="<?php echo get_field('secondary_cta_url') ?: '#learn-more'; ?>" class="inline-block bg-transparent hover:bg-white/10 text-white border border-white font-semibold py-3 px-8 rounded-md transition-colors duration-200"><?php echo get_field('secondary_cta_text') ?: 'Learn More'; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <!-- Related Products -->
            <section class="related-products-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Explore Other 33 Lock Innovations</h2>
                
                <div class="related-grid grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    if(have_rows('related_products')): 
                        while(have_rows('related_products')): the_row();
                            $product_name = get_sub_field('product_name');
                            $product_description = get_sub_field('product_description');
                            $product_image = get_sub_field('product_image');
                            $product_url = get_sub_field('product_url');
                    ?>
                    <div class="related-product border border-gray-200 rounded-lg overflow-hidden">
                        <?php if($product_image): ?>
                            <img src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_name); ?>" class="w-full h-48 object-cover">
                        <?php else: ?>
                            <div class="product-placeholder bg-gray-200 w-full h-48 flex items-center justify-center">
                                <p class="text-gray-500"><?php echo esc_html($product_name); ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($product_name); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo esc_html($product_description); ?></p>
                            <?php if($product_url): ?>
                            <a href="<?php echo esc_url($product_url); ?>" class="text-teal hover:text-teal-dark font-medium">Learn More →</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    else:
                        // Default related products if no ACF data
                        $default_products = array(
                            array(
                                'name' => 'IntelliMortise',
                                'description' => 'Our flagship smart mortise lock for ultimate security and style.'
                            ),
                            array(
                                'name' => 'IntelliLever',
                                'description' => 'Smart lever lock solutions for easy retrofitting and diverse applications.'
                            ),
                            array(
                                'name' => 'IntelliBolt',
                                'description' => 'Robust smart deadbolts for enhanced door security.'
                            )
                        );
                        
                        foreach($default_products as $product):
                    ?>
                    <div class="related-product border border-gray-200 rounded-lg overflow-hidden">
                        <div class="product-placeholder bg-gray-200 w-full h-48 flex items-center justify-center">
                            <p class="text-gray-500"><?php echo esc_html($product['name']); ?></p>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($product['name']); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo esc_html($product['description']); ?></p>
                            <a href="#" class="text-teal hover:text-teal-dark font-medium">Learn More →</a>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </section>
        </div>
        
    </main>
</div>

<?php
get_footer();
?>