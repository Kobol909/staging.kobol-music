@push('scripts')
    <script>
        window.onscroll = function() {scrollProgressIndicator()};

        function scrollProgressIndicator() {
            var winScrollBar = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScrollBar / height) * 100;

            document.getElementById("scrollProgressBar").style.width = scrolled + "%";
        };
    </script>
@endpush

<ul x-data="{ open: false}" class="flex flex-col lg:flex-row sm:items-center md:justify-between align-middle xs:px-0 xs:pl-2 px-2 lg:px-4 lg:pl-11 outline-none">

    @include('partials.navbar.branding')

    <nav tabindex="0" :class="{'flex': open, 'hidden': !open}" class="sm:relative border-orange-500 dark:border-neutral-100 hidden align-middle flex-grow xs:flex-col sm:flex-row sm:flex xs:justify-start sm:justify-center md:justify-end xs:items-center items-end sm:px-auto md:pb-0 lg:pl-2 xs:pl-0 sm:pl-12 lg:border-l-2 xs:pb-1 focus:outline-none">

        @include('partials.navbar.mini-cart-icon')

        @include('partials.primary_navigation')

        @include('partials.navbar.light-dark-mode-switcher')

    </nav>

</ul>

<div class="h-1 bg-[#f5f5f5] dark:bg-neutral-800 pt-2">

    <div id="scrollProgressBar" class="h-1 bg-orange-500 w-0"></div>

</div>
