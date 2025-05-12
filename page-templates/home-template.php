<?php
/**
 * Template Name: Home Page Template
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php
        // Module 1 - Hero Banner
        if (have_rows('hero_banner')) :
            while (have_rows('hero_banner')) : the_row();
                $headline = get_sub_field('headline');
                $subheadline = get_sub_field('subheadline');
                $primary_cta_text = get_sub_field('primary_cta_text');
                $primary_cta_url = get_sub_field('primary_cta_url');
                $secondary_cta_text = get_sub_field('secondary_cta_text');
                $secondary_cta_url = get_sub_field('secondary_cta_url');
                $hero_image = get_sub_field('hero_image');
        ?>
        <section class="home-hero">
            <div class="hero-content">
                <h1><?php echo esc_html($headline); ?></h1>
                <p class="subheadline"><?php echo esc_html($subheadline); ?></p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url($primary_cta_url); ?>" class="button primary-cta"><?php echo esc_html($primary_cta_text); ?></a>
                    <a href="<?php echo esc_url($secondary_cta_url); ?>" class="button secondary-cta"><?php echo esc_html($secondary_cta_text); ?></a>
                </div>
            </div>
            <?php if ($hero_image) : ?>
            <div class="hero-image">
                <?php echo wp_get_attachment_image($hero_image, 'full', false, array('alt' => 'Hotel guests entering room secured by 33 Lock touchscreen smart lock')); ?>
            </div>
            <?php endif; ?>
        </section>
        <?php
            endwhile;
        endif;
        ?>

        <?php
        // Module 2 - Why 33 Lock (3-up Icons)
        if (have_rows('why_33_lock')) :
            while (have_rows('why_33_lock')) : the_row();
                $intro_line = get_sub_field('intro_line');
        ?>
        <section class="why-33-lock">
            <div class="section-intro">
                <h2><?php echo esc_html($intro_line); ?></h2>
            </div>
            
            <div class="benefits-container">
                <?php if (have_rows('benefits')) : ?>
                    <?php while (have_rows('benefits')) : the_row(); 
                        $icon = get_sub_field('icon');
                        $label = get_sub_field('label');
                        $copy = get_sub_field('copy');
                    ?>
                    <div class="benefit-item">
                        <?php if ($icon) : ?>
                        <div class="benefit-icon">
                            <?php echo wp_get_attachment_image($icon, 'thumbnail', false, array('alt' => esc_attr($label))); ?>
                        </div>
                        <?php endif; ?>
                        <h3><?php echo esc_html($label); ?></h3>
                        <p><?php echo esc_html($copy); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php
            endwhile;
        endif;
        ?>

        <?php
        // Module 3 - Solutions at a Glance (Switchable Tabs)
        if (have_rows('solutions_at_a_glance')) :
            while (have_rows('solutions_at_a_glance')) : the_row();
        ?>
        <section class="solutions-glance">
            <h2>Solutions at a Glance</h2>
            
            <div class="tabs-container">
                <div class="tabs-navigation">
                    <button class="tab-button active" data-tab="hospitality">Hospitality</button>
                    <button class="tab-button" data-tab="multifamily">Multifamily</button>
                </div>
                
                <div class="tab-content-container">
                    <?php if (have_rows('hospitality_tab')) : ?>
                        <?php while (have_rows('hospitality_tab')) : the_row(); 
                            $image = get_sub_field('image');
                            $top_benefit = get_sub_field('top_benefit');
                            $key_feature = get_sub_field('key_feature');
                        ?>
                        <div class="tab-content active" id="hospitality-content">
                            <?php if ($image) : ?>
                            <div class="tab-image">
                                <?php echo wp_get_attachment_image($image, 'medium', false, array('alt' => 'Smiling couple receiving phone code at lobby kiosk')); ?>
                            </div>
                            <?php endif; ?>
                            <div class="tab-info">
                                <p class="benefit"><strong>Top Benefit:</strong> <?php echo esc_html($top_benefit); ?></p>
                                <p class="feature"><strong>Key Feature:</strong> <?php echo esc_html($key_feature); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                    <?php if (have_rows('multifamily_tab')) : ?>
                        <?php while (have_rows('multifamily_tab')) : the_row(); 
                            $image = get_sub_field('image');
                            $top_benefit = get_sub_field('top_benefit');
                            $key_feature = get_sub_field('key_feature');
                        ?>
                        <div class="tab-content" id="multifamily-content">
                            <?php if ($image) : ?>
                            <div class="tab-image">
                                <?php echo wp_get_attachment_image($image, 'medium', false, array('alt' => 'Property manager updating tenant list on tablet')); ?>
                            </div>
                            <?php endif; ?>
                            <div class="tab-info">
                                <p class="benefit"><strong>Top Benefit:</strong> <?php echo esc_html($top_benefit); ?></p>
                                <p class="feature"><strong>Key Feature:</strong> <?php echo esc_html($key_feature); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
            endwhile;
        endif;
        ?>

        <?php
        // Module 4 - Social Proof Strip
        if (have_rows('social_proof')) :
            while (have_rows('social_proof')) : the_row();
                $testimonial = get_sub_field('testimonial');
                $author = get_sub_field('author');
        ?>
        <section class="social-proof">
            <div class="testimonial">
                <blockquote>
                    <?php echo esc_html($testimonial); ?>
                    <cite><?php echo esc_html($author); ?></cite>
                </blockquote>
            </div>
            
            <?php if (have_rows('partner_logos')) : ?>
            <div class="logo-carousel">
                <?php while (have_rows('partner_logos')) : the_row(); 
                    $logo = get_sub_field('logo');
                    $name = get_sub_field('partner_name');
                ?>
                <div class="logo-item">
                    <?php if ($logo) : ?>
                        <?php echo wp_get_attachment_image($logo, 'medium', false, array('alt' => esc_attr($name) . ' logo')); ?>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
        <?php
            endwhile;
        endif;
        ?>

        <?php
        // Module 5 - Sticky CTA Footer
        if (have_rows('sticky_cta')) :
            while (have_rows('sticky_cta')) : the_row();
                $headline = get_sub_field('headline');
                $cta_1_text = get_sub_field('cta_1_text');
                $cta_1_url = get_sub_field('cta_1_url');
                $cta_2_text = get_sub_field('cta_2_text');
                $cta_2_url = get_sub_field('cta_2_url');
        ?>
        <div class="sticky-cta-footer">
            <div class="cta-content">
                <h3><?php echo esc_html($headline); ?></h3>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url($cta_1_url); ?>" class="button cta-primary"><?php echo esc_html($cta_1_text); ?></a>
                    <a href="<?php echo esc_url($cta_2_url); ?>" class="button cta-secondary"><?php echo esc_html($cta_2_text); ?></a>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        endif;
        ?>
        
    </main>
</div>

<?php
get_footer();
?>