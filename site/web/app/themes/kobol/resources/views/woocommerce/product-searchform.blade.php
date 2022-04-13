{{--
	The template for displaying product search form

	This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.

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

<form role="search" method="get" class="woocommerce-product-search" action="@php echo esc_url( home_url( '/' ) ); @endphp">

	<label class="screen-reader-text" for="woocommerce-product-search-field-@php echo isset( $index ) ? absint( $index ) : 0; @endphp">@php esc_html_e( 'Search for:', 'woocommerce' ); @endphp</label>

	<input type="search" id="woocommerce-product-search-field-@php echo isset( $index ) ? absint( $index ) : 0; @endphp" class="search-field" placeholder="@php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); @endphp" value="@php echo get_search_query(); @endphp" name="s" />

	<button type="submit" value="@php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); @endphp">@php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); @endphp</button>

	<input type="hidden" name="post_type" value="product" />
	
</form>
