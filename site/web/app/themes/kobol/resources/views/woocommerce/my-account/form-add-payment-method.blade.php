{{--
	Add payment method form form

	This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-add-payment-method.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see 		https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	4.3.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@extends('layouts.app')

@section('content')
	@php
		$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
	@endphp

@if ( $available_gateways )
	<form id="add_payment_method" method="post">
		<div id="payment" class="woocommerce-Payment">
			<ul class="woocommerce-PaymentMethods payment_methods methods">
				@php
				// Chosen Method.
				if ( count( $available_gateways ) ) 
					current( $available_gateways )->set_current();
				@endif
				@endphp

				@foreach ( $available_gateways as $gateway )

					<li class="woocommerce-PaymentMethod woocommerce-PaymentMethod--@php echo esc_attr( $gateway->id ); @endphp payment_method_ @php echo esc_attr( $gateway->id ); @endphp">
						<input id="payment_method_@php echo esc_attr( $gateway->id ); @endphp" type="radio" class="input-radio" name="payment_method" value="@php echo esc_attr( $gateway->id ); @endphp" @php checked( $gateway->chosen, true ); @endphp />
						<label for="payment_method_@php echo esc_attr( $gateway->id ); @endphp">@php echo wp_kses_post( $gateway->get_title() ); @endphp @php echo wp_kses_post( $gateway->get_icon() ); @endphp</label>
						
						@if ( $gateway->has_fields() || $gateway->get_description() ) 
							@php
							echo '<div class="woocommerce-PaymentBox woocommerce-PaymentBox--' . esc_attr( $gateway->id ) . ' payment_box payment_method_' . esc_attr( $gateway->id ) . '" style="display: none;">';
							$gateway->payment_fields();
							echo '</div>';
							@endphp
						@endif
					</li>
					
				@endforeach
				
			</ul>

			@php 
			do_action( 'woocommerce_add_payment_method_form_bottom' );
			@endphp

			<div class="form-row">
				@php wp_nonce_field( 'woocommerce-add-payment-method', 'woocommerce-add-payment-method-nonce' ); @endphp
				<button type="submit" class="woocommerce-Button woocommerce-Button--alt button alt" id="place_order" value="@php esc_attr_e( 'Add payment method', 'woocommerce' ); @endphp">@php esc_html_e( 'Add payment method', 'woocommerce' ); @endphp</button>
				<input type="hidden" name="woocommerce_add_payment_method" id="woocommerce_add_payment_method" value="1" />
			</div>
		</div>
	</form>
@else
	<p class="woocommerce-notice woocommerce-notice--info woocommerce-info">{!! esc_html_e( 'New payment methods can only be added during checkout. Please contact us if you require assistance.', 'woocommerce' ); !!}</p>
@endif
