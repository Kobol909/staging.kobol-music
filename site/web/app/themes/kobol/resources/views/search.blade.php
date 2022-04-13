{{-- Displays the search results --}}
@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  @if (! have_posts())

    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}

  @endif

  @include('partials.custom_search_form')

  @while(have_posts()) @php(the_post())

    @include('partials.content-search')

  @endwhile

  {!! get_the_posts_navigation() !!}

@endsection