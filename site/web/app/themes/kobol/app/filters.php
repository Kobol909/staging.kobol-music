<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Add "Buy now" instead of "Add to cart".
 *
 * @return string
 */
add_filter('woocommerce_product_single_add_to_cart_text', function () {
    return __('Buy now', 'woocommerce');
});

/**
 * Add AJAX Shortcode when cart contents update
 *
 */
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start();
 
    // Set variable for cart item count
    $cart_count = WC()->cart->cart_contents_count;
    // Set variable for cart total
    $cart_total = WC()->cart->get_cart_subtotal();
    // Set Cart URL
    $cart_url = wc_get_cart_url();
  
    ?>
    <ul class="block sm:float md:float-left mx-2 md:mt-0 relative">
        <li class="align-middle box-border inline-flex items-center px-2 relative whitespace-nowrap">
            <a class="relative" href="<?php echo $cart_url; ?>" title="<?php _e('View your shopping cart'); ?>">
                <div class="bg-clip-content border-[3px] border-green-600 flex flex-row flex-nowrap items-center justify-start rounded-sm text-center">
                    <span class="flex flex-col flex-nowrap items-center justify-center px-2 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-neutral-100 dark:fill-neutral-800 stroke-green-600" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>        
                    </span>
                    <?php
                    if ($cart_count > 0) {
                        ?>
                        <span class="bg-green-600 border-r-2 border-neutral-100 dark:border-neutral-800 cart-contents-count flex flex-col flex-nowrap items-center justify-center pl-2 px-2 relative text-neutral-100"><?php echo $cart_count; ?></span>
                        <?php
                    }
                    if ($cart_total > 0) {
                        ?>
                        <span class="bg-green-600 cart-contents-count flex flex-col flex-nowrap items-center justify-center pr-2 px-2 relative text-neutral-100"><?php echo $cart_total; ?></span>
                        <?php
                    }
                    ?>
                </div>
            </a>
        </li>    
    </ul>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
});

/**
 * Add WooCommerce Cart Menu Item Shortcode to particular menu
 *
 */
add_filter('wp_nav_menu_primary-menu_items', 'woo_cart_but_icon', 10, 2);
function woo_cart_but_icon($items, $args)
{
    // Adding the created Icon via the shortcode already created
    $items .=  '[woo_cart_but]';
    return $items;
};
?>
