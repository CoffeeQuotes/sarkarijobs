<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="@yield('keywords', setting('site.meta_keywords'))">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		<!-- Provide a short description of the page. -->
		<meta name="description" content="@yield('description', setting('site.description'))">
		<!-- This meta tag tells Google not to show the sitelinks search box. -->
		<meta name="google" content="nositelinkssearchbox" />
		<meta name="rating" content="general" />
		<!-- Control the behavior of search engine crawling and indexing. 
 		The robots meta tag applies to all search engines, while the "googlebot" meta tag is specific to Google. -->
		<meta name="robots" content="index, follow" />
		<meta name="http-equiv" content="X-Robots-Tag : noindex, follow" />
		<meta name="googlebot" content="index, follow" />	
		<!-- Used for verifying ownership of a site. -->
		<meta name="verify" content=""/>

		<!-- Open Graph Meta Tags -->
		<!-- Set the canonical URL for the page you are sharing. -->
		<meta property="og:url" content="http://www.saarkari.com/">
		<!-- The title to accompany the URL. -->
		<meta property="og:title" content="Saarkari Dot Com"/>
		<!-- Provides Facebook the name that you would like your website to be recognized by. -->
		<meta property="og:site_name" content="Saarkari">
		<!-- Provides Facebook the type of website that you would like your website to be categorized by. -->
		<meta property="og:type" content="website">
		<!-- Defines the language, American English is the default. -->
		<meta property="og:locale" content="en-IN">
		<!-- Directs Facebook to use the specified image when the page is shared. -->
		<meta property="og:image" content="{{ url('/') }}/storage/{{setting('site.logo')}}">
		<!-- Similar to the meta description tag in HTML. This description is shown below the link title on Facebook. -->
		<meta property="og:description" content="@yield('description', setting('site.description'))"/>

		<!-- Twitter Card data -->
		<!-- The type of card to be created: summary, photo, or video -->
		<meta name="twitter:card" content="summary" />
		<!-- Title of the Twitter Card -->
		<meta name="twitter:title" content="@yield('page_title', setting('site.title'))" />
		<!-- Description of content -->
		<meta name="twitter:description" content="@yield('description', setting('site.description'))" />
		<!-- URL of image to use in the card. Used with summary, summary_large_image, player cards -->
		<meta name="twitter:image" content="{{ url('/') }}/storage/{{setting('site.logo')}}" />
		
		
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page_title', setting('site.title'))</title>
        <link rel="icon" href="{{asset("app-assets/img/core-img/favicon.ico")}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet">
		@stack('head-script')
    </head>
    <body>
        @include('layouts.includes.partials.navbar')
