/**
 * IntelliLever Product Page JavaScript
 */

jQuery(document).ready(function($) {
    // Compatibility tabs functionality
    $('.compatibility-tab').on('click', function() {
        var tabId = $(this).data('tab');
        
        // Update active tab
        $('.compatibility-tab').removeClass('active');
        $(this).addClass('active');
        
        // Show corresponding content
        $('.compatibility-item').removeClass('active');
        $('#' + tabId + '-content').addClass('active');
    });
    
    // FAQ accordion functionality
    $('.faq-question').on('click', function() {
        var $faqItem = $(this).parent();
        
        if ($faqItem.hasClass('active')) {
            // If clicking an already open item, close it
            $faqItem.removeClass('active');
            $(this).next().slideUp(250);
        } else {
            // Close any open items
            $('.faq-item.active .faq-answer').slideUp(250);
            $('.faq-item.active').removeClass('active');
            
            // Open the clicked item
            $faqItem.addClass('active');
            $(this).next().slideDown(250);
        }
    });
    
    // Ensure all FAQ answers except the first are hidden initially
    $('.faq-item:not(.active) .faq-answer').hide();
    
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 700);
        }
    });
    
    // Add subtle animation effects on scroll
    function animateOnScroll() {
        $('.animate-on-scroll').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height() - 100;
            
            if (elementTop < windowBottom) {
                $(this).addClass('animated');
            }
        });
    }
    
    // Add CSS class for animation but ensure content is visible by default
    $('<style>.animate-on-scroll{transform:translateY(20px);transition:all 0.6s ease;}.animated{transform:translateY(0);}</style>').appendTo('head');
    
    // Wait for page to load completely before applying animation classes
    $(window).on('load', function() {
        // Add animation class after page loads
        $('.benefit-card, .feature-item, .use-case-item, .related-product-card, .installation-step').addClass('animate-on-scroll');
        
        // Run animation check on scroll and immediately
        $(window).on('scroll', animateOnScroll);
        setTimeout(animateOnScroll, 100); // Short delay to ensure everything is rendered
    });
    
    // Hero image perspective effect
    $('.hero-image').on('mousemove', function(e) {
        const $this = $(this);
        const $img = $this.find('img');
        
        // Get mouse position relative to the element
        const x = e.pageX - $this.offset().left;
        const y = e.pageY - $this.offset().top;
        
        // Calculate rotation based on mouse position
        const centerX = $this.width() / 2;
        const centerY = $this.height() / 2;
        const rotateY = -((x - centerX) / centerX) * 15; // Max 15 degrees
        const rotateX = ((y - centerY) / centerY) * 10; // Max 10 degrees
        
        // Apply transform
        $img.css('transform', `perspective(1000px) rotateY(${rotateY}deg) rotateX(${rotateX}deg)`);
    });
    
    $('.hero-image').on('mouseleave', function() {
        // Reset transform on mouse leave
        $(this).find('img').css('transform', 'perspective(1000px) rotateY(-15deg) rotateX(0)');
    });
});