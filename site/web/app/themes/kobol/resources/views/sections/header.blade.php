<header x-data="{ scrolAtTop: true }" @scroll.window="scrolAtTop = (window.pageYOffset > 540) ? false : true" :class="{ 'bg-[#f5f5f5] text-neutral-800 dark:bg-neutral-800 dark:bg-text-100 transition duration-300 ease-[cubic-bezier(0.61,1,0.88,1)] sticky top-0 z-20 xs:pb-2 sm:h-[98px] lg:h-[68px] outline-none': !scrolAtTop }" class="bg-[#f5f5f5] dark:bg-neutral-800 w-full xs:lg:px-4 xl:px-6 sm:h-[98px] lg:h-[68px] align-middle pt-2 outline-none">

  @include('partials.navbar')

</header>
