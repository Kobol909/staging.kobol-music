{{--
Product quantity inputs

This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.

HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.

@see     https://docs.woocommerce.com/document/template-structure/
@package WooCommerce\Templates
@version 4.0.0
--}}
 

@php
defined( 'ABSPATH' ) || exit;
@endphp


@if ( $max_value && $min_value === $max_value ) 
	
<div class="quantity hidden">
		<input type="hidden" id="@php echo esc_attr( $input_id ); @endphp" class="qty" name="@php echo esc_attr( $input_name ); @endphp" value="@php echo esc_attr( $min_value ); @endphp" />
	</div>
@else 
	@php
	/* translators: %s: Quantity. */
	$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );
	@endphp
	<div class="quantity">
		@php do_action( 'woocommerce_before_quantity_input_field' ); @endphp
		<label class="screen-reader-text" for="@php echo esc_attr( $input_id ); @endphp">@php echo esc_attr( $label ); @endphp</label>
		<input
			type="number"
			id="@php echo esc_attr( $input_id ); @endphp"
			class="@php echo esc_attr( join( ' ', (array) $classes ) ); @endphp"
			step="@php echo esc_attr( $step ); @endphp"
			min="@php echo esc_attr( $min_value ); @endphp"
			max="@php echo esc_attr( 0 < $max_value ? $max_value : '' ); @endphp"
			name="@php echo esc_attr( $input_name ); @endphp"
			value="@php echo esc_attr( $input_value ); @endphp"
			title="@php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); @endphp"
			size="4"
			placeholder="@php echo esc_attr( $placeholder ); @endphp"
			inputmode="@php echo esc_attr( $inputmode ); @endphp"
			autocomplete="@php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); @endphp"
		/>
		@php do_action( 'woocommerce_after_quantity_input_field' ); @endphp
	</div>
@endif
