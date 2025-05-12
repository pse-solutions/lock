<?php
/**
 * Template Name: Lock Series Page
 *
 * @package Astra Child
 */

// Debug header loading
echo '<!-- Start Header Debug -->';
get_header();
echo '<!-- End Header Debug -->';

// Add inline CSS test
echo '<style>
.inline-css-test {
  position: fixed;
  top: 0;
  right: 0;
  background: blue;
  color: white;
  padding: 5px 10px;
  z-index: 10000;
  font-size: 14px;
}
</style>';

// Add test div
echo '<div class="inline-css-test">Inline CSS Test</div>';

// Output stylesheet paths for debugging
echo '<!-- Stylesheet URLs for debugging -->';
echo '<!-- Astra Theme CSS: ' . get_template_directory_uri() . '/style.css -->';
echo '<!-- Astra Child Theme CSS: ' . get_stylesheet_directory_uri() . '/style.css -->';
echo '<!-- Lock Series CSS: ' . get_stylesheet_directory_uri() . '/assets/css/lock-series.css -->';

// Manual CSS inclusion as a backup in case wp_enqueue_style is failing
echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/assets/css/lock-series.css" type="text/css" media="all" />';
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main lock-series-page">
        <div class="lock-series-container">
            <!-- Hero Section -->
            <section class="lock-hero" <?php if(function_exists('get_field') && get_field('lock_hero_bg')): ?> style="background-image: linear-gradient(rgba(61, 74, 93, 0.9), rgba(61, 74, 93, 0.7)), url('<?php echo esc_url(get_field('lock_hero_bg')); ?>');" <?php endif; ?>>
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            <?php 
                            if(function_exists('get_field') && get_field('lock_hero_title')):
                                echo esc_html(get_field('lock_hero_title'));
                            else:
                                echo 'One Series. Four Ways to Unlock Smarter Hospitality';
                            endif;
                            ?>
                        </h1>
                        <p class="hero-subtitle">
                            <?php 
                            if(function_exists('get_field') && get_field('lock_hero_subtitle')):
                                echo esc_html(get_field('lock_hero_subtitle'));
                            else:
                                echo 'Keyless access built for hotels, vacation rentals, and multifamily doors of every type.';
                            endif;
                            ?>
                        </p>
                        <div class="hero-ctas">
                            <a href="<?php echo function_exists('get_field') && get_field('lock_primary_cta_url') ? esc_url(get_field('lock_primary_cta_url')) : '#compare'; ?>" class="btn btn-primary">
                                <?php 
                                if(function_exists('get_field') && get_field('lock_primary_cta_text')):
                                    echo esc_html(get_field('lock_primary_cta_text'));
                                else:
                                    echo 'Compare Models';
                                endif;
                                ?>
                            </a>
                            <a href="<?php echo function_exists('get_field') && get_field('lock_secondary_cta_url') ? esc_url(get_field('lock_secondary_cta_url')) : '/contact'; ?>" class="btn btn-secondary">
                                <?php 
                                if(function_exists('get_field') && get_field('lock_secondary_cta_text')):
                                    echo esc_html(get_field('lock_secondary_cta_text'));
                                else:
                                    echo 'Request a Quote';
                                endif;
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- About Section -->
            <section class="about-section">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">
                            <?php 
                            if(function_exists('get_field') && get_field('lock_about_title')):
                                echo esc_html(get_field('lock_about_title'));
                            else:
                                echo 'About 33 Lock';
                            endif;
                            ?>
                        </h2>
                    </div>
                    <div class="about-content">
                        <div class="about-text">
                            <p>
                                <?php 
                                if(function_exists('get_field') && get_field('lock_about_content')):
                                    echo wp_kses_post(get_field('lock_about_content'));
                                else:
                                    echo '33 Lock is a Vancouver-born access-control company that helps property operators cut costs and delight guests with reliable, cloud-connected smart locks. Our hardware-plus-software platform already secures thousands of hotel rooms, vacation rentals, and multifamily units across North America—delivering safer entry, easier management, and rapid ROI.';
                                endif;
                                ?>
                            </p>
                        </div>
                        <div class="about-stats">
                            <?php if(function_exists('get_field') && have_rows('lock_about_stats')): ?>
                                <?php while(have_rows('lock_about_stats')) : the_row(); ?>
                                    <div class="stat-item">
                                        <span class="stat-number"><?php echo esc_html(get_sub_field('stat_number')); ?></span>
                                        <span class="stat-label"><?php echo esc_html(get_sub_field('stat_label')); ?></span>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <!-- Default stats if no ACF data -->
                                <div class="stat-item">
                                    <span class="stat-number">1000s</span>
                                    <span class="stat-label">of units secured</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">99.9%</span>
                                    <span class="stat-label">uptime reliability</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">3+</span>
                                    <span class="stat-label">years of innovation</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Intelli Series Product Lineup -->
            <section class="intelli-lineup">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">Intelli Series Line-up</h2>
                        <p class="section-subtitle">Our smart lock solutions for every door type</p>
                    </div>
                    
                    <div class="product-showcase">
                        <!-- IntelliMortise -->
                        <div class="product-showcase-item">
                            <div class="product-card">
                                <div class="product-image">
                                    <?php if(function_exists('get_field') && get_field('lock_mortise_image')): ?>
                                        <img src="<?php echo esc_url(get_field('lock_mortise_image')); ?>" alt="IntelliMortise smart lock" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellimortise.jpg" alt="IntelliMortise smart lock" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <?php echo function_exists('get_field') && get_field('lock_mortise_title') ? esc_html(get_field('lock_mortise_title')) : 'IntelliMortise'; ?>
                                    </h3>
                                    <p class="product-subtitle">
                                        <?php echo function_exists('get_field') && get_field('lock_mortise_subtitle') ? esc_html(get_field('lock_mortise_subtitle')) : 'Flagship security for new builds'; ?>
                                    </p>
                                    <ul class="product-features">
                                        <?php if(function_exists('get_field') && have_rows('lock_mortise_features')): ?>
                                            <?php while(have_rows('lock_mortise_features')) : the_row(); ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <li>Stainless-steel mortise body; touchscreen or push-button keypad.</li>
                                            <li>Online & offline modes; BLE, Wi-Fi, RFID, PIN, fingerprint.</li>
                                            <li>20-min UL/ULC fire rating; IP55 weather-seal.</li>
                                        <?php endif; ?>
                                    </ul>
                                    <p class="product-recommendation"><strong>Best for:</strong> 
                                        <?php echo function_exists('get_field') && get_field('lock_mortise_recommendation') ? esc_html(get_field('lock_mortise_recommendation')) : 'Luxury guest rooms, exterior doors.'; ?>
                                    </p>
                                    <a href="<?php echo function_exists('get_field') && get_field('lock_mortise_url') ? esc_url(get_field('lock_mortise_url')) : '/locks/intellimortise'; ?>" class="product-cta btn btn-primary">View full specs</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- IntelliLever -->
                        <div class="product-showcase-item">
                            <div class="product-card">
                                <div class="product-image">
                                    <?php if(function_exists('get_field') && get_field('lock_lever_image')): ?>
                                        <img src="<?php echo esc_url(get_field('lock_lever_image')); ?>" alt="IntelliLever smart lock" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellilever.jpg" alt="IntelliLever smart lock" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <?php echo function_exists('get_field') && get_field('lock_lever_title') ? esc_html(get_field('lock_lever_title')) : 'IntelliLever'; ?>
                                    </h3>
                                    <p class="product-subtitle">
                                        <?php echo function_exists('get_field') && get_field('lock_lever_subtitle') ? esc_html(get_field('lock_lever_subtitle')) : 'Retrofit in minutes'; ?>
                                    </p>
                                    <ul class="product-features">
                                        <?php if(function_exists('get_field') && have_rows('lock_lever_features')): ?>
                                            <?php while(have_rows('lock_lever_features')) : the_row(); ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <li>Replaces existing cylindrical lever without door prep.</li>
                                            <li>Mobile, PIN & RFID; maintains mechanical key.</li>
                                        <?php endif; ?>
                                    </ul>
                                    <p class="product-recommendation"><strong>Best for:</strong> 
                                        <?php echo function_exists('get_field') && get_field('lock_lever_recommendation') ? esc_html(get_field('lock_lever_recommendation')) : 'Fast upgrades in boutique hotels & rentals.'; ?>
                                    </p>
                                    <a href="<?php echo function_exists('get_field') && get_field('lock_lever_url') ? esc_url(get_field('lock_lever_url')) : '/locks/intellilever'; ?>" class="product-cta btn btn-primary">View full specs</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- IntelliBolt -->
                        <div class="product-showcase-item">
                            <div class="product-card">
                                <div class="product-image">
                                    <?php if(function_exists('get_field') && get_field('lock_bolt_image')): ?>
                                        <img src="<?php echo esc_url(get_field('lock_bolt_image')); ?>" alt="IntelliBolt smart lock" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellibolt.jpg" alt="IntelliBolt smart lock" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <?php echo function_exists('get_field') && get_field('lock_bolt_title') ? esc_html(get_field('lock_bolt_title')) : 'IntelliBolt'; ?>
                                    </h3>
                                    <p class="product-subtitle">
                                        <?php echo function_exists('get_field') && get_field('lock_bolt_subtitle') ? esc_html(get_field('lock_bolt_subtitle')) : 'Surface-mount versatility'; ?>
                                    </p>
                                    <ul class="product-features">
                                        <?php if(function_exists('get_field') && have_rows('lock_bolt_features')): ?>
                                            <?php while(have_rows('lock_bolt_features')) : the_row(); ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <li>Motorised deadbolt module; no wiring required.</li>
                                            <li>Wi-Fi gateway option for remote unlock & audit trail.</li>
                                        <?php endif; ?>
                                    </ul>
                                    <p class="product-recommendation"><strong>Best for:</strong> 
                                        <?php echo function_exists('get_field') && get_field('lock_bolt_recommendation') ? esc_html(get_field('lock_bolt_recommendation')) : 'Glass, metal, or atypical doors.'; ?>
                                    </p>
                                    <a href="<?php echo function_exists('get_field') && get_field('lock_bolt_url') ? esc_url(get_field('lock_bolt_url')) : '/locks/intellibolt'; ?>" class="product-cta btn btn-primary">View full specs</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- IntelliReader -->
                        <div class="product-showcase-item">
                            <div class="product-card">
                                <div class="product-image">
                                    <?php if(function_exists('get_field') && get_field('lock_reader_image')): ?>
                                        <img src="<?php echo esc_url(get_field('lock_reader_image')); ?>" alt="IntelliReader access controller" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellireader.jpg" alt="IntelliReader access controller" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <?php echo function_exists('get_field') && get_field('lock_reader_title') ? esc_html(get_field('lock_reader_title')) : 'IntelliReader'; ?>
                                    </h3>
                                    <p class="product-subtitle">
                                        <?php echo function_exists('get_field') && get_field('lock_reader_subtitle') ? esc_html(get_field('lock_reader_subtitle')) : 'Common-area controller'; ?>
                                    </p>
                                    <ul class="product-features">
                                        <?php if(function_exists('get_field') && have_rows('lock_reader_features')): ?>
                                            <?php while(have_rows('lock_reader_features')) : the_row(); ?>
                                                <li><?php echo esc_html(get_sub_field('feature_text')); ?></li>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <li>Wall reader + controller pairs with mag-locks/electric strikes.</li>
                                            <li>IP66 aluminium & tempered-glass faceplate; offline access codes.</li>
                                        <?php endif; ?>
                                    </ul>
                                    <p class="product-recommendation"><strong>Best for:</strong> 
                                        <?php echo function_exists('get_field') && get_field('lock_reader_recommendation') ? esc_html(get_field('lock_reader_recommendation')) : 'Lobbies, elevators, staff rooms.'; ?>
                                    </p>
                                    <a href="<?php echo function_exists('get_field') && get_field('lock_reader_url') ? esc_url(get_field('lock_reader_url')) : '/locks/intellireader'; ?>" class="product-cta btn btn-primary">View full specs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Why Choose Section -->
            <section class="why-choose">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">Why Operators Choose Intelli Series</h2>
                    </div>
                    
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <h3 class="benefit-title">All specs, no surprises</h3>
                            <p class="benefit-description">Full dimensions, fire ratings, and CAD files on every product page—unlike rival sites that hide details in PDFs or omit them entirely.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                            </div>
                            <h3 class="benefit-title">Seamless integrations</h3>
                            <p class="benefit-description">Works with TTLock APIs, PMS/OTA platforms, and existing access control.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                            <h3 class="benefit-title">Unified dashboard</h3>
                            <p class="benefit-description">Manage every door, guest, and code from one cloud console.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <h3 class="benefit-title">Rapid ROI</h3>
                            <p class="benefit-description">Cut key-handling labour by up to 80% and boost guest satisfaction scores.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Comparison Table Section -->
            <section id="compare" class="comparison-table">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">Quick-Glance Comparison</h2>
                        <p class="section-subtitle">Compare our smart lock models at a glance</p>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="specs-table">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Mortise</th>
                                    <th>Lever</th>
                                    <th>Bolt</th>
                                    <th>Reader</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="product-images-row">
                                    <td>Product</td>
                                    <td>
                                        <div class="table-product-image">
                                            <?php if(function_exists('get_field') && get_field('lock_mortise_image')): ?>
                                                <img src="<?php echo esc_url(get_field('lock_mortise_image')); ?>" alt="IntelliMortise" class="comparison-product-img">
                                            <?php else: ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellimortise.jpg" alt="IntelliMortise" class="comparison-product-img">
                                            <?php endif; ?>
                                            <div class="product-name">IntelliMortise</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-product-image">
                                            <?php if(function_exists('get_field') && get_field('lock_lever_image')): ?>
                                                <img src="<?php echo esc_url(get_field('lock_lever_image')); ?>" alt="IntelliLever" class="comparison-product-img">
                                            <?php else: ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellilever.jpg" alt="IntelliLever" class="comparison-product-img">
                                            <?php endif; ?>
                                            <div class="product-name">IntelliLever</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-product-image">
                                            <?php if(function_exists('get_field') && get_field('lock_bolt_image')): ?>
                                                <img src="<?php echo esc_url(get_field('lock_bolt_image')); ?>" alt="IntelliBolt" class="comparison-product-img">
                                            <?php else: ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellibolt.jpg" alt="IntelliBolt" class="comparison-product-img">
                                            <?php endif; ?>
                                            <div class="product-name">IntelliBolt</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-product-image">
                                            <?php if(function_exists('get_field') && get_field('lock_reader_image')): ?>
                                                <img src="<?php echo esc_url(get_field('lock_reader_image')); ?>" alt="IntelliReader" class="comparison-product-img">
                                            <?php else: ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellireader.jpg" alt="IntelliReader" class="comparison-product-img">
                                            <?php endif; ?>
                                            <div class="product-name">IntelliReader</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Install type</td>
                                    <td>Mortise cut-out</td>
                                    <td>Cylindrical retrofit</td>
                                    <td>Surface/deadbolt</td>
                                    <td>Wall mount</td>
                                </tr>
                                <tr>
                                    <td>Access modes</td>
                                    <td>PIN • RFID • BLE • F-print</td>
                                    <td>PIN • RFID • BLE</td>
                                    <td>PIN • BLE</td>
                                    <td>RFID • PIN</td>
                                </tr>
                                <tr>
                                    <td>Fire rated</td>
                                    <td><span class="checkmark">✅</span></td>
                                    <td><span class="checkmark">✅</span></td>
                                    <td>–</td>
                                    <td>–</td>
                                </tr>
                                <tr>
                                    <td>Outdoor-rated</td>
                                    <td>IP55</td>
                                    <td>IP54</td>
                                    <td>IP55</td>
                                    <td>IP66</td>
                                </tr>
                                <tr>
                                    <td>Best fit</td>
                                    <td>Guest rooms</td>
                                    <td>Retrofits</td>
                                    <td>Specialty doors</td>
                                    <td>Common areas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-note-container">
                        <p class="table-note">Full downloadable spec sheets available on each product page</p>
                    </div>
                </div>
            </section>
            
            <!-- Deployment Steps -->
            <section class="deployment">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">
                            <?php 
                            if(function_exists('get_field') && get_field('lock_deploy_title')):
                                echo esc_html(get_field('lock_deploy_title'));
                            else:
                                echo 'How to Deploy';
                            endif;
                            ?>
                        </h2>
                    </div>
                    
                    <div class="steps-container">
                        <?php 
                        if(function_exists('get_field') && have_rows('lock_deploy_steps')): 
                            while(have_rows('lock_deploy_steps')) : the_row();
                                $step_number = get_sub_field('step_number');
                                $step_title = get_sub_field('step_title');
                                $step_description = get_sub_field('step_description');
                                $step_icon = get_sub_field('step_icon');
                        ?>
                            <div class="step-item">
                                <div class="step-number"><?php echo esc_html($step_number); ?></div>
                                <?php if($step_icon): ?>
                                <div class="step-icon">
                                    <?php echo get_step_icon_svg($step_icon); ?>
                                </div>
                                <?php endif; ?>
                                <h3 class="step-title"><?php echo esc_html($step_title); ?></h3>
                                <p class="step-description"><?php echo esc_html($step_description); ?></p>
                            </div>
                        <?php 
                            endwhile;
                        else: 
                            // Default steps if no ACF data
                            $default_steps = array(
                                array('number' => '1', 'icon' => 'clipboard-check', 'title' => 'Scope', 'description' => 'Upload door schedule or use our Door-Match quiz.'),
                                array('number' => '2', 'icon' => 'truck', 'title' => 'Ship', 'description' => 'Receive pre-configured locks & gateways.'),
                                array('number' => '3', 'icon' => 'tools', 'title' => 'Install', 'description' => 'DIY video guides or certified installer network.'),
                                array('number' => '4', 'icon' => 'wifi', 'title' => 'Connect', 'description' => 'Sync to PMS and start issuing digital keys.')
                            );
                            
                            foreach($default_steps as $step):
                        ?>
                            <div class="step-item">
                                <div class="step-number"><?php echo $step['number']; ?></div>
                                <div class="step-icon">
                                    <?php echo get_step_icon_svg($step['icon']); ?>
                                </div>
                                <h3 class="step-title"><?php echo $step['title']; ?></h3>
                                <p class="step-description"><?php echo $step['description']; ?></p>
                            </div>
                        <?php 
                            endforeach;
                        endif; 
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- Testimonial Section -->
            <section class="testimonial">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">Proof in Practice</h2>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <blockquote>
                                <p>"<?php echo function_exists('get_field') && get_field('lock_testimonial_quote') ? esc_html(get_field('lock_testimonial_quote')) : '33 Lock\'s IntelliMortise cut our check-in time in half and slashed lost-key incidents to zero.'; ?>"</p>
                                <cite>— <?php echo function_exists('get_field') && get_field('lock_testimonial_author') ? esc_html(get_field('lock_testimonial_author')) : 'Lori V., GM, Seaside Resort'; ?></cite>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="partner-logos">
                        <div class="partner-title">Trusted Integrations & Partners</div>
                        <div class="logos-container">
                            <?php if(function_exists('get_field') && have_rows('lock_partner_logos')): ?>
                                <?php while(have_rows('lock_partner_logos')) : the_row(); 
                                    $partner_name = get_sub_field('partner_name');
                                    $partner_logo = get_sub_field('partner_logo');
                                ?>
                                    <?php if($partner_logo): ?>
                                        <div class="logo-item"><img src="<?php echo esc_url($partner_logo); ?>" alt="<?php echo esc_attr($partner_name); ?>" class="partner-logo"></div>
                                    <?php else: ?>
                                        <div class="logo-item"><?php echo esc_html($partner_name); ?></div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <div class="logo-item">Airbnb</div>
                                <div class="logo-item">Cloudbeds</div>
                                <div class="logo-item">Mews</div>
                                <div class="logo-item">Opera</div>
                                <div class="logo-item">Yardi</div>
                                <div class="logo-item">VRBO</div>
                                <div class="logo-item">AppFolio</div>
                                <div class="logo-item">RealPage</div>
                                <div class="logo-item">Zapier</div>
                                <div class="logo-item">ButterflyMX</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Help Section -->
            <section class="help-section">
                <div class="container">
                    <div class="section-title-container">
                        <h2 class="section-title">Still Comparing Options?</h2>
                    </div>
                    <p class="help-text">Explore our searchable Help Centre or chat with an access-control specialist.</p>
                    <a href="/resources/help-centre" class="help-cta">Ask a Question</a>
                </div>
            </section>
            
            <!-- Final CTA Strip -->
            <section class="final-cta">
                <div class="container">
                    <h2 class="cta-title">
                        <?php echo function_exists('get_field') && get_field('lock_final_cta_text') ? esc_html(get_field('lock_final_cta_text')) : 'Ready to modernise every door?'; ?>
                    </h2>
                    <a href="<?php echo function_exists('get_field') && get_field('lock_final_cta_button_url') ? esc_url(get_field('lock_final_cta_button_url')) : '/contact'; ?>" class="cta-button">
                        <?php echo function_exists('get_field') && get_field('lock_final_cta_button_text') ? esc_html(get_field('lock_final_cta_button_text')) : 'Get My Custom Quote'; ?>
                    </a>
                </div>
            </section>
            
            <!-- Footer Links -->
            <section class="page-footer-links">
                <div class="container">
                    <div class="footer-links">
                        <a href="/locks" class="footer-link">Locks</a>
                        <a href="/solutions" class="footer-link">Solutions</a>
                        <a href="/resources" class="footer-link">Resources</a>
                        <a href="/resources/help-centre" class="footer-link">Help Centre</a>
                        <a href="/contact" class="footer-link">Get a Quote</a>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>