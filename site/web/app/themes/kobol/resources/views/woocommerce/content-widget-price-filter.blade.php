{{--
	The template for displaying product price filter widget.

	This template can be overridden by copying it to yourtheme/woocommerce/content-widget-price-filter.php

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
 
@php do_action( 'woocommerce_widget_price_filter_start', $args ); @endphp

<form method="get" action="@php echo esc_url( $form_action ); @endphp">
	
	<div class="price_slider_wrapper">
		
		<div class="price_slider" style="display:none;"></div>
		
		<div class="price_slider_amount" data-step="@php echo esc_attr( $step ); @endphp">
			
			<input type="text" id="min_price" name="min_price" value="@php echo esc_attr( $current_min_price ); @endphp" data-min="@php echo esc_attr( $min_price ); @endphp" placeholder="@php echo esc_attr__( 'Min price', 'woocommerce' ); @endphp" />
			
			<input type="text" id="max_price" name="max_price" value="@php echo esc_attr( $current_max_price ); @endphp" data-max="@php echo esc_attr( $max_price ); @endphp" placeholder="@php echo esc_attr__( 'Max price', 'woocommerce' ); @endphp" />
			
			@php /* translators: Filter: verb "to filter" */ @endphp
			
			<button type="submit" class="button">@php echo esc_html__( 'Filter', 'woocommerce' ); @endphp</button>
			
			<div class="price_label" style="display:none;">
				@php echo esc_html__( 'Price:', 'woocommerce' ); @endphp <span class="from"></span> &mdash; <span class="to"></span>
			</div>
			
			@php echo wc_query_string_form_fields( null, array( 'min_price', 'max_price', 'paged' ), '', true ); @endphp
			
			<div class="clear"></div>
			
		</div>
		
	</div>
	
</form>

@php do_action( 'woocommerce_widget_price_filter_end', $args ); @endphp
