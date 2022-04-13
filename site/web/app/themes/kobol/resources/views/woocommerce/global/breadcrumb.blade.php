{{--
	Shop breadcrumb

	This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see         https://docs.woocommerce.com/document/template-structure/
	@package     WooCommerce\Templates
	@version     2.3.0
	@see         woocommerce_breadcrumb()
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@if ( ! empty( $breadcrumb ) )
	{!! $wrap_before; !!}
	<div class="mt-4 bg-[#f5f5f5] dark:bg-neutral-800 mx-auto justify-center text-center w-4/5 flex xs:text-sm sm:text-base xs:font-light sm:font-normal max-w-[990px]">

		<ol class="inline-flex items-center space-x-1 md:space-x-3">
			
			@foreach ( $breadcrumb as $key => $crumb ) 

				{!! $before; !!}

				<li class="inline-flex items-center text-neutral-500 dark:text-neutral-200 xs:text-center md:text-left cursor-pointer hover:underline underline-offset-4 hover:text-orange-500">

					@if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) 
						{!! '<a class="inline-flex items-center text-sm font-medium align-middle" href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>'; !!}
					@else 
						{!! '<a class="inline-flex items-center text-sm font-medium !text-neutral-800 dark:!text-neutral-200 align-middle underline underline-offset-4" href="">' . esc_html( $crumb[0] ) . '</a>'; !!}
					@endif
		
					{!! $after; !!}
		
					@if ( sizeof( $breadcrumb ) !== $key + 1 ) 
						{!! '<svg class="w-6 h-6 text-neutral-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>' !!}
					@endif

				</li>

			@endforeach

		</ol>

	</div>
	{!! $wrap_after; !!}
@endif