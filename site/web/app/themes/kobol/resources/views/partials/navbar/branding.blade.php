<div class="flex flex-row items-center justify-between lg:justify-start align-middle my-auto focus:outline-none">

    @include('partials.navbar.logo')

    <span class="dark:text-neutral-100 duration-500 ease-in-out transform transition align-middle block font-extrabold lg:px-6 lg:tracking-wide md:tracking-normal self-center sm:tracking-tight text-4xl text-neutral-800 xs:tracking-tight whitespace-nowrap font-display pt-1"> Kobol Music </span>

    <button class="align-middle focus:outline-none focus:shadow-outline duration-500 ease-in-out transform transition rounded-lg sm:hidden" @click="open = !open">

        <svg fill="currentColor" viewBox="0 0 20 20" class="dark:fill-neutral-100 w-8 h-8 hover:fill-orange-500 dark:hover:fill-orange-500 transition duration-1000">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1
             1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414
             10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
        </svg>

    </button>

</div>