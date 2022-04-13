{{--
	Edit account form

	This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.

	HOWEVER, on occasion WooCommerce will need to update template files and you
	(the theme developer) will need to copy the new files to your theme to
	maintain compatibility. We try to do this as little as possible, but it does
	happen. When this occurs the version of the template file will be bumped and
	the readme will list any important changes.

	@see 		https://docs.woocommerce.com/document/template-structure/
	@package 	WooCommerce\Templates
	@version 	3.5.0
	--}}

@php
defined( 'ABSPATH' ) || exit;
@endphp

@extends('layouts.app')

@section('content')
  	@php
  		do_action( 'woocommerce_before_edit_account_form' ); ?>
	@endphp

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" @php do_action( 'woocommerce_edit_account_form_tag' ); @endphp >

	@php 
	do_action( 'woocommerce_edit_account_form_start' );
	@endphp

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="account_first_name">{!! esc_html_e( 'First name', 'woocommerce' ); !!}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="@php echo esc_attr( $user->first_name ); @endphp" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="account_last_name">{!! esc_html_e( 'Last name', 'woocommerce' ); !!}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="@php echo esc_attr( $user->last_name ); @endphp" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_display_name">{!! esc_html_e( 'Display name', 'woocommerce' ); !!}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="@php echo esc_attr( $user->display_name ); @endphp" /> <span><em>{!! esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); !!}</em></span>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email">{!! esc_html_e( 'Email address', 'woocommerce' ); !!}&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="@php echo esc_attr( $user->user_email ); @endphp" />
	</p>

	<fieldset>
		<legend>{!! esc_html_e( 'Password change', 'woocommerce' ); !!}</legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current">{!! esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); !!}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1">{!! esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); !!}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2">{!! esc_html_e( 'Confirm new password', 'woocommerce' ); !!}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
		</p>
	</fieldset>
	<div class="clear"></div>

	@php 
	do_action( 'woocommerce_edit_account_form' );
	@endphp

	<p>
		@php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); @endphp
		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="@php esc_attr_e( 'Save changes', 'woocommerce' ); @endphp">{!! esc_html_e( 'Save changes', 'woocommerce' ); !!}</button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	@php
	do_action( 'woocommerce_edit_account_form_end' );
	@endphp
</form>

@php
do_action( 'woocommerce_after_edit_account_form' ); 
@endphp
