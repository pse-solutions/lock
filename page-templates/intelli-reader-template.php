<?php
/**
 * Template Name: IntelliReader Product Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main product-page intelli-reader-page">
        <div class="product-container">
            <!-- Hero Section -->
            <section class="product-hero">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1 class="product-title">
                                <?php 
                                if(function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['product_title']):
                                    echo esc_html(get_field('reader_hero_section')['product_title']);
                                else:
                                    echo 'IntelliReader — Smart Access Control Unit';
                                endif;
                                ?>
                            </h1>
                            <p class="product-intro">
                                <?php 
                                if(function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['product_intro']):
                                    echo esc_html(get_field('reader_hero_section')['product_intro']);
                                else:
                                    echo 'A stand-alone keypad/reader that installs beside the door, IntelliReader eliminates the cost and complexity of a full access-control panel. It shares the same software and credentials as your 33 Lock door hardware, so staff manage every opening from one dashboard.';
                                endif;
                                ?>
                            </p>
                            <div class="hero-ctas">
                                <a href="#specifications" class="btn btn-secondary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['specs_button_text']):
                                        echo esc_html(get_field('reader_hero_section')['specs_button_text']);
                                    else:
                                        echo 'View Specs';
                                    endif;
                                    ?>
                                </a>
                                <a href="<?php echo function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['quote_button_url'] ? esc_url(get_field('reader_hero_section')['quote_button_url']) : '#quote'; ?>" class="btn btn-primary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['quote_button_text']):
                                        echo esc_html(get_field('reader_hero_section')['quote_button_text']);
                                    else:
                                        echo 'Get a Quote';
                                    endif;
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <?php if(function_exists('get_field') && get_field('reader_hero_section') && get_field('reader_hero_section')['hero_image']): ?>
                                <img src="<?php echo esc_url(get_field('reader_hero_section')['hero_image']); ?>" alt="IntelliReader access control unit" class="product-img">
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellireader.jpg" alt="IntelliReader access control unit" class="product-img">
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
                        if(function_exists('get_field') && get_field('reader_features_section') && get_field('reader_features_section')['features_title']):
                            echo esc_html(get_field('reader_features_section')['features_title']);
                        else:
                            echo 'Key features & benefits';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="features-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_features_section') && get_field('reader_features_section')['features']):
                            while(have_rows('reader_features_section')['features']) : the_row(); 
                                $feature_text = get_sub_field('feature_text');
                                $feature_image = get_sub_field('feature_image');
                        ?>
                            <div class="feature-card">
                                <?php if($feature_image): ?>
                                    <div class="feature-image">
                                        <img src="<?php echo esc_url($feature_image); ?>" alt="IntelliReader feature" class="feature-img">
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
                                    <h3 class="feature-title">Low-cost retrofit</h3>
                                    <p class="feature-text">Power the unit with the existing 12 V line—no additional controllers or long cable runs.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <h3 class="feature-title">Six credential options</h3>
                                    <p class="feature-text">PIN, RFID, mobile key, Wi-Fi open, fingerprint, or metal key override give everyone a preferred way in.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <h3 class="feature-title">Online and offline assurance</h3>
                                    <p class="feature-text">Rules sync to the cloud, yet every code lives on-device for guaranteed access during outages.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <h3 class="feature-title">Programmable automation</h3>
                                    <p class="feature-text">Time-bound PINs, passage mode, and auto-re-lock keep lobbies and staff doors secure with zero manual checks.</p>
                                </div>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-content">
                                    <h3 class="feature-title">Audit-ready insights</h3>
                                    <p class="feature-text">Instant access logs and tamper alerts help owners prove compliance and spot anomalies fast.</p>
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
                        if(function_exists('get_field') && get_field('reader_specs_section') && get_field('reader_specs_section')['specs_title']):
                            echo esc_html(get_field('reader_specs_section')['specs_title']);
                        else:
                            echo 'At-a-Glance Specifications';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="specs-content">
                        <div class="specs-intro">
                            <p class="specs-description">
                                <?php 
                                if(function_exists('get_field') && get_field('reader_specs_section') && isset(get_field('reader_specs_section')['specs_description'])):
                                    echo esc_html(get_field('reader_specs_section')['specs_description']);
                                else:
                                    echo 'IntelliReader transforms any electric door hardware into an intelligent access point. Its sleek design conceals enterprise-grade technology that works seamlessly with your existing infrastructure.';
                                endif;
                                ?>
                            </p>
                        </div>
                        
                        <div class="specs-container">
                            <div class="specs-table-container">
                                <table class="specs-table">
                                    <tbody>
                                        <?php 
                                        if(function_exists('get_field') && get_field('reader_specs_section') && get_field('reader_specs_section')['specs']):
                                            while(have_rows('reader_specs_section')['specs']) : the_row(); 
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
                                                <td class="spec-value">125 mm H × 79 mm W × 15.5 mm D<br>(4.9" × 3.1" × 0.6")</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Materials</td>
                                                <td class="spec-value">Anodized aluminum body with brushed finish<br>Tempered glass touch interface<br>Available in silver, black, or white</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Input Methods</td>
                                                <td class="spec-value">Capacitive touch keypad (4-9 digit PINs)<br>RFID reader (13.56MHz, ISO14443A)<br>BLE mobile access (via smartphone)<br>Fingerprint reader (500 DPI optical)</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Power Requirements</td>
                                                <td class="spec-value">Input voltage: 12V DC ± 10%<br>Current draw: 200mA (standby), 500mA (peak)<br>Power over Ethernet option available (PoE adapter sold separately)</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Relay Outputs</td>
                                                <td class="spec-value">Primary relay: NO/NC/COM, 3A @ 24V DC max<br>Auxiliary relay: NO/NC/COM, 3A @ 24V DC max<br>Alarm output: Solid state, 100mA @ 24V DC max</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Inputs</td>
                                                <td class="spec-value">Request-to-Exit (REX) input<br>Door position sensor input<br>Auxiliary input (configurable)</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Interfaces</td>
                                                <td class="spec-value">Wiegand (input/output, 26-37 bit)<br>RS-485 for expansion modules<br>USB port for configuration</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Connectivity</td>
                                                <td class="spec-value">Wi-Fi: 2.4GHz, 802.11 b/g/n<br>Bluetooth 5.0 LE<br>Optional 4G/LTE cellular module</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Environmental</td>
                                                <td class="spec-value">Operating temperature: −35°C to 55°C (−31°F to 131°F)<br>Humidity: 0–95% RH non-condensing<br>IP66 weather resistance (suitable for outdoor installation)<br>UV resistant with anti-corrosion coating</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Security Features</td>
                                                <td class="spec-value">AES-256 encrypted communication<br>Tamper detection (removal from wall)<br>Anti-vandal protection<br>Optical tamper detection<br>Secure boot verification</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Capacity</td>
                                                <td class="spec-value">Users: Up to 5,000 local<br>Event logging: 100,000 events stored locally<br>Time schedules: 128 different time periods<br>Holiday exceptions: 64 configurable dates</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Software Support</td>
                                                <td class="spec-value">33Lock administration portal (browser-based)<br>iOS and Android mobile apps<br>REST API for third-party integration<br>MQTT/AMQP support for automation</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Certifications</td>
                                                <td class="spec-value">CE, FCC, RoHS compliant<br>UL 294 listed for access control<br>ADA compliant</td>
                                            </tr>
                                            <tr>
                                                <td class="spec-name">Warranty</td>
                                                <td class="spec-value">3-year limited hardware warranty<br>Extended warranty options available</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <?php if(function_exists('get_field') && get_field('reader_specs_section') && get_field('reader_specs_section')['specs_image']): ?>
                                <div class="specs-image">
                                    <img src="<?php echo esc_url(get_field('reader_specs_section')['specs_image']); ?>" alt="IntelliReader specifications diagram" class="specs-img">
                                </div>
                            <?php else: ?>
                                <div class="specs-highlights">
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Multi-Reader Support</h4>
                                            <p>Manage up to 64 readers from a single dashboard</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Universal Compatibility</h4>
                                            <p>Works with electric strikes, mag locks, and automatic doors</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Advanced Logic</h4>
                                            <p>Programmable rules for automatic locking/unlocking based on schedules</p>
                                        </div>
                                    </div>
                                    <div class="spec-highlight">
                                        <div class="highlight-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z"></path><path d="m12 2-2 2"></path><path d="m12 2 2 2"></path><path d="m2 12-2 2"></path><path d="m2 12 2 2"></path><path d="m22 12-2 2"></path><path d="m22 12 2 2"></path><path d="m12 22-2-2"></path><path d="m12 22 2-2"></path></svg>
                                        </div>
                                        <div class="highlight-text">
                                            <h4>Outdoor Rated</h4>
                                            <p>IP66 protection for installation in exposed locations</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Feature Checklist Section -->
            <section class="product-feature-checklist">
                <div class="container">
                    <h2 class="section-title">Feature checklist</h2>
                    
                    <div class="checklist-container">
                        <div class="checklist-item">
                            <span class="checklist-icon">✓</span>
                            <span class="checklist-text">Custom 4- to 9-digit PINs</span>
                        </div>
                        <div class="checklist-item">
                            <span class="checklist-icon">✓</span>
                            <span class="checklist-text">Door schedules & passage mode</span>
                        </div>
                        <div class="checklist-item">
                            <span class="checklist-icon">✓</span>
                            <span class="checklist-text">Auto re-lock timer</span>
                        </div>
                        <div class="checklist-item">
                            <span class="checklist-icon">✓</span>
                            <span class="checklist-text">Low-battery & tamper alerts</span>
                        </div>
                        <div class="checklist-item">
                            <span class="checklist-icon">✓</span>
                            <span class="checklist-text">Exportable access logs</span>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Compatibility Section -->
            <section class="compatibility-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_compatibility_section') && get_field('reader_compatibility_section')['compatibility_title']):
                            echo esc_html(get_field('reader_compatibility_section')['compatibility_title']);
                        else:
                            echo 'Integration & Compatibility Guide';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="compatibility-tabs">
                        <div class="compatibility-nav">
                            <div class="compatibility-tab active" data-tab="standard">Standard Setups</div>
                            <div class="compatibility-tab" data-tab="specialty">Advanced Integrations</div>
                            <div class="compatibility-tab" data-tab="not-compatible">Not Compatible</div>
                        </div>
                        
                        <div class="compatibility-content">
                            <div class="compatibility-item active" id="standard-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['standard_doors']['standard_title'])):
                                        echo esc_html(get_field('reader_compatibility_section')['standard_doors']['standard_title']);
                                    else:
                                        echo 'Standard Installations';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['standard_doors']['standard_intro'])):
                                        echo esc_html(get_field('reader_compatibility_section')['standard_doors']['standard_intro']);
                                    else:
                                        echo 'IntelliReader works with these common door control mechanisms:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['standard_doors']['standard_items']) &&
                                       is_array(get_field('reader_compatibility_section')['standard_doors']['standard_items'])):
                                        foreach(get_field('reader_compatibility_section')['standard_doors']['standard_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Standard electric strikes (fail-secure or fail-safe)</li>
                                        <li>Electromagnetic locks (surface mount or mortise)</li>
                                        <li>Electric deadbolts and deadlatches</li>
                                        <li>Most 12V DC door controllers and relays</li>
                                        <li>Electric door operators with relay inputs</li>
                                    <?php endif; ?>
                                </ul>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['standard_doors']['standard_conclusion'])):
                                        echo esc_html(get_field('reader_compatibility_section')['standard_doors']['standard_conclusion']);
                                    else:
                                        echo 'IntelliReader is designed to replace or supplement nearly any keypad, proximity reader, or intercom system with cloud-connected access control.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="specialty-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['specialty_doors']['specialty_title'])):
                                        echo esc_html(get_field('reader_compatibility_section')['specialty_doors']['specialty_title']);
                                    else:
                                        echo 'Advanced Integration Options';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['specialty_doors']['specialty_intro'])):
                                        echo esc_html(get_field('reader_compatibility_section')['specialty_doors']['specialty_intro']);
                                    else:
                                        echo 'IntelliReader can also integrate with these advanced systems:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['specialty_doors']['specialty_items']) &&
                                       is_array(get_field('reader_compatibility_section')['specialty_doors']['specialty_items'])):
                                        foreach(get_field('reader_compatibility_section')['specialty_doors']['specialty_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Elevator control systems (with appropriate relay interface)</li>
                                        <li>Gate and garage door controllers</li>
                                        <li>Turnstiles and revolving doors</li>
                                        <li>Automatic sliding/swing door operators</li>
                                        <li>Third-party access control panels via Wiegand interface</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['specialty_doors']['specialty_tip'])):
                                        echo esc_html(get_field('reader_compatibility_section')['specialty_doors']['specialty_tip']);
                                    else:
                                        echo 'For advanced integrations, we recommend consulting with our technical support team to design the optimal solution for your specific needs.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="not-compatible-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['not_compatible']['not_compatible_title'])):
                                        echo esc_html(get_field('reader_compatibility_section')['not_compatible']['not_compatible_title']);
                                    else:
                                        echo 'Not Recommended For';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['not_compatible']['not_compatible_intro'])):
                                        echo esc_html(get_field('reader_compatibility_section')['not_compatible']['not_compatible_intro']);
                                    else:
                                        echo 'IntelliReader is not ideal for these applications:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['not_compatible']['not_compatible_items']) &&
                                       is_array(get_field('reader_compatibility_section')['not_compatible']['not_compatible_items'])):
                                        foreach(get_field('reader_compatibility_section')['not_compatible']['not_compatible_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>High-security facilities requiring multi-factor authentication (unless paired with additional security)</li>
                                        <li>Doors requiring 24V or higher voltage systems (without appropriate relaying)</li>
                                        <li>Applications requiring integration with proprietary or closed protocols</li>
                                        <li>Areas without any available power source (IntelliReader requires constant 12V DC power)</li>
                                        <li>Standalone deadbolts or mortise locks (consider IntelliBolt, IntelliLever, or IntelliMortise instead)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_compatibility_section') && 
                                       isset(get_field('reader_compatibility_section')['not_compatible']['not_compatible_tip'])):
                                        echo esc_html(get_field('reader_compatibility_section')['not_compatible']['not_compatible_tip']);
                                    else:
                                        echo 'Not sure if IntelliReader is right for your application? Our integration specialists can review your requirements and recommend the best solution for your specific needs.';
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
                        if(function_exists('get_field') && get_field('reader_installation_section') && get_field('reader_installation_section')['installation_title']):
                            echo esc_html(get_field('reader_installation_section')['installation_title']);
                        else:
                            echo 'Simple Wiring & Installation';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="installation-steps">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_installation_section') && 
                           isset(get_field('reader_installation_section')['installation_steps']) && 
                           is_array(get_field('reader_installation_section')['installation_steps'])):
                            foreach(get_field('reader_installation_section')['installation_steps'] as $step):
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
                                    <h3 class="step-title">Mount the Reader</h3>
                                    <p class="step-description">Begin by mounting the IntelliReader at the desired height (typically 48-54 inches from the floor) next to your door or entryway. Use the provided mounting plate and secure it to the wall with appropriate anchors for your wall type.</p>
                                    <p class="step-tip"><strong>Pro Tip:</strong> For solid surfaces like concrete or brick, use a hammer drill with a masonry bit to create pilot holes for the anchors.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h3 class="step-title">Connect Power Supply</h3>
                                    <p class="step-description">Connect the 12V DC power supply to the IntelliReader. The device accepts input voltage of 12V DC ± 10% and draws approximately 200mA during normal operation. Make sure to observe correct polarity when connecting power.</p>
                                    <p class="step-tip"><strong>Note:</strong> A backup power source is recommended to maintain functionality during power outages. IntelliReader can be connected to your existing access control power supply if it provides 12V DC.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h3 class="step-title">Wire Lock Mechanism</h3>
                                    <p class="step-description">Connect the IntelliReader's relay outputs to your electric strike, magnetic lock, or door controller. The relay supports both normally open (NO) and normally closed (NC) configurations with a rated load of up to 3A at 24V DC.</p>
                                    <p class="step-tip"><strong>Important:</strong> For fail-safe locking mechanisms (unlocks when power is lost), use NC contacts. For fail-secure mechanisms (remains locked when power is lost), use NO contacts. Refer to your specific lock documentation for proper wiring requirements.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h3 class="step-title">Connect to Network</h3>
                                    <p class="step-description">Power up the IntelliReader and use the 33Lock app to connect it to your Wi-Fi network. The reader will first pair with your smartphone via Bluetooth, then you can enter your Wi-Fi credentials to get it online.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h3 class="step-title">Test & Configure</h3>
                                    <p class="step-description">Test the system by setting up a temporary access code. Verify that the lock actuates properly when the correct code is entered. Then use the 33Lock web dashboard or app to configure your access rules, schedules, and user permissions.</p>
                                    <p class="step-tip"><strong>Pro Tip:</strong> IntelliReader maintains a local database of valid credentials, so it continues to function even during network outages. Rules and credentials will sync automatically when connection is restored.</p>
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
                        if(function_exists('get_field') && get_field('reader_testimonial_section') && get_field('reader_testimonial_section')['testimonial_title']):
                            echo esc_html(get_field('reader_testimonial_section')['testimonial_title']);
                        else:
                            echo 'What Our Customers Say';
                        endif;
                        ?>
                    </h2>
                    
                    <?php 
                    if(function_exists('get_field') && get_field('reader_testimonial_section') && 
                       isset(get_field('reader_testimonial_section')['testimonials']) && 
                       is_array(get_field('reader_testimonial_section')['testimonials']) &&
                       count(get_field('reader_testimonial_section')['testimonials']) > 0):
                        $testimonial = get_field('reader_testimonial_section')['testimonials'][0]; // Get first testimonial
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
                            <p class="testimonial-text">After comparing competitors, we chose IntelliReader for our office amenity spaces due to its simple wiring and easy API integration with our property management software. Installation took just a few hours per reader, and we've had zero failed access attempts since implementation. Our maintenance team especially appreciates not dealing with proprietary systems or paying exorbitant service fees for simple adjustments.</p>
                            
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">T</div>
                                <div class="testimonial-info">
                                    <p class="testimonial-name">Thomas Delgado</p>
                                    <p class="testimonial-position">Facilities Director, Cypress Properties</p>
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
                        if(function_exists('get_field') && get_field('reader_faq_section') && get_field('reader_faq_section')['faq_title']):
                            echo esc_html(get_field('reader_faq_section')['faq_title']);
                        else:
                            echo 'Frequently Asked Questions';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="faq-container">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_faq_section') && 
                           isset(get_field('reader_faq_section')['faqs']) && 
                           is_array(get_field('reader_faq_section')['faqs'])):
                            $first = true;
                            foreach(get_field('reader_faq_section')['faqs'] as $faq):
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
                                <div class="faq-question">What lock types can IntelliReader control?</div>
                                <div class="faq-answer">
                                    <p>IntelliReader can control virtually any electronic locking hardware that operates on 12-24V DC, including electric strikes, magnetic locks, electric deadbolts, and automatic door operators. It provides both normally-open and normally-closed relay outputs rated for up to 3A. For specialized locking hardware or high-voltage systems, additional relaying may be required.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Can IntelliReader work without internet?</div>
                                <div class="faq-answer">
                                    <p>Yes, IntelliReader maintains a local database of all valid credentials and access rules, allowing it to function normally even during internet outages. Once connectivity is restored, it will automatically sync any missed events and any access rule changes that occurred while offline. This dual online/offline capability ensures continuous operation in any environment.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">How many users can IntelliReader accommodate?</div>
                                <div class="faq-answer">
                                    <p>IntelliReader can store up to 5,000 unique PIN codes, RFID credentials, or fingerprint templates in its local memory. The cloud-based management system can handle unlimited users and assign credentials to specific readers as needed. For higher security applications requiring more than 5,000 local credentials, multiple readers can be deployed in a distributed architecture.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Is IntelliReader compatible with third-party systems?</div>
                                <div class="faq-answer">
                                    <p>Yes, IntelliReader offers multiple integration options. It provides a Wiegand interface for connecting to traditional access control panels, a comprehensive REST API for custom software integration, and direct integration with popular property management systems like Cloudbeds, Mews, and Lodgify. Our technical team can provide custom integration solutions for specialized systems as needed.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">What's the difference between IntelliReader and traditional access control?</div>
                                <div class="faq-answer">
                                    <p>Unlike traditional access control systems that require expensive central controllers, dedicated wiring infrastructure, and proprietary software, IntelliReader is a standalone network-connected device that can be installed and configured in minutes. It eliminates the need for complex central panels and proprietary cards while providing cloud management, real-time alerts, and automated access schedules—all at a fraction of the cost of traditional enterprise systems.</p>
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
                        if(function_exists('get_field') && get_field('reader_use_cases_section') && get_field('reader_use_cases_section')['use_cases_title']):
                            echo esc_html(get_field('reader_use_cases_section')['use_cases_title']);
                        else:
                            echo 'Perfect for…';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="use-cases-container">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_use_cases_section') && get_field('reader_use_cases_section')['use_cases']):
                            while(have_rows('reader_use_cases_section')['use_cases']) : the_row(); 
                                $use_case_text = get_sub_field('use_case_text');
                        ?>
                            <div class="use-case-item"><?php echo esc_html($use_case_text); ?></div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div class="use-case-item">Glass-door lobbies with electric strikes</div>
                            <div class="use-case-item">Staff entrances using mag-locks</div>
                            <div class="use-case-item">Storage rooms and maintenance areas</div>
                            <div class="use-case-item">Mixed-hardware portfolios alongside IntelliBolt, IntelliLever, or IntelliMortise</div>
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
                            if(function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['cta_title']):
                                echo esc_html(get_field('reader_cta_section')['cta_title']);
                            else:
                                echo 'Ready to simplify access?';
                            endif;
                            ?>
                        </h2>
                        <p class="cta-text">
                            <?php 
                            if(function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['cta_text']):
                                echo esc_html(get_field('reader_cta_section')['cta_text']);
                            else:
                                echo 'Book a 10-minute demo or request a volume quote to see how IntelliReader delivers enterprise-grade control without the enterprise-grade price. Bundle IntelliReader for common areas and IntelliLever for interior rooms to create a unified, cost-effective smart-access ecosystem.';
                            endif;
                            ?>
                        </p>
                        <div class="cta-buttons">
                            <a href="<?php echo function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['primary_cta_url'] ? esc_url(get_field('reader_cta_section')['primary_cta_url']) : '/contact'; ?>" class="btn btn-primary btn-large">
                                <?php 
                                if(function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['primary_cta_text']):
                                    echo esc_html(get_field('reader_cta_section')['primary_cta_text']);
                                else:
                                    echo 'Request My Quote';
                                endif;
                                ?>
                            </a>
                            
                            <?php if(function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['show_secondary_cta']) { ?>
                                <a href="<?php echo function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['secondary_cta_url'] ? esc_url(get_field('reader_cta_section')['secondary_cta_url']) : '/sample'; ?>" class="btn btn-secondary btn-large">
                                    <?php 
                                    if(function_exists('get_field') && get_field('reader_cta_section') && get_field('reader_cta_section')['secondary_cta_text']):
                                        echo esc_html(get_field('reader_cta_section')['secondary_cta_text']);
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
                        if(function_exists('get_field') && get_field('reader_related_products_section') && get_field('reader_related_products_section')['related_products_title']):
                            echo esc_html(get_field('reader_related_products_section')['related_products_title']);
                        else:
                            echo 'Complete your smart access ecosystem';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="related-products-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('reader_related_products_section') && get_field('reader_related_products_section')['related_products']):
                            while(have_rows('reader_related_products_section')['related_products']) : the_row(); 
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
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellibolt.jpg" alt="IntelliBolt smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliBolt</h3>
                                    <p class="related-product-description">Smart deadbolt replacement for exterior doors</p>
                                    <a href="/locks/intellibolt" class="related-product-link">Learn More</a>
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