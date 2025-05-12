<?php
/**
 * Template Name: ACF Homepage Template
 *
 * This is the template that displays all of the ACF modules for the homepage.
 */

get_header(); ?>

<style>
    /* Basic styling for demonstration - you'll want to integrate this with your theme's stylesheet */
    body { font-family: sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
    .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
    .module { padding: 40px 0; border-bottom: 1px solid #eee; }
    .module:last-child { border-bottom: none; }
    .module-title { text-align: center; margin-bottom: 30px; font-size: 2em; }
    .button { display: inline-block; padding: 10px 20px; background-color: #0073aa; color: white; text-decoration: none; border-radius: 4px; margin-right: 10px; }
    .button-ghost { background-color: transparent; border: 1px solid #0073aa; color: #0073aa; }
    img { max-width: 100%; height: auto; display: block; }
    .text-center { text-align: center; }

    /* Hero Banner */
    .hero-banner {
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 20px;
        text-align: center;
        min-height: 70vh; /* Ensure it takes up a good portion of the viewport */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .hero-banner h1 { font-size: 3em; margin-bottom: 0.5em; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); }
    .hero-banner p { font-size: 1.5em; margin-bottom: 1.5em; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); max-width: 800px; }

    /* Why 33 Lock */
    .why-33-lock .intro { text-align: center; font-size: 1.2em; margin-bottom: 30px; }
    .why-items { display: flex; justify-content: space-around; text-align: center; flex-wrap: wrap; }
    .why-item { flex-basis: calc(33.333% - 40px); margin: 20px; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .why-item img { width: 80px; height: 80px; margin: 0 auto 15px; } /* Adjusted icon size */
    .why-item h3 { font-size: 1.3em; margin-bottom: 10px; color: #0073aa; }

    /* Solutions at a Glance */
    .solutions-tabs .tab-navigation { text-align: center; margin-bottom: 20px; }
    .solutions-tabs .tab-button { padding: 10px 20px; cursor: pointer; background: #eee; border: 1px solid #ddd; margin: 0 5px; border-radius: 4px; }
    .solutions-tabs .tab-button.active { background: #0073aa; color: white; }
    .solutions-tabs .tab-content { display: none; padding: 20px; border: 1px solid #ddd; border-radius: 4px; background-color: #fff; }
    .solutions-tabs .tab-content.active { display: block; }
    .solutions-tabs .tab-content-inner { display: flex; align-items: center; gap: 20px; }
    .solutions-tabs .tab-text { flex: 1; }
    .solutions-tabs .tab-image img { width: 400px; height: auto; border-radius: 4px; }


    /* Social Proof */
    .social-proof-strip { background-color: #f0f0f0; padding: 40px 20px; text-align: center; }
    .social-proof-strip .quote { font-size: 1.4em; font-style: italic; margin-bottom: 10px; color: #555; }
    .social-proof-strip .author { font-size: 1em; margin-bottom: 30px; color: #777; }
    .logo-carousel { display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 30px; }
    .logo-carousel img { height: 60px; width: auto; opacity: 0.7; transition: opacity 0.3s; }
    .logo-carousel img:hover { opacity: 1; }

    /* Sticky CTA Footer */
    .sticky-cta-footer {
        background-color: #333;
        color: white;
        padding: 50px 20px;
        text-align: center;
        /* position: fixed; /* Uncomment if you want it truly sticky */
        /* bottom: 0; */
        /* width: 100%; */
        /* box-shadow: 0 -2px 5px rgba(0,0,0,0.2); */
    }
    .sticky-cta-footer h2 { font-size: 2em; margin-bottom: 20px; }
    .sticky-cta-footer .button { background-color: #00AEEF; margin: 5px; } /* Example different button color */
    .sticky-cta-footer .button-ghost { border-color: #00AEEF; color: #00AEEF; }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-banner h1 { font-size: 2em; }
        .hero-banner p { font-size: 1.2em; }
        .why-items { flex-direction: column; align-items: center; }
        .why-item { flex-basis: 80%; }
        .solutions-tabs .tab-content-inner { flex-direction: column; }
        .solutions-tabs .tab-image img { width: 100%; max-width: 400px; }
        .logo-carousel { gap: 20px; }
        .logo-carousel img { height: 40px; }
    }

</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // ACF Field Group: Homepage Settings
        // You should create a field group in ACF and assign it to this Page Template.
        // Below are examples of how to structure your fields.

        // --- Module 1: Hero Banner ---
        // ACF Fields:
        // - hero_headline (Text)
        // - hero_subheadline (Textarea)
        // - hero_primary_cta_text (Text)
        // - hero_primary_cta_link (URL)
        // - hero_secondary_cta_text (Text)
        // - hero_secondary_cta_link (URL)
        // - hero_background_image (Image - Return Format: Image URL or Image Array)

        $hero_headline = get_field('hero_headline') ?: 'Smart Locks That Pay for Themselves';
        $hero_subheadline = get_field('hero_subheadline') ?: 'Cloud‑connected access control that cuts guest check‑in time by 60 % and slashes maintenance calls.';
        $hero_primary_cta_text = get_field('hero_primary_cta_text') ?: 'Get My Free Quote';
        $hero_primary_cta_link = get_field('hero_primary_cta_link') ?: '#';
        $hero_secondary_cta_text = get_field('hero_secondary_cta_text') ?: 'Compare Lock Models';
        $hero_secondary_cta_link = get_field('hero_secondary_cta_link') ?: '#';
        $hero_bg_image_id = get_field('hero_background_image'); // Get image ID
        $hero_bg_image_url = $hero_bg_image_id ? wp_get_attachment_image_url($hero_bg_image_id, 'full') : 'https://placehold.co/1920x1080/e0e0e0/777?text=Hero+Image+1920x1080';
        $hero_bg_image_alt = $hero_bg_image_id ? get_post_meta($hero_bg_image_id, '_wp_attachment_image_alt', true) : 'Hotel guests entering room secured by 33 Lock touchscreen smart lock.';

        if ($hero_headline) : ?>
        <section class="hero-banner module" style="background-image: url('<?php echo esc_url($hero_bg_image_url); ?>');">
            <div class="container">
                <h1><?php echo esc_html($hero_headline); ?></h1>
                <p><?php echo esc_html($hero_subheadline); ?></p>
                <div>
                    <?php if ($hero_primary_cta_text && $hero_primary_cta_link) : ?>
                        <a href="<?php echo esc_url($hero_primary_cta_link); ?>" class="button"><?php echo esc_html($hero_primary_cta_text); ?></a>
                    <?php endif; ?>
                    <?php if ($hero_secondary_cta_text && $hero_secondary_cta_link) : ?>
                        <a href="<?php echo esc_url($hero_secondary_cta_link); ?>" class="button button-ghost"><?php echo esc_html($hero_secondary_cta_text); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            </section>
        <?php endif; ?>


        <?php
        // --- Module 2: Why 33 Lock (3-up Icons) ---
        // ACF Fields:
        // - why_intro_line (Text)
        // - why_items (Repeater)
        //   - why_item_icon (Image - Return Format: Image Array or ID)
        //   - why_item_label (Text)
        //   - why_item_benefit_copy (Textarea)

        $why_intro_line = get_field('why_intro_line') ?: 'Reduce operating costs while delighting guests.';
        ?>
        <section class="why-33-lock module">
            <div class="container">
                <?php if ($why_intro_line) : ?>
                    <p class="intro"><?php echo esc_html($why_intro_line); ?></p>
                <?php endif; ?>

                <?php if (have_rows('why_items')) : ?>
                    <div class="why-items">
                        <?php while (have_rows('why_items')) : the_row();
                            $icon_id = get_sub_field('why_item_icon');
                            $icon_url = $icon_id ? wp_get_attachment_image_url($icon_id, 'medium') : 'https://placehold.co/200x200/00AEEF/FFFFFF?text=Icon';
                            $icon_alt = $icon_id ? get_post_meta($icon_id, '_wp_attachment_image_alt', true) : 'Feature icon';
                            $label = get_sub_field('why_item_label');
                            $benefit_copy = get_sub_field('why_item_benefit_copy');
                        ?>
                            <div class="why-item">
                                <?php if ($icon_id) : ?>
                                    <?php echo wp_get_attachment_image($icon_id, 'thumbnail', false, ["alt" => $icon_alt, "style" => "width:80px; height:80px; margin: 0 auto 15px;"]); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>" style="width:80px; height:80px; margin: 0 auto 15px;">
                                <?php endif; ?>
                                <?php if ($label) : ?>
                                    <h3><?php echo esc_html($label); ?></h3>
                                <?php endif; ?>
                                <?php if ($benefit_copy) : ?>
                                    <p><?php echo esc_html($benefit_copy); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : // Fallback content if repeater is empty ?>
                    <div class="why-items">
                        <div class="why-item">
                            <img src="https://placehold.co/200x200/00AEEF/FFFFFF?text=Cost" alt="Coin stack with downward arrow indicating savings.">
                            <h3>58 % Lower Costs</h3>
                            <p>Replace legacy mag‑stripe systems and expensive keycards with low‑maintenance smart locks.</p>
                        </div>
                        <div class="why-item">
                            <img src="https://placehold.co/200x200/00AEEF/FFFFFF?text=Time" alt="Clock icon indicating speed.">
                            <h3>Hours, Not Weeks</h3>
                            <p>Tool‑free installs mean an entire floor can be retrofitted before lunch.</p>
                        </div>
                        <div class="why-item">
                            <img src="https://placehold.co/200x200/00AEEF/FFFFFF?text=API" alt="API connection icon.">
                            <h3>Future‑Proof API</h3>
                            <p>Seamlessly integrate with PMS, channel managers, and IoT sensors as your tech stack evolves.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <?php
        // --- Module 3: Solutions at a Glance (Switchable Tabs) ---
        // ACF Fields:
        // Tab 1 Group (e.g., 'solutions_tab_1_group')
        //   - solutions_tab_1_title (Text, Default: Hospitality)
        //   - solutions_tab_1_top_benefit (Text)
        //   - solutions_tab_1_key_feature (Textarea)
        //   - solutions_tab_1_image (Image - Return Format: ID or Array)
        // Tab 2 Group (e.g., 'solutions_tab_2_group')
        //   - solutions_tab_2_title (Text, Default: Multifamily)
        //   - solutions_tab_2_top_benefit (Text)
        //   - solutions_tab_2_key_feature (Textarea)
        //   - solutions_tab_2_image (Image - Return Format: ID or Array)

        // Tab 1 Data
        $tab1_title = get_field('solutions_tab_1_title') ?: 'Hospitality';
        $tab1_benefit = get_field('solutions_tab_1_top_benefit') ?: 'Contact‑free check‑in raises guest satisfaction scores.';
        $tab1_feature = get_field('solutions_tab_1_key_feature') ?: 'Unique PINs texted automatically to each reservation.';
        $tab1_image_id = get_field('solutions_tab_1_image');
        $tab1_image_url = $tab1_image_id ? wp_get_attachment_image_url($tab1_image_id, 'medium_large') : 'https://placehold.co/400x260/cccccc/777?text=Hospitality+400x260';
        $tab1_image_alt = $tab1_image_id ? get_post_meta($tab1_image_id, '_wp_attachment_image_alt', true) : 'Smiling couple receiving phone code at lobby kiosk.';

        // Tab 2 Data
        $tab2_title = get_field('solutions_tab_2_title') ?: 'Multifamily';
        $tab2_benefit = get_field('solutions_tab_2_top_benefit') ?: 'Effortless tenant turnover with one‑tap credential revocation.';
        $tab2_feature = get_field('solutions_tab_2_key_feature') ?: 'Resident app logs entries and battery health 24/7.';
        $tab2_image_id = get_field('solutions_tab_2_image');
        $tab2_image_url = $tab2_image_id ? wp_get_attachment_image_url($tab2_image_id, 'medium_large') : 'https://placehold.co/400x260/cccccc/777?text=Multifamily+400x260';
        $tab2_image_alt = $tab2_image_id ? get_post_meta($tab2_image_id, '_wp_attachment_image_alt', true) : 'Property manager updating tenant list on tablet.';
        ?>
        <section class="solutions-tabs module">
            <div class="container">
                <div class="tab-navigation">
                    <button class="tab-button active" onclick="openTab(event, 'tab1')"><?php echo esc_html($tab1_title); ?></button>
                    <button class="tab-button" onclick="openTab(event, 'tab2')"><?php echo esc_html($tab2_title); ?></button>
                </div>

                <div id="tab1" class="tab-content active">
                    <div class="tab-content-inner">
                        <div class="tab-text">
                            <h3><?php echo esc_html($tab1_benefit); ?></h3>
                            <p><?php echo esc_html($tab1_feature); ?></p>
                        </div>
                        <div class="tab-image">
                            <?php if ($tab1_image_id) : ?>
                                <?php echo wp_get_attachment_image($tab1_image_id, 'medium_large', false, ["alt" => esc_attr($tab1_image_alt)]); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($tab1_image_url); ?>" alt="<?php echo esc_attr($tab1_image_alt); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="tab-content">
                     <div class="tab-content-inner">
                        <div class="tab-text">
                            <h3><?php echo esc_html($tab2_benefit); ?></h3>
                            <p><?php echo esc_html($tab2_feature); ?></p>
                        </div>
                        <div class="tab-image">
                             <?php if ($tab2_image_id) : ?>
                                <?php echo wp_get_attachment_image($tab2_image_id, 'medium_large', false, ["alt" => esc_attr($tab2_image_alt)]); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($tab2_image_url); ?>" alt="<?php echo esc_attr($tab2_image_alt); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        // --- Module 4: Social Proof Strip ---
        // ACF Fields:
        // - social_proof_quote (Textarea)
        // - social_proof_author (Text)
        // - social_proof_logos (Repeater)
        //   - social_proof_logo_image (Image - Return Format: ID or Array)
        //   - social_proof_logo_alt (Text - for alt text)
        //   - social_proof_logo_link (URL - Optional)

        $social_quote = get_field('social_proof_quote') ?: '“The ROI was obvious—reliable, cost‑effective, and stylish.”';
        $social_author = get_field('social_proof_author') ?: 'Simon Seroussi, COO, SuiteOp';
        ?>
        <section class="social-proof-strip module">
            <div class="container">
                <?php if ($social_quote) : ?>
                    <p class="quote"><?php echo esc_html($social_quote); ?></p>
                <?php endif; ?>
                <?php if ($social_author) : ?>
                    <p class="author">— <?php echo esc_html($social_author); ?></p>
                <?php endif; ?>

                <?php if (have_rows('social_proof_logos')) : ?>
                    <div class="logo-carousel">
                        <?php while (have_rows('social_proof_logos')) : the_row();
                            $logo_id = get_sub_field('social_proof_logo_image');
                            $logo_url = $logo_id ? wp_get_attachment_image_url($logo_id, 'medium') : 'https://placehold.co/150x60/dddddd/999999?text=Logo';
                            // ACF Image field stores alt text from media library. If you need a separate ACF field for alt:
                            $logo_alt_acf = get_sub_field('social_proof_logo_alt'); // Create this field if needed
                            $logo_alt = $logo_id ? (get_post_meta($logo_id, '_wp_attachment_image_alt', true) ?: $logo_alt_acf ?: 'Partner Logo') : ($logo_alt_acf ?: 'Partner Logo');
                            $logo_link = get_sub_field('social_proof_logo_link');
                        ?>
                            <?php if ($logo_link) : ?><a href="<?php echo esc_url($logo_link); ?>" target="_blank" rel="noopener"><?php endif; ?>
                                <?php if ($logo_id) : ?>
                                    <?php echo wp_get_attachment_image($logo_id, 'medium', false, ["alt" => esc_attr($logo_alt), "style" => "height:60px; width:auto;"]); ?>
                                <?php else: ?>
                                     <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>" style="height:60px; width:auto;">
                                <?php endif; ?>
                            <?php if ($logo_link) : ?></a><?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : // Fallback logos ?>
                    <div class="logo-carousel">
                        <img src="https://placehold.co/150x60/dddddd/999999?text=SuiteOp" alt="SuiteOp logo" style="height:60px; width:auto;">
                        <img src="https://placehold.co/150x60/dddddd/999999?text=Operto" alt="Operto logo" style="height:60px; width:auto;">
                        <img src="https://placehold.co/150x60/dddddd/999999?text=Frontdesk" alt="Frontdesk logo" style="height:60px; width:auto;">
                        <img src="https://placehold.co/150x60/dddddd/999999?text=Elevate+Living" alt="Elevate Living logo" style="height:60px; width:auto;">
                    </div>
                <?php endif; ?>
            </div>
        </section>


        <?php
        // --- Module 5: Sticky CTA Footer ---
        // ACF Fields:
        // - sticky_cta_headline (Text)
        // - sticky_cta_button_1_text (Text)
        // - sticky_cta_button_1_link (URL)
        // - sticky_cta_button_2_text (Text)
        // - sticky_cta_button_2_link (URL)

        $sticky_headline = get_field('sticky_cta_headline') ?: 'Ready to modernise your access control?';
        $sticky_btn1_text = get_field('sticky_cta_button_1_text') ?: 'Book a Demo';
        $sticky_btn1_link = get_field('sticky_cta_button_1_link') ?: '#';
        $sticky_btn2_text = get_field('sticky_cta_button_2_text') ?: 'Order a Sample';
        $sticky_btn2_link = get_field('sticky_cta_button_2_link') ?: '#';
        ?>
        <section class="sticky-cta-footer module">
            <div class="container">
                <?php if ($sticky_headline) : ?>
                    <h2><?php echo esc_html($sticky_headline); ?></h2>
                <?php endif; ?>
                <div>
                    <?php if ($sticky_btn1_text && $sticky_btn1_link) : ?>
                        <a href="<?php echo esc_url($sticky_btn1_link); ?>" class="button"><?php echo esc_html($sticky_btn1_text); ?></a>
                    <?php endif; ?>
                    <?php if ($sticky_btn2_text && $sticky_btn2_link) : ?>
                        <a href="<?php echo esc_url($sticky_btn2_link); ?>" class="button button-ghost"><?php echo esc_html($sticky_btn2_text); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    </main></div><script>
function openTab(evt, tabName) {
    var i, tabcontent, tabbuttons;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }
    tabbuttons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabbuttons.length; i++) {
        tabbuttons[i].classList.remove("active");
    }
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).classList.add("active");
    evt.currentTarget.classList.add("active");
}

// Ensure the first tab is active on page load if JS is enabled
document.addEventListener('DOMContentLoaded', function() {
    // Check if there's an active tab button already (e.g. from server-side class)
    // If not, activate the first one.
    const firstTabButton = document.querySelector('.solutions-tabs .tab-button');
    const activeTabContent = document.querySelector('.solutions-tabs .tab-content.active');
    if (firstTabButton && !activeTabContent) { // If no tab content is marked active by PHP
        firstTabButton.click();
    } else if (activeTabContent) { // If PHP marked one active, ensure its button is also styled active
        const activeTabId = activeTabContent.id;
        const correspondingButton = document.querySelector(`.solutions-tabs .tab-button[onclick*="'${activeTabId}'"]`);
        if (correspondingButton) {
            // Clear any other active buttons first
            const allTabButtons = document.querySelectorAll('.solutions-tabs .tab-button');
            allTabButtons.forEach(btn => btn.classList.remove('active'));
            correspondingButton.classList.add('active');
        }
    }
});
</script>

<?php
get_footer();
?>
