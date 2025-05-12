<?php
/**
 * Template Name: IntelliBolt Product Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main product-page intelli-bolt-page">
        <div class="product-container">
            <!-- Hero Section -->
            <section class="product-hero">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1 class="product-title">
                                <?php 
                                if(function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['product_title']):
                                    echo esc_html(get_field('bolt_hero_section')['product_title']);
                                else:
                                    echo 'IntelliBolt — Smart Deadbolt Replacement';
                                endif;
                                ?>
                            </h1>
                            <p class="product-intro">
                                <?php 
                                if(function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['product_intro']):
                                    echo esc_html(get_field('bolt_hero_section')['product_intro']);
                                else:
                                    echo 'Not your typical off-the-shelf deadbolt. Upgrade legacy keyed locks with a fully keyless, cloud-managed solution that still works offline, keeping doors secure even when Wi-Fi drops. Multi-level permissions let owners, staff, and guests create and share their own keys without calling maintenance.';
                                endif;
                                ?>
                            </p>
                            <div class="hero-ctas">
                                <a href="#specifications" class="btn btn-secondary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['specs_button_text']):
                                        echo esc_html(get_field('bolt_hero_section')['specs_button_text']);
                                    else:
                                        echo 'View Specs';
                                    endif;
                                    ?>
                                </a>
                                <a href="<?php echo function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['quote_button_url'] ? esc_url(get_field('bolt_hero_section')['quote_button_url']) : '#quote'; ?>" class="btn btn-primary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['quote_button_text']):
                                        echo esc_html(get_field('bolt_hero_section')['quote_button_text']);
                                    else:
                                        echo 'Get a Quote';
                                    endif;
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <?php if(function_exists('get_field') && get_field('bolt_hero_section') && get_field('bolt_hero_section')['hero_image']): ?>
                                <img src="<?php echo esc_url(get_field('bolt_hero_section')['hero_image']); ?>" alt="IntelliBolt smart lock" class="product-img">
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellibolt.jpg" alt="IntelliBolt smart lock" class="product-img">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="product-key-features">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_features_section') && get_field('bolt_features_section')['features_title']):
                            echo esc_html(get_field('bolt_features_section')['features_title']);
                        else:
                            echo 'Key features & benefits';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="features-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_features_section') && get_field('bolt_features_section')['features']):
                            while(have_rows('bolt_features_section')['features']) : the_row(); 
                                $feature_text = get_sub_field('feature_text');
                                $feature_image = get_sub_field('feature_image');
                        ?>
                            <div class="feature-card">
                                <?php if($feature_image): ?>
                                    <div class="feature-image">
                                        <img src="<?php echo esc_url($feature_image); ?>" alt="IntelliBolt feature" class="feature-img">
                                    </div>
                                <?php endif; ?>
                                <div class="feature-content">
                                    <p class="feature-text"><?php echo esc_html($feature_text); ?></p>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div class="feature-card">
                                <div class="feature-content">
                                    <p class="feature-text">Six unlock methods – PIN, RFID, mobile key, Wi-Fi open, fingerprint, or mechanical override; every guest gets the option they prefer while you keep total control.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <p class="feature-text">Online and offline operation – Access rules sync automatically, yet every credential is stored on-device for guaranteed entry during outages.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <p class="feature-text">Custom schedules & auto-relock – Issue time-boxed codes, enable passage mode for events, or set the bolt to secure itself after a delay—no more forgotten lock-ups.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <p class="feature-text">Real-time activity logs – See who opened which door and when, plus receive low-battery and tamper alerts before problems escalate.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <p class="feature-text">USB backup power – Dead batteries are a non-issue; plug in a power bank, unlock, and swap cells on your schedule.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Specifications Section -->
            <section id="specifications" class="product-specifications">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_specs_section') && get_field('bolt_specs_section')['specs_title']):
                            echo esc_html(get_field('bolt_specs_section')['specs_title']);
                        else:
                            echo 'Technical specifications';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="specs-content">
                        <div class="specs-intro">
                            <p class="specs-description">
                                <?php 
                                if(function_exists('get_field') && get_field('bolt_specs_section') && isset(get_field('bolt_specs_section')['specs_description'])):
                                    echo esc_html(get_field('bolt_specs_section')['specs_description']);
                                else:
                                    echo 'IntelliBolt combines all the power of smart access technology with the familiar deadbolt form factor. Built to withstand the elements while providing multiple access methods for any user preference.';
                                endif;
                                ?>
                            </p>
                        </div>
                        
                        <div class="specs-container">
                            <div class="specs-table-container">
                                <table class="specs-table">
                                    <tbody>
                                        <?php 
                                        if(function_exists('get_field') && get_field('bolt_specs_section') && get_field('bolt_specs_section')['specs']):
                                            while(have_rows('bolt_specs_section')['specs']) : the_row(); 
                                                $spec_name = get_sub_field('spec_name');
                                                $spec_value = get_sub_field('spec_value');
                                        ?>
                                            <tr>
                                                <td class="spec-name"><?php echo esc_html($spec_name); ?></td>
                                                <td class="spec-value"><?php echo esc_html($spec_value); ?></td>
                                            </tr>
                                        <?php 
                                            endwhile;
                                        else: 
                                        ?>
                                            <tr>
                                                <td class="spec-name">Dimensions</td>
                                                <td class="spec-value">Front: 173 mm H × 72 mm W × 22 mm D<br>Back: 172 mm H × 72 mm W × 31 mm D</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Materials</td>
                                                <td class="spec-value">Zinc alloy front plate with brushed satin nickel or matte black finish<br>High-impact ABS back housing</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Access Methods</td>
                                                <td class="spec-value">Keypad PIN codes (up to 5,000 unique)<br>RFID cards/fobs (13.56MHz)<br>Mobile app access via Bluetooth<br>Remote unlock via Wi-Fi<br>Mechanical key override</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Power</td>
                                                <td class="spec-value">4 × AA alkaline batteries (lasts 8-12 months with normal use)<br>Emergency external power via Micro-USB</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Door thickness</td>
                                                <td class="spec-value">35 – 60 mm (1⅜" – 2⅜")<br>Extension kits available for thicker doors</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Backset</td>
                                                <td class="spec-value">60 mm (2⅜") or 70 mm (2¾")<br>Adjustable latch included</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Environmental</td>
                                                <td class="spec-value">Operating temperature: −35 °C to 55 °C (−31 °F to 131 °F)<br>Humidity: 0 – 95% RH non-condensing<br>IP55 weather-sealed<br>200-hour salt-spray tested for coastal environments</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Connectivity</td>
                                                <td class="spec-value">Bluetooth 5.0 for direct connection<br>Wi-Fi 2.4GHz (802.11 b/g/n)<br>Offline access code storage for network outages</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Security Features</td>
                                                <td class="spec-value">Code scrambling for PIN protection<br>AES-256 encrypted wireless communication<br>Automatic lockout after multiple failed attempts<br>Tamper alarm with push notifications<br>ANSI Grade 2 certified latch mechanism</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Software Support</td>
                                                <td class="spec-value">33Lock mobile app (iOS 13+ and Android 8+)<br>Web dashboard for property management<br>REST API for custom integrations<br>Direct PMS integrations (Cloudbeds, Mews, etc.)</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Warranty</td>
                                                <td class="spec-value">3-year limited warranty<br>Extended warranty options available</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <?php if(function_exists('get_field') && get_field('bolt_specs_section') && get_field('bolt_specs_section')['specs_image']): ?>
                                <div class="specs-image">
                                    <img src="<?php echo esc_url(get_field('bolt_specs_section')['specs_image']); ?>" alt="IntelliBolt specifications diagram" class="specs-img">
                                </div>
                            <?php else: ?>
                                <div class="specs-highlights">
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>ANSI Grade 2</h4>
                                            <p>Certified security for residential and light commercial applications</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>6 Access Methods</h4>
                                            <p>PINs, cards, mobile app, fingerprint, remote unlock, and emergency key</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Online/Offline</h4>
                                            <p>Cloud connectivity with offline redundancy for continuous operation</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z"></path><path d="m12 2-2 2"></path><path d="m12 2 2 2"></path><path d="m2 12-2 2"></path><path d="m2 12 2 2"></path><path d="m22 12-2 2"></path><path d="m22 12 2 2"></path><path d="m12 22-2-2"></path><path d="m12 22 2-2"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Weather Resistant</h4>
                                            <p>IP55-rated for dust and water resistance in all climate conditions</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Compatibility Section -->
            <section class="compatibility-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_compatibility_section') && get_field('bolt_compatibility_section')['compatibility_title']):
                            echo esc_html(get_field('bolt_compatibility_section')['compatibility_title']);
                        else:
                            echo 'Door Compatibility Guide';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="compatibility-tabs">
                        <div class="compatibility-nav">
                            <div class="compatibility-tab active" data-tab="standard">Standard Doors</div>
                            <div class="compatibility-tab" data-tab="specialty">Specialty Doors</div>
                            <div class="compatibility-tab" data-tab="not-compatible">Not Compatible</div>
                        </div>
                        
                        <div class="compatibility-content">
                            <div class="compatibility-item active" id="standard-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['standard_doors']['standard_title'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['standard_doors']['standard_title']);
                                    else:
                                        echo 'Ideal for Exterior Doors';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['standard_doors']['standard_intro'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['standard_doors']['standard_intro']);
                                    else:
                                        echo 'The IntelliBolt is designed to replace existing deadbolts on these door types:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['standard_doors']['standard_items']) &&
                                       is_array(get_field('bolt_compatibility_section')['standard_doors']['standard_items'])):
                                        foreach(get_field('bolt_compatibility_section')['standard_doors']['standard_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Door thickness: 35mm – 60mm (1⅜" – 2⅜")</li>
                                        <li>Standard deadbolt preparations</li>
                                        <li>Wood, metal, and fiberglass doors</li>
                                        <li>Most residential and light commercial exterior doors</li>
                                        <li>Doors with existing cylinder deadbolts</li>
                                    <?php endif; ?>
                                </ul>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['standard_doors']['standard_conclusion'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['standard_doors']['standard_conclusion']);
                                    else:
                                        echo 'IntelliBolt features a robust design that works with standard American deadbolt preparations, making it an ideal retrofit for most exterior doors without requiring any significant modifications.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="specialty-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['specialty_doors']['specialty_title'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['specialty_doors']['specialty_title']);
                                    else:
                                        echo 'Specialty Door Compatibility';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['specialty_doors']['specialty_intro'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['specialty_doors']['specialty_intro']);
                                    else:
                                        echo 'IntelliBolt can also work with these specialty door types with the right preparation:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['specialty_doors']['specialty_items']) &&
                                       is_array(get_field('bolt_compatibility_section')['specialty_doors']['specialty_items'])):
                                        foreach(get_field('bolt_compatibility_section')['specialty_doors']['specialty_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Extra-thick doors (with extended hardware, sold separately)</li>
                                        <li>Fire-rated doors (where allowed by local code)</li>
                                        <li>Doors with glass inserts (where solid mounting is available)</li>
                                        <li>Dutch doors (upper section only)</li>
                                        <li>Doors with non-standard backsets (with provided adapters)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['specialty_doors']['specialty_tip'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['specialty_doors']['specialty_tip']);
                                    else:
                                        echo 'For specialty door installations, we recommend consulting with our support team to ensure proper fit and function before ordering.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="not-compatible-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_title'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_title']);
                                    else:
                                        echo 'Not Recommended For';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_intro'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_intro']);
                                    else:
                                        echo 'The IntelliBolt is not ideal for these applications:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_items']) &&
                                       is_array(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_items'])):
                                        foreach(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Doors requiring mortise locks (consider our IntelliMortise instead)</li>
                                        <li>Extremely thin doors (under 35mm / 1⅜")</li>
                                        <li>Sliding glass doors or pocket doors</li>
                                        <li>Doors with rim locks or vertical locks</li>
                                        <li>Interior doors with simple passage function (use IntelliLever instead)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_compatibility_section') && 
                                       isset(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_tip'])):
                                        echo esc_html(get_field('bolt_compatibility_section')['not_compatible']['not_compatible_tip']);
                                    else:
                                        echo 'Not sure if IntelliBolt is right for your door? Send us photos of your existing hardware and we will recommend the best 33Lock solution for your needs.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Installation Steps Section -->
            <section class="installation-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_installation_section') && get_field('bolt_installation_section')['installation_title']):
                            echo esc_html(get_field('bolt_installation_section')['installation_title']);
                        else:
                            echo '15-Minute Installation Process';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="installation-steps">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_installation_section') && 
                           isset(get_field('bolt_installation_section')['installation_steps']) && 
                           is_array(get_field('bolt_installation_section')['installation_steps'])):
                            foreach(get_field('bolt_installation_section')['installation_steps'] as $step):
                        ?>
                            <div class="installation-step">
                                <div class="step-number"><?php echo esc_html($step['step_number']); ?></div>
                                <div class="step-content">
                                    <h3 class="step-title"><?php echo esc_html($step['step_title']); ?></h3>
                                    <p class="step-description"><?php echo esc_html($step['step_description']); ?></p>
                                    <?php if(!empty($step['step_tip'])): ?>
                                        <p class="step-tip"><?php echo esc_html($step['step_tip']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <div class="installation-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h3 class="step-title">Remove Existing Deadbolt</h3>
                                    <p class="step-description">Start by removing your existing deadbolt hardware. Unscrew the two mounting screws on the interior side of the door and pull both the interior and exterior components off. A standard Phillips screwdriver is all you need.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h3 class="step-title">Install Latch Assembly</h3>
                                    <p class="step-description">Insert the included latch assembly into the edge bore of your door, aligning it with the existing strike plate. Secure it with the two screws provided. The IntelliBolt works with both 2⅜" and 2¾" backsets without any adjustments.</p>
                                    <p class="step-tip"><strong>Pro Tip:</strong> If replacing an old deadbolt, you may not need to remove the existing latch mechanism if it's in good condition and compatible with the IntelliBolt.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h3 class="step-title">Mount the Exterior Component</h3>
                                    <p class="step-description">Place the exterior component of the IntelliBolt against the door, feeding the tailpiece through the latch and the cable through the hole above. Make sure the keypad is oriented correctly (always facing up).</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h3 class="step-title">Connect and Secure Interior Unit</h3>
                                    <p class="step-description">Connect the cable from the exterior component to the interior unit. Mount the interior component using the provided screws, making sure the tailpiece engages with the interior thumbturn properly. Insert the 4 AA batteries into the battery compartment.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h3 class="step-title">Test and Activate</h3>
                                    <p class="step-description">Test mechanical operation by turning the thumbturn. Then follow the setup instructions in the 33Lock app to pair via Bluetooth and connect to your Wi-Fi network. Create your first access codes and you're ready to go!</p>
                                    <p class="step-tip"><strong>Note:</strong> All IntelliBolts come pre-programmed with a default access code (1234#) that will work until you set up your own custom codes through the app.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Testimonial Section -->
            <section class="testimonial-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_testimonial_section') && get_field('bolt_testimonial_section')['testimonial_title']):
                            echo esc_html(get_field('bolt_testimonial_section')['testimonial_title']);
                        else:
                            echo 'What Our Customers Say';
                        endif;
                        ?>
                    </h2>
                    
                    <?php 
                    if(function_exists('get_field') && get_field('bolt_testimonial_section') && 
                       isset(get_field('bolt_testimonial_section')['testimonials']) && 
                       is_array(get_field('bolt_testimonial_section')['testimonials']) &&
                       count(get_field('bolt_testimonial_section')['testimonials']) > 0):
                        $testimonial = get_field('bolt_testimonial_section')['testimonials'][0]; // Get first testimonial
                    ?>
                        <div class="testimonials-container">
                            <p class="testimonial-text"><?php echo esc_html($testimonial['testimonial_text']); ?></p>
                            
                            <div class="testimonial-author">
                                <?php if(!empty($testimonial['testimonial_avatar'])): ?>
                                    <img src="<?php echo esc_url($testimonial['testimonial_avatar']); ?>" alt="<?php echo esc_attr($testimonial['testimonial_name']); ?>" class="testimonial-avatar-img">
                                <?php else: ?>
                                    <div class="testimonial-avatar"><?php echo esc_html(substr($testimonial['testimonial_name'], 0, 1)); ?></div>
                                <?php endif; ?>
                                <div class="testimonial-info">
                                    <p class="testimonial-name"><?php echo esc_html($testimonial['testimonial_name']); ?></p>
                                    <?php if(!empty($testimonial['testimonial_position'])): ?>
                                        <p class="testimonial-position"><?php echo esc_html($testimonial['testimonial_position']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="testimonials-container">
                            <p class="testimonial-text">We've been rolling out IntelliBolt across our mid-tier properties and saw guest satisfaction ratings jump by 11%. The online/offline flexibility meant we could deploy even at properties with spotty Wi-Fi, and installation was so straightforward our maintenance team handled everything without outside contractors.</p>
                            
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">J</div>
                                <div class="testimonial-info">
                                    <p class="testimonial-name">Jennifer Kingsley</p>
                                    <p class="testimonial-position">Property Technology Director, BlueSky Hospitality</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
            
            <!-- FAQ Section -->
            <section class="faq-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_faq_section') && get_field('bolt_faq_section')['faq_title']):
                            echo esc_html(get_field('bolt_faq_section')['faq_title']);
                        else:
                            echo 'Frequently Asked Questions';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="faq-container">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_faq_section') && 
                           isset(get_field('bolt_faq_section')['faqs']) && 
                           is_array(get_field('bolt_faq_section')['faqs'])):
                            $first = true;
                            foreach(get_field('bolt_faq_section')['faqs'] as $faq):
                        ?>
                            <div class="faq-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="faq-question"><?php echo esc_html($faq['question']); ?></div>
                                <div class="faq-answer">
                                    <?php echo wp_kses_post($faq['answer']); ?>
                                </div>
                            </div>
                        <?php 
                                $first = false;
                            endforeach;
                        else:
                        ?>
                            <div class="faq-item active">
                                <div class="faq-question">Can IntelliBolt replace any standard deadbolt?</div>
                                <div class="faq-answer">
                                    <p>IntelliBolt is designed to replace most standard deadbolts on doors with a thickness of 35-60mm (1⅜" - 2⅜"). It fits the vast majority of American-standard deadbolt preparations. If you're unsure about compatibility with your specific doors, our technical team can review photos of your existing hardware to confirm compatibility before you purchase.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">How long do the batteries last?</div>
                                <div class="faq-answer">
                                    <p>With normal use (approximately 10-15 entries per day), the 4 AA batteries typically last 8-10 months. Battery life depends on usage frequency, Wi-Fi connectivity settings, and environmental conditions. The lock provides low-battery warnings through the app and on the lock itself when levels reach approximately 20%, giving you ample time to replace them.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">What happens if the batteries die completely?</div>
                                <div class="faq-answer">
                                    <p>IntelliBolt includes multiple backup options: 1) A micro-USB port on the bottom for emergency power using a standard power bank, 2) A mechanical key override via a concealed cylinder, and 3) Non-volatile memory that retains all programming even without power. Once power is restored, your settings and access credentials remain intact.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Is IntelliBolt compatible with property management systems?</div>
                                <div class="faq-answer">
                                    <p>Yes, IntelliBolt works with most major property management systems through our open API. We have direct integrations with platforms like Cloudbeds, Mews, Lodgify, and others. For specialized systems, our development team can provide you with API documentation or suggest middleware solutions where necessary.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Is the IntelliBolt weather-resistant?</div>
                                <div class="faq-answer">
                                    <p>IntelliBolt carries an IP55 rating and has been salt-spray tested for 200 hours, making it suitable for most exterior applications. It can withstand rain, dust, and temperature extremes from -35°C to 55°C (-31°F to 131°F). For extremely harsh marine or industrial environments, we recommend our marine-grade hardware options with enhanced sealing.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Use Cases Section -->
            <section class="product-use-cases">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_use_cases_section') && get_field('bolt_use_cases_section')['use_cases_title']):
                            echo esc_html(get_field('bolt_use_cases_section')['use_cases_title']);
                        else:
                            echo 'Perfect for…';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="use-cases-container">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_use_cases_section') && get_field('bolt_use_cases_section')['use_cases']):
                            while(have_rows('bolt_use_cases_section')['use_cases']) : the_row(); 
                                $use_case_text = get_sub_field('use_case_text');
                        ?>
                            <div class="use-case-item"><?php echo esc_html($use_case_text); ?></div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div class="use-case-item">Hotels & motels wanting a quick retrofit that aligns with contactless check-in strategies.</div>
                            <div class="use-case-item">Vacation-rental portfolios needing granular, role-based access without monthly card costs.</div>
                            <div class="use-case-item">Multifamily buildings replacing aging deadbolts without re-machining doors.</div>
                            <div class="use-case-item">Back-of-house/staff doors where audit trails and low-cost hardware matter.</div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section id="quote" class="product-cta">
                <div class="container">
                    <div class="cta-content">
                        <h2 class="cta-title">
                            <?php 
                            if(function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['cta_title']):
                                echo esc_html(get_field('bolt_cta_section')['cta_title']);
                            else:
                                echo 'Ready to upgrade?';
                            endif;
                            ?>
                        </h2>
                        <p class="cta-text">
                            <?php 
                            if(function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['cta_text']):
                                echo esc_html(get_field('bolt_cta_section')['cta_text']);
                            else:
                                echo 'Eliminate key hassles and start deploying IntelliBolt across your portfolio today.';
                            endif;
                            ?>
                        </p>
                        <div class="cta-buttons">
                            <a href="<?php echo function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['primary_cta_url'] ? esc_url(get_field('bolt_cta_section')['primary_cta_url']) : '/contact'; ?>" class="btn btn-primary btn-large">
                                <?php 
                                if(function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['primary_cta_text']):
                                    echo esc_html(get_field('bolt_cta_section')['primary_cta_text']);
                                else:
                                    echo 'Get a Free Quote';
                                endif;
                                ?>
                            </a>
                            
                            <?php if(function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['show_secondary_cta']) { ?>
                                <a href="<?php echo function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['secondary_cta_url'] ? esc_url(get_field('bolt_cta_section')['secondary_cta_url']) : '/sample'; ?>" class="btn btn-secondary btn-large">
                                    <?php 
                                    if(function_exists('get_field') && get_field('bolt_cta_section') && get_field('bolt_cta_section')['secondary_cta_text']):
                                        echo esc_html(get_field('bolt_cta_section')['secondary_cta_text']);
                                    else:
                                        echo 'Order a Sample';
                                    endif;
                                    ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Related Products -->
            <section class="related-products">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_related_products_section') && get_field('bolt_related_products_section')['related_products_title']):
                            echo esc_html(get_field('bolt_related_products_section')['related_products_title']);
                        else:
                            echo 'Complete your smart access ecosystem';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="related-products-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('bolt_related_products_section') && get_field('bolt_related_products_section')['related_products']):
                            while(have_rows('bolt_related_products_section')['related_products']) : the_row(); 
                                $product_title = get_sub_field('product_title');
                                $product_description = get_sub_field('product_description');
                                $product_image = get_sub_field('product_image');
                                $product_url = get_sub_field('product_url');
                        ?>
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <?php if($product_image): ?>
                                        <img src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_title); ?> smart lock" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php echo esc_attr($product_title); ?>" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title"><?php echo esc_html($product_title); ?></h3>
                                    <p class="related-product-description"><?php echo esc_html($product_description); ?></p>
                                    <a href="<?php echo esc_url($product_url); ?>" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellimortise.jpg" alt="IntelliMortise smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliMortise</h3>
                                    <p class="related-product-description">Flagship security for main entrances and exterior doors</p>
                                    <a href="/locks/intellimortise" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                            
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellilever.jpg" alt="IntelliLever smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliLever</h3>
                                    <p class="related-product-description">Retrofit solution for interior doors</p>
                                    <a href="/locks/intellilever" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                            
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellireader.jpg" alt="IntelliReader access controller" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliReader</h3>
                                    <p class="related-product-description">Common area access controller for lobbies and facilities</p>
                                    <a href="/locks/intellireader" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>