@extends('layouts.app')
@section('title','Зворотній зв\'язок')
@section('content')
    <div class="main-container">
        <main>
            <!-- Page Banner -->
            <div class="page-banner container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="page-banner-content">
                        <h3>ЗВОРОТНІЙ ЗВ’ЯЗОК</h3>
                    </div>
                    <div class="banner-content">
                        <ol class="breadcrumb">
                            @include('modules.back')
                            <li class="active">ЗВОРОТНІЙ ЗВ’ЯЗОК</li>
                        </ol>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Page Banner -->

            <!-- Contact Us -->
            <div class="contact-us container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="contact-header">
                        <h5>Зв'язатися з нами</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard .</p>
                    </div>
                    <div class="contact-form">
                        <h5 style="text-align: center;">Зв'язатися з нами</h5>
                       @livewire('pages.contuct-page')
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="contact-call-box">
                                <p><i class="fa fa-phone"></i><a href="tel:386489550686" title="+386 489 550 686">+38(066)-64-88-763</a>
                                </p>
                            </div>
                            <div class="contact-call-box">
                                <p><i class="fa fa-envelope"></i><a href="mailto:yourdomain@name.com"
                                                                    title="yourdomain@name.com">chiropractica@bk.ru</a>
                                </p>
                            </div>
                            <div class="contact-call-box">
                                <p><i class="fa fa-map-marker"></i><a href="https://www.google.com.ua/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9B%D0%B5%D0%BD%D0%BA%D0%B0%D0%B2%D1%81%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE,+17,+%D0%86%D0%B2%D0%B0%D0%BD%D0%BE-%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA,+%D0%86%D0%B2%D0%B0%D0%BD%D0%BE-%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+76000/@48.9199905,24.6888852,17z/data=!3m1!4b1!4m5!3m4!1s0x4730c122b3af7739:0xaece9894edb66338!8m2!3d48.9199905!4d24.6910739?hl=uk">Ленкавського, 17в</a></p>
                            </div>
                            <div class="contact-call-box">
                                <p><i class="fa fa-heart"></i></p>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <!-- Map Section -->
                            <div class="map">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="743" height="230" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F%20%D0%9B%D0%B5%D0%BD%D0%BA%D0%B0%D0%B2%D1%81%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE%2C%2017%D0%B2%2C%20%D0%86%D0%B2%D0%B0%D0%BD%D0%BE-%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%2C%20%D0%86%D0%B2%D0%B0%D0%BD%D0%BE-%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net">torrentz2</a></div><style>.mapouter{position:relative;text-align:right;height:230px;width:743px;}.gmap_canvas {overflow:hidden;background:none!important;height:230px;width:743px;}</style></div>
                            </div><!--  Map Section /- -->
                        </div>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Contact Us /- -->
        </main>
    </div>
@endsection
@section('footer')
    <div class="footer-bottom">
        <!-- Container -->
        <div class="container">
            <p>&copy; {{ now()->year }} Alternative medicine. Всі права захищені</p>
        </div><!-- Container /- -->
    </div>
@endsection

