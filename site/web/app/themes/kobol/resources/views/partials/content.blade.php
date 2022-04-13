<div class="post mt-8 container mx-auto xs:w-full sm:w-4/5 justify-center items-center">

	{{-- Target a specific post 
		@if ($post->ID == 76) 
		--}}

	{{-- When blog posts entry > 10 implement this block for the latest --}}
	<article class="container mb-2 bg-[#ebebeb] dark:bg-neutral-700 rounded" @php(post_class())>

		<a rel="noopener noreferrer" href="{{ get_permalink() }}" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12">
			
			<img src="{!! get_the_post_thumbnail_url() !!}" alt="" class="object-cover w-full h-64 rounded-l-md sm:h-96 lg:col-span-7 group-hover:opacity-[80%] duration-300 cursor-pointer transition">

			<div class="p-6 space-y-2 lg:col-span-5">

				<h3 class="xs:text-xl sm:text-3xl font-semibold uppercase tracking-wide leading-none hover:underline focus:underline cursor-pointer">
					{!! $title !!}</h3>

				<div class="entry-summary text-base font-normal tracking-normal">

					@php(the_excerpt())

				</div>

				<span class="text-xs font-semibold tracking-normal">@php(the_author()). @php(the_date())</span>

			</div>

		</a>

	</article>
		
		{{-- @else --}}
		
		{{-- When blog posts entry > 10 implement this block for all other posts --}}
		{{-- <div class="mt-8 mb-2 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
			
			<article class="mb-2 bg-[#ebebeb] dark:bg-neutral-700 shadow-md shadow-neutral-200 dark:shadow-neutral-700 hover:shadow-lg rounded" @php(post_class())> 
			
				<a rel="noopener noreferrer" href="{{ get_permalink() }}" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline">
					
					<img src="{!! get_the_post_thumbnail_url() !!}" alt="" class="object-cover w-full h-64 rounded-l-md sm:h-96 lg:col-span-7">
					
					<div class="p-6 space-y-2 lg:col-span-5">
						
						<h3 class="text-3xl font-semibold uppercase tracking-wide leading-none hover:underline focus:underline cursor-pointer">{!! $title !!}</h3>
						
						<div class="entry-summary text-base font-normal tracking-normal">
							
							@php(the_excerpt())
							
						</div>
						
						<span class="text-xs font-semibold tracking-normal">@php(the_author()). @php(the_date())</span>
						
					</div>
					
				</a>
				
			</article>
			
		</div>
	
	@endif --}}
	
</div>
{{-- Model
	<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
		<a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-coolGray-900">
			<img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
				<span class="text-xs dark:text-coolGray-400">February 19, 2021</span>
				<p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
			</div>
		</a>
		<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
				<img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="https://source.unsplash.com/random/480x360?1">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-coolGray-400">January 21, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			
		</div>
		<div class="flex justify-center">
			<button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-coolGray-900 dark:text-coolGray-400">Load more posts...</button>
		</div>
	</div>
	--}}