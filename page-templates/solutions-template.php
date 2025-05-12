<?php
/**
 * Template Name: Solutions Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main solutions-page">
        <?php if(function_exists('get_field')): ?>
        
        <!-- Quick Links Navigation -->
        <?php if(get_field('solutions_quick_links')): ?>
        <section class="quick-links">
            <div class="container">
                <ul class="quick-links-nav">
                    <?php foreach(get_field('solutions_quick_links') as $link): ?>
                        <li><a href="#<?php echo esc_attr($link['link_anchor']); ?>"><?php echo esc_html($link['link_text']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
        <?php endif; ?>

        <!-- Hero Section -->
        <?php if(get_field('solutions_hero')): 
            $hero = get_field('solutions_hero');
            $hero_bg = isset($hero['hero_background']) ? $hero['hero_background'] : '';
            $hero_style = $hero_bg ? ' style="background-image: url(' . esc_url($hero_bg['url']) . ');"' : '';
        ?>
        <section class="solutions-hero"<?php echo $hero_style; ?>>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo esc_html($hero['hero_title']); ?></h1>
                    <p class="hero-intro"><?php echo esc_html($hero['hero_intro']); ?></p>
                    
                    <?php if(!empty($hero['hero_ctas'])): ?>
                    <div class="hero-ctas">
                        <?php foreach($hero['hero_ctas'] as $cta): ?>
                            <a href="<?php echo esc_url($cta['cta_link']); ?>" class="btn btn-<?php echo esc_attr($cta['cta_type']); ?>">
                                <?php echo esc_html($cta['cta_text']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Solution Sections -->
        <?php if(get_field('solutions_sections')):
            foreach(get_field('solutions_sections') as $section):
                $bg_color = !empty($section['background_color']) ? ' style="background-color: ' . esc_attr($section['background_color']) . ';"' : '';
        ?>
        <section id="<?php echo esc_attr($section['section_id']); ?>" class="solution-section <?php echo esc_attr($section['section_id']); ?>-section"<?php echo $bg_color; ?>>
            <div class="container">
                <div class="solution-header">
                    <h2 class="section-title"><?php echo esc_html($section['title']); ?></h2>
                    <h3 class="section-subtitle"><?php echo esc_html($section['subtitle']); ?></h3>
                    <p class="section-description"><?php echo esc_html($section['description']); ?></p>
                </div>

                <?php if(!empty($section['image'])): ?>
                <div class="solution-image">
                    <img src="<?php echo esc_url($section['image']['url']); ?>" alt="<?php echo esc_attr($section['image']['alt']); ?>" class="img-fluid">
                </div>
                <?php endif; ?>

                <?php if(!empty($section['features'])): ?>
                <div class="features-benefits">
                    <h4 class="features-title">Feature → Benefit</h4>
                    <ul class="feature-list">
                        <?php foreach($section['features'] as $feature): ?>
                        <li>
                            <?php if(!empty($feature['icon'])): ?>
                            <div class="feature-icon">
                                <img src="<?php echo esc_url($feature['icon']['url']); ?>" alt="<?php echo esc_attr($feature['icon']['alt']); ?>">
                            </div>
                            <?php endif; ?>
                            <span class="feature"><?php echo esc_html($feature['feature']); ?></span>
                            <span class="benefit"><?php echo esc_html($feature['benefit']); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if(!empty($section['case_study'])): 
                    $case = $section['case_study'];
                    $case_type = $case['type'];
                ?>
                
                <?php if($case_type === 'quote'): ?>
                <div class="case-study">
                    <blockquote class="case-quote">
                        "<?php echo esc_html($case['content']); ?>"
                        <?php if(!empty($case['citation'])): ?>
                        <cite><?php echo esc_html($case['citation']); ?></cite>
                        <?php endif; ?>
                    </blockquote>
                    <?php if(!empty($case['image'])): ?>
                    <div class="case-image">
                        <img src="<?php echo esc_url($case['image']['url']); ?>" alt="<?php echo esc_attr($case['image']['alt']); ?>">
                    </div>
                    <?php endif; ?>
                </div>
                <?php elseif($case_type === 'roi'): ?>
                <div class="roi-snapshot">
                    <h4 class="roi-title"><?php echo esc_html($case['title']); ?></h4>
                    <p class="roi-value"><?php echo esc_html($case['content']); ?></p>
                    <?php if(!empty($case['image'])): ?>
                    <div class="roi-image">
                        <img src="<?php echo esc_url($case['image']['url']); ?>" alt="<?php echo esc_attr($case['image']['alt']); ?>">
                    </div>
                    <?php endif; ?>
                </div>
                <?php elseif($case_type === 'security'): ?>
                <div class="security-note">
                    <h4 class="security-title"><?php echo esc_html($case['title']); ?></h4>
                    <p class="security-text"><?php echo esc_html($case['content']); ?></p>
                    <?php if(!empty($case['image'])): ?>
                    <div class="security-image">
                        <img src="<?php echo esc_url($case['image']['url']); ?>" alt="<?php echo esc_attr($case['image']['alt']); ?>">
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                
                <?php endif; ?>

                <?php if(!empty($section['integrations'])): ?>
                <div class="integrations">
                    <p class="integration-label">Integrations:</p>
                    <div class="integration-logos">
                        <?php foreach($section['integrations'] as $index => $integration): ?>
                            <?php if($index > 0): ?> • <?php endif; ?>
                            <?php if(!empty($integration['logo'])): ?>
                            <span class="integration-logo">
                                <img src="<?php echo esc_url($integration['logo']['url']); ?>" alt="<?php echo esc_attr($integration['logo']['alt']); ?>">
                            </span>
                            <?php else: ?>
                            <span class="integration-name"><?php echo esc_html($integration['name']); ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(!empty($section['cta'])): ?>
                <div class="section-cta">
                    <a href="<?php echo esc_url($section['cta']['link']); ?>" class="btn btn-primary"><?php echo esc_html($section['cta']['text']); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>

        <!-- Implementation Section -->
        <?php if(get_field('solutions_implementation')):
            $implementation = get_field('solutions_implementation');
        ?>
        <section class="implementation-section">
            <div class="container">
                <h2 class="section-title"><?php echo esc_html($implementation['title']); ?></h2>
                
                <?php if(!empty($implementation['image'])): ?>
                <div class="implementation-image">
                    <img src="<?php echo esc_url($implementation['image']['url']); ?>" alt="<?php echo esc_attr($implementation['image']['alt']); ?>" class="img-fluid">
                </div>
                <?php endif; ?>
                
                <?php if(!empty($implementation['steps'])): ?>
                <div class="implementation-steps">
                    <?php foreach($implementation['steps'] as $step): ?>
                    <div class="step">
                        <?php if(!empty($step['icon'])): ?>
                        <div class="step-icon">
                            <img src="<?php echo esc_url($step['icon']['url']); ?>" alt="<?php echo esc_attr($step['icon']['alt']); ?>">
                        </div>
                        <?php endif; ?>
                        <h4 class="step-title"><?php echo esc_html($step['title']); ?></h4>
                        <p class="step-description"><?php echo esc_html($step['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- Final CTA Section -->
        <?php if(get_field('solutions_final_cta')):
            $final_cta = get_field('solutions_final_cta');
            $cta_bg = isset($final_cta['background']) ? $final_cta['background'] : '';
            $cta_style = $cta_bg ? ' style="background-image: url(' . esc_url($cta_bg['url']) . ');"' : '';
        ?>
        <section class="final-cta"<?php echo $cta_style; ?>>
            <div class="container">
                <h2 class="cta-title"><?php echo esc_html($final_cta['title']); ?></h2>
                <div class="cta-button">
                    <a href="<?php echo esc_url($final_cta['button_link']); ?>" class="btn btn-large btn-primary"><?php echo esc_html($final_cta['button_text']); ?></a>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <?php else: ?>
        <!-- Fallback content if ACF is not active -->
        <section class="solutions-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Solutions That Fit Every Door</h1>
                    <p class="hero-intro">Keyless access tailored for hotels, short-term rentals, and multifamily communities—all powered by the Intelli Series.</p>
                    <div class="hero-ctas">
                        <a href="/contact" class="btn btn-primary">Get a Quote</a>
                        <a href="/locks#compare" class="btn btn-secondary">Compare Locks</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Add more fallback content here -->
        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>