<footer class="md:px-4 lg:px-6 xs:pt-4 lg:pt-8 items-center mx-auto"> 

  <div class="flex items-center mx-auto xs:px-14 px-0 xs:flex-col md:flex-row xs:gap-2 md:gap-4 xl:gap-8 xs:justify-items-center lg:justify-center text-base font-light"> 

    <div class="lg:h-36 lg:w-36 xs:hidden lg:block align-middle p-0 justify-start">
      @include('partials.footer.logo-lg')
    </div>     

    <div class="flex xs:flex-col md:flex-row justify-center">

      <div class="flex xs:flex-col md:flex-row pr-8 items-start">
        @include('partials.footer_links_navigation')
      </div>

      <div class="flex flex-col items-start">
        @include('partials.legals_navigation')   
      </div>

    </div>

  </div>            

    <hr class="xs:my-2 my-6 border-neutral-200 mx-auto dark:border-neutral-600"/>

    @include('partials.footer.newsletter-form')

    <hr class="xs:my-2 my-6 border-neutral-200 mx-auto dark:border-neutral-600"/>

    @include('partials.footer.social-copyright')  
    
</footer>