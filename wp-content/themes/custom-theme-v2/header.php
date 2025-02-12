<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-3 text-start">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-6 text-center">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="about-us.php">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="training.php">training programs</a></li>
                            <li><a href="contact-us.php">contact</a></li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <a href="#" class="theme-btn btn-blue">become a chaplain</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <section class="mainBanner innerBanner" style="background-image:url(<?php echo $banner_section['image'];?>); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow bounceInDown">
                        <div class="mb-cnt">
                            <h1><?php echo $banner_section['heading'];?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>