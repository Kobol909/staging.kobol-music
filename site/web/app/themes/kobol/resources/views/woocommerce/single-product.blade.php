{{--
  The Template for displaying all single products

  This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.

  HOWEVER, on occasion WooCommerce will need to update template files and you
  (the theme developer) will need to copy the new files to your theme to
  maintain compatibility. We try to do this as little as possible, but it does
  happen. When this occurs the version of the template file will be bumped and
  the readme will list any important changes.

  @see         https://docs.woocommerce.com/document/template-structure/
  @package     WooCommerce\Templates
  @version     1.6.4
  --}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@extends('layouts.app')

@section('content')
  @php
    do_action('get_header', 'shop');
    do_action('woocommerce_before_main_content');
    @endphp

  @while(have_posts())
    @php
      the_post();
    @endphp

    {{-- Redirect to custom pages based on product IDs --}}
      @if(is_single('52'))
        @include('partials.custom-pages.custom-product-pages.kbl001_ableton-live-mastering-rack')

      @elseif(is_single('53'))
        @include('partials.custom-pages.custom-product-pages.kbl002_ableton-live-default-presets')

      @elseif(is_single('54'))
        @include('partials.custom-pages.custom-product-pages.kbl004_amen-break')

      @elseif(is_single('55'))
        @include('partials.custom-pages.custom-product-pages.kbl003_silver-screen-template')

      @elseif(is_single('56'))
        @include('partials.custom-pages.custom-product-pages.kbl005_muon')

      @elseif(is_single('57'))
        @include('partials.custom-pages.custom-product-pages.kbl006_ableton-live-audio-effects')

      @elseif(is_single('59'))
        @include('partials.custom-pages.custom-product-pages.kbl007_ableton-live-effect-racks-vol1')

      @elseif(is_single('60'))
        @include('partials.custom-pages.custom-product-pages.kbl008_ableton-live-effect-racks-vol2')

      @elseif(is_single('61'))
        @include('partials.custom-pages.custom-product-pages.kbl009_exodus')

      @elseif(is_single('62'))
        @include('partials.custom-pages.custom-product-pages.kbl010_titan')

      @elseif(is_single('63'))
        @include('partials.custom-pages.custom-product-pages.kbl011_deneb')

      @elseif(is_single('64'))
        @include('partials.custom-pages.custom-product-pages.kbl012_solera')

      @elseif(is_single('67'))
        @include('partials.custom-pages.custom-product-pages.kbl013_dawn')

      @elseif(is_single('68'))
        @include('partials.custom-pages.custom-product-pages.kbl014_quark')

      @else
        @php
          wc_get_template_part('content', 'single-product');
        @endphp
      @endif

  @endwhile
  
  {{-- @while(have_posts())
    @php
      the_post();
      @endphp
      @if(is_single('63'))
        @include('partials.custom-pages.custom-product-pages.kbl011_deneb')
      @else
        @php
          wc_get_template_part('content', 'single-product')
        @endphp
      @endif
  @endwhile --}}

  @php
    do_action('woocommerce_after_main_content');
    do_action('get_sidebar', 'shop');
    do_action('get_footer', 'shop');
    do_action('get_footer_links', 'shop');
  @endphp
@endsection 
