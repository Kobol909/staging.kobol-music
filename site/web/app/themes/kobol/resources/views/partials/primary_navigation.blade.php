@if ($primary_navigation)

    @foreach ($primary_navigation as $item)

        @if($item->children)

            <ul class="block xs:float-none xs:min-h-full sm:float md:float-left md:mt-0 mb-0 md:mx-2 relative align-middle xs:pt-1 outline-none xs:ml-4 xs:mr-auto sm:mx-auto">

                <li @click="open = !open" @keydown.escape="open = false" class="px-2 align-middle active:border-orange-500 focus:border-orange-500 dark:active:border-orange-500 dropdown-menu hover:text-tcol sm:inline-flex items-center group sm:relative xs:whitespace-nowrap xs:py-1" x-data="{ open: true, timeout: null }" x-on:mouseover="open = true; clearTimeout(timeout)">

                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" @click.away="open =!open" class="flex flex-row">

                        <span class="font-normal align-middle sm:tracking-normal md:tracking-wide lg:tracking-widest justify-center text-base dark:text-neutral-100 text-neutral-800 uppercase focus:outline-none focus:shadow-outline  hover:text-orange-500 dark:active:text-orange-500 dark:hover:text-orange-500 {{ $item->classes ?? '' }} {{ $item->active ? 'text-tcol border-orange-500 text-center pl-2' : '' }}">

                            {{ $item->label }}

                            <svg viewBox="0 0 24 12" :class="{'rotate-180': open, 'rotate-0': !open}" class="xs:justify-end inline-flex dark:text-neutral-100 text-neutral-800 transition-transform duration-1000 transform w-4" x-cloak>
                                <path d="M12 9.67a.68.68 0 01-.48-.19l-6-6a.68.68 0 011-1L12 8l5.52-5.52a.68.68 0 011 1l-6 6a.68.68 0 01-.52.19z" fill="currentColor"/>
                            </svg>

                        </span>

                    </button>

                    <div id="dropdown" x-show="open" class="xs:relative sm:absolute group-hover:block dropdown-item hidden h-2 xs:py-1 sm:-bottom-2 sm:right-0 xs:w-full sm:w-auto sm:origin-top-right sm:shadow-md shadow-neutral-100 dark:shadow-neutral-800 z-10" style="display: none;">

                        <ul class="xs:relative xs:float-left xs:mx-auto xs:w-screen sm:w-full bg-clip-padding dark:bg-neutral-800 bg-[#f5f5f5] xs:pr-20 xs:pl-4 sm:pr-0 sm:pl-0 sm:px-6 rounded sm:shadow-lg py-2" aria-labelledby="dropdownDefault">

                            @foreach ($item->children as $child)

                                <li class="border-b align-middle justify-center items-center py-3 xs:px-0 sm:px-6 md:mt-0 sm:relative xs:whitespace-nowrap font-normal w-full">

                                    <a class="align-middle text-pcol hover:text-scol w-full tracking-widest text-sm font-light dark:text-neutral-100 text-neutral-800 hover:text-orange-500 dark:active:text-orange-500 dark:hover:text-orange-500 focus:outline-none focus:shadow-outline {{ $item->classes ?? '' }} {{ $child->active ? 'text-scol text-orange-500 border-orange-500 ' : '' }}" href="{{ $child->url }}">

                                        {{ $child->label }}

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </li>

            </ul>


        @else

            <ul class="block xs:float-none xs:min-h-full sm:float md:float-left md:mt-0 mb-0 md:mx-2 relative align-middle xs:pt-1 outline-none xs:ml-4 xs:mr-auto sm:mx-auto">

                <li class="align-middle dark:hover:border-orange-500 hover:border-orange-500 dark:active:border-orange-500 hover:text-tcol inline-flex items-center group px-2 sm:relative xs:whitespace-nowrap xs:py-1">

                    <a class=" align-middle text-pcol hover:text-scol tracking-widest uppercase text-base font-normal dark:text-neutral-100 text-neutral-800 dark:hover:text-orange-500 hover:text-orange-500 focus:outline-none focus:shadow-outline {{ $item->classes ?? '' }} {{ $item->active ? 'text-tcol border-b border-orange-500' : '' }}" href="{{ $item->url }}">

                        {{ $item->label }}

                    </a>

                </li>

            </ul>

        @endif

    @endforeach

@endif
