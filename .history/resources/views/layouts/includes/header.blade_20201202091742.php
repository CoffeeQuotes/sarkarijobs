<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="{{setting('site.description')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        @-webkit-keyframes
        badbounce {  0%, 100% {
         -webkit-transform: translateY(0px);
        }
         10% {
         -webkit-transform: translateY(6px);
        }
         30% {
         -webkit-transform: translateY(-4px);
        }
         70% {
         -webkit-transform: translateY(3px);
        }
         90% {
         -webkit-transform: translateY(-2px);
        }
        }
        @-moz-keyframes
        badbounce {  0%, 100% {
         -moz-transform: translateY(0px);
        }
         10% {
         -moz-transform: translateY(6px);
        }
         30% {
         -moz-transform: translateY(-4px);
        }
         70% {
         -moz-transform: translateY(3px);
        }
         90% {
         -moz-transform: translateY(-2px);
        }
        }
        @keyframes
        badbounce {  0%, 100% {
         -webkit-transform: translateY(0px);
         -moz-transform: translateY(0px);
         -ms-transform: translateY(0px);
         -o-transform: translateY(0px);
         transform: translateY(0px);
        }
         10% {
         -webkit-transform: translateY(6px);
         -moz-transform: translateY(6px);
         -ms-transform: translateY(6px);
         -o-transform: translateY(6px);
         transform: translateY(6px);
        }
         30% {
         -webkit-transform: translateY(-4px);
         -moz-transform: translateY(-4px);
         -ms-transform: translateY(-4px);
         -o-transform: translateY(-4px);
         transform: translateY(-4px);
        }
         70% {
         -webkit-transform: translateY(3px);
         -moz-transform: translateY(3px);
         -ms-transform: translateY(3px);
         -o-transform: translateY(3px);
         transform: translateY(3px);
        }
         90% {
         -webkit-transform: translateY(-2px);
         -moz-transform: translateY(-2px);
         -ms-transform: translateY(-2px);
         -o-transform: translateY(-2px);
         transform: translateY(-2px);
        }
        }

        .ss_animate {
          -webkit-animation: badbounce 1s linear;
          -moz-animation: badbounce 1s linear;
          animation: badbounce 1s linear;
        }
        #ss_menu {
            bottom: 30px;
            width: 60px;
            height: 60px;
            color: #fff;
            position: fixed;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
            right: 30px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
          }

          #ss_menu > .menu {
            display: block;
            position: absolute;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
            color: #fff;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
          }

          #ss_menu > .menu .share {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
          }

          #ss_menu > .menu .share .circle {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
            position: absolute;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
            top: 50%;
            margin-top: -6px;
            left: 12px;
            opacity: 1;
          }

          #ss_menu > .menu .share .circle:after, #ss_menu > .menu .share .circle:before {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
            content: '';
            opacity: 1;
            display: block;
            position: absolute;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
          }

          #ss_menu > .menu .share .circle:after {
            left: 20.78461px;
            top: 12.0px;
          }

          #ss_menu > .menu .share .circle:before {
            left: 20.78461px;
            top: -12.0px;
          }

          #ss_menu > .menu .share .bar {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
            width: 24px;
            height: 3px;
            background: #fff;
            position: absolute;
            top: 50%;
            margin-top: -1.5px;
            left: 18px;
            -webkit-transform-origin: 0% 50%;
            -moz-transform-origin: 0% 50%;
            -ms-transform-origin: 0% 50%;
            -o-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -ms-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg);
          }

          #ss_menu > .menu .share .bar:before {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
            content: '';
            width: 24px;
            height: 3px;
            background: #fff;
            position: absolute;
            left: 0px;
            -webkit-transform-origin: 0% 50%;
            -moz-transform-origin: 0% 50%;
            -ms-transform-origin: 0% 50%;
            -o-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            transform: rotate(-60deg);
          }

          #ss_menu > .menu .share.close .circle { opacity: 0; }

          #ss_menu > .menu .share.close .bar {
            top: 50%;
            margin-top: -1.5px;
            left: 50%;
            margin-left: -12px;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -ms-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg);
          }

          #ss_menu > .menu .share.close .bar:before {
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-transform: rotate(-450deg);
            -moz-transform: rotate(-450deg);
            -ms-transform: rotate(-450deg);
            -o-transform: rotate(-450deg);
            transform: rotate(-450deg);
          }

          #ss_menu > .menu.ss_active {
            background: #00796B;
            -webkit-transform: scale(0.7);
            -moz-transform: scale(0.7);
            -ms-transform: scale(0.7);
            -o-transform: scale(0.7);
            transform: scale(0.7);
          }

          #ss_menu > div {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            position: absolute;
            width: 60px;
            height: 60px;
            font-size: 30px;
            text-align: center;
            background: #00796B;
            border-radius: 50%;
            display: table;
          }

          #ss_menu > div i {
            display: table-cell;
            vertical-align: middle;
          }

          #ss_menu > div:hover {
            background: #009688;
            cursor: pointer;
          }

          #ss_menu div:nth-child(1) {
            top: 0px;
            left: -160px;
          }

          #ss_menu div:nth-child(2) {
            top: -80.0px;
            left: -138.56406px;
          }

          #ss_menu div:nth-child(3) {
            top: -138.56406px;
            left: -80.0px;
          }

          #ss_menu div:nth-child(4) {
            top: -160px;
            left: 0.0px;
          }

    </head>
    <body class="">
        @include('layouts.includes.partials.navbar')


