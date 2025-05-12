<?php
/**
 * Template Name: 33Lock Style Guide
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <div class="container mx-auto max-w-5xl bg-white p-6 md:p-10 rounded-lg shadow-xl my-12">

            <!-- Header -->
            <header class="mb-12 text-center">
                <h1 class="font-montserrat font-bold text-5xl text-slate-800">33 Lock</h1>
                <p class="font-montserrat text-3xl text-teal-500 mt-2">Visual Style Guide</p>
            </header>

            <!-- Color Palette Section -->
            <section class="mb-12">
                <h2 class="section-title">Color Palette</h2>

                <h3 class="subsection-title">Primary Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <!-- Teal -->
                    <div>
                        <div class="swatch" style="background-color: #00AEEF;"><span>Teal</span></div>
                        <p class="mt-2 text-sm font-medium">Brand Teal</p>
                        <p class="text-xs text-slate-600">HEX: #00AEEF</p>
                        <p class="text-xs text-slate-600">RGB: 0, 174, 239</p>
                    </div>
                    
                    <!-- Slate -->
                    <div>
                        <div class="swatch" style="background-color: #3D4A5D;"><span>Slate</span></div>
                        <p class="mt-2 text-sm font-medium">Deep Slate</p>
                        <p class="text-xs text-slate-600">HEX: #3D4A5D</p>
                        <p class="text-xs text-slate-600">RGB: 61, 74, 93</p>
                    </div>
                </div>

                <h3 class="subsection-title">Secondary/Accent Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <!-- Silver -->
                    <div>
                        <div class="swatch dark-text" style="background-color: #B0BEC5;"><span>Silver</span></div>
                        <p class="mt-2 text-sm font-medium">Warm Silver</p>
                        <p class="text-xs text-slate-600">HEX: #B0BEC5</p>
                        <p class="text-xs text-slate-600">RGB: 176, 190, 197</p>
                    </div>
                    
                    <!-- Gold -->
                    <div>
                        <div class="swatch" style="background-color: #D4AF37;"><span>Gold</span></div>
                        <p class="mt-2 text-sm font-medium">Accent Gold</p>
                        <p class="text-xs text-slate-600">HEX: #D4AF37</p>
                        <p class="text-xs text-slate-600">RGB: 212, 175, 55</p>
                    </div>
                    
                    <!-- Beige -->
                    <div>
                        <div class="swatch dark-text" style="background-color: #F5E8D7;"><span>Beige</span></div>
                        <p class="mt-2 text-sm font-medium">Warm Beige</p>
                        <p class="text-xs text-slate-600">HEX: #F5E8D7</p>
                        <p class="text-xs text-slate-600">RGB: 245, 232, 215</p>
                    </div>
                </div>

                <h3 class="subsection-title">Neutral Colors</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6">
                    <!-- Charcoal -->
                    <div>
                        <div class="swatch" style="background-color: #333333;"><span>Charcoal</span></div>
                        <p class="mt-2 text-sm font-medium">Dark Text</p>
                        <p class="text-xs text-slate-600">HEX: #333333</p>
                    </div>
                    
                    <!-- Medium Gray -->
                    <div>
                        <div class="swatch" style="background-color: #777777;"><span>Med Gray</span></div>
                        <p class="mt-2 text-sm font-medium">Medium Gray</p>
                        <p class="text-xs text-slate-600">HEX: #777777</p>
                    </div>
                    
                    <!-- Light Gray -->
                    <div>
                        <div class="swatch dark-text" style="background-color: #F0F0F0;"><span>BG Gray</span></div>
                        <p class="mt-2 text-sm font-medium">Light BG Gray</p>
                        <p class="text-xs text-slate-600">HEX: #F0F0F0</p>
                    </div>
                    
                    <!-- White -->
                    <div>
                        <div class="swatch dark-text" style="background-color: #FFFFFF; border: 1px solid #eee;"><span>White</span></div>
                        <p class="mt-2 text-sm font-medium">White</p>
                        <p class="text-xs text-slate-600">HEX: #FFFFFF</p>
                    </div>
                </div>
            </section>

            <!-- Typography Section -->
            <section class="mb-12">
                <h2 class="section-title">Typography</h2>

                <div class="mb-8 p-6 bg-slate-50 rounded-lg">
                    <h3 class="subsection-title mt-0">Primary Typeface (Headings & CTAs)</h3>
                    <p class="text-sm text-slate-600 mb-1">Recommended: Montserrat or Roboto Slab</p>

                    <!-- Montserrat Examples -->
                    <p class="font-montserrat text-4xl font-bold text-slate-800 my-3">H1: Montserrat Bold 700</p>
                    <p class="font-montserrat text-3xl font-medium text-slate-800 my-3">H2: Montserrat Medium 500</p>
                    <p class="font-montserrat text-xl font-medium text-slate-800 my-3">H3: Montserrat Medium 500</p>
                    
                    <!-- Roboto Slab Examples -->
                    <p class="font-roboto-slab text-4xl font-bold text-slate-800 my-3">H1: Roboto Slab Bold 700</p>
                    <p class="font-roboto-slab text-3xl font-normal text-slate-800 my-3">H2: Roboto Slab Regular 400</p>
                    <p class="font-roboto-slab text-xl font-normal text-slate-800 my-3">H3: Roboto Slab Regular 400</p>
                    
                    <!-- Button Examples -->
                    <button class="font-montserrat font-semibold text-white bg-teal-500 hover:bg-teal-600 py-2 px-6 rounded-md text-lg my-3 transition-colors duration-150">
                        CTA Button (Montserrat)
                    </button>
                    <button class="font-roboto-slab font-bold text-white bg-teal-500 hover:bg-teal-600 py-2 px-6 rounded-md text-lg my-3 transition-colors duration-150 ml-4">
                        CTA Button (Roboto Slab)
                    </button>
                </div>

                <div class="p-6 bg-slate-50 rounded-lg">
                    <h3 class="subsection-title mt-0">Secondary Typeface (Body Text & UI)</h3>
                    <p class="text-sm text-slate-600 mb-1">Recommended: Open Sans or Roboto</p>

                    <!-- Open Sans Example -->
                    <p class="font-open-sans text-base text-slate-800 my-3 leading-relaxed">
                        Body (Open Sans Regular 400): Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="font-open-sans text-sm text-slate-600 my-3">
                        Caption/Label (Open Sans Regular 400): Supporting text or metadata.
                    </p>
                    
                    <!-- Roboto Example -->
                    <p class="font-roboto text-base text-slate-800 my-3 leading-relaxed">
                        Body (Roboto Regular 400): Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="font-roboto text-sm text-slate-600 my-3">
                        Caption/Label (Roboto Light 300): Supporting text or metadata.
                    </p>
                </div>
            </section>

            <!-- Iconography Section -->
            <section class="mb-12">
                <h2 class="section-title">Iconography</h2>
                <p class="mb-4 text-slate-700">Style: Minimal line-art with soft shadows. Primarily use Brand Teal, Deep Slate, and Warm Silver. SVGs preferred.</p>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6">
                    <!-- Icon 1 -->
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3D4A5D" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <p class="mt-2 text-sm text-slate-600">Example: Lock Icon</p>
                    </div>
                    
                    <!-- Icon 2 -->
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.219 12.768 11 12 11c-.768 0-1.536.219-2.121.659L9 12.5m3 2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 14.219 12.768 14 12 14c-.768 0-1.536.219-2.121.659L9 15.5m-3-1.5a.75.75 0 100-1.5.75.75 0 000 1.5zM12 21a.75.75 0 100-1.5.75.75 0 000 1.5zM3 12a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            </svg>
                        </div>
                        <p class="mt-2 text-sm text-slate-600">Example: Cost Icon</p>
                    </div>
                    
                    <!-- Icon 3 -->
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#B0BEC5" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg>
                        </div>
                        <p class="mt-2 text-sm text-slate-600">Example: API Icon</p>
                    </div>
                    
                    <!-- Icon 4 -->
                    <div class="flex flex-col items-center">
                        <div class="icon-example-container">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3D4A5D" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <p class="mt-2 text-sm text-slate-600">Example: User Access Icon</p>
                    </div>
                </div>
            </section>

            <!-- Photography Section -->
            <section class="mb-12">
                <h2 class="section-title">Photography Style</h2>
                <p class="mb-1 text-slate-700">Content: High-resolution lifestyle photos. Chic hotel corridors, guests, people interacting with tech.</p>
                <p class="mb-1 text-slate-700">Mood: Warm, inviting, modern, secure, efficient.</p>
                <p class="mb-4 text-slate-700">Palette: Emphasize warm neutral tones, cinematic lighting.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Photo Example 1 -->
                    <div class="photo-placeholder h-64">
                        <div class="w-full h-full flex items-center justify-center bg-slate-200 text-slate-500">
                            Chic Hotel Corridor (Warm Neutrals)
                        </div>
                    </div>
                    
                    <!-- Photo Example 2 -->
                    <div class="photo-placeholder h-64">
                        <div class="w-full h-full flex items-center justify-center bg-slate-200 text-slate-500">
                            Guest Interaction (Modern Tech)
                        </div>
                    </div>
                </div>
            </section>

            <!-- Component Examples Section -->
            <section class="mb-12">
                <h2 class="section-title">UI Component Examples</h2>
                
                <!-- Buttons -->
                <h3 class="subsection-title">Buttons</h3>
                <div class="p-6 bg-slate-50 rounded-lg mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-md font-semibold mb-3 text-slate-700">Primary Button</h4>
                            <button class="btn-primary">Primary Button</button>
                            <div class="text-xs text-slate-500 mt-2">
                                <p>Background: #00AEEF (Brand Teal)</p>
                                <p>Text: White</p>
                                <p>Font: Montserrat Semi-Bold</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-md font-semibold mb-3 text-slate-700">Secondary Button</h4>
                            <button class="btn-secondary">Secondary Button</button>
                            <div class="text-xs text-slate-500 mt-2">
                                <p>Background: Transparent</p>
                                <p>Border: #00AEEF (Brand Teal)</p>
                                <p>Text: #00AEEF (Brand Teal)</p>
                                <p>Font: Montserrat Semi-Bold</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-md font-semibold mb-3 text-slate-700">Secondary Outline Button</h4>
                            <button class="btn-secondary-outline">Secondary Outline</button>
                            <div class="text-xs text-slate-500 mt-2">
                                <p>Background: Transparent</p>
                                <p>Border: #3D4A5D (Deep Slate)</p>
                                <p>Text: #3D4A5D (Deep Slate)</p>
                                <p>Font: Montserrat Medium</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-md font-semibold mb-3 text-slate-700">White Button</h4>
                            <div class="bg-slate-800 p-3 inline-block">
                                <button class="btn-white">White Button</button>
                            </div>
                            <div class="text-xs text-slate-500 mt-2">
                                <p>Background: White</p>
                                <p>Border: White</p>
                                <p>Text: #3D4A5D (Deep Slate)</p>
                                <p>Font: Montserrat Semi-Bold</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cards -->
                <h3 class="subsection-title">Cards</h3>
                <div class="p-6 bg-slate-50 rounded-lg mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="bg-slate-200 h-32 flex items-center justify-center">
                                <p class="text-slate-500">Product Image</p>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-1 text-slate-800">Product Card</h3>
                                <p class="text-slate-600 text-sm mb-3">Short product description goes here, highlighting key features.</p>
                                <button class="btn-secondary-outline text-sm py-1 px-3 w-full">View Details</button>
                            </div>
                        </div>
                        
                        <div class="feature-card bg-white rounded-lg shadow-md p-4">
                            <div class="icon-wrapper mb-3 p-3 rounded-full bg-teal-50 w-12 h-12 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-1 text-slate-800">Feature Card</h3>
                            <p class="text-slate-600 text-sm">Feature description with explanation of benefits and advantages.</p>
                        </div>
                        
                        <div class="testimonial-card bg-white rounded-lg shadow-md p-4">
                            <div class="mb-3 text-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <p class="text-slate-600 text-sm italic mb-3">"Quote from satisfied customer about how 33 Lock improved their property."</p>
                            <div class="border-t border-slate-200 pt-2 mt-2">
                                <p class="text-sm font-semibold text-slate-800">John Smith</p>
                                <p class="text-xs text-slate-500">Property Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="mt-12 pt-8 border-t border-slate-300 text-center">
                <p class="text-sm text-slate-500">&copy; 2023-2025 33 Lock. All Rights Reserved.</p>
            </footer>

        </div>
        
    </main>
</div>

<?php
get_footer();
?>