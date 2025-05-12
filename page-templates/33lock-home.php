<?php
/**
 * Template Name: 33Lock Home Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="hero py-20 md:py-32">
            <div class="container mx-auto flex flex-col md:flex-row items-center">
                <div class="content md:w-1/2 mb-10 md:mb-0 md:pr-12">
                    <?php 
                    // Get hero content from ACF fields
                    $hero_heading = '';
                    $hero_subheading = '';
                    
                    if(function_exists('get_field') && get_field('hero_section')):
                        $hero_section = get_field('hero_section');
                        $hero_heading = $hero_section['heading'] ?: 'Smart Locks That Pay for Themselves';
                        $hero_subheading = $hero_section['subheading'] ?: 'Cloud‑connected access control that cuts check‑in time by 60% and slashes maintenance calls.';
                    else:
                        $hero_heading = 'Smart Locks That Pay for Themselves';
                        $hero_subheading = 'Cloud‑connected access control that cuts check‑in time by 60% and slashes maintenance calls.';
                    endif;
                    ?>
                    <h1 class="mb-6"><?php echo esc_html($hero_heading); ?></h1>
                    <p class="text-xl md:text-2xl mb-8 text-slate-100"><?php echo esc_html($hero_subheading); ?></p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="btn-primary">Get My Free Quote</a>
                        <a href="/collection" class="btn-secondary">Compare Lock Models</a>
                    </div>
                </div>
                <div class="hero-image md:w-1/2">
                    <?php 
                    // Check for hero image in our new ACF fields
                    if(function_exists('get_field') && get_field('hero_section') && get_field('hero_section')['hero_image']):
                        $hero_image = get_field('hero_section')['hero_image'];
                        echo wp_get_attachment_image($hero_image, 'large', false, array('class' => 'w-full h-auto', 'alt' => '33 Lock smart lock on hotel door'));
                    
                    // Fallback to old ACF structure if present
                    elseif(function_exists('get_field') && get_field('hero_banner') && get_field('hero_banner')['hero_image']): 
                        $hero_image = get_field('hero_banner')['hero_image'];
                        echo wp_get_attachment_image($hero_image, 'large', false, array('class' => 'w-full h-auto', 'alt' => '33 Lock smart lock on hotel door'));
                    
                    // If no image is found in either location, show a placeholder
                    else: ?>
                        <div class="bg-slate-200 w-full h-96 flex flex-col items-center justify-center">
                            <p class="text-slate-500">Hero Image Placeholder</p>
                            <p class="text-xs text-slate-400 mt-2">Add image using ACF Hero Section field</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits py-20">
            <div class="container mx-auto">
                <h2 class="text-center mb-4">Cut Costs. Delight Guests & Residents.</h2>
                <p class="text-xl text-center text-slate-600 mb-16">Reduce operating costs while providing a modern, tech-forward experience.</p>
                
                <div class="benefits-container">
                    <div class="grid">
                        <!-- Benefit 1 -->
                        <div class="benefit-card text-center">
                            <div class="icon-wrapper mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="mb-3">60% Faster Check-ins</h3>
                            <p class="text-slate-600">Eliminate front desk bottlenecks with automated PIN codes sent directly to guests before arrival.</p>
                        </div>
                        
                        <!-- Benefit 2 -->
                        <div class="benefit-card text-center">
                            <div class="icon-wrapper mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="mb-3">Enhanced Security</h3>
                            <p class="text-slate-600">One-tap credential revocation for past guests and tenants. Monitor access across your entire property in real-time.</p>
                        </div>
                        
                        <!-- Benefit 3 -->
                        <div class="benefit-card text-center">
                            <div class="icon-wrapper mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="mb-3">Mobile App Control</h3>
                            <p class="text-slate-600">Manage access from anywhere with our intuitive app. Issue, monitor, and revoke access with just a few taps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Tabs Section -->
        <section class="solutions py-20">
            <div class="container mx-auto">
                <h2 class="text-center mb-16">Solutions at a Glance</h2>
                
                <div class="tabs">
                    <!-- Tab Navigation -->
                    <div class="tab-nav flex justify-center border-b border-slate-200 mb-10">
                        <button class="tab-btn active" data-tab="hospitality">Hospitality</button>
                        <button class="tab-btn" data-tab="multifamily">Multifamily</button>
                    </div>
                    
                    <!-- Tab Content -->
                    <div class="tab-content-wrapper">
                        <!-- Hospitality Tab -->
                        <div id="hospitality-tab" class="tab-content active flex flex-col md:flex-row items-center gap-12">
                            <div class="md:w-1/2">
                                <?php 
                                // Get hospitality content from ACF fields
                                $hospitality_image = null;
                                
                                // Check if our new ACF field exists
                                if(function_exists('get_field') && get_field('solutions_section') && !empty(get_field('solutions_section')['hospitality_tab']) && !empty(get_field('solutions_section')['hospitality_tab']['image'])): 
                                    $hospitality_image = get_field('solutions_section')['hospitality_tab']['image'];
                                    echo wp_get_attachment_image($hospitality_image, 'medium_large', false, array('class' => 'w-full', 'alt' => 'Hotel guest using smartphone to unlock door'));
                                
                                // Fallback to old ACF structure
                                elseif(function_exists('get_field') && get_field('solutions_at_a_glance') && get_field('solutions_at_a_glance')['hospitality_tab']['image']): 
                                    $hospitality_image = get_field('solutions_at_a_glance')['hospitality_tab']['image'];
                                    echo wp_get_attachment_image($hospitality_image, 'medium_large', false, array('class' => 'w-full', 'alt' => 'Hotel guest using smartphone to unlock door'));
                                
                                // If no image is found in either location, show a placeholder
                                else: ?>
                                    <div class="bg-slate-200 w-full h-64 flex flex-col items-center justify-center">
                                        <p class="text-slate-500">Hospitality Image Placeholder</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="md:w-1/2">
                                <?php
                                // Get hospitality content from ACF fields
                                $hospitality_heading = 'Streamline Hotel Operations';
                                $hospitality_benefit = 'Contact-free check-in raises guest satisfaction scores and reduces front desk congestion.';
                                $hospitality_feature = 'Unique PINs texted automatically to each reservation, with seamless PMS integration.';
                                
                                if(function_exists('get_field') && get_field('solutions_section') && !empty(get_field('solutions_section')['hospitality_tab'])):
                                    $hospitality_tab = get_field('solutions_section')['hospitality_tab'];
                                    $hospitality_heading = $hospitality_tab['heading'] ?: $hospitality_heading;
                                    $hospitality_benefit = $hospitality_tab['benefit'] ?: $hospitality_benefit;
                                    $hospitality_feature = $hospitality_tab['feature'] ?: $hospitality_feature;
                                endif;
                                ?>
                                <h3 class="mb-6"><?php echo esc_html($hospitality_heading); ?></h3>
                                <div class="mb-6">
                                    <p class="text-lg font-semibold text-slate-700">Top Benefit:</p>
                                    <p class="text-slate-600"><?php echo esc_html($hospitality_benefit); ?></p>
                                </div>
                                <div class="mb-6">
                                    <p class="text-lg font-semibold text-slate-700">Key Feature:</p>
                                    <p class="text-slate-600"><?php echo esc_html($hospitality_feature); ?></p>
                                </div>
                                <a href="/collection" class="btn-primary">View Hospitality Solutions</a>
                            </div>
                        </div>
                        
                        <!-- Multifamily Tab -->
                        <div id="multifamily-tab" class="tab-content flex flex-col md:flex-row items-center gap-12">
                            <div class="md:w-1/2">
                                <?php 
                                // Display multifamily image if available from ACF
                                if(function_exists('get_field') && get_field('solutions_section') && !empty(get_field('solutions_section')['multifamily_tab']['image'])): 
                                    $multifamily_image = get_field('solutions_section')['multifamily_tab']['image'];
                                    echo wp_get_attachment_image($multifamily_image, 'medium_large', false, array('class' => 'w-full', 'alt' => 'Property manager updating tenant access on tablet'));
                                // Fallback to old ACF structure if present
                                elseif(function_exists('get_field') && get_field('solutions_at_a_glance') && get_field('solutions_at_a_glance')['multifamily_tab']['image']): 
                                    $multifamily_image = get_field('solutions_at_a_glance')['multifamily_tab']['image'];
                                    echo wp_get_attachment_image($multifamily_image, 'medium_large', false, array('class' => 'w-full', 'alt' => 'Property manager updating tenant access on tablet'));
                                // If no image is found in either location, show a placeholder
                                else: ?>
                                    <div class="bg-slate-200 w-full h-64 flex flex-col items-center justify-center">
                                        <p class="text-slate-500">Multifamily Image Placeholder</p>
                                        <p class="text-xs text-slate-400 mt-2">Add image using ACF Solutions Section field</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="md:w-1/2">
                                <?php
                                // Get multifamily content from ACF fields
                                $multifamily_heading = 'Effortless Tenant Turnover';
                                $multifamily_benefit = 'One-tap credential revocation for past tenants, with immediate access for new residents.';
                                $multifamily_feature = 'Resident app logs entries and reports battery health 24/7, reducing maintenance calls.';
                                
                                if(function_exists('get_field') && get_field('solutions_section') && !empty(get_field('solutions_section')['multifamily_tab'])):
                                    $multifamily_tab = get_field('solutions_section')['multifamily_tab'];
                                    $multifamily_heading = $multifamily_tab['heading'] ?: $multifamily_heading;
                                    $multifamily_benefit = $multifamily_tab['benefit'] ?: $multifamily_benefit;
                                    $multifamily_feature = $multifamily_tab['feature'] ?: $multifamily_feature;
                                endif;
                                ?>
                                <h3 class="mb-6"><?php echo esc_html($multifamily_heading); ?></h3>
                                <div class="mb-6">
                                    <p class="text-lg font-semibold text-slate-700">Top Benefit:</p>
                                    <p class="text-slate-600"><?php echo esc_html($multifamily_benefit); ?></p>
                                </div>
                                <div class="mb-6">
                                    <p class="text-lg font-semibold text-slate-700">Key Feature:</p>
                                    <p class="text-slate-600"><?php echo esc_html($multifamily_feature); ?></p>
                                </div>
                                <a href="/collection" class="btn-primary">View Multifamily Solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial & Partners Section -->
        <section class="testimonial py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <div class="quote-icon-wrapper mx-auto mb-6" style="width: 48px; height: 48px; max-width: 48px; max-height: 48px; overflow: hidden;">
                        <svg class="w-12 h-12 text-slate-300" style="width: 48px !important; height: 48px !important; max-width: 48px !important; max-height: 48px !important;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                        </svg>
                    </div>
                    <blockquote class="text-2xl md:text-3xl text-slate-700 font-light mb-6">"The ROI was obvious—reliable, cost-effective, and stylish. 33 Lock transformed our guest experience with minimal disruption."</blockquote>
                    <p class="text-lg font-semibold text-slate-800">Simon Seroussi, COO, SuiteOp</p>
                </div>
                
                <h3 class="text-xl font-semibold text-center mb-10 text-slate-600">Trusted By Leading Brands</h3>
                
                <div class="partner-logos grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <?php 
                    // Check if ACF social_proof field group exists and partner_logos repeater has values
                    if(function_exists('get_field') && get_field('social_proof') && get_field('social_proof')['partner_logos']): 
                        $partner_logos = get_field('social_proof')['partner_logos'];
                        foreach($partner_logos as $logo): 
                            if($logo['logo']):
                                $partner_name = $logo['partner_name'] ?: 'Partner';
                                echo wp_get_attachment_image($logo['logo'], 'medium', false, array(
                                    'class' => 'h-16 opacity-70 hover:opacity-100 transition-opacity', 
                                    'alt' => esc_attr($partner_name) . ' logo'
                                ));
                            endif;
                        endforeach;
                    // If there are no ACF values, show placeholder logos
                    else:
                        for($i = 1; $i <= 4; $i++): ?>
                            <div class="h-16 w-32 bg-slate-200 rounded opacity-70 hover:opacity-100 transition-opacity flex items-center justify-center">
                                <p class="text-slate-500 text-sm">Partner <?php echo $i; ?></p>
                            </div>
                        <?php endfor;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products py-20">
            <div class="container mx-auto">
                <h2 class="text-center mb-6">Smart Lock Solutions</h2>
                <p class="text-xl text-center text-slate-600 mb-16">The right lock for every door in your property</p>
                
                <div class="products-container">
                    <div class="product-grid">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <?php 
                            // Placeholder for product image (ideally would use custom post type for products with ACF)
                            $product1_image = get_field('product_images') && !empty(get_field('product_images')[0]) ? get_field('product_images')[0] : false;
                            if($product1_image): 
                                echo wp_get_attachment_image($product1_image, 'medium_large', false, array('class' => 'product-image', 'alt' => 'IntelliMortise smart lock'));
                            else: ?>
                                <div class="product-image-placeholder">
                                    <p class="text-slate-500">IntelliMortise Image</p>
                                </div>
                            <?php endif; ?>
                            <div class="product-content">
                                <h3 class="product-title">IntelliMortise</h3>
                                <p class="product-description">Our flagship smart mortise lock for ultimate security and style.</p>
                                <ul class="product-features">
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Multiple access methods</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Premium design</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Online & offline modes</span>
                                    </li>
                                </ul>
                                <a href="/collection" class="btn-secondary-outline product-link">Learn More</a>
                            </div>
                        </div>
                        
                        <!-- Product 2 -->
                        <div class="product-card">
                            <?php 
                            // Placeholder for product image
                            $product2_image = get_field('product_images') && !empty(get_field('product_images')[1]) ? get_field('product_images')[1] : false;
                            if($product2_image): 
                                echo wp_get_attachment_image($product2_image, 'medium_large', false, array('class' => 'product-image', 'alt' => 'IntelliLever smart lock'));
                            else: ?>
                                <div class="product-image-placeholder">
                                    <p class="text-slate-500">IntelliLever Image</p>
                                </div>
                            <?php endif; ?>
                            <div class="product-content">
                                <h3 class="product-title">IntelliLever</h3>
                                <p class="product-description">Smart lever lock solutions for easy retrofitting and diverse applications.</p>
                                <ul class="product-features">
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Easy installation</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Weather resistant</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Battery monitoring</span>
                                    </li>
                                </ul>
                                <a href="/collection" class="btn-secondary-outline product-link">Learn More</a>
                            </div>
                        </div>
                        
                        <!-- Product 3 -->
                        <div class="product-card">
                            <?php 
                            // Placeholder for product image
                            $product3_image = get_field('product_images') && !empty(get_field('product_images')[2]) ? get_field('product_images')[2] : false;
                            if($product3_image): 
                                echo wp_get_attachment_image($product3_image, 'medium_large', false, array('class' => 'product-image', 'alt' => 'IntelliReader access control unit'));
                            else: ?>
                                <div class="product-image-placeholder">
                                    <p class="text-slate-500">IntelliReader Image</p>
                                </div>
                            <?php endif; ?>
                            <div class="product-content">
                                <h3 class="product-title">IntelliReader</h3>
                                <p class="product-description">Advanced access control unit that works with any 12V electric lock.</p>
                                <ul class="product-features">
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Universal compatibility</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Advanced scheduling</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Multiple access methods</span>
                                    </li>
                                </ul>
                                <a href="/collection" class="btn-secondary-outline product-link">Learn More</a>
                            </div>
                        </div>
                        
                        <!-- Product 4 -->
                        <div class="product-card">
                            <div class="product-image-placeholder">
                                <p class="text-slate-500">IntelliBolt Image</p>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">IntelliBolt</h3>
                                <p class="product-description">Smart deadbolt solution with easy installation and reliable performance.</p>
                                <ul class="product-features">
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Simple retrofit installation</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Long battery life</span>
                                    </li>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>App-based access control</span>
                                    </li>
                                </ul>
                                <a href="/collection" class="btn-secondary-outline product-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="/collection" class="btn-primary">View All Solutions</a>
                </div>
            </div>
        </section>

        <!-- Integration Partners Section -->
        <section class="integrations py-20">
            <div class="container mx-auto">
                <h2 class="text-center mb-6">Integration Partners</h2>
                <p class="text-xl text-center text-slate-600 mb-16">33 Lock works seamlessly with leading property management systems</p>
                
                <div class="integration-container">
                    <div class="integration-grid">
                        <div class="integration-content">
                            <h3 class="integration-title">RemoteLock Integration</h3>
                            <p class="integration-description">Through seamless integration with leading property management systems like Yardi and AppFolio, RemoteLock automates the resident turnover process and grants users flexible control over their 33 Lock solutions.</p>
                            <ul class="integration-features">
                                <li class="integration-feature">
                                    <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Automated resident turnover</span>
                                </li>
                                <li class="integration-feature">
                                    <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Seamless PMS integration</span>
                                </li>
                                <li class="integration-feature">
                                    <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Centralized access management</span>
                                </li>
                            </ul>
                            <a href="/partnerships/remotelock" class="btn-secondary-outline">Learn About RemoteLock Partnership</a>
                        </div>
                        <div class="integration-image-container">
                            <?php 
                            // Integration image from ACF
                            $integration_image = get_field('integration_image');
                            if($integration_image): 
                                echo wp_get_attachment_image($integration_image, 'large', false, array('class' => 'integration-image', 'alt' => '33 Lock and RemoteLock integration'));
                            else: ?>
                                <div class="integration-image-placeholder">
                                    <p class="text-slate-500">Integration Image</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta py-20">
            <div class="container mx-auto text-center">
                <h2 class="text-white mb-6">Ready to Modernize Your Access Control?</h2>
                <p class="text-xl text-slate-300 mb-10 max-w-3xl mx-auto">Take the next step towards a more secure, efficient, and user-friendly property with 33 Lock's smart solutions.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn-primary">Get My Free Quote</a>
                    <a href="/collection" class="btn-white">View All Solutions</a>
                </div>
            </div>
        </section>

        <!-- Sticky CTA Footer -->
        <div class="sticky-cta">
            <div class="container mx-auto">
                <div class="sticky-cta-inner">
                    <p class="sticky-cta-text">Ready to modernize your access control?</p>
                    <div class="sticky-cta-buttons">
                        <a href="#contact" class="btn-primary">Book a Demo</a>
                        <a href="/collection" class="btn-white">Order a Sample</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
</div>


<?php
get_footer();
?>