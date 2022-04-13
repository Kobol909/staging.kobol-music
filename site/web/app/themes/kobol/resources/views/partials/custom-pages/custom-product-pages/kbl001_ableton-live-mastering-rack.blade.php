<section>
    <div class="mx-auto grid grid-cols-1 xs:w-full w-3/4 2xl:w-4/5">

        {{-- Thumbnail --}}
        <div class="col-start-1 col-span-1 xs:h-[750px] sm:h-[550px] md:h-[650px] lg:h-[650px] xl:h-[650px] 2xl:h-[750px] place-content-center">
            @include('partials.custom-pages.titles-block-product.kbl001_ableton-live-mastering-rack-title-product')
        </div>

        {{-- Short Description --}}
        <div class="col-start-1 col-span-1 bg-[#444] dark:bg-[#444] dark:bg-opacity-20 xs:h-[750px] sm:h-[700px] md:h-[600px] lg:h-[600px] xl:h-[650px] 2xl:h-[750px] place-content-center">
            @include('partials.custom-pages.descriptions.kbl001_ableton-live-mastering-rack-description-pt1')
        </div>

        {{-- Content List --}}
        <div class="col-start-1 col-span-1 bg-[#8f8f8f] dark:bg-[#8f8f8f] dark:bg-opacity-10 xs:h-[450px] sm:h-[480px] md:h-[480px] lg:h-[650px] xl:h-[650px] 2xl:h-[750px] place-content-center">
            @include('partials.custom-pages.content-list.kbl001_ableton-live-mastering-rack-content')
        </div>

        {{-- Add to cart + Price --}}
        <div class="col-start-1 col-span-1 bg-[#aaa] dark:bg-[#aaa] dark:bg-opacity-10 xs:h-[600px] sm:h-[650px] md:h-[650px] lg:h-[680px] xl:h-[650px] 2xl:h-[750px] place-content-center">
            @include('partials.custom-pages.descriptions.kbl001_ableton-live-mastering-rack-description-pt2')
        </div>

    </div>
</section>