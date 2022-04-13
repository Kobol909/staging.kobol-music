{{-- 
	Single Product Meta

	This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see         https://docs.woocommerce.com/document/template-structure/
	@package     WooCommerce\Templates
	@version     3.0.0
	--}}

@php
defined( 'ABSPATH' ) || exit;

global $product;
@endphp
<div class="product_meta">

	@php do_action( 'woocommerce_product_meta_start' ); @endphp

	@php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : @endphp

		<span class="sku_wrapper">@php esc_html_e( 'SKU:', 'woocommerce' ); @endphp <span class="sku">@php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); @endphp</span></span>

	@php endif; @endphp

	@php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); @endphp

	@php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); @endphp

	@php do_action( 'woocommerce_product_meta_end' ); @endphp

</div>
