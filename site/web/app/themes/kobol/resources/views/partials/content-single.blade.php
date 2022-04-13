<article class="my-2 mx-auto xs:full xs:w-5/6 sm:w-4/5 p-5" @php(post_class())>

  <header>
    <h1 class="entry-title text-center xs:text-2xl lg:text-3xl tracking-wide font-semibold my-8">
      {!! $title !!}
    </h1>
  </header>

  <div class="entry-content">

    @php(the_content())

  </div>

  {{-- @include('partials.entry-meta') --}}

  <footer class="mt-8">

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

  </footer>

  {{-- @php(comments_template()) --}}

</article>
