# Echo Void Theme

Echo Void Theme is a custom WordPress theme for a vocational web development student project. The site concept is about urban exploration, abandoned places, Soviet-era ruins, drone exploration, underground locations, industrial architecture, and urban art.

The theme uses PHP, HTML, CSS, and a small amount of vanilla JavaScript. It does not use React, Tailwind, Bootstrap, WooCommerce, or complex custom post types.

## Installation

1. Copy the `echo-void-theme` folder into `wp-content/themes/`.
2. Open the WordPress admin dashboard.
3. Go to Appearance > Themes.
4. Activate `Echo Void Theme`.
5. Go to Appearance > Menus and assign a menu to `Primary Menu` and optionally `Footer Menu`.
6. Create or select a homepage in Settings > Reading if needed.

## Folder structure

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

## Important files

- `style.css`: WordPress theme information. WordPress reads this file to show the theme in Appearance > Themes.
- `functions.php`: Registers menus, enables theme support features, and loads CSS/JS files.
- `header.php`: Contains the HTML head, logo, and navigation.
- `footer.php`: Contains footer text, footer menu, social placeholders, and `wp_footer()`.
- `front-page.php`: Custom designed homepage for Echo Void.
- `index.php`: Fallback template for posts and lists.
- `page.php`: Template for normal WordPress pages.
- `single.php`: Template for single blog posts.
- `archive.php`: Template for category, tag, author, and date archives.
- `404.php`: Custom not found page.
- `assets/css/main.css`: Main visual design and responsive layout.
- `assets/js/main.js`: Mobile menu toggle.

## Editing colors and design

Most colors are CSS variables at the top of `assets/css/main.css`:

```css
:root {
    --color-bg: #080909;
    --color-accent: #8cff2f;
    --color-danger: #ff3b3b;
}
```

Change these values to adjust the dark background, neon green accent, or red warning color.

## Editing homepage content

Homepage section text is in `front-page.php`. The theme currently includes:

- Hero section
- Featured exploration cards
- Map product teaser cards
- Urban art section
- Latest posts section
- Safety and ethics section



## WordPress template hierarchy

This theme uses standard WordPress templates:

- `front-page.php` loads for the site homepage.
- `single.php` loads for one blog post.
- `page.php` loads for normal pages.
- `archive.php` loads for categories, tags, authors, and date archives.
- `404.php` loads when a page is not found.
- `index.php` is the fallback template if WordPress cannot find a more specific template.

## What AI helped generate

AI helped create the initial theme structure, starter PHP templates, homepage placeholder content, dark urbex CSS styling, responsive layout rules, mobile menu JavaScript, and this README file.



## Changelog

### 1.0.0

- Created initial Echo Void custom WordPress theme.
- Added dark industrial responsive design.
- Added homepage sections for urbex, maps, street art, latest articles, and safety.
- Added WordPress templates for pages, posts, archives, and 404.
- Added menu support, post thumbnails, custom logo, title tag, CSS enqueue, and JS enqueue.
- Added documentation and image placeholder instructions.


