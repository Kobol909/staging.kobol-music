{{-- 
	Related Products

	This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see         https://docs.woocommerce.com/document/template-structure/
	@package     WooCommerce\Templates
	@version     3.9.0
	--}}

@php
defined( 'ABSPATH' ) || exit;

if ( $related_products ) : @endphp

	<section class="related products dark:text-neutral-100 text-neutral-800 dark:bg-neutral-800 bg-neutral-100">

		@php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			@endphp
			<h2>@php echo esc_html( $heading ); @endphp</h2>
		@php endif; @endphp
		
		@php woocommerce_product_loop_start(); @endphp

			@php foreach ( $related_products as $related_product ) : @endphp

					@php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					@endphp

			@php endforeach; @endphp

		@php woocommerce_product_loop_end(); @endphp

	</section>
	@php
endif;

wp_reset_postdata();
@endphp