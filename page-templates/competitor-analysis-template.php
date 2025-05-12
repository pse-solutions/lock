<?php
/**
 * Template Name: Competitor Analysis
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main competitor-analysis">
        
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php if(function_exists('get_field') && get_field('intro_text')): ?>
                    <div class="intro-text">
                        <?php echo get_field('intro_text'); ?>
                    </div>
                <?php else: ?>
                    <div class="intro-text">
                        <p>This report examines three competitors – DUSAW, GokiTech, and McGrath Locks – across key criteria to inform the redesign of 33lock.com. Each brand is evaluated on visual design, user experience, messaging, SEO, product offerings, pricing, trust signals, and interactive elements. Actionable insights are highlighted to guide 33Lock's strategy as a modern, informative product catalog for the hospitality industry.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Competitor Sections -->
        <?php
        // Define competitors
        $competitors = array(
            'dusaw' => array(
                'name' => 'DUSAW (Smart Locks & Safes)',
                'tagline' => 'Safe, Strong & Secure, Smarter Locks for Every Door'
            ),
            'gokitech' => array(
                'name' => 'GokiTech (Hospitality Automation Platform)',
                'tagline' => 'We make space smart for Hotels, Hostels & Airbnbs'
            ),
            'mcgrath' => array(
                'name' => 'McGrath Locks (Residential & Hospitality Locks)',
                'tagline' => 'Making Access Easier'
            )
        );

        // Define analysis categories
        $categories = array(
            'visual_design' => 'Visual Design',
            'user_experience' => 'User Experience (UX)',
            'messaging' => 'Messaging',
            'seo' => 'SEO (On-page Elements & Content)',
            'product_offerings' => 'Product Offerings',
            'pricing' => 'Pricing',
            'trust_signals' => 'Trust Signals',
            'interactive_elements' => 'Interactive Elements'
        );

        // Loop through competitors
        foreach($competitors as $competitor_key => $competitor): 
        ?>
            
            <section id="<?php echo esc_attr($competitor_key); ?>" class="competitor-section">
                <div class="container">
                    <h2 class="competitor-name"><?php echo esc_html($competitor['name']); ?></h2>
                    <?php if(isset($competitor['tagline'])): ?>
                        <div class="competitor-tagline">"<?php echo esc_html($competitor['tagline']); ?>"</div>
                    <?php endif; ?>

                    <?php 
                    // Loop through analysis categories
                    foreach($categories as $category_key => $category_name): 
                        
                        // ACF field name format: {competitor}_{category}
                        $field_name = $competitor_key . '_' . $category_key;
                        $insight_field = $field_name . '_insight';
                        $image_field = $field_name . '_image';
                    ?>
                        <div class="analysis-category" id="<?php echo esc_attr($field_name); ?>">
                            <h3><?php echo esc_html($category_name); ?></h3>
                            
                            <?php if(function_exists('get_field') && get_field($image_field)): ?>
                                <div class="category-image">
                                    <figure>
                                        <?php echo wp_get_attachment_image(get_field($image_field), 'large', false, array('class' => 'img-fluid')); ?>
                                        <?php if(get_field($field_name . '_image_caption')): ?>
                                            <figcaption><?php echo esc_html(get_field($field_name . '_image_caption')); ?></figcaption>
                                        <?php endif; ?>
                                    </figure>
                                </div>
                            <?php endif; ?>
                            
                            <?php if(function_exists('get_field') && get_field($field_name)): ?>
                                <div class="category-content">
                                    <?php echo get_field($field_name); ?>
                                </div>
                            <?php else: ?>
                                <div class="category-content">
                                    <p>Content for <?php echo esc_html($category_name); ?> analysis of <?php echo esc_html($competitor['name']); ?> would go here.</p>
                                </div>
                            <?php endif; ?>
                            
                            <?php if(function_exists('get_field') && get_field($insight_field)): ?>
                                <div class="insight-box">
                                    <h4>Insight for 33Lock:</h4>
                                    <?php echo get_field($insight_field); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            
        <?php endforeach; ?>

        <!-- Conclusion Section -->
        <section id="conclusion" class="conclusion-section">
            <div class="container">
                <h2>Conclusion and Recommendations</h2>
                
                <?php if(function_exists('get_field') && get_field('conclusion_content')): ?>
                    <div class="conclusion-content">
                        <?php echo get_field('conclusion_content'); ?>
                    </div>
                <?php else: ?>
                    <div class="conclusion-content">
                        <p>Analyzing DUSAW, GokiTech, and McGrath Locks provides a clear picture of the competitive landscape and reveals opportunities for 33Lock's website redesign.</p>
                        
                        <h3>Key Recommendations:</h3>
                        <ul>
                            <li><strong>Visual & Design:</strong> Aim for a modern, clean design that showcases product images prominently and uses bold text to communicate value.</li>
                            <li><strong>Navigation & UX:</strong> Organize the site with intuitive menus and guides. Consider a homepage flow that educates and leads users to action.</li>
                            <li><strong>Messaging:</strong> Craft concise, benefit-driven messages targeting hotel and rental owners. Emphasize security, convenience, and integration.</li>
                            <li><strong>Content & SEO:</strong> Develop rich content around the keywords and topics in the hospitality security niche.</li>
                            <li><strong>Product Clarity:</strong> Clearly present all product offerings and categorize them in ways that make sense for target customers.</li>
                            <li><strong>Pricing Strategy:</strong> Decide on transparency vs. lead capture. If possible, providing at least indicative pricing or packages could differentiate 33Lock.</li>
                            <li><strong>Trust & Credibility:</strong> Leverage any and all trust signals – years in business, number of installations, client testimonials, partner logos, certifications, case studies.</li>
                            <li><strong>Interactive Tools:</strong> Implement interactive elements that improve user engagement and support.</li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>