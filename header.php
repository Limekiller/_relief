<?php wp_enqueue_style ('main', get_template_directory_uri() . '/assets/css/main.css'); ?>
<?php wp_enqueue_style ('header', get_template_directory_uri() . '/assets/css/header.css'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://pareliefsale.org">
    <meta property="og:site_name" content="Pennsylvania Relief Sale">
    <meta property="og:title" content="Pennsylvania Relief Sale">
    <meta property="og:url" content="https://pareliefsale.org">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://static1.squarespace.com/static/5b06d55d85ede16611195f7d/t/5b06d7cc0e2e72432fafd26b/1611351441624/PARS+quilt+star+cutout.png?format=1500w">
    <meta property="og:image:width" content="1500">
    <meta property="og:image:height" content="1780">
    <meta itemprop="name" content="Pennsylvania Relief Sale">
    <meta itemprop="url" content="https://pareliefsale.org">
    <meta itemprop="thumbnailUrl" content="http://static1.squarespace.com/static/5b06d55d85ede16611195f7d/t/5b06d7cc0e2e72432fafd26b/1611351441624/PARS+quilt+star+cutout.png?format=1500w">
    <meta itemprop="image" content="http://static1.squarespace.com/static/5b06d55d85ede16611195f7d/t/5b06d7cc0e2e72432fafd26b/1611351441624/PARS+quilt+star+cutout.png?format=1500w">
    <meta name="twitter:title" content="Pennsylvania Relief Sale">
    <meta name="twitter:image" content="http://static1.squarespace.com/static/5b06d55d85ede16611195f7d/t/5b06d7cc0e2e72432fafd26b/1611351441624/PARS+quilt+star+cutout.png?format=1500w">
    <meta name="twitter:url" content="https://pareliefsale.org">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://use.typekit.net/ajb8nlc.css">
    
    <title><?php echo get_the_title() . ' - ' . get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>

<body>
    <a id='skip-to-main' href="#main-content">Skip to main content</a>     
    <nav>
        <a href="<?php echo get_home_url(); ?>"><img id="logo" alt="Site header logo" src="<?php header_image(); ?>" /></a>
        <img id="menu-icon" width="35" src="<?php echo get_template_directory_uri() . '/assets/img/menu.svg' ?>" />
        <div class="links">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </nav>

