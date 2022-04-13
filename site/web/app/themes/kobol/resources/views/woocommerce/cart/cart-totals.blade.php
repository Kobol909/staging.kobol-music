{{--
	Cart totals

	This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     	https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	2.3.6
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

<div class="cart_totals @php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; @endphp">

	@php do_action( 'woocommerce_before_cart_totals' ); @endphp

	<h2>@php esc_html_e( 'Cart totals', 'woocommerce' ); @endphp</h2>

	<table cellspacing="0" class="shop_table shop_table_responsive">

		<tr class="cart-subtotal">
			<th>@php esc_html_e( 'Subtotal', 'woocommerce' ); @endphp</th>
			<td data-title="@php esc_attr_e( 'Subtotal', 'woocommerce' ); @endphp">@php wc_cart_totals_subtotal_html(); @endphp</td>
		</tr>

		@foreach ( WC()->cart->get_coupons() as $code => $coupon )
			<tr class="cart-discount coupon-@php echo esc_attr( sanitize_title( $code ) ); @endphp">
				<th>@php wc_cart_totals_coupon_label( $coupon ); @endphp</th>
				<td data-title="@php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); @endphp">@php wc_cart_totals_coupon_html( $coupon ); @endphp</td>
			</tr>
		@endforeach

		@if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() )

			@php do_action( 'woocommerce_cart_totals_before_shipping' ); @endphp

			@php wc_cart_totals_shipping_html(); @endphp

			@php do_action( 'woocommerce_cart_totals_after_shipping' ); @endphp

		@elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) )

			<tr class="shipping">
				<th>@php esc_html_e( 'Shipping', 'woocommerce' ); @endphp</th>
				<td data-title="@php esc_attr_e( 'Shipping', 'woocommerce' ); @endphp">@php woocommerce_shipping_calculator(); @endphp</td>
			</tr>

		@endif

		@foreach ( WC()->cart->get_fees() as $fee )
			<tr class="fee">
				<th>@php echo esc_html( $fee->name ); @endphp</th>
				<td data-title="@php echo esc_attr( $fee->name ); @endphp">@php wc_cart_totals_fee_html( $fee ); @endphp</td>
			</tr>
		@endforeach

	
		@if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) 
			@php
			$taxable_address = WC()->customer->get_taxable_address();
			$estimated_text  = '';
			@endphp
			@if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) 
				@php
				/* translators: %s location. */
				$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
				@endphp
			@endif

			@if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) 
				@foreach ( WC()->cart->get_tax_totals() as $code => $tax ) 
				{{-- phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited --}}
					@endphp
					<tr class="tax-rate tax-rate-@php echo esc_attr( sanitize_title( $code ) ); @endphp">
						<th>@php echo esc_html( $tax->label ) . $estimated_text; @endphp</th>
						{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --}}
						<td data-title="@php echo esc_attr( $tax->label ); @endphp">@php echo wp_kses_post( $tax->formatted_amount ); @endphp</td>
					</tr>	
				@endforeach
			@else
				<tr class="tax-total">
					<tr>@php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; @endphp</tr> 
					{{-- phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  --}}
					<td data-title="@php echo esc_attr( WC()->countries->tax_or_vat() ); @endphp">@php wc_cart_totals_taxes_total_html(); @endphp</td>
				</tr>
			@endif
		@endif

		@php do_action( 'woocommerce_cart_totals_before_order_total' ); @endphp

		<tr class="order-total">
			<th><@php esc_html_e( 'Total', 'woocommerce' ); @endphp</th>
			<td data-title="@php esc_attr_e( 'Total', 'woocommerce' ); @endphp">@php wc_cart_totals_order_total_html(); @endphp</td>
		</tr>

		@php do_action( 'woocommerce_cart_totals_after_order_total' ); @endphp

	</table>

	<div class="wc-proceed-to-checkout">
		@php do_action( 'woocommerce_proceed_to_checkout' ); @endphp
	</div>

	@php do_action( 'woocommerce_after_cart_totals' ); @endphp

</div>
