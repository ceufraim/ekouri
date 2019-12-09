<?php

function add_stylesheet(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('jpreloader', get_template_directory_uri().'/css/jpreloader.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('plugin', get_template_directory_uri().'/css/plugin.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri().'/css/owl.theme.css');
    wp_enqueue_style('owl-transitions', get_template_directory_uri().'/css/owl.transitions.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style('font-style-2', get_template_directory_uri().'/css/font-style-2.css');
    wp_enqueue_style('bg', get_template_directory_uri().'/css/bg.css');
    wp_enqueue_style('color', get_template_directory_uri().'/css/color.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css');
    wp_enqueue_style('elegant_font', get_template_directory_uri().'/fonts/elegant_font/HTML_CSS/style.css');
    wp_enqueue_style('et-line-font', get_template_directory_uri().'/fonts/et-line-font/style.css');
    wp_enqueue_style('rs-settings', get_template_directory_uri().'/rs-plugin/css/settings.css');
    wp_enqueue_style('rev', get_template_directory_uri().'/css/rev-settings.css');
}

function add_javascript(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', 'myscripts', null, true);
    wp_enqueue_script('jpreLoader', get_template_directory_uri().'/js/jpreLoader.js', 'myscripts', null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-isotope', get_template_directory_uri().'/js/jquery.isotope.min.js', 'myscripts', null, true);
    wp_enqueue_script('easing', get_template_directory_uri().'/js/easing.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-scrollto', get_template_directory_uri().'/js/jquery.scrollto.js', 'myscripts', null, true);
    wp_enqueue_script('owl', get_template_directory_uri().'/js/owl.carousel.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-countTo', get_template_directory_uri().'/js/jquery.countTo.js', 'myscripts', null, true);
    wp_enqueue_script('classie', get_template_directory_uri().'/js/classie.js', 'myscripts', null, true);
    wp_enqueue_script('video', get_template_directory_uri().'/js/video.resize.js', 'myscripts', null, true);
    wp_enqueue_script('validation', get_template_directory_uri().'/js/validation.js', 'myscripts', null, true);
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', 'myscripts', null, true);
    wp_enqueue_script('jquery-stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', 'myscripts', null, true);
	wp_enqueue_script('enquire', get_template_directory_uri().'/js/enquire.min.js', 'myscripts', null, true);
    wp_enqueue_script('designesia', get_template_directory_uri().'/js/designesia.js', 'myscripts', null, true);

    // SLIDER REVOLUTION SCRIPTS
    wp_enqueue_script('themepunch.plugins', get_template_directory_uri() .'/rs-plugin/js/jquery.themepunch.plugins.min.js', 'myscripts', null, true);
    wp_enqueue_script('themepunch.revolution', get_template_directory_uri() .'/rs-plugin/js/jquery.themepunch.revolution.min.js', 'myscripts', null, true);
}

if(!is_admin()){
    add_action('wp_enqueue_scripts', 'add_stylesheet');
    add_action('wp_print_scripts', 'add_javascript');
}

function website_features(){
    register_nav_menu('mainMenuLocation', 'Main Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('bannerImage', 1920, 600, true);
    add_image_size('bgSide', 800, 800, true);
    add_image_size('projectListThumb', 400, 300, true);
}

add_action('after_setup_theme', 'website_features');

function sub_header($args = NULL){ 
    if(!$args['title']) $args['title'] = get_the_title();
    if(!$args['banner_image'] && !get_field('banner_image')) 
        $subheader_style = 'style="background:url('. get_template_directory_uri().'/images/background/bg-2.jpg)top fixed"';
    else{
        $image = get_field('banner_image');
        $subheader_style = 'style="background:url('.$image['sizes']['bannerImage'].')top fixed"';
    }
    ?>
    <section id="subheader" data-speed="8" data-type="background" <?php echo $subheader_style ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $args['title'] ?></h1>
                    <ul class="crumb">
                        <li><a href="<?php echo site_url() ?>">Home</a></li>
                        <li class="sep">/</li>
                        <li><?php echo $args['title'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php }

function side_image(){ 
    if(get_the_post_thumbnail())
        $side_image_style = 'style="background:url(\''. get_the_post_thumbnail_url(null, 'bgSide') .'\')"';
    else
        $side_image_style = 'style="background:url(\''. get_attachment_url_by_slug('default-bg-side').'\')"';
    ?>
    <div class="image-container col-md-5 pull-left" data-delay="0" <?php echo $side_image_style ?>></div>
<?php }

function get_attachment_url_by_slug( $slug ) {
    $args = array(
      'post_type' => 'attachment',
      'name' => sanitize_title($slug),
      'posts_per_page' => 1,
      'post_status' => 'inherit',
    );
    $_header = get_posts( $args );
    $header = $_header ? array_pop($_header) : null;
    return $header ? wp_get_attachment_url($header->ID) : '';
  }