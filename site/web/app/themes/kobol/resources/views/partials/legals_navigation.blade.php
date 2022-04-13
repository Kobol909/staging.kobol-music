@if($legals_navigation)

    <h3 class="xs:pl-8 pl-4 mb-4 uppercase font-normal text-lg">Links:</h3>
    
    @foreach ($legals_navigation as $item)
    
    <ul class="">
        
        <li class="xs:pl-8 pl-4 mb-2">
            
            <a target="_blank" class="dark:text-neutral-100 text-neutral-800 dark:hover:text-orange-500 hover:text-orange-500 focus:outline-none focus:shadow-outline {{ $item->classes ?? '' }} {{ $item->active ? 'text-tcol text-orange-500 dark:active:text-orange-500' : '' }}" href="{{ $item->url }}">
                {{ $item->label }}
            </a>
            
        </li>
        
    </ul>
    
    @endforeach
    
@endif