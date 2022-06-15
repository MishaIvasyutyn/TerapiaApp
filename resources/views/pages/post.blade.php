@extends('layouts.app')
@section('title',$post->seo_title)
@section('content')
    <meta name="keywords" content="{{$post->meta_keywords}}">
    <meta name="description" content="{{$post->meta_description}}">
    <div class="main-container">
        <main>
            <!-- Page Banner -->
            <div class="page-banner container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="page-banner-content">
                        <h1 style="color: white;font-size: 40px !important;">{{$post->title}}</h1>
                    </div>
                    <div class="banner-content">
                        <ol class="breadcrumb">
                            @include('modules.back')
                            <li class="active">{{$post->title}}</li>
                        </ol>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Page Banner -->
            <div class="about-section container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <img style="display: block; margin-left: auto;width: 70%!important; margin-right: auto;"
                             src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                        <div class="about-content" style="padding: 15px">
                            <p>    {!! $post->body !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
        </main>
    </div>
    </div>

@endsection
