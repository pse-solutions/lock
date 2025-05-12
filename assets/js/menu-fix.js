/**
 * Menu Fix for 33Lock
 * 
 * This script ensures the header and main menu are always properly displayed
 * and that the mobile menu toggle functions correctly.
 */

document.addEventListener('DOMContentLoaded', function() {
    // Ensure header visibility
    ensureHeaderVisibility();
    
    // Initialize mobile menu toggle
    initMobileMenu();
    
    // Initialize desktop menu
    initDesktopMenu();
    
    // Handle resize events to properly manage display
    window.addEventListener('resize', handleResize);
    
    // Run once on load to set initial state
    handleResize();
});

/**
 * Ensures header elements are visible
 */
function ensureHeaderVisibility() {
    const headerElements = [
        '#masthead',
        '.site-header',
        '.ast-primary-header-bar',
        '.ast-mobile-header-wrap',
        '.ast-desktop-header-content',
        '.ast-mobile-header-content',
        '.menu-toggle',
        '.ast-mobile-menu-trigger',
        '.main-navigation'
    ];
    
    headerElements.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        if (elements.length) {
            elements.forEach(el => {
                el.style.display = '';
                el.style.visibility = 'visible';
                el.style.opacity = '1';
            });
        }
    });
}

/**
 * Handle responsive behavior
 */
function handleResize() {
    const isMobile = window.innerWidth <= 768;
    const body = document.body;
    
    // Add or remove mobile class from body
    if (isMobile) {
        body.classList.add('ast-header-break-point');
    } else {
        body.classList.remove('ast-header-break-point');
        
        // When switching to desktop, ensure menu is visible
        const mainNav = document.querySelector('.main-navigation');
        if (mainNav) {
            mainNav.style.display = 'block';
            
            // Reset any height restrictions that might have been applied
            const menuNav = document.querySelector('.main-header-bar-navigation');
            if (menuNav) {
                menuNav.style.height = '';
                menuNav.classList.remove('toggle-on');
            }
            
            // Ensure menu is horizontal
            const menu = document.querySelector('.main-header-menu');
            if (menu) {
                menu.style.display = 'flex';
                menu.style.flexDirection = 'row';
            }
        }
    }
}

/**
 * Initializes desktop menu functionality
 */
function initDesktopMenu() {
    // Ensure proper display of main menu on desktop
    if (window.innerWidth > 768) {
        const mainMenu = document.querySelector('.main-header-menu');
        if (mainMenu) {
            mainMenu.style.display = 'flex';
            mainMenu.style.flexDirection = 'row';
            
            // Set menu items to display inline
            const menuItems = mainMenu.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.style.display = 'inline-block';
            });
            
            // Handle submenus
            const itemsWithChildren = mainMenu.querySelectorAll('.menu-item-has-children');
            itemsWithChildren.forEach(item => {
                const submenu = item.querySelector('.sub-menu');
                if (submenu) {
                    submenu.style.display = 'none';
                    
                    // Show submenu on hover
                    item.addEventListener('mouseenter', () => {
                        submenu.style.display = 'block';
                        submenu.style.position = 'absolute';
                    });
                    
                    // Hide submenu when mouse leaves
                    item.addEventListener('mouseleave', () => {
                        submenu.style.display = 'none';
                    });
                }
            });
        }
    }
}

/**
 * Initializes mobile menu toggle functionality
 */
function initMobileMenu() {
    // Target all potential menu toggles
    const menuToggles = document.querySelectorAll('.menu-toggle, .ast-mobile-menu-trigger');
    
    if (menuToggles.length) {
        menuToggles.forEach(toggle => {
            // Remove any event listeners that might be preventing default behavior
            const newToggle = toggle.cloneNode(true);
            toggle.parentNode.replaceChild(newToggle, toggle);
            
            // Add our own click handler
            newToggle.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Handle the Astra popup style mobile menu
                const popupDrawer = document.querySelector('.ast-mobile-popup-drawer');
                if (popupDrawer) {
                    togglePopupDrawer(popupDrawer, this);
                }
                
                // Handle the standard dropdown mobile menu
                const mainNav = document.querySelector('.main-header-bar-navigation');
                if (mainNav) {
                    toggleMainNav(mainNav, this);
                }
            });
        });
    }
}

/**
 * Toggle popup drawer menu (Astra mobile menu style)
 */
function togglePopupDrawer(drawer, button) {
    drawer.classList.toggle('active');
    drawer.classList.toggle('show');
    
    if (drawer.classList.contains('active')) {
        drawer.style.visibility = 'visible';
        drawer.style.opacity = '1';
        document.body.classList.add('ast-mobile-menu-active');
    } else {
        drawer.style.visibility = 'hidden';
        drawer.style.opacity = '0';
        document.body.classList.remove('ast-mobile-menu-active');
    }
    
    button.classList.toggle('toggled');
}

/**
 * Toggle main navigation menu (standard dropdown)
 */
function toggleMainNav(nav, button) {
    // Toggle the navigation
    nav.classList.toggle('toggle-on');
    
    // Toggle height to animate open/close
    if (nav.classList.contains('toggle-on')) {
        nav.style.height = 'auto';
        const height = nav.offsetHeight;
        nav.style.height = '0px';
        setTimeout(() => {
            nav.style.height = height + 'px';
        }, 10);
    } else {
        nav.style.height = '0px';
    }
    
    button.classList.toggle('toggled');
}