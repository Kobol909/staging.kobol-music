@if($footer_links_navigation)

    @foreach ($footer_links_navigation as $item)

    <ul class="pl-4 pr-16">

        <li class="pl-4 mb-4 uppercase font-normal text-lg">

            <a target="_blank" class="dark:text-neutral-100 text-neutral-800 dark:hover:text-orange-500 hover:text-orange-500 focus:outline-none focus:shadow-outline {{ $item->classes ?? '' }} {{ $item->active ? 'text-tcol text-orange-500 dark:active:text-orange-500' : '' }}" href="{{ $item->url }}">
                {{ $item->label }}
            </a>

        </li>

    </ul>

    @endforeach

@endif