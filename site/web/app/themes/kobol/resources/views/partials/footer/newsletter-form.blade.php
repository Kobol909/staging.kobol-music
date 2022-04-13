{{-- 
  Create a controller then move the file to /forms/newsletter.blade.php

  Need to implement a subscribe button on the navbar that auto-scroll to the newsletter form azt the bottom on click.
  Use an href="#newsletter-form" to scroll to the form, simply put an id="neswletter-form".
  Already implemented smooth scrolling behaviour in index.php.

  Implement mailchimp API to subscribe users to newsletter.
  https://laracasts.com/series/laravel-8-from-scratch/episodes/58
  https://laracasts.com/series/laravel-8-from-scratch/episodes/59
  --}}
<div class="px-3 pt-3 flex flex-col md:lg:xl:2xl:4xl:flex-row justify-center items-center align-middle">
  
  <div class="inline-block" x-data="{ loading: false, showAlertMessage: false, showSuccessMessage: false, email: '', errors: [] }" x-cloak>

    {{-- Alert box --}}
    <div x-show="showAlertMessage" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
      <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-4" role="alert">
        <p>Please enter a valid email address</p></p>
      </div>
    </div> 
       
    {{-- Success message --}}
    <div x-show="showSuccessMessage" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
			<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="success">
				<p>Thank you for subscribing!</p>
			</div>
		</div>

    {{-- Form --}}
		<form class="flex xs:flex-col md:flex-row items-center align-middle" method="POST" x-on:submit.prevent="loading=true; 
			if (email == '') {
				errors = {
					email: ['The email field is required']
				}
				loading = false;
				showAlertMessage = false;
				return;
			}
			const expression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      const validEmail = expression.test(String(email).toLowerCase())
			if (email != '' && ! validEmail) {
				errors = {
					email: ['Please enter a valid email address']
				}
				loading = false;
				showAlertMessage = true;
				return;
			}
			// Replace this with your own API
			fetch('#', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify({
					subscriber: {
						email: email
					}
				})
			}).then(response => response.json())
				.then(data => {
					loading = false;
					showAlertMessage = false;
					showSuccessMessage = true;
					email = '';
				});">

      {{-- <div class="md:mb-6 font-bold text-xl tracking-wide">
              <h3>Sign up for our newsletter</h3>
            </div> 
        --}}
      {{-- Input --}}
      <div class="md:mb-6 relative">
          <input id="email" x-model="email" x-on:keydown="delete errors['email']" x-bind:class="{ 'border-red-500 text-red-500': errors['email'] }" class="xs:rounded-t sm:rounded-tr-none sm:rounded-l text-base font-normal bg-white focus:shadow-outline border py-2 px-4 xs:pr-4 sm:pr-24 block xs:w-[200px] md:w-[300px] xl:w-[450px] appearance-none leading-normal border-solid border-neutral-300 transition ease-in-out m-0 focus:text-neutral-700 focus:bg-neutral-50 focus:border-orange-400 focus:outline-none" type="text" placeholder="gary@host.com">       

          <template x-if="errors['email']">
            <span>
              <svg class="w-6 h-6 absolute text-red-600 fill-current" style="top: 10px; right: 12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M13,17h-2v-2h2V17z M13,13h-2V7h2V13z" />
              </svg>
              <span class="text-red-600 mt-2 text-sm block" x-text="errors['email']"></span>
            </span>
          </template>
      </div>
      
      {{-- Button --}}
      <div class="mb-6 relative">
        <button type="submit" class="hover:transition hover:ease-in-out hover:duration-100 inline-block xs:rounded-b sm:rounded-bl-none sm:rounded-r xs:w-[200px] sm:w-[120px] px-8 pt-[13px] pb-[13px] mx-auto bg-neutral-600 text-neutral-50 hover:text-orange-500 font-medium text-xs eading-tight uppercase shadow-sm hover:bg-neutral-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0" x-bind:disabled="loading == true">
          <template x-if="loading == false">
            <div>Subscribe</div>
          </template>
          <template x-if="loading == true">
            <div>
              Subscribing...
            </div>
          </template>
        </button>
      </div>

    </form>

  </div>

</div>