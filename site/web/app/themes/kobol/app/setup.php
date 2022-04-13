<?php

/**
 * Theme setup.
 */
namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'disable-rest-api',
        'disable-asset-versioning',
        'disable-trackbacks',
        'js-to-footer',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable New Widget Editor. To prevent a bug with "wp_enqueue_scripts"
     */
    remove_theme_support('widgets-block-editor');

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'legals_navigation' => __('Legals Navigation', 'sage'),
        'footer_links_navigation' => __('Footer Links Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable wide alignment support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');


    /**
     * Enable woocommerce features.
     */
    // add_theme_support('wc-product-gallery-zoom');    // auto-zoom when hovering product images
    // add_theme_support('wc-product-gallery-slider');  // add slider for multiple product images
    add_theme_support('wc-product-gallery-lightbox');   // add a lightbox when clicking on product images - i.e darken the screen around the image
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 250,
        'gallery_thumbnail_image_width' => 100,
        'single_image_width' => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});
 
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 *
 */
add_shortcode('woo_cart_but', function () {
    ob_start();
    $cart_total = WC()->cart->get_cart_subtotal(); // Set variable for cart total
    $cart_url = wc_get_cart_url();  // Set Cart URL
  
    ?>
    <ul class="xs:mt-4 xs:mb-2 sm:mt-0 sm:mb-0 block align-middle sm:float-left xs:mx-0 lg:mx-2 md:mt-0 sm:relative xs:ml-2 xs:mr-auto sm:mx-auto">
        <li class="align-middle box-border inline-flex items-center px-4 relative whitespace-nowrap">
            <a class="relative" href="<?php echo $cart_url; ?>" title="My Basket">
                <div class="bg-clip-content border-[3px] border-green-600 flex flex-row flex-nowrap items-center justify-start rounded-sm text-center">
                    <span class="flex flex-col flex-nowrap items-center justify-center px-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-neutral-100 dark:fill-neutral-800 stroke-green-600" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>        
                    </span>
                    <?php
                    if ($cart_total > 0) {
                        ?>
                        <span class="bg-green-600 cart-contents-count flex flex-col flex-nowrap items-center justify-center pr-2 px-4 relative text-neutral-100"><?php echo $cart_total; ?></span>
                        <?php
                    }
                    ?>
                </div>
            </a>
        </li>    
    </ul>
    <?php
    return ob_get_clean();
});
 
/**
 * Custom Archive product thumbnails
 *
 */
add_action('woocommerce_before_shop_loop_item_title_custom', function () {
    global $product;
    $image = $product->get_image();
    $link = get_permalink($product->get_id());
    ?>
    <div class="group relative xs:h-[276px] sm:h-[288px] md:h-[348px] lg:h-[310px] xl:h-[310px]">
        <img class="rounded-t group-hover:opacity-[80%] duration-300 cursor-pointer transition justify-center mx-auto w-full shadow shadow-[#191d2010]" src="<?php echo $image; ?>
        <div class="bg-neutral-900 group-hover:block hidden opacity-[66%] rounded-t duration-300 cursor-pointer transition justify-center mx-auto w-full xs:h-[346px] sm:h-[300px] md:h-[378px] lg:h-[310px] xl:h-[310px] left-0 top-0 translate-y-[-100%] shadow shadow-[#191d2010]"></div>
        <button class="ripple-bg-red-300 ease-in-out delay-150 group-hover:drop-shadow-xl absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-75%] py-2 px-8 rounded-md hidden group-hover:block scale-95 hover:scale-125 duration-300 cursor-pointer transition justify-center align-middle bg-red-500 text-neutral-100 mx-auto shadow shadow-[#191d2010]">
            <a class="w-full whitespace-nowrap" href="<?php echo esc_url($link) ?>">Learn more</a>
        </button>
    </div>
    <?php
});
 
/**
 * Custom Archive product titles
 *
 */
add_action('woocommerce_shop_loop_item_title_custom', function () {
    global $product;
    $title = $product->get_name();
    ?>
    <div class="text-center px-8 m-0">
        <span class="mx-auto xs:text-xs lg:text-base xs:font-normal lg:font-semibold xs:tracking-tight lg:tracking-normal p-0">
            <?php echo $title; ?>
        </span>
    </div>
    <?php
});
 
/**
 * Custom Short description product summaries
 *
 */
add_action('woocommerce_single_product_summary_custom', function () {
    global $product;
    $summary = $product->get_short_description();
    ?>
    <div class="text-left px-8 m-0">
        <span class="mx-auto xs:text-xs lg:text-sm xs:font-extralight lg:font-light xs:tracking-tighter lg:tracking-tight p-0">
            <?php echo $summary; ?>
        </span>
    </div>
    <?php
});

/**
 *  // Programmatically create some basic pages
 *  // setup a function to check if these pages exist
 *  function the_slug_exists($post_name) {
 *      global $wpdb;
 *      if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
 *          return true;
 *      } else {
 *          return false;
 *      }
 *  }
 * // create the site map page
 * if (isset($_GET['activated']) && is_admin()){
 *     $sitemap_page_title = 'Site Map';
 *     $sitemap_page_check = get_page_by_title($sitemap_page_title);
 *     $sitemap_page = array(
 *         'post_type' => 'page',
 *         'post_title' => $sitemap_page_title,
 *         'post_status' => 'publish',
 *         'post_author' => 1,
 *         'post_slug' => 'site-map'
 *     );
 *     if(!isset($sitemap_page_check->ID) && !the_slug_exists('site-map')){
 *         $sitemap_page_id = wp_insert_post($sitemap_page);
 *     }
 *  }
 *  // change the Sample page to the refund page
 *  if (isset($_GET['activated']) && is_admin()){
 *     $refund_page_title = 'refund';
 *     $refund_page_content = '<div>TEST</div>';
 *     $refund_page_check = get_page_by_title($refund_page_title);
 *     $refund_page = array(
 *         'post_type' => 'page',
 *         'post_title' => $refund_page_title,
 *         'post_content' => $refund_page_content,
 *         'post_status' => 'publish',
 *         'post_author' => 1,
 *         'ID' => 45,
 *         'post_slug' => 'refund'
 *     );
 *     if(!isset($refund_page_check->ID) && !the_slug_exists('refund')){
 *         $refund_page_id = wp_insert_post($refund_page);
 *     }
 *  }
 */
