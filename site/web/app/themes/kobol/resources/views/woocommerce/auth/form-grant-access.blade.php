{{--
	Auth form grant access

	This template can be overridden by copying it to yourtheme/woocommerce/auth/form-grant-access.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see 		https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates\Auth
	@version 	4.3.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@extends('layouts.app')

@section('content')
  @php
    do_action('woocommerce_auth_page_header');
  @endphp

	<h1>
		@php
		/* translators: %s: app name */
		printf( esc_html__( '%s would like to connect to your store', 'woocommerce' ), esc_html( $app_name ) );
		@endphp
	</h1>

	@php 
	wc_print_notices();
	@endphp

	<p>
		@php
		/* Translators: %1$s App name, %2$s scope. */
		printf( esc_html__( 'This will give "%1$s" %2$s access which will allow it to:', 'woocommerce' ), '<strong>' . esc_html( $app_name ) . '</strong>', '<strong>' . esc_html( $scope ) . '</strong>' );
		@endphp
	</p>

	<ul class="wc-auth-permissions">
		@foreach ($permissions as $permission) 
			<li>{!! echo esc_html( $permission ); !!}</li>
		@endforeach
	</ul>

	<div class="wc-auth-logged-in-as">
		@php 
		echo get_avatar( $user->ID, 70 ); 
		@endphp
		<p>
			@php
			/* Translators: %s display name. */
			printf( esc_html__( 'Logged in as %s', 'woocommerce' ), esc_html( $user->display_name ) );
			@endphp
			<a href="@php echo esc_url( $logout_url ); @endphp" class="wc-auth-logout">{!! esc_html_e( 'Logout', 'woocommerce' ); !!}</a>
		</p>
	</div>

	<p class="wc-auth-actions">
		<a href="@php echo esc_url( $granted_url ); @endphp" class="button button-primary wc-auth-approve">{!! esc_html_e( 'Approve', 'woocommerce' ); !!}</a>
		<a href="@php echo esc_url( $return_url ); @endphp" class="button wc-auth-deny">{!! esc_html_e( 'Deny', 'woocommerce' ); !!}</a>
	</p>

	@php
    	do_action('woocommerce_auth_page_footer');
  	@endphp
@endsection
