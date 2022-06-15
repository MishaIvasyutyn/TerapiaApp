<!DOCTYPE html>

<meta charset="utf-8">

<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="">
<meta name="author" content="">
@livewireStyles
<title>@yield('title')</title>
<style>
    /* width */
    ::-webkit-scrollbar {
        width: 14px;
    }

    /* Track */



    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #22bdd7;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #0c7e9f;
    }
    .typewrite {
        font-size: 90px;
        font-family: Concert;
        text-shadow: 2px 2px 4px #000000;
    }

    .image2 {
        display: none;
    }

    #docimage {
        max-width: fit-content;
    }

    @font-face {
        font-family: Concert;
        src: url("assets/fonts/Pacifico-Regular.ttf");
    }

    .containerrr {
        position: relative;
        text-align: center;
        color: white;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .owl-carousel .owl-stage {
        margin: auto;
        position: relative;
        -ms-touch-action: pan-Y;
    }

    .logo {
        width: 58px !important;
        height: 57px !important;
    }

    #logoo_p {
        font-family: unset;
        text-transform: capitalize;
        margin: -30px 50px;
        font-size: 24px;
        font-weight: bold;
    }

    #logo_p {
        font-family: unset;
        text-transform: capitalize;
        margin: -30px 50px;
        font-size: 24px;
        font-weight: bold;
    }

    @media only screen and (min-width: 991px) {
        .other-services .other-services-block {
            margin-top: 110px !important;
        }

    }

    @media (min-width: 991px) {
        .team-content {
            margin-left: 140px;
        }

    }

    @media only screen and (max-width: 580px) {
        .image1 {
            display: none;
        }

        .image2 {
            height: 350px;
            display: block;
        }

        .typewrite {
            font-size: 50px !important;
            font-family: Concert;
            text-shadow: 2px 2px 4px #000000;
        }


    }

    @media (max-width: 991px) {
        #docimage {
            max-width: -webkit-fill-available;
        }

        #logo_p {
            position: absolute !important;
            font-family: unset;
            text-transform: capitalize;
            margin: -30px 50px;
            font-size: 18px !important;
            font-weight: bold;
        }
    }
</style>
<!-- Standard Favicon -->
<link rel="icon" type="image/x-icon" href="assets/images/unnamsed.ico"/>
<link href="assets/fontawesome-free-5.13.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->


<!-- For iPhone 4 Retina display: -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-114x114-precomposed.png">

<!-- For iPad: -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-72x72-precomposed.png.html">

<!-- For iPhone: -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57x57-precomposed.png">

<!-- Library - Google Font Familys -->
<link
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPlayfair+Display:400,400i,700,700i,900,900i%7CPoppins:300,400,500,600,700%7CQuattrocento:400,700%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
    rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">

<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.min.css">

<!-- RS5.0 Layers and Navigation Styles -->
<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

<!-- Library - Bootstrap v3.3.5 -->
<link href="assets/css/lib.css" rel="stylesheet">

<link href="assets/js/slick/slick.css" rel="stylesheet">
<link href="assets/js/slick/slick-theme.css" rel="stylesheet">


<!-- Custom - Common CSS -->
<link href="assets/css/plugins.css" rel="stylesheet">
<link href="assets/css/elements.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link id="color" href="assets/css/color-schemes/default.css" rel="stylesheet"/>

<!-- Custom - Theme CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
<body>
@include('modules.navhome')
@yield('content')

@hasSection('footer')
    @yield('footer')
@else
    @include('modules.footer')
@endif
<!-- JQuery v1.12.4 -->
<script src="assets/js/jquery.min.js"></script>

<!-- Library - Js -->
<script src="assets/js/lib.js"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min_rev=5.0.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min_rev=5.0.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="assets/js/slick/slick.min.js"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

<!-- Library - Theme JS -->
<script src="assets/js/functions.js"></script>
<script>
    var TxtType = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function () {
            that.tick();
        }, delta);
    };

    window.onload = function () {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        setInterval(function () {
            window.livewire.emit('alive');
        }, 1800000);
    });
</script>
</body>
</html>
