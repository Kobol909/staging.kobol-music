{{-- 
    Template Name: Contact Us
    --}}
@extends('layouts.app')

@section('content')

@include('partials.page-header')

<form class="container xs:w-5/6 sm:w-4/5 xl:w-3/5 mx-auto mt-8" action="@php get_permalink(); @endphp" id="contactForm" method="post">

    <input type="hidden" name="contact_form">

    <div class="form-section relative z-0 mb-8 w-full group h-8">

        <input type="text" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-neutral-900 bg-transparent border-0 border-b-2 border-neutral-300 appearance-none dark:text-neutral-50 dark:border-neutral-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" required />

        <label for="floating_email" class="absolute left-0 text-sm text-neutral-500 dark:text-neutral-400 duration-300 transform -translate-y-8 scale-75 top-6 -z-10 origin-[0] peer-focus:left-0 peer-focus:top-4 peer-focus:text-neutral-600 peer-focus:dark:text-neutral-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Email address</label>

    </div>

    <div class="form-section grid xl:grid-cols-2 xl:gap-6">

        <div class="relative z-0 mb-8 w-full group h-8">

            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-neutral-900 bg-transparent border-0 border-b-2 border-neutral-300 appearance-none dark:text-neutral-50 dark:border-neutral-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" required />

            <label for="floating_first_name" class="absolute left-0 text-sm text-neutral-500 dark:text-neutral-400 duration-300 transform -translate-y-8 scale-75 top-6 -z-10 origin-[0] peer-focus:left-0 peer-focus:top-4 peer-focus:text-neutral-600 peer-focus:dark:text-neutral-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">First name</label>

        </div>

        <div class="relative z-0 mb-8 w-full group h-8">

            <input type="text" name="floating_last_name" id="submit" class="block py-2.5 px-0 w-full text-sm text-neutral-900 bg-transparent border-0 border-b-2 border-neutral-300 appearance-none dark:text-neutral-50 dark:border-neutral-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" required />

            <label for="floating_last_name" class="absolute left-0 text-sm text-neutral-500 dark:text-neutral-400 duration-300 transform -translate-y-8 scale-75 top-6 -z-10 origin-[0] peer-focus:left-0 peer-focus:top-4 peer-focus:text-neutral-600 peer-focus:dark:text-neutral-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Last name</label>

        </div>

    </div>

    <div class="form-section relative z-0 w-full group flex flex-col text-left">

        <span>
            Leave us a message:
        </span> 

        
        <textarea class="min-h-[200px] text-neutral-800 dark:text-neutral-800" name="message" id="message" ></textarea>
    </div>

    <div class="form-section relative z-0 w-full group flex flex-col">

        <button type="submit" class="mb-16 text-neutral-50 hover:text-orange-500 bg-neutral-600 hover:bg-neutral-700 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-b-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center relative">Submit</button>
    
    </div>

</form>

@endsection