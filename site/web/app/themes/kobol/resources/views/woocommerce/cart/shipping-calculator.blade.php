{{-- 
	Shipping Calculator

	This template can be overridden by copying it to yourtheme/woocommerce/cart/shipping-calculator.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see     	https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	4.0.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@php
do_action( 'woocommerce_before_shipping_calculator' );
@endphp

<form class="woocommerce-shipping-calculator" action="@php echo esc_url( wc_get_cart_url() ); @endphp" method="post">

	@php printf( '<a href="#" class="shipping-calculator-button">%s</a>', esc_html( ! empty( $button_text ) ? $button_text : __( 'Calculate shipping', 'woocommerce' ) ) ); @endphp

	<section class="shipping-calculator-form" style="display:none;">

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_country', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_country_field">
				<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
					<option value="default">@php esc_html_e( 'Select a country / region&hellip;', 'woocommerce' ); @endphp</option>
					@php
					@foreach ( WC()->countries->get_shipping_countries() as $key => $value ) 
						echo '<option value="' . esc_attr( $key ) . '"' . selected( WC()->customer->get_shipping_country(), esc_attr( $key ), false ) . '>' . esc_html( $value ) . '</option>';
					@endforeach
					@endphp
				</select>
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_state', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_state_field">
				@php
				$current_cc = WC()->customer->get_shipping_country();
				$current_r  = WC()->customer->get_shipping_state();
				$states     = WC()->countries->get_states( $current_cc );
				@endphp

				@if ( is_array( $states ) && empty( $states ) ) 
					<input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="@php esc_attr_e( 'State / County', 'woocommerce' ); @endphp" />
				@elseif ( is_array( $states ) ) 
					<span>
						<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" data-placeholder="@php esc_attr_e( 'State / County', 'woocommerce' ); @endphp">
							<option value="">@php esc_html_e( 'Select an option&hellip;', 'woocommerce' ); @endphp</option>
							@php
							@foreach ( $states as $ckey => $cvalue ) 
								echo '<option value="' . esc_attr( $ckey ) . '" ' . selected( $current_r, $ckey, false ) . '>' . esc_html( $cvalue ) . '</option>';
							@endforeach
							@endphp
						</select>
					</span>
				@else 
					<input type="text" class="input-text" value="@php echo esc_attr( $current_r ); @endphp" placeholder="@php esc_attr_e( 'State / County', 'woocommerce' ); @endphp" name="calc_shipping_state" id="calc_shipping_state" />
				@endif
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', true ) ) 
			<p class="form-row form-row-wide" id="calc_shipping_city_field">
				<input type="text" class="input-text" value="@php echo esc_attr( WC()->customer->get_shipping_city() ); @endphp" placeholder="@php esc_attr_e( 'City', 'woocommerce' ); @endphp" name="calc_shipping_city" id="calc_shipping_city" />
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) ) 
			<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
				<input type="text" class="input-text" value="@php echo esc_attr( WC()->customer->get_shipping_postcode() ); @endphp" placeholder="@php esc_attr_e( 'Postcode / ZIP', 'woocommerce' ); @endphp" name="calc_shipping_postcode" id="calc_shipping_postcode" />
			</p>
		@endif

		<p><button type="submit" name="calc_shipping" value="1" class="button">@php esc_html_e( 'Update', 'woocommerce' ); @endphp</button></p>
		@php wp_nonce_field( 'woocommerce-shipping-calculator', 'woocommerce-shipping-calculator-nonce' ); @endphp
	</section>
</form>

@php 
do_action( 'woocommerce_after_shipping_calculator' );
@endphp
