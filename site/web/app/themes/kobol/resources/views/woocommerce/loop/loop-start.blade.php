{{--
    Product Loop Start

    This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.

    HOWEVER, on occasion WooCommerce will need to update template files and you
    (the theme developer) will need to copy the new files to your theme to
    maintain compatibility. We try to do this as little as possible, but it does
    happen. When this occurs the version of the template file will be bumped and
    the readme will list any important changes.

    @see         https://docs.woocommerce.com/document/template-structure/
    @package     WooCommerce\Templates
    @version     3.3.0
    --}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

<ul class="bg-[#f5f5f5] text-neutral-800 dark:bg-neutral-800 dark:text-neutral-100 grid xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-0 m-0 products max-w-[990px] mx-auto">
