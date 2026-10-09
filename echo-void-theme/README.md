# Echo Void Theme

Echo Void is a custom WordPress theme developed as a vocational web development project. The project combines a dark, industrial visual identity with urban exploration, abandoned places, Soviet-era architecture, drone photography, underground locations, industrial spaces, urban art, travel content and a WooCommerce webshop.

The theme was designed and developed specifically for the Echo Void project rather than being built by modifying an existing commercial theme.

## Project

Echo Void focuses on the exploration and documentation of forgotten places and architecture.

The visual identity is built around:

- Dark and minimal design
- Industrial and brutalist aesthetics
- Soviet and post-Soviet architecture
- Abandoned locations
- Urban exploration
- Drone photography
- Urban art
- Historical travel

The website combines editorial content with a webshop for Echo Void travel packages and other urbex-related products.

## Features

- Custom WordPress theme
- Responsive design
- Custom homepage
- Responsive navigation
- Mobile menu
- Custom logo support
- WordPress featured image support
- Blog and article templates
- Category and tag archives
- Custom 404 page
- WooCommerce webshop integration
- Travel package products
- Urbex and architecture content
- Hero background image with parallax effect
- Safety and ethics section
- Dark industrial visual design
- WordPress template hierarchy
- Accessibility-conscious frontend implementation

## WooCommerce

WooCommerce is an active part of the Echo Void project.

The webshop is used to present products such as travel packages and urbex-related experiences.

Example products include:

- Soviet Architecture Tour in Tbilisi
- Abandoned Sanatoriums – Borjomi
- Stalin Tour – Gori

WooCommerce must be installed and activated for the webshop functionality to work correctly.

## Content

The project covers locations and themes including:

- Georgia
- Tbilisi
- Gori
- Borjomi
- Soviet architecture
- Brutalism
- Abandoned buildings
- Sanatoriums
- Industrial ruins
- Military sites
- Underground locations
- Urban art
- Urban exploration

## Theme Structure

```text
echo-void-theme/
├── 404.php
├── archive.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── README.md
├── screenshot.png
├── single.php
├── style.css
└── assets/
    ├── css/
    │   └── main.css
    ├── images/
    │   └── README.md
    └── js/
        └── main.js
```
Important Files
style.css
Contains the WordPress theme header and theme metadata. It also contains CSS styles, including WooCommerce-related styles.

functions.php
Contains the main theme setup and asset loading.

It handles:

Theme support
Navigation menus
Custom logo
Featured images
HTML5 support
Responsive embeds
CSS loading
JavaScript loading
Font loading
header.php
Contains the document header, WordPress head hook, site logo and main navigation.

footer.php
Contains the site footer, footer navigation, social links and WordPress footer hook.

The Instagram, YouTube and TikTok links are currently placeholder links using #.

front-page.php
Contains the custom Echo Void homepage, including the hero section, exploration categories, product-related content, urban art section, latest articles and safety section.

single.php
Template for individual blog posts.

page.php
Template for standard WordPress pages.

archive.php
Template for category, tag, author and date archives.

index.php
Fallback WordPress template.

404.php
Custom page shown when requested content cannot be found.

assets/css/main.css
Contains the main visual design, layout and responsive styling of the theme.

assets/js/main.js
Contains the theme's vanilla JavaScript functionality, including the responsive mobile navigation and hero parallax effect.

WordPress Template Hierarchy
The theme uses the standard WordPress template hierarchy:

front-page.php
    → Homepage

single.php
    → Individual blog posts

page.php
    → Standard pages

archive.php
    → Category, tag, author and date archives

404.php
    → Page not found

index.php
    → Fallback template
Installation
Copy the echo-void-theme folder into:
wp-content/themes/
Open the WordPress administration dashboard.

Go to:

Appearance → Themes
Activate Echo Void Theme.

Configure the site's navigation menus.

Configure the homepage under:

Settings → Reading
Install and activate WooCommerce.

Configure the WooCommerce webshop and add the required products.

The homepage product cards currently use the WooCommerce product IDs 241, 254 and 259.

These IDs may change in the production environment and must be adjusted if the Nube WooCommerce products use different IDs.

The homepage "View maps" link uses the WooCommerce product category slug:

downloadable-urbex-maps

That category and slug must exist in the production environment for the link to work correctly.

Development
The theme was developed using:

PHP
HTML
CSS
Vanilla JavaScript
WordPress
WooCommerce
The project was developed locally using LocalWP and prepared for deployment to the Nube hosting environment.

Production code must not depend on LocalWP-specific domains such as travelshop.local or localhost.

Responsive Design
The theme is designed for desktop, tablet and mobile screens.

The responsive implementation includes:

Mobile navigation
Flexible layouts
Responsive content grids
Mobile-friendly typography
Responsive images
Reduced-motion consideration for animated effects
Accessibility
The theme follows common accessibility practices where applicable.

These include:

Semantic HTML
Navigation labels
ARIA attributes for interactive navigation
WordPress Media Library alt text is used where images are rendered as HTML img elements
CSS background-image images do not have HTML alt text
Keyboard-accessible controls
Reduced-motion support
Safety and Ethics
Echo Void promotes responsible urban exploration.

The project emphasizes:

Respect for locations
Respect for private property
No vandalism
No theft
Avoiding unnecessary risks
Responsible photography
Personal safety
The purpose of the project is to document and present abandoned places, architecture and history responsibly.

AI-Assisted Development
AI tools were used as development assistance during the project.

AI assistance was used for tasks including:

Theme development
PHP development
CSS development
JavaScript development
Debugging
Troubleshooting
Code review
Content creation
Documentation
Problem solving
The resulting code and content were reviewed and integrated as part of the project development process.

Project Status
Version: 1.0.0
Status: Final

The Echo Void theme is considered complete for the project presentation and deployment.


