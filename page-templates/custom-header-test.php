<?php
/**
 * Template Name: Custom Header Test
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 40px 20px;">
            <h1>Custom Header Test Page</h1>
            <p>This page is using the custom header template. You should see the new header above instead of the default Astra header.</p>
            
            <div style="margin-top: 30px; padding: 20px; background-color: #f8f9fa; border-radius: 5px;">
                <h2>Custom Header Features</h2>
                <ul style="margin-top: 15px; margin-left: 20px;">
                    <li>Responsive design for both desktop and mobile</li>
                    <li>Dropdown submenus for main menu items</li>
                    <li>Mobile menu with hamburger toggle</li>
                    <li>CTA button</li>
                    <li>Custom styling that matches the 33Lock brand</li>
                </ul>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();
?>