<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $topPage = get_field('top_title'); ?>
    
    <title><?php echo $topPage['title']; ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php
        function add_theme_scripts() {
		  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1', 'all');

          wp_enqueue_script( 'script', get_template_directory_uri() . '/main.js', array ( 'jquery' ), 1, true);

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
              wp_enqueue_script( 'comment-reply' );
            }
        }
        add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header>
        <div class="ham-menu">
            <i class="fas fa-bars"></i>
        </div>
        <?php $topPage = get_field('top_title'); ?>
        <div class="contact-con">
            <a href="tel:+91<?php echo $topPage['phone']; ?>">
                <i class="fas fa-phone"></i>
                <span>Call Now</span>
            </a>
            <a href="https://www.google.com/maps/place/Roorkee,+Uttarakhand/@29.8613648,77.8598063,13z/data=!3m1!4b1!4m5!3m4!1s0x390eb36e08b35119:0x798f5dc25ebd0a72!8m2!3d29.8542626!4d77.8880002" target="_blank">
                <i class="fas fa-map-marked-alt"></i>
                <span>Get Direction</span>
            </a>
        </div>
        <ul class="menu-con">
            <li><a href="/">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#" class="contact-form-trigger">Contact</a></li>
        </ul>
    </header>