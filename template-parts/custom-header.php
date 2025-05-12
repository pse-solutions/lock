<?php
/**
 * Custom Header Template for 33Lock
 *
 * This template creates a custom header that can be included in page templates
 *
 * @package Astra Child
 */

// Get the logo from customizer or use a default
$custom_logo_id = get_theme_mod('custom_logo');
$logo = $custom_logo_id ? wp_get_attachment_image_src($custom_logo_id, 'full') : false;
$logo_url = $logo ? $logo[0] : get_stylesheet_directory_uri() . '/assets/images/33lock-logo.png';
$site_title = get_bloginfo('name');
$home_url = home_url('/');

// Get menu items
$menu_items = array();
if (has_nav_menu('primary')) {
    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations['primary'];
    $menu_items = wp_get_nav_menu_items($menu_id);
}
?>

<header id="custom-masthead" class="custom-header">
    <div class="custom-header-container">
        <div class="custom-header-logo">
            <a href="<?php echo esc_url($home_url); ?>" rel="home">
                <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($site_title); ?> Logo" class="custom-logo">
            </a>
        </div>
        
        <div class="custom-header-menu-container">
            <nav id="custom-site-navigation" class="custom-main-navigation">
                <button class="custom-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="custom-menu-toggle-icon"></span>
                    <span class="screen-reader-text">Menu</span>
                </button>
                
                <div class="custom-menu-container">
                    <ul id="custom-primary-menu" class="custom-menu">
                        <?php
                        // Display menu items if available
                        if (!empty($menu_items)) {
                            foreach ($menu_items as $item) {
                                // Skip non-top level items
                                if ($item->menu_item_parent != 0) {
                                    continue;
                                }
                                
                                // Get children items
                                $children = array();
                                foreach ($menu_items as $child) {
                                    if ($child->menu_item_parent == $item->ID) {
                                        $children[] = $child;
                                    }
                                }
                                
                                // Item has children
                                $has_children = !empty($children);
                                $item_class = $has_children ? 'menu-item-has-children' : '';
                                $current_class = '';
                                
                                // Check if this is the current page
                                if ((is_page() && $item->object_id == get_queried_object_id()) || 
                                    ($item->url == "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") || 
                                    ($item->url == "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") || 
                                    strpos($_SERVER['REQUEST_URI'], $item->url) !== false) {
                                    $current_class = ' current-menu-item';
                                }
                                
                                echo '<li class="custom-menu-item ' . esc_attr($item_class) . esc_attr($current_class) . '">';
                                echo '<a href="' . esc_url($item->url) . '" class="custom-menu-link">' . esc_html($item->title) . '</a>';
                                
                                // Display submenu if needed
                                if ($has_children) {
                                    echo '<button class="custom-submenu-toggle"><span class="screen-reader-text">Submenu</span></button>';
                                    echo '<ul class="custom-sub-menu">';
                                    foreach ($children as $child) {
                                        $child_current = '';
                                        if ((is_page() && $child->object_id == get_queried_object_id()) || 
                                            ($child->url == "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") || 
                                            ($child->url == "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ||
                                            strpos($_SERVER['REQUEST_URI'], $child->url) !== false) {
                                            $child_current = ' current-menu-item';
                                        }
                                        
                                        echo '<li class="custom-sub-menu-item' . esc_attr($child_current) . '">';
                                        echo '<a href="' . esc_url($child->url) . '" class="custom-sub-menu-link">' . esc_html($child->title) . '</a>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }
                                
                                echo '</li>';
                            }
                        } else {
                            // Fallback menu items if no menu is assigned
                            $fallback_items = array(
                                'Home' => $home_url,
                                'Products' => $home_url . 'products/',
                                'Solutions' => $home_url . 'solutions/',
                                'Resources' => $home_url . 'resources/',
                                'Contact' => $home_url . 'contact/'
                            );
                            
                            foreach ($fallback_items as $title => $url) {
                                $current = (($url == "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") || 
                                           ($url == "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ||
                                           strpos($_SERVER['REQUEST_URI'], $url) !== false) ? ' current-menu-item' : '';
                                
                                echo '<li class="custom-menu-item' . esc_attr($current) . '">';
                                echo '<a href="' . esc_url($url) . '" class="custom-menu-link">' . esc_html($title) . '</a>';
                                echo '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </nav>
            
            <div class="custom-header-buttons">
                <?php
                // Add CTA button if ACF function exists
                if (function_exists('get_field') && get_field('header_cta_text', 'option')) {
                    $cta_text = get_field('header_cta_text', 'option');
                    $cta_url = get_field('header_cta_url', 'option');
                    
                    echo '<a href="' . esc_url($cta_url) . '" class="custom-header-cta-button">' . esc_html($cta_text) . '</a>';
                } else {
                    // Fallback CTA button
                    echo '<a href="' . esc_url($home_url . 'contact/') . '" class="custom-header-cta-button">Get a Quote</a>';
                }
                ?>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="custom-mobile-menu-overlay"></div>

<script>
    // Toggle mobile menu
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.custom-menu-toggle');
        const mobileMenuOverlay = document.querySelector('.custom-mobile-menu-overlay');
        const menuContainer = document.querySelector('.custom-menu-container');
        const submenuToggles = document.querySelectorAll('.custom-submenu-toggle');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                document.body.classList.toggle('custom-menu-open');
                menuContainer.classList.toggle('open');
                mobileMenuOverlay.classList.toggle('active');
            });
        }
        
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', function() {
                menuToggle.classList.remove('active');
                document.body.classList.remove('custom-menu-open');
                menuContainer.classList.remove('open');
                this.classList.remove('active');
            });
        }
        
        // Toggle submenus on mobile
        if (submenuToggles.length) {
            submenuToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function() {
                    const menuItem = this.closest('.menu-item-has-children');
                    if (menuItem) {
                        menuItem.classList.toggle('submenu-open');
                        
                        // Close other open submenus
                        const allOpenItems = document.querySelectorAll('.menu-item-has-children.submenu-open');
                        allOpenItems.forEach(function(item) {
                            if (item !== menuItem) {
                                item.classList.remove('submenu-open');
                            }
                        });
                    }
                });
            });
        }
        
        // Add window resize handler
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992 && document.body.classList.contains('custom-menu-open')) {
                menuToggle.classList.remove('active');
                document.body.classList.remove('custom-menu-open');
                menuContainer.classList.remove('open');
                mobileMenuOverlay.classList.remove('active');
                
                // Reset submenu states
                const openSubmenus = document.querySelectorAll('.submenu-open');
                openSubmenus.forEach(function(item) {
                    item.classList.remove('submenu-open');
                });
            }
        });
    });
</script>