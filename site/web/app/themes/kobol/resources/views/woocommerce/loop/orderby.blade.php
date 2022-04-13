
{{--
	Show options for ordering

	This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see         https://docs.woocommerce.com/document/template-structure/
	@package     WooCommerce\Templates
	@version     3.6.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

<form class="woocommerce-ordering xs:!float-left xs:text-left mx-auto px-2 bg-[#f5f5f5] text-neutral-800 dark:bg-neutral-800 dark:text-neutral-100 xs:text-xs sm:text-sm xs:font-light sm:font-normal max-w-[990px]" method="get">
	<select name="orderby" class="orderby bg-[#f5f5f5] text-neutral-800 dark:bg-neutral-800 dark:text-neutral-100 xs:text-xs sm:text-sm xs:font-light sm:font-normal" aria-label="@php esc_attr_e( 'Shop order', 'woocommerce' ); @endphp">
		@foreach ( $catalog_orderby_options as $id => $name )
			<option value="@php echo esc_attr( $id ); @endphp" @php selected( $orderby, $id ); @endphp>@php echo esc_html( $name ); @endphp</option>
		@endforeach
	</select>
	<input type="hidden" name="paged" value="1" />
	@php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); @endphp
</form>