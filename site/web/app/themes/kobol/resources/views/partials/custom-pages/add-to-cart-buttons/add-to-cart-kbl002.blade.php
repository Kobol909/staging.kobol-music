@php
defined( 'ABSPATH' ) || exit;
@endphp

@php 
	global $product;
@endphp

<h2 class="mx-auto xs:tracking-tight sm:tracking-normal xs:text-base font-semibold md:text-lg min-w-fit xs:px-2 xl:px-4">

    <div class="py-4 hover:-translate-y-1 hover:scale-105 hover:transition hover:ease-in-out hover:duration-100 dark:text-neutral-800">

        <a class="bg-[#f4cb45] border-[#f4cb45] shadow-md hover:shadow-xl py-4 xs:px-2 lg:px-2 rounded-md" 
        href="<?php echo esc_url( home_url( '/checkout/?add-to-cart=53&quantity=1' ) ); ?>" title="ADD TO CART" data-options="thumbnail: ''">

            GET IT NOW ! 

            {{-- <span class="woocs_price_code" data-product-id="53">

                <span class="woocommerce-Price-amount amount">

                    <span class="woocommerce-Price-currencySymbol">

                        €

                    </span>

                        0.00

                </span>

            </span> --}}

        </a>

    </div>

</h2>