{{-- 
	Single Product tabs

	This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     https://docs.woocommerce.com/document/template-structure/
	@package WooCommerce\Templates
	@version 3.8.0
	--}}

@php
defined( 'ABSPATH' ) || exit;

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : @endphp

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			@php foreach ( $product_tabs as $key => $product_tab ) : @endphp
				<li class="@php echo esc_attr( $key ); @endphp_tab" id="tab-title-@php echo esc_attr( $key ); @endphp" role="tab" aria-controls="tab-@php echo esc_attr( $key ); @endphp">
					<a href="#tab-@php echo esc_attr( $key ); @endphp">
						@php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); @endphp
					</a>
				</li>
			@php endforeach; @endphp
		</ul>
		@php foreach ( $product_tabs as $key => $product_tab ) : @endphp
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--@php echo esc_attr( $key ); @endphp panel entry-content wc-tab" id="tab-@php echo esc_attr( $key ); @endphp" role="tabpanel" aria-labelledby="tab-title-@php echo esc_attr( $key ); @endphp">
				@php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				@endphp
			</div>
		@php endforeach; @endphp

		@php do_action( 'woocommerce_product_after_tabs' ); @endphp
	</div>

@php endif; @endphp
