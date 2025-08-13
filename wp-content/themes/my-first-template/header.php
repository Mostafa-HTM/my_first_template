<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/topmenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mftMenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pagination.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pattern.css">
    <title><?php bloginfo("name"); wp_title(); ?></title>
    <?php wp_head(  ); ?>
</head>
<body>
    <div id="topmenu" role="navigation">
        <div class="topmenu">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'mft_menus',
                    'container' => '',
                ) );
            ?>
            <div class="search" role="search">
                <form action="" method="">
                    <input type="text" value="" placeholder="جست‌و‌جو" onfocus="this.placeholder=''" onblur="this.placeholder='جست‌و‌جو'">
                </form>
            </div>
        </div>
    </div>
    <div id="banner" role="navigation">
        <div class="banner">
            <a href=<?php bloginfo("home") ?> class="title">
                <?php bloginfo("name"); ?>
            </a>
        </div>
        <a href=<?php bloginfo("home") ?> class="logo">
        </a>
    </div>
    <?php include('includs/mftMenu.php'); ?>