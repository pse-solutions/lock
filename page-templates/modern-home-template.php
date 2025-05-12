<?php
/**
 * Template Name: Modern 33Lock Home
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="relative h-[70vh] flex items-center">
            <?php
            // Get hero image from ACF
            $hero_image = '';
            if(function_exists('get_field') && get_field('hero_image')):
                $hero_image = get_field('hero_image');
                echo wp_get_attachment_image($hero_image, 'full', false, array(
                    'class' => 'absolute inset-0 h-full w-full object-cover',
                    'alt' => 'Guest entering room with 33 Lock'
                ));
            else:
            ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.jpg" alt="Guest entering room with 33 Lock" class="absolute inset-0 h-full w-full object-cover">
            <?php endif; ?>
            
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/60"></div>
            
            <div class="relative mx-auto max-w-6xl px-6 text-white w-full">
                <div class="max-w-2xl md:text-left text-center">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 md:mb-6">
                        <?php 
                        if(function_exists('get_field') && get_field('hero_headline')):
                            echo esc_html(get_field('hero_headline'));
                        else:
                            echo 'Smart-Lock Access that Guests Love—at a Price Owners Trust';
                        endif; 
                        ?>
                    </h1>
                    
                    <p class="text-lg md:text-xl opacity-90 mb-8">
                        <?php 
                        if(function_exists('get_field') && get_field('hero_subhead')):
                            echo esc_html(get_field('hero_subhead'));
                        else:
                            echo 'Replace legacy hardware in < 15 minutes and manage every door—online or offline—from one cloud dashboard.';
                        endif; 
                        ?>
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="<?php echo function_exists('get_field') && get_field('primary_cta_url') ? esc_url(get_field('primary_cta_url')) : '#contact'; ?>" class="inline-block bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            <?php 
                            if(function_exists('get_field') && get_field('primary_cta_text')):
                                echo esc_html(get_field('primary_cta_text'));
                            else:
                                echo 'Book a Demo';
                            endif; 
                            ?>
                        </a>
                        
                        <a href="<?php echo function_exists('get_field') && get_field('secondary_cta_url') ? esc_url(get_field('secondary_cta_url')) : '#specs'; ?>" class="inline-block bg-transparent hover:bg-white/10 text-white border-2 border-white font-medium py-3 px-6 rounded-lg transition-colors">
                            <?php 
                            if(function_exists('get_field') && get_field('secondary_cta_text')):
                                echo esc_html(get_field('secondary_cta_text'));
                            else:
                                echo 'Download Spec Sheet';
                            endif; 
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Signals Strip -->
        <section class="bg-gray-50 py-6">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 items-center">
                    <?php 
                    // Define trust signals as fallback
                    $trust_signals = array(
                        array(
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>',
                            'stat' => '10 000+ rooms secured'
                        ),
                        array(
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                            'stat' => '99.97 % uptime in 2024'
                        ),
                        array(
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>',
                            'stat' => 'CSA & FCC certified hardware'
                        ),
                        array(
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>',
                            'stat' => '20-min fire-rated locks'
                        )
                    );
                    
                    // Check if trust signals are defined in ACF
                    if(function_exists('get_field') && get_field('trust_signals')):
                        foreach(get_field('trust_signals') as $index => $signal):
                    ?>
                        <div class="flex flex-col sm:flex-row items-center gap-3 text-center sm:text-left">
                            <div class="text-primary-600"><?php echo $signal['icon']; ?></div>
                            <div class="font-semibold"><?php echo esc_html($signal['stat']); ?></div>
                        </div>
                    <?php
                        endforeach;
                    else:
                        // Fallback to predefined trust signals
                        foreach($trust_signals as $signal):
                    ?>
                        <div class="flex flex-col sm:flex-row items-center gap-3 text-center sm:text-left">
                            <div class="text-primary-600"><?php echo $signal['icon']; ?></div>
                            <div class="font-semibold"><?php echo esc_html($signal['stat']); ?></div>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Problem/Benefit Grid -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Why 33 Lock?</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    // Define benefits as fallback
                    $benefits = array(
                        array(
                            'icon' => '🛠️',
                            'headline' => 'Retrofit in minutes',
                            'description' => 'Installs with a screwdriver—no wiring, no downtime.'
                        ),
                        array(
                            'icon' => '📱',
                            'headline' => 'Guests skip the front desk',
                            'description' => 'Digital keys and PINs arrive automatically via email/SMS.'
                        ),
                        array(
                            'icon' => '📊',
                            'headline' => 'Centralised dashboard',
                            'description' => 'Grant, revoke, and audit access from any device.'
                        ),
                        array(
                            'icon' => '🔒',
                            'headline' => 'Offline fail-safe',
                            'description' => 'PINs and cards stay on-device; doors stay operational if Wi-Fi drops.'
                        )
                    );
                    
                    // Check if benefits are defined in ACF
                    if(function_exists('get_field') && get_field('benefits')):
                        foreach(get_field('benefits') as $benefit):
                    ?>
                        <div class="rounded-2xl shadow-md p-6 hover:shadow-lg transition">
                            <div class="text-3xl mb-4"><?php echo $benefit['icon']; ?></div>
                            <h3 class="text-xl font-bold mb-2"><?php echo esc_html($benefit['headline']); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    <?php
                        endforeach;
                    else:
                        // Fallback to predefined benefits
                        foreach($benefits as $benefit):
                    ?>
                        <div class="rounded-2xl shadow-md p-6 hover:shadow-lg transition">
                            <div class="text-3xl mb-4"><?php echo $benefit['icon']; ?></div>
                            <h3 class="text-xl font-bold mb-2"><?php echo esc_html($benefit['headline']); ?></h3>
                            <p class="text-gray-600"><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Product Spotlight Carousel -->
        <section class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Choose the Lock That Fits</h2>
                
                <div class="product-carousel swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        // Define products as fallback
                        $products = array(
                            array(
                                'image' => get_stylesheet_directory_uri() . '/assets/images/intellimortise.png',
                                'title' => 'IntelliMortise',
                                'tagline' => 'Fire-rated smart mortise for main entries',
                                'features' => '7 unlock methods • 20-min UL fire rating • IP55',
                                'url' => '/locks/intellimortise'
                            ),
                            array(
                                'image' => get_stylesheet_directory_uri() . '/assets/images/intellilever.png',
                                'title' => 'IntelliLever',
                                'tagline' => 'Versatile lever lock for any interior door',
                                'features' => 'Simple installation • Battery backup • Audit logs',
                                'url' => '/locks/intellilever'
                            ),
                            array(
                                'image' => get_stylesheet_directory_uri() . '/assets/images/intellireader.png',
                                'title' => 'IntelliReader',
                                'tagline' => 'Smart control for electric strikes & mag-locks',
                                'features' => 'Multiple credentials • Weather resistant • IP66',
                                'url' => '/locks/intellireader'
                            ),
                            array(
                                'image' => get_stylesheet_directory_uri() . '/assets/images/intellibolt.png',
                                'title' => 'IntelliBolt',
                                'tagline' => 'Smart deadbolt replacement for exterior doors',
                                'features' => 'Easy retrofit • Weather sealed • Auto-relock',
                                'url' => '/locks/intellibolt'
                            )
                        );
                        
                        // Check if products are defined in ACF
                        if(function_exists('get_field') && get_field('products')):
                            foreach(get_field('products') as $product):
                        ?>
                            <div class="swiper-slide">
                                <div class="bg-white rounded-lg shadow-md p-6 h-full flex flex-col">
                                    <?php if(!empty($product['image'])): ?>
                                        <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>" class="h-48 object-contain mx-auto mb-6">
                                    <?php endif; ?>
                                    
                                    <h3 class="text-xl font-bold mb-1"><?php echo esc_html($product['title']); ?></h3>
                                    <p class="text-primary-600 mb-3"><?php echo esc_html($product['tagline']); ?></p>
                                    <p class="text-sm text-gray-500 mb-4"><?php echo esc_html($product['features']); ?></p>
                                    
                                    <a href="<?php echo esc_url($product['url']); ?>" class="mt-auto inline-flex items-center text-primary-600 font-semibold">
                                        Details 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        else:
                            // Fallback to predefined products
                            foreach($products as $product):
                        ?>
                            <div class="swiper-slide">
                                <div class="bg-white rounded-lg shadow-md p-6 h-full flex flex-col">
                                    <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>" class="h-48 object-contain mx-auto mb-6">
                                    
                                    <h3 class="text-xl font-bold mb-1"><?php echo esc_html($product['title']); ?></h3>
                                    <p class="text-primary-600 mb-3"><?php echo esc_html($product['tagline']); ?></p>
                                    <p class="text-sm text-gray-500 mb-4"><?php echo esc_html($product['features']); ?></p>
                                    
                                    <a href="<?php echo esc_url($product['url']); ?>" class="mt-auto inline-flex items-center text-primary-600 font-semibold">
                                        Details 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination mt-6"></div>
                </div>
            </div>
        </section>

        <!-- Industry Blocks -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Built for Your Property</h2>
                
                <!-- Hotels & Resorts -->
                <div class="flex flex-col lg:flex-row items-center gap-12 mb-20">
                    <div class="lg:w-1/2">
                        <?php if(function_exists('get_field') && !empty(get_field('hotels_image'))): ?>
                            <img src="<?php echo esc_url(get_field('hotels_image')); ?>" alt="Hotels & Resorts" class="rounded-lg shadow-md w-full">
                        <?php else: ?>
                            <div class="bg-gray-200 h-80 rounded-lg flex items-center justify-center">
                                <p class="text-gray-500">Hotels & Resorts Image</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="lg:w-1/2">
                        <h3 class="text-2xl font-bold mb-4">Hotels & Resorts</h3>
                        <p class="text-gray-600 text-lg mb-6">
                            <?php if(function_exists('get_field') && !empty(get_field('hotels_text'))): ?>
                                <?php echo esc_html(get_field('hotels_text')); ?>
                            <?php else: ?>
                                Cut front-desk queues and meet guest expectations for mobile access.
                            <?php endif; ?>
                        </p>
                        <a href="<?php echo function_exists('get_field') && !empty(get_field('hotels_link')) ? esc_url(get_field('hotels_link')) : '/solutions/hotels'; ?>" class="inline-flex items-center text-primary-600 font-semibold">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Vacation Rentals -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 mb-20">
                    <div class="lg:w-1/2">
                        <?php if(function_exists('get_field') && !empty(get_field('vacation_image'))): ?>
                            <img src="<?php echo esc_url(get_field('vacation_image')); ?>" alt="Vacation Rentals" class="rounded-lg shadow-md w-full">
                        <?php else: ?>
                            <div class="bg-gray-200 h-80 rounded-lg flex items-center justify-center">
                                <p class="text-gray-500">Vacation Rentals Image</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="lg:w-1/2">
                        <h3 class="text-2xl font-bold mb-4">Vacation Rentals</h3>
                        <p class="text-gray-600 text-lg mb-6">
                            <?php if(function_exists('get_field') && !empty(get_field('vacation_text'))): ?>
                                <?php echo esc_html(get_field('vacation_text')); ?>
                            <?php else: ?>
                                Automate back-to-back turnovers with self-expiring PINs—no more key exchanges.
                            <?php endif; ?>
                        </p>
                        <a href="<?php echo function_exists('get_field') && !empty(get_field('vacation_link')) ? esc_url(get_field('vacation_link')) : '/solutions/vacation-rentals'; ?>" class="inline-flex items-center text-primary-600 font-semibold">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Student Housing -->
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2">
                        <?php if(function_exists('get_field') && !empty(get_field('student_image'))): ?>
                            <img src="<?php echo esc_url(get_field('student_image')); ?>" alt="Student Housing" class="rounded-lg shadow-md w-full">
                        <?php else: ?>
                            <div class="bg-gray-200 h-80 rounded-lg flex items-center justify-center">
                                <p class="text-gray-500">Student Housing Image</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="lg:w-1/2">
                        <h3 class="text-2xl font-bold mb-4">Student Housing</h3>
                        <p class="text-gray-600 text-lg mb-6">
                            <?php if(function_exists('get_field') && !empty(get_field('student_text'))): ?>
                                <?php echo esc_html(get_field('student_text')); ?>
                            <?php else: ?>
                                Issue semester-long credentials and track maintenance staff visits.
                            <?php endif; ?>
                        </p>
                        <a href="<?php echo function_exists('get_field') && !empty(get_field('student_link')) ? esc_url(get_field('student_link')) : '/solutions/student-housing'; ?>" class="inline-flex items-center text-primary-600 font-semibold">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Study / Testimonial Slider -->
        <section class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="testimonial-slider glide">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <?php
                                // Define testimonials as fallback
                                $testimonials = array(
                                    array(
                                        'quote' => '"Switching to 33 Lock cut our check-in time by 70% and paid for itself in three months."',
                                        'author' => 'Karolina, GM, Coastline Suites'
                                    ),
                                    array(
                                        'quote' => '"Our guests love the convenience of mobile keys, and our staff appreciates the reduced key management overhead."',
                                        'author' => 'Carolyn, COO, Urban Stays'
                                    ),
                                    array(
                                        'quote' => '"The implementation was smooth, and technical support has been outstanding whenever we've needed it."',
                                        'author' => 'Lional, CEO, Campus Housing Group'
                                    )
                                );
                                
                                // Check if testimonials are defined in ACF
                                if(function_exists('get_field') && get_field('testimonials')):
                                    foreach(get_field('testimonials') as $testimonial):
                                ?>
                                    <div class="glide__slide text-center p-6">
                                        <div class="text-4xl text-primary-300 mb-4">"</div>
                                        <blockquote class="text-xl md:text-2xl font-light text-gray-700 mb-6">
                                            <?php echo esc_html($testimonial['quote']); ?>
                                        </blockquote>
                                        <p class="text-gray-600 font-medium">— <?php echo esc_html($testimonial['author']); ?></p>
                                    </div>
                                <?php
                                    endforeach;
                                else:
                                    // Fallback to predefined testimonials
                                    foreach($testimonials as $testimonial):
                                ?>
                                    <div class="glide__slide text-center p-6">
                                        <div class="text-4xl text-primary-300 mb-4">"</div>
                                        <blockquote class="text-xl md:text-2xl font-light text-gray-700 mb-6">
                                            <?php echo esc_html($testimonial['quote']); ?>
                                        </blockquote>
                                        <p class="text-gray-600 font-medium">— <?php echo esc_html($testimonial['author']); ?></p>
                                    </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="glide__bullets mt-6 flex justify-center" data-glide-el="controls[nav]">
                            <?php 
                            $testimonialCount = function_exists('get_field') && get_field('testimonials') ? count(get_field('testimonials')) : count($testimonials);
                            for($i = 0; $i < $testimonialCount; $i++): 
                            ?>
                                <button class="glide__bullet mx-1 w-3 h-3 rounded-full bg-gray-300" data-glide-dir="=<?php echo $i; ?>"></button>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration Banner -->
        <section class="py-12 bg-white border-y border-gray-200">
            <div class="container mx-auto px-4">
                <h3 class="text-xl font-medium text-center text-gray-700 mb-8">Works with your tech stack</h3>
                
                <ul class="flex flex-wrap items-center justify-center gap-6 grayscale hover:grayscale-0 transition">
                    <?php
                    // Define integrations as fallback
                    $integrations = array(
                        array(
                            'name' => 'Opera PMS',
                            'logo' => get_stylesheet_directory_uri() . '/assets/images/opera-logo.png'
                        ),
                        array(
                            'name' => 'Cloudbeds',
                            'logo' => get_stylesheet_directory_uri() . '/assets/images/cloudbeds-logo.png'
                        ),
                        array(
                            'name' => 'Zapier',
                            'logo' => get_stylesheet_directory_uri() . '/assets/images/zapier-logo.png'
                        ),
                        array(
                            'name' => 'Google Home',
                            'logo' => get_stylesheet_directory_uri() . '/assets/images/google-home-logo.png'
                        )
                    );
                    
                    // Check if integrations are defined in ACF
                    if(function_exists('get_field') && get_field('integrations')):
                        foreach(get_field('integrations') as $integration):
                    ?>
                        <li>
                            <?php if(!empty($integration['logo'])): ?>
                                <img src="<?php echo esc_url($integration['logo']); ?>" alt="<?php echo esc_attr($integration['name']); ?>" class="h-8 md:h-12">
                            <?php else: ?>
                                <div class="h-8 md:h-12 px-4 flex items-center">
                                    <span class="text-gray-500"><?php echo esc_html($integration['name']); ?></span>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php
                        endforeach;
                    else:
                        // Fallback to predefined integrations
                        foreach($integrations as $integration):
                    ?>
                        <li>
                            <div class="h-8 md:h-12 bg-gray-200 rounded px-4 flex items-center">
                                <span class="text-gray-500"><?php echo esc_html($integration['name']); ?></span>
                            </div>
                        </li>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </section>

        <!-- Resource & Helpdesk Preview -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Resources Column -->
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Resources</h3>
                        
                        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                            <h4 class="text-lg font-semibold mb-2">Featured White Paper</h4>
                            <p class="text-gray-600 mb-4">The True Cost of Metal Keys</p>
                            <a href="<?php echo function_exists('get_field') && !empty(get_field('whitepaper_url')) ? esc_url(get_field('whitepaper_url')) : '#'; ?>" class="inline-flex items-center text-primary-600 font-semibold">
                                Download PDF
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <h4 class="text-lg font-semibold mb-2">Latest Blog</h4>
                            <p class="text-gray-600 mb-4">Offline Access—Why It Matters</p>
                            <a href="<?php echo function_exists('get_field') && !empty(get_field('blog_url')) ? esc_url(get_field('blog_url')) : '/blog'; ?>" class="inline-flex items-center text-primary-600 font-semibold">
                                Read article
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Helpdesk Column -->
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Support</h3>
                        
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <h4 class="text-lg font-semibold mb-4">Helpdesk Search</h4>
                            
                            <form class="mb-6" id="helpdesk-search">
                                <div class="relative">
                                    <input type="text" placeholder="Search knowledge base..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                    <button type="submit" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            
                            <div class="space-y-4">
                                <a href="#" class="block hover:bg-gray-50 p-3 rounded-md transition">
                                    <h5 class="font-medium text-primary-600">How to reset a PIN code</h5>
                                    <p class="text-sm text-gray-500 mt-1">Quick guide for property managers</p>
                                </a>
                                
                                <a href="#" class="block hover:bg-gray-50 p-3 rounded-md transition">
                                    <h5 class="font-medium text-primary-600">Troubleshooting connectivity issues</h5>
                                    <p class="text-sm text-gray-500 mt-1">Step-by-step diagnostics</p>
                                </a>
                                
                                <a href="#" class="block hover:bg-gray-50 p-3 rounded-md transition">
                                    <h5 class="font-medium text-primary-600">Battery replacement guide</h5>
                                    <p class="text-sm text-gray-500 mt-1">Maintenance tips and schedule</p>
                                </a>
                            </div>
                            
                            <a href="<?php echo function_exists('get_field') && !empty(get_field('support_url')) ? esc_url(get_field('support_url')) : '/support'; ?>" class="inline-flex items-center text-primary-600 font-semibold mt-4">
                                Visit support center
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Primary CTA Band -->
        <section class="bg-gradient-to-r from-sky-600 to-cyan-500 py-16 relative">
            <!-- Diagonal Top Edge -->
            <svg class="absolute top-0 left-0 right-0 w-full" style="transform: translateY(-1px);" height="40" viewBox="0 0 1440 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 40L1440 0V40H0Z" fill="white"/>
            </svg>
            
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Ready to modernise your access control?</h2>
                <a href="<?php echo function_exists('get_field') && !empty(get_field('cta_url')) ? esc_url(get_field('cta_url')) : '/demo'; ?>" class="inline-block py-4 px-8 bg-white text-primary-600 font-bold rounded-lg shadow-xl hover:bg-gray-100 transition-colors text-lg">
                    Book a 10-Minute Demo
                </a>
            </div>
        </section>
        
    </main>
</div>

<!-- Ensure Masthead is visible -->
<style>
    #masthead {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    :root {
        --primary-600: #00AEEF;
        --primary-700: #0095CC;
        --primary-500: #2BB7F3;
        --primary-300: #7DD1F8;
    }
    
    /* Swiper JS styles */
    .swiper-container {
        overflow: hidden;
        position: relative;
    }
    
    .swiper-slide {
        height: auto;
    }
    
    .swiper-pagination-bullet-active {
        background-color: var(--primary-600);
    }
</style>

<!-- Enqueue scripts for interactivity -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Swiper carousel
        if (typeof Swiper !== 'undefined') {
            new Swiper('.product-carousel', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
        }
        
        // Initialize Glide.js for testimonials
        if (typeof Glide !== 'undefined') {
            new Glide('.testimonial-slider', {
                type: 'carousel',
                autoplay: 5000,
                animationDuration: 600,
                animationTimingFunc: 'ease',
                perView: 1,
                gap: 0
            }).mount();
        }
        
        // Simple helpdesk search form handling
        const helpdeskForm = document.getElementById('helpdesk-search');
        if (helpdeskForm) {
            helpdeskForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const query = this.querySelector('input').value;
                if (query.trim()) {
                    // In a real implementation, this would fetch from Zendesk API
                    console.log(`Searching for: ${query}`);
                    // For demo purposes, we're just preventing form submission
                }
            });
        }
    });
</script>

<?php
get_footer();
?>