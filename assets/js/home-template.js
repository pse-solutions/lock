/**
 * 33Lock Home Template JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Tabs functionality
    initTabs();
    
    // Sticky CTA functionality
    initStickyCTA();
    
    // Add smooth scrolling for anchor links
    initSmoothScroll();
    
    // Add animations 
    initAnimations();
});

/**
 * Initialize tabs functionality
 */
function initTabs() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabBtns.length && tabContents.length) {
        // Hide all tabs initially except the first one
        tabContents.forEach((content, index) => {
            if (index !== 0) {
                content.classList.add('hidden');
            }
        });
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all buttons
                tabBtns.forEach(button => {
                    button.classList.remove('active');
                });
                
                // Add active class to current button
                this.classList.add('active');
                
                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                    content.classList.remove('active');
                });
                
                // Show the selected tab content
                const activeTab = document.getElementById(tabId + '-tab');
                if (activeTab) {
                    activeTab.classList.remove('hidden');
                    
                    // Use setTimeout to add the active class for animation
                    setTimeout(() => {
                        activeTab.classList.add('active');
                    }, 50);
                }
            });
        });
    }
}

/**
 * Initialize sticky CTA footer
 */
function initStickyCTA() {
    const stickyCta = document.querySelector('.sticky-cta');
    
    if (stickyCta) {
        // Show sticky CTA after scrolling 500px
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                stickyCta.classList.remove('translate-y-full');
            } else {
                stickyCta.classList.add('translate-y-full');
            }
        });
    }
}

/**
 * Initialize smooth scrolling for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId !== '#' && document.querySelector(targetId)) {
                e.preventDefault();
                
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * Initialize animations
 */
function initAnimations() {
    // Add animation to elements as they come into view
    const animatedElements = document.querySelectorAll('.benefit-card, .product-card');
    
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });
        
        animatedElements.forEach(element => {
            observer.observe(element);
        });
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        animatedElements.forEach(element => {
            element.classList.add('animated');
        });
    }
}