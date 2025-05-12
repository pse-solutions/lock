# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is an Astra child theme for a WordPress site for "33 Lock," a company that sells smart locks and access control systems. The theme includes:

1. Custom page templates:
   - Product template (for showcasing individual lock products)
   - Home template (for the main landing page)
   - Style guide template (for maintaining brand consistency)

2. ACF (Advanced Custom Fields) integration for content management
   - Each template has a dedicated ACF field group with numerous fields
   - Fields provide customization for everything from headings to features, specifications, and CTAs

3. Custom styling with a mix of CSS files and inline Tailwind-like utility classes

## Theme Structure

- `functions.php`: Core theme functionality including:
  - Style and script enqueuing 
  - ACF field registrations for all templates
  - Theme setup

- `page-templates/`: Contains custom page templates:
  - `product-template.php`: Detailed product showcase page
  - `home-template.php`: Main landing page 
  - `style-guide-template.php`: Brand style guide

- `assets/`: Contains theme assets
  - `css/`: Template-specific stylesheets
  - `js/`: JavaScript files for template functionality

## ACF Field Groups

The theme uses Advanced Custom Fields extensively. Three main field groups are defined:

1. `33 Lock Product Template`: Fields for the product page template
2. `33 Lock Home Page Template`: Fields for the home page template 
3. `33 Lock Style Guide Template`: Fields for the style guide template

These field groups provide a rich editing experience in the WordPress admin with sensible defaults.

## Styling Approach

The theme uses a hybrid approach to styling:

1. Template-specific CSS files in the `assets/css/` directory
2. Utility classes in HTML that follow Tailwind CSS conventions
3. Brand colors defined in CSS variables and classes:
   - Primary: Teal (#00AEEF)
   - Secondary: Slate (#3D4A5D)

## Development Workflow

For local development:

1. Make changes to the theme files directly
2. Test changes using the WordPress admin preview
3. Custom CSS should be added to the appropriate template CSS file in the `assets/css/` directory
4. New JavaScript functionality should be added to the appropriate file in `assets/js/` and enqueued in `functions.php`

## Common Tasks

### Adding a New Template

1. Create a new PHP file in `page-templates/`
2. Add the template name in the file header comments
3. Register any ACF fields in the `astra_child_register_acf_fields()` function in `functions.php`
4. Create a corresponding CSS file in `assets/css/` if needed
5. Enqueue the CSS/JS in `functions.php` in the `astra_child_enqueue_styles()` function

### Modifying Template Styles

1. Edit the appropriate CSS file in `assets/css/`
2. For global changes, modify `style.css` in the theme root

### Adding New ACF Fields

1. Add new field definitions in the `astra_child_register_acf_fields()` function in `functions.php`
2. Update the template files to use the new fields