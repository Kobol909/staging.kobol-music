{{-- 
	Mini-cart

	Contains the markup for the mini-cart, used by the cart widget.

	This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     	https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	5.2.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@php
do_action( 'woocommerce_before_mini_cart' );
@endphp

@if ( ! WC()->cart->is_empty() )

	<ul class="woocommerce-mini-cart cart_list product_list_widget @php echo esc_attr( $args['list_class'] ); @endphp">
		@php
		do_action( 'woocommerce_before_mini_cart_contents' );
		@endphp
		@foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) 
			@php
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
			@endphp

			@if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				@php
				$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				@endphp
				<li class="woocommerce-mini-cart-item @php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); @endphp">
					@php
					echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						'woocommerce_cart_item_remove_link',
						sprintf(
							'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
							esc_attr__( 'Remove this item', 'woocommerce' ),
							esc_attr( $product_id ),
							esc_attr( $cart_item_key ),
							esc_attr( $_product->get_sku() )
						),
						$cart_item_key
					);
					@endphp
					@if ( empty( $product_permalink ) )
						@php echo $thumbnail . wp_kses_post( $product_name ); @endphp
						{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  --}}
					@else
						<a href="@php echo esc_url( $product_permalink ); @endphp">
							@php echo $thumbnail . wp_kses_post( $product_name ); @endphp
							{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --}}
						</a>
					@endif
					@php echo wc_get_formatted_cart_item_data( $cart_item ); @endphp
					{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  --}}
					@php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); @endphp
					{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --}}
				</li>
			@endif	
		@endforeach
		
		@php
		do_action( 'woocommerce_mini_cart_contents' );
		@endphp
	</ul>

	<p class="woocommerce-mini-cart__total total">
		@php
		/**
		 * Hook: woocommerce_widget_shopping_cart_total.
		 *
		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
		 */
		do_action( 'woocommerce_widget_shopping_cart_total' );
		@endphp
	</p>

	@php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); @endphp

	<p class="woocommerce-mini-cart__buttons buttons">@php do_action( 'woocommerce_widget_shopping_cart_buttons' ); @endphp</p>

	@php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); @endphp

@else 

	<p class="woocommerce-mini-cart__empty-message">@php esc_html_e( 'No products in the cart.', 'woocommerce' ); @endphp</p>

@endif

@php
do_action( 'woocommerce_after_mini_cart' );
@endphp
