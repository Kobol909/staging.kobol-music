<section>
    <div class="mx-auto grid grid-cols-1 xs:w-full w-3/4 2xl:w-4/5">

        {{-- Thumbnail --}}
        <div class="col-start-1 col-span-1 xs:h-[750px] sm:h-[550px] md:h-[650px] lg:h-[650px] xl:h-[650px] 2xl:h-[750px] place-content-center">
            @include('partials.custom-pages.titles-block-product.kbl002_ableton-live-default-presets-title-product')
        </div>

        {{-- Short Description --}}
        <div class="col-start-1 col-span-1 bg-[#444] dark:bg-[#444] dark:bg-opacity-20 xs:h-[850px] sm:h-[1000px] md:h-[900px] lg:h-[780px] xl:h-[750px] 2xl:h-[780px] place-content-center">
            @include('partials.custom-pages.descriptions.kbl002_ableton-live-default-presets-description-pt1')
        </div>

        {{-- Content List --}}
        <div class="col-start-1 col-span-1 bg-[#8f8f8f] dark:bg-[#8f8f8f] dark:bg-opacity-10 xs:h-[450px] sm:h-[400px] md:h-[400px] lg:h-[550px] xl:h-[550px] 2xl:h-[650px] place-content-center">
            @include('partials.custom-pages.content-list.kbl002_ableton-live-default-presets-content')
        </div>

        {{-- Add to cart + Price --}}
        <div class="col-start-1 col-span-1 bg-[#aaa] dark:bg-[#aaa] dark:bg-opacity-10 xs:h-[200px] sm:h-[200px] md:h-[250px] lg:h-[300px] xl:h-[300px] 2xl:h-[300px] place-content-center">
            @include('partials.custom-pages.descriptions.kbl002_ableton-live-default-presets-description-pt2')
        </div>

    </div>
</section>