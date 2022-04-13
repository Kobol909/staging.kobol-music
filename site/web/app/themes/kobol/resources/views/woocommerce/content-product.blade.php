{{--
	The template for displaying product content within loops

	This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     	https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	3.6.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@php 
global $product;
@endphp

{{-- Ensure visibility --}}
@if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
@endif

<li class="grid grid-cols-1 p-0 max-w-[3O0px] h-[600px] bg-white dark:bg-neutral-700 border-2 border-[#191d2002] shadow shadow-[#191d2010] dark:shadow-neutral-700 rounded-md m-2" {!! wc_product_class( '', $product ); !!}>
@php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' ); // Product thumbnail
	do_action( 'woocommerce_before_shop_loop_item_title_custom' ); // Product thumbnail custom // TEST
	
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' ); // Product title
	do_action( 'woocommerce_shop_loop_item_title_custom' ); // Product title custom // TEST

	// do_action( 'woocommerce_single_product_summary' ); // Product summary 
	do_action( 'woocommerce_single_product_summary_custom' ); // Product summary custom // TEST

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' ); // Price // TEST

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' ); // Add to cart button // TEST 
	@endphp
</li>