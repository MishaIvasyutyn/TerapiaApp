<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<div class="boxed-container">
    <!-- Loader -->
    <!--div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div--><!-- Loader /- -->
    <header class="header_s header_default">
        <!-- Container -->
        <div class="container">
            <!-- Top Header -->
            <div class="default-top row">
                <div class="logo-block">
                    <a class="navbar-brand mobile-hide" href="{{route('home')}}"><i class="fas fa-hand-holding-medical"></i>
                        <p id="logoo_p">Мануальна терапія</p></a>
                </div>
                <a href="tel:380666488763" title="+38(066)-64-88-763" class="phone-call"><i
                        class="fa fa-phone-square"></i>+38(066)-64-88-763</a>
            </div><!-- Top Header /- -->
        </div><!-- Container /- -->
        <!-- Ownavigation -->
        <nav class="navbar ownavigation nav_absolute">
            <!-- Container -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand desktop-hide" href="{{route('home')}}"><i class="fas fa-hand-holding-medical"></i>
                        <p id="logo_p">Мануальна терапія</p></a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav menubar">
                        <li @if(\Request::route()->getName()=="home") class="active"@endif> <a title="Home" href="{{route('home')}}">Головна</a></li>
                        <li @if(\Request::route()->getName()=="about") class="active"@endif><a title="About" href="{{route('about')}}" }>Про нас</a></li>
                        <li  class="@if(\Request::route()->getName()=="post") active @endif dropdown">
                            <a href="" class="dropdown-toggle" title="Blog" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">ЛІКУВАННЯ</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                @foreach(\App\Post::all()->where('status','PUBLISHED') as $post)
                                    <li><a href="{{route('post',$post->slug)}}" title="Blog Post">{{$post->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li @if(\Request::route()->getName()=="contact") class="active"@endif><a title="About" href="{{route('contact')}}" }>ЗВОРОТНІЙ ЗВ’ЯЗОК</a></li>
                        <li @if(\Request::route()->getName()=="reviews") class="active"@endif><a title="About" href="{{route('reviews')}}">Відуки</a></li>
                    </ul>
                </div>
            </div><!-- Container /- -->
        </nav><!-- Ownavigation /- -->
    </header>
</div>
