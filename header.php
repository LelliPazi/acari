<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="navbar" class="container">
    <div id="brand">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
    </div>
    <input type="checkbox" id="nav-trigger">
    <label for="nav-trigger" id="burger-button">
        <span class="burger-icon" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php _e('Navigation öffnen/schließen', 'vulg'); ?></span>
    </label>
    <nav id="main-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav-menu',
            'depth' => '2',
            'fallback_cb' => false
        ));
        ?>
    </nav>
</div>
<?php if (is_front_page()): ?>
    <header id="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <a href="#content" class="scroll-down">
            <span class="icon-arrow-down" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Zum Inhalt'); ?></span>
        </a>
    </header>
<?php else: ?>
    <div id="page-header"></div>
<?php endif; ?>