<?php
/**
 * Template Name: IntelliReader Product Demo
 * 
 * This is a demo template that shows how the product page looks with default content.
 * It includes all content from the provided specs for the IntelliReader product.
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
                        <h1 class="product-title text-4xl md:text-5xl font-bold mb-3 text-slate">IntelliReader - Smart Access Control Unit</h1>
                        <p class="product-tagline text-xl md:text-2xl mb-6 text-gray-700">Secure, Versatile, and Connected Access for Modern Properties</p>
                        
                        <a href="#contact" class="primary-button inline-block bg-teal hover:bg-teal-dark text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200">Get a Quote</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1582560474992-385ebb9b0a7f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="IntelliReader Smart Access Control Unit" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </section>

            <!-- Image Gallery -->
            <section class="product-gallery mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Product Gallery</h2>
                
                <div class="gallery-grid grid grid-cols-1 md:grid-cols-3 gap-4">
                    <?php 
                    // Default gallery items
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
                        <?php if ($item === $default_gallery[0]): ?>
                            <img src="https://images.unsplash.com/photo-1563874093516-3c7aca9bc2e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Smart lock on door" class="w-full h-64 object-cover rounded shadow-md mb-2">
                        <?php elseif ($item === $default_gallery[1]): ?>
                            <img src="https://images.unsplash.com/photo-1564520017660-705641fc94cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Close-up of digital keypad" class="w-full h-64 object-cover rounded shadow-md mb-2">
                        <?php elseif ($item === $default_gallery[2]): ?>
                            <img src="https://images.unsplash.com/photo-1493020258366-be1c0b54d0af?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Smart home security system" class="w-full h-64 object-cover rounded shadow-md mb-2">
                        <?php endif; ?>
                        <p class="text-sm text-gray-600"><?php echo esc_html($item['caption']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Product Overview -->
            <section class="product-overview mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Elevate Your Access Control with IntelliReader</h2>
                
                <div class="overview-content text-gray-700 leading-relaxed mb-6">
                    <p>The 33 Lock IntelliReader is a sophisticated access control unit designed to operate any 12V electric lock, offering a robust and flexible solution for hotels, multifamily properties, and commercial buildings. Engineered for both online and offline operation, the IntelliReader ensures seamless access and enhanced security, integrating effortlessly into your existing infrastructure and the wider 33 Lock ecosystem.</p>
                </div>
            </section>

            <!-- Key Features -->
            <section class="key-features mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Key Features & Benefits</h2>
                
                <div class="features-grid grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <?php 
                    // Default features
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
                            <?php if ($feature === $default_features[0]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>
                            <?php elseif ($feature === $default_features[1]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>
                            <?php elseif ($feature === $default_features[2]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            <?php elseif ($feature === $default_features[3]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            <?php elseif ($feature === $default_features[4]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                </svg>
                            <?php elseif ($feature === $default_features[5]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            <?php elseif ($feature === $default_features[6]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                            <?php elseif ($feature === $default_features[7]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            <?php elseif ($feature === $default_features[8]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                </svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate"><?php echo esc_html($feature['title']); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Transform Section -->
            <section class="transform-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Transform Your Property Management</h2>
                
                <div class="transform-content mb-6">
                    <p class="mb-4 text-gray-700">The IntelliReader isn't just an access unit; it's a cornerstone of modern, efficient property management:</p>
                    
                    <ul class="transform-list space-y-3">
                        <?php 
                        // Default transform points
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
                        <?php endforeach; ?>
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
                            // Default specifications
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
                            <?php endforeach; ?>
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
                            <div class="responsive-video-container relative pt-[56.25%]">
                                <iframe class="absolute top-0 left-0 w-full h-full rounded" src="https://www.youtube.com/embed/B8RMzLq9qY4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 text-center">Watch: IntelliReader Installation & Feature Walkthrough – See how easily the IntelliReader integrates and the convenience it offers.</p>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="design-content text-gray-700">
                            <p>The IntelliReader combines elegant design with rugged construction. Its tempered glass interface is both stylish and resilient, while the aluminum alloy body ensures longevity, even in demanding conditions.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Integration Section -->
            <section class="integration-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Integrates with Your World</h2>
                
                <div class="integration-list grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    // Default integration points
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
                            <?php if ($integration === $default_integrations[0]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            <?php elseif ($integration === $default_integrations[1]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                                </svg>
                            <?php elseif ($integration === $default_integrations[2]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($integration['title']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($integration['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Applications Section -->
            <section class="applications-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Ideal Applications</h2>
                
                <div class="applications-grid grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    // Default applications
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
                            <?php if ($application === $default_applications[0]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v16.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V3m-13.5 0h6.75m-6.75 0H6a1.5 1.5 0 00-1.5 1.5v0m10.5-1.5h6.75m-6.75 0H18a1.5 1.5 0 011.5 1.5v0m-1.5 17.25h-12a1.5 1.5 0 01-1.5-1.5V3a1.5 1.5 0 011.5-1.5h12a1.5 1.5 0 011.5 1.5v16.5a1.5 1.5 0 01-1.5 1.5z" />
                                </svg>
                            <?php elseif ($application === $default_applications[1]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            <?php elseif ($application === $default_applications[2]): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($application['title']); ?></h3>
                        <p class="text-gray-600"><?php echo esc_html($application['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- What's Included Section -->
            <section class="included-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">What's Included</h2>
                
                <div class="included-content bg-gray-50 p-6 rounded-lg">
                    <ul class="included-list space-y-2">
                        <?php 
                        // Default included items
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
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="testimonials-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">What Our Customers Say</h2>
                
                <div class="testimonials-grid grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php 
                    // Default testimonials
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
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section mb-16">
                <div class="cta-container bg-slate text-white p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">Ready to Modernize Your Access Control?</h2>
                    <p class="mb-6 text-white/80">Take the next step towards a more secure, efficient, and user-friendly property.</p>
                    <div class="cta-buttons">
                        <a href="#contact" class="inline-block bg-teal hover:bg-teal-dark text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200 mr-4">Get a Quote</a>
                    </div>
                </div>
            </section>

            <!-- Related Products -->
            <section class="related-products-section mb-16">
                <h2 class="section-title text-2xl font-semibold mb-6 pb-2 border-b-2 border-teal text-slate">Explore Other 33 Lock Innovations</h2>
                
                <div class="related-grid grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php 
                    // Default related products
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
                        <?php if ($product === $default_products[0]): ?>
                            <img src="https://images.unsplash.com/photo-1580284915132-4d7fd625fe8e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IntelliMortise Smart Lock" class="w-full h-48 object-cover">
                        <?php elseif ($product === $default_products[1]): ?>
                            <img src="https://images.unsplash.com/photo-1582396729344-1ae73eec3ce4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IntelliLever Smart Lock" class="w-full h-48 object-cover">
                        <?php elseif ($product === $default_products[2]): ?>
                            <img src="https://images.unsplash.com/photo-1575908539629-62b3f98d0d30?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IntelliBolt Smart Lock" class="w-full h-48 object-cover">
                        <?php else: ?>
                            <div class="product-placeholder bg-gray-200 w-full h-48 flex items-center justify-center">
                                <p class="text-gray-500"><?php echo esc_html($product['name']); ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate"><?php echo esc_html($product['name']); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo esc_html($product['description']); ?></p>
                            <a href="#" class="text-teal hover:text-teal-dark font-medium">Learn More →</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
        
    </main>
</div>

<?php
// Enqueue the product CSS file explicitly in the demo
wp_enqueue_style(
    'product-template-css',
    get_stylesheet_directory_uri() . '/assets/css/product-template.css',
    array(),
    '1.0.0',
    'all'
);

get_footer();
?>