<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main mx-auto relative !text-center !bg-[#f5f5f5] text-neutral-800 dark:!bg-neutral-800 dark:text-neutral-100 xs:px-3 px-2">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')

@stack('scripts')
{{-- 
    BG White custom - #f5f5f5

    XFER SERUM COLORS
    #444444 #8f8f8f #aaaaaa #ba81e8 #34dcf3 #66be45 #8dcf8a #d6d000 #eeff70 #ffb700 #ec5654

    ABLETON LIVE COLORS
    #3c3c3c #7b7b7B #a9a9a9 #d0d0d0 #e4dce1 #fff 

    #a595b5 #cdbbe4 #91a7ff #bf9fbe #cc2e6e 
    #bc7195 #e454a0 #ae98e5 #b676c6 #d86ce4 
    #a34cad #624bad #886ce4 #ff39d4 #ff3636 
    #af3433 #e2675a #ffa274 #c6928b #ff94a6 
    #f56c03 #fea528 #cb9926 #fff034 #a95131 
    #724f41 #98826a #99724b #b78256 #d3aD71 
    #bfba68 #bad074 #d1e398 #f7f47c #ecffae 
    #dbc200 #84961f #a6be00 #86ff67 #bffc00 
    #1bff2E #3dc302 #7daf4d #539f31 #9ab3c4
    #85a5c2 #cdf1f8 #b9c1e3 #8393cb #8bc4ff 
    #0da4ee #007dc0 #246384 #5480e4 #1a2f96 
    #2f52a2 #0d9c8e #88c2ba #9bc48d #00bfaf 
    #24ffa8 #5cffe8 #19e9ff #d4fde1
    --}}
