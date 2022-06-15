@extends('layouts.app')
@section('title','Відгуки')
@section('content')
    <style>
        #reviewimage {
            margin-bottom: 30px !important;
            max-width: 30% !important;
            height: auto;
            border-radius: 60px;
        }

        .login-clean {
            background: #f1f7fc;
            padding: 80px 0;
        }

        .login-clean form {
            max-width: 450px;
            width: 90% !important;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 55px;
            border-radius: 20px;
            color: #505e6c;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .login-clean .illustration {
            margin-bottom: -30px;
            text-align: center;
            font-size: 100px;
            color: #47caf4;
            margin-top: -40px;
        }

        .login-clean form .form-control {
            font-size: 15px;
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 8px;
            height: 42px;
        }

        .login-clean form .btn-primary {
            background: #06baf2;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none !important;
        }

        .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
            background: #0f67cf;
        }

        .login-clean form .btn-primary:active {
            transform: translateY(1px);
        }

        .login-clean form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-clean form .forgot:hover, .login-clean form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
        }

        input, button, select, optgroup, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.625rem 0.625rem;
            font-size: 0.875rem;
            line-height: 1.3;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.125rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #48CCFF;
            outline: 0;
            box-shadow: none;
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important;
        }

        textarea {
            padding: 0.15rem !important;
            border: 0;
            border-bottom: 1px solid #E0E0E0;
        }

        textarea:focus {
            border: 0 !important;
            border-bottom: 1px solid #48CCFF !important;
            outline: none !important;
            color: #48CCFF;
        }

        .field {
            display: flex;
            flex-flow: column-reverse;
            margin-bottom: 1em;
        }

        label, input, textarea {
            transition: all 0.2s !important;
        }

        textarea:placeholder-shown + label {
            cursor: text;
            max-width: 66.66%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            transform-origin: left bottom;
            transform: translate(0, 1.5rem) scale(1);
        }

        textarea:not(:placeholder-shown) + label, textarea:focus + label {
            transform: translate(0, 0) scale(1);
            cursor: pointer;
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

    </style>
    <div class="main-container">
        <main>
            <div class="page-banner container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="page-banner-content">
                        <h3>Відгуки</h3>
                    </div>
                    <div class="banner-content">
                        <ol class="breadcrumb">
                            @include('modules.back')
                            <li class="active">Відгуки</li>
                        </ol>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Page Banner -->

            @if(session()->has('status'))
                <style>
                    .footer-main {
                        margin-top: 0px !important;
                    }
                </style>
                <div class="login-clean" style="margin-top: 40px">
                    @livewire('pages.review-page')
                </div>
            @else
                <style>
                    .footer-main {
                        margin-top: 60px !important;
                    }
                </style>
                <div class="other-services-block" style="border: 1px solid #e3e3e3;
    border-radius: 25px;
   margin-top: 60px;
    padding: 32px;
    width: 100%;
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transition: all 1s ease 0s;
    -moz-transition: all 1s ease 0s;
    -o-transition: all 1s ease 0s;
    transition: all 1s ease 0s;">
                    <h3 style="text-align: center; color: #808586;font-weight: bold;font-size: 28px;margin-bottom: 20px">
                        Щоб залишити відгук,
                        будь ласка, увійдіть!</h3>

                    <div class="content-center" style=" display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;">
                        <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i
                                class="fa fa-facebook"></i> Facebook</a>
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger" style="margin-left: 30px"><i
                                class="fa fa-google"></i>
                            Google</a>
                    </div>
                </div>

            @endif
        </main>
    </div>
@endsection
