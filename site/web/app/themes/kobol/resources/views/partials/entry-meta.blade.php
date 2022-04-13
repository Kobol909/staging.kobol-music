<div class="my-1 mx-auto justify-center items-center relative">

  <time class="updated text-sm font-base tracking-normal" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>  

  <p class="byline author vcard text-normal font-normal tracking-normal absolute">

    <span>{{ __('By', 'sage') }}</span>

    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>

  </p>
  
</div>