<div class="">

	<form role="search" @php ' $aria_label ' @endphp method="get" class="search-form xl:w-96" action="@php echo esc_url( home_url( '/' ) ) @endphp">

		<span class="screen-reader-text">@php echo _x( 'Search for:', 'label' ) @endphp</span>

		<div class="input-group relative flex items-stretch w-full mb-4">

			<input class="search-field form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-neutral-700 bg-neutral-50 bg-clip-padding border border-solid border-neutral-300 rounded-l transition ease-in-out m-0 focus:text-neutral-700 focus:bg-white focus:border-orange-500 search-submit h-10 pr-16 focus:outline-none" type="search" placeholder="@php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) @endphp" value="@php echo get_search_query() @endphp" name="s">

			<button type="submit" class="search-submit inline-block px-6 py-2.5 bg-neutral-600 text-neutral-50 hover:text-orange-500 font-medium text-xs leading-tight uppercase rounded-r shadow-md hover:bg-neutral-700 hover:shadow-lg focus:bg-neutral-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-neutral-800 active:shadow-lg transition duration-150 ease-in-out items-center" value="@php echo esc_attr_x( 'Search', 'submit button' ) @endphp">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          			<path class="fill-current hover:fill-orange-500" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
        		</svg>
			</button>

		</div>

	</form>
	
</div>