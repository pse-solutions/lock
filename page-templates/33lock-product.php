<?php
/**
 * Template Name: 33Lock Product Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Product Header Section -->
        <section class="product-header py-12 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-slate-800">IntelliReader Smart Access Control Unit</h1>
                        <p class="text-xl text-slate-600 mb-6">Secure, Versatile, and Connected Access for Modern Properties</p>
                        <a href="#contact" class="btn-primary inline-block">Get a Quote</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-featured.jpg" alt="IntelliReader Smart Access Control Unit" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Gallery Section -->
        <section class="product-gallery py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Product Gallery</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="gallery-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-gallery-1.jpg" alt="IntelliReader installed on a contemporary door" class="w-full h-64 object-cover rounded-lg shadow-md mb-2">
                        <p class="text-sm text-slate-600">A sleek IntelliReader installed on a contemporary door, a hand shown interacting with its responsive tempered glass interface.</p>
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-gallery-2.jpg" alt="Close-up of the IntelliReader" class="w-full h-64 object-cover rounded-lg shadow-md mb-2">
                        <p class="text-sm text-slate-600">A detailed close-up of the IntelliReader, highlighting its durable aluminum alloy body and the clear digital keypad on the tempered glass surface.</p>
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-gallery-3.jpg" alt="IntelliReader alongside other products" class="w-full h-64 object-cover rounded-lg shadow-md mb-2">
                        <p class="text-sm text-slate-600">The IntelliReader showcased alongside other 33 Lock products like the IntelliMortise and IntelliLever, demonstrating a cohesive and stylish product family.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Overview Section -->
        <section class="product-overview py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Elevate Your Access Control with IntelliReader</h2>
                
                <div class="text-slate-700 leading-relaxed mb-6">
                    <p class="mb-4">The 33 Lock IntelliReader is a sophisticated access control unit designed to operate any 12V electric lock, offering a robust and flexible solution for hotels, multifamily properties, and commercial buildings. Engineered for both online and offline operation, the IntelliReader ensures seamless access and enhanced security, integrating effortlessly into your existing infrastructure and the wider 33 Lock ecosystem.</p>
                    <p>With versatile access methods including PIN codes, RFID cards, app-based digital keys, and more, the IntelliReader provides ultimate flexibility for your access control needs. The sleek design combines durability with modern aesthetics, making it an ideal choice for properties seeking to elevate their security without compromising on style.</p>
                </div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="key-features py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Key Features & Benefits</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <!-- Feature 1 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Versatile Access Methods</h3>
                            <p class="text-slate-600">Empower users with multiple ways to enter, including PIN code, RFID card, digital key (via app), WiFi open, and even fingerprint access. A mechanical key option provides reliable backup.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Online & Offline Reliability</h3>
                            <p class="text-slate-600">Operates effectively in both online and offline modes, ensuring continuous access regardless of network status.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Customizable Security</h3>
                            <p class="text-slate-600">Set 4-9 digit PIN codes tailored to your security needs.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Advanced Scheduling & Control</h3>
                            <p class="text-slate-600">Implement door schedules, passage mode for high traffic, and auto re-lock features for enhanced security and convenience.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 5 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Comprehensive Monitoring</h3>
                            <p class="text-slate-600">Keep track of access with detailed logs and receive tamper alerts for unauthorized attempts.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 6 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Universal Electric Lock Compatibility</h3>
                            <p class="text-slate-600">Designed to operate any standard 12V electric lock, offering broad compatibility.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 7 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Independent Door Management</h3>
                            <p class="text-slate-600">Controls each door independently for precise access management.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 8 -->
                    <div class="feature-item flex">
                        <div class="feature-icon mr-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Durable & Weatherproof</h3>
                            <p class="text-slate-600">Constructed from high-quality aluminum alloy and tempered glass, with an IP66 waterproof rating, making it suitable for various environments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transform Section -->
        <section class="transform-section py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Transform Your Property Management</h2>
                
                <div class="mb-6">
                    <p class="mb-4 text-slate-700">The IntelliReader isn't just an access unit; it's a cornerstone of modern, efficient property management:</p>
                    
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">→</span>
                            <span class="text-slate-700">Uncompromised Security: Robust materials and multiple access credentials protect your property.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">→</span>
                            <span class="text-slate-700">Streamlined Operations: Simplify access for guests, residents, and staff, reducing the need for physical key management.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">→</span>
                            <span class="text-slate-700">Enhanced User Experience: Offer a modern, keyless experience that users appreciate.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">→</span>
                            <span class="text-slate-700">Flexible & Scalable: Adaptable to various door types and property sizes, from single doors to large complexes.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Specifications Table Section -->
        <section class="specifications py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Detailed Specifications</h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-slate-100">
                                <th class="py-3 px-4 text-left border border-slate-300 font-semibold text-slate-800">Feature</th>
                                <th class="py-3 px-4 text-left border border-slate-300 font-semibold text-slate-800">Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Materials</td>
                                <td class="py-3 px-4 border border-slate-300">Aluminum alloy (body), Tempered glass (interface)</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Dimensions</td>
                                <td class="py-3 px-4 border border-slate-300">125mm (H) x 79mm (W) x 15.5mm (D)</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Power Requirement</td>
                                <td class="py-3 px-4 border border-slate-300">12V DC</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Operating Temp.</td>
                                <td class="py-3 px-4 border border-slate-300">-35°C to 55°C</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Operating Humidity</td>
                                <td class="py-3 px-4 border border-slate-300">0% to 95%</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Waterproof Rating</td>
                                <td class="py-3 px-4 border border-slate-300">IP66</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Connectivity</td>
                                <td class="py-3 px-4 border border-slate-300">WiFi Enabled</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Access Methods</td>
                                <td class="py-3 px-4 border border-slate-300">PIN, RFID, Digital Key, WiFi, Fingerprint, Metal Key</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">PIN Code Length</td>
                                <td class="py-3 px-4 border border-slate-300">4-9 digits, customizable</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Battery</td>
                                <td class="py-3 px-4 border border-slate-300">Powered by 12V DC (external source)</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-slate-300 font-medium">Warranty</td>
                                <td class="py-3 px-4 border border-slate-300">1 year limited manufacturer warranty</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Design Section -->
        <section class="design-section py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Designed for Clarity and Durability</h2>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-2/3">
                        <div class="video-container mb-4 bg-slate-100 rounded-lg flex items-center justify-center h-96">
                            <div class="text-center p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-slate-500">Watch: IntelliReader Installation & Feature Walkthrough – See how easily the IntelliReader integrates and the convenience it offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="text-slate-700">
                            <p class="mb-4">The IntelliReader combines elegant design with rugged construction. Its tempered glass interface is both stylish and resilient, while the aluminum alloy body ensures longevity, even in demanding conditions.</p>
                            <p>The sleek, minimalist design complements any door and environment, from upscale hotel corridors to modern apartment buildings. Despite its sophisticated appearance, the IntelliReader is engineered for real-world use, with an IP66 waterproof rating that stands up to the elements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration Section -->
        <section class="integration-section py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Integrates with Your World</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Integration 1 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">TTLock App Ready</h3>
                        <p class="text-slate-600">Manage and monitor your IntelliReader units through the industry-leading TTLock application.</p>
                    </div>
                    
                    <!-- Integration 2 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">33 Lock Ecosystem</h3>
                        <p class="text-slate-600">Designed to work flawlessly with IntelliMortise, IntelliLever, and IntelliBolt for a comprehensive security solution.</p>
                    </div>
                    
                    <!-- Integration 3 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">API Availability</h3>
                        <p class="text-slate-600">Leverage 33 Lock's API capabilities for custom integrations and advanced automation (based on general 33 Lock offerings).</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Applications Section -->
        <section class="applications-section py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Ideal Applications</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Application 1 -->
                    <div class="border border-slate-200 rounded-lg p-6">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">Hotels, Motels & Resorts</h3>
                        <p class="text-slate-600">Streamline guest check-in/out, manage staff access to secure areas, and monitor entry points in real-time.</p>
                    </div>
                    
                    <!-- Application 2 -->
                    <div class="border border-slate-200 rounded-lg p-6">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">Multifamily Residential Buildings</h3>
                        <p class="text-slate-600">Simplify resident access, manage visitor entry, facilitate secure property viewings, and control access to common areas like gyms and parking garages.</p>
                    </div>
                    
                    <!-- Application 3 -->
                    <div class="border border-slate-200 rounded-lg p-6">
                        <div class="mb-4 text-teal-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-slate-800">Commercial Offices & Facilities</h3>
                        <p class="text-slate-600">Secure main entrances, individual offices, server rooms, and other sensitive areas with flexible access credentials.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Included Items Section -->
        <section class="included-section py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">What's Included</h2>
                
                <div class="bg-white p-6 rounded-lg">
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-slate-700">IntelliReader Access Control Unit</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-slate-700">Mounting Hardware & Template</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-teal-500 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-slate-700">Quick Start & Installation Guide (Note: Requires a 12V DC power supply, typically sourced separately based on installation needs.)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="section-title">What Our Customers Say</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Testimonial 1 -->
                    <div class="bg-slate-50 p-6 rounded-lg">
                        <div class="quote-icon text-teal-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <blockquote class="text-slate-700 italic mb-4">"The IntelliReader has been a game-changer for our boutique hotel. Guests love the seamless access, and our staff finds it incredibly easy to manage."</blockquote>
                        <div class="testimonial-author">
                            <p class="font-semibold text-slate-800">Alex P.</p>
                            <p class="text-sm text-slate-600">Hotel Manager</p>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="bg-slate-50 p-6 rounded-lg">
                        <div class="quote-icon text-teal-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <blockquote class="text-slate-700 italic mb-4">"We installed IntelliReaders across our new apartment complex. The security, combined with the modern aesthetic, is exactly what we were looking for."</blockquote>
                        <div class="testimonial-author">
                            <p class="font-semibold text-slate-800">Sarah T.</p>
                            <p class="text-sm text-slate-600">Property Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-12 mb-16">
            <div class="container mx-auto px-4">
                <div class="bg-slate-800 text-white p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">Ready to Modernize Your Access Control?</h2>
                    <p class="mb-6 text-white/80">Take the next step towards a more secure, efficient, and user-friendly property.</p>
                    <div class="cta-buttons">
                        <a href="#contact" class="btn-primary mr-4">Get a Quote</a>
                        <a href="/collection" class="btn-white">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products Section -->
        <section class="related-products-section py-12 bg-slate-50">
            <div class="container mx-auto px-4">
                <h2 class="section-title">Explore Other 33 Lock Innovations</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Related Product 1 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden bg-white">
                        <div class="product-placeholder bg-slate-200 w-full h-48 flex items-center justify-center">
                            <p class="text-slate-500">IntelliMortise</p>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate-800">IntelliMortise</h3>
                            <p class="text-slate-600 mb-4">Our flagship smart mortise lock for ultimate security and style.</p>
                            <a href="/collection" class="text-teal-500 hover:text-teal-700 font-medium">Learn More →</a>
                        </div>
                    </div>
                    
                    <!-- Related Product 2 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden bg-white">
                        <div class="product-placeholder bg-slate-200 w-full h-48 flex items-center justify-center">
                            <p class="text-slate-500">IntelliLever</p>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate-800">IntelliLever</h3>
                            <p class="text-slate-600 mb-4">Smart lever lock solutions for easy retrofitting and diverse applications.</p>
                            <a href="/collection" class="text-teal-500 hover:text-teal-700 font-medium">Learn More →</a>
                        </div>
                    </div>
                    
                    <!-- Related Product 3 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden bg-white">
                        <div class="product-placeholder bg-slate-200 w-full h-48 flex items-center justify-center">
                            <p class="text-slate-500">IntelliBolt</p>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-slate-800">IntelliBolt</h3>
                            <p class="text-slate-600 mb-4">Robust smart deadbolts for enhanced door security.</p>
                            <a href="/collection" class="text-teal-500 hover:text-teal-700 font-medium">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
?>