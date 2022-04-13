{{-- 
	Cart Page

	This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     	https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	3.8.0
	--}}  

@php
defined( 'ABSPATH' ) || exit;
@endphp

@php
do_action( 'woocommerce_before_cart' );
@endphp

<form class="woocommerce-cart-form" action="@php echo esc_url( wc_get_cart_url() ); @endphp" method="post">
	@php do_action( 'woocommerce_before_cart_table' ); @endphp

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">@php esc_html_e( 'Product', 'woocommerce' ); @endphp</th>
				<th class="product-price">@php esc_html_e( 'Price', 'woocommerce' ); @endphp</th>
				<th class="product-quantity">@php esc_html_e( 'Quantity', 'woocommerce' ); @endphp</th>
				<th class="product-subtotal">@php esc_html_e( 'Subtotal', 'woocommerce' ); @endphp</th>
			</tr>
		</thead>
		<tbody>
			@php do_action( 'woocommerce_before_cart_contents' ); @endphp

			@foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) 
				@php
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				@endphp
				@if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) 
					@php
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					@endphp
					<tr class="woocommerce-cart-form__cart-item @php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); @endphp">

						<td class="product-remove">
							@php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							@endphp
						</td>

						<td class="product-thumbnail">
							@php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
							@endphp

							@if ( ! $product_permalink ) 
								@php
								echo $thumbnail; // PHPCS: XSS ok.
								@endphp
							@else 
								@php
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
								@endphp
							@endif
						</td>

						<td class="product-name" data-title="@php esc_attr_e( 'Product', 'woocommerce' ); @endphp">
							@if ( ! $product_permalink ) 
								@php
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
								@endphp
							@else 
								@php
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								@endphp
							@endif
							
							@php
							do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
							
							// Meta data.
							echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
							
							// Backorder notification.
							@endphp

							@if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) 
								@php
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
								@endphp
							@endif
						</td>

						<td class="product-price" data-title="@php esc_attr_e( 'Price', 'woocommerce' ); @endphp">
							@php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							@endphp
						</td>

						<td class="product-quantity" data-title="@php esc_attr_e( 'Quantity', 'woocommerce' ); @endphp">
							@if ( $_product->is_sold_individually() ) 
								@php
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								@endphp
							@else 
								@php
								$product_quantity = woocommerce_quantity_input(
									array(
										'input_name'   => "cart[{$cart_item_key}][qty]",
										'input_value'  => $cart_item['quantity'],
										'max_value'    => $_product->get_max_purchase_quantity(),
										'min_value'    => '0',
										'product_name' => $_product->get_name(),
									),
									$_product,
									false
								);
								@endphp
							@endif
							
							@php
							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
							@endphp
						</td>

						<td class="product-subtotal" data-title="@php esc_attr_e( 'Subtotal', 'woocommerce' ); @endphp">
							@php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							@endphp
						</td>
					</tr>

				@endif
			@endforeach
			@php do_action( 'woocommerce_cart_contents' ); @endphp
			<tr>
				<td colspan="6" class="actions">

					@if ( wc_coupons_enabled() )
						<div class="coupon">
							<label for="coupon_code">@php esc_html_e( 'Coupon:', 'woocommerce' ); @endphp</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="@php esc_attr_e( 'Coupon code', 'woocommerce' ); @endphp" /> <button type="submit" class="button" name="apply_coupon" value="@php esc_attr_e( 'Apply coupon', 'woocommerce' ); @endphp">@php esc_attr_e( 'Apply coupon', 'woocommerce' ); @endphp</button>
							@php do_action( 'woocommerce_cart_coupon' ); @endphp
						</div>
					@endif

					<button type="submit" class="button" name="update_cart" value="@php esc_attr_e( 'Update cart', 'woocommerce' ); @endphp">@php esc_html_e( 'Update cart', 'woocommerce' ); @endphp</button>

					@php do_action( 'woocommerce_cart_actions' ); @endphp

					@php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); @endphp
				</td>
			</tr>

			@php do_action( 'woocommerce_after_cart_contents' ); @endphp
		</tbody>
	</table>
	@php do_action( 'woocommerce_after_cart_table' ); @endphp
</form>

@php do_action( 'woocommerce_before_cart_collaterals' ); @endphp

<div class="cart-collaterals">
	@php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	@endphp
</div>

@php do_action( 'woocommerce_after_cart' ); @endphp