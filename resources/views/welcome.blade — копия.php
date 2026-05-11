{{--@extends('layouts.admin')

@section('title', 'Главная')

@push('styles')


<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
		
--}}		
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rentcar/css/css_reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rentcar/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/rentcar/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rentcar/css/loaders.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rentcar/css/index.css') }}">
		{{--@endpush

		@section('content')--}}
<div class="rentcar-page">
<<<<<<< Updated upstream
    <!-- MAIN -->
    <div class="load-wrap">
        <div class="wheel-load">
            <img src="{{ asset('assets/rentcar/images/loader.gif') }}" alt="" class="image">
        </div>
    </div>
    <div class="wheel-menu-wrap">
        <div class="container-fluid wheel-bg1">
            <div class="row">
                <div class="col-sm-3">
                    <div class="wheel-logo">
                        <a href="index.html"><img src="{{ asset('assets/rentcar/images/logo.png') }}" alt=""></a>

        <!-- MAIN -->
       
		<div class="load-wrap">
            <div class="wheel-load">
                <img src="{{ asset('assets/rentcar/images/loader.gif') }}" alt="" class="image">
            </div>
        </div>
			
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="{{ asset('assets/rentcar/images/logo.png') }}" alt=""></a>
                        </div>
	{{-- =======>>>>>>> Stashed changes--}}
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12 padd-lr0">
                    <div class="wheel-top-menu clearfix">
                        <div class="wheel-top-menu-info">
                            <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>тел.жд 7-87-73</span></a></div>
                            <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>maseykinav@dzvr.ru</span></a></div>
                        </div>
                        <div class="wheel-top-menu-log">
                            <div class="top-menu-item">
                                <div class="dropdown wheel-user-ico">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        ВОЙТИ
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="register.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </div>
{{-- <<<<<<< Updated upstream ======= --}}


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="#">Легковые</a>
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="index.html">Легковой госномер - Е 777 КХ 77 </a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="index2.html">Легковой госномер - А 333 МО 50</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="index2.html">Легковой госномер - М 111 ОТ 77</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="#"> Мироавтобусы </a>
                                        <!--class=" dl-submenu "-->
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-grid.html">Микроавтобус 1</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-3col2.html">Микроавтобус 2</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-listing-details.html">Микроавтобус 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="reservation1.html">Ваши заказы</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="#">Все заказы</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="contact.html">Буряк В.А.</a></li>
                                            <li class="menu-item "><a href="contact.html">Сахошкин П.В.</a></li>
                                            <li class="menu-item "><a href="register.html">Фетищев А.В.</a></li>
                                            <li class="menu-item "><a href="checkout.html">Корчажинский Б.В.</a></li>
                                            <li class="menu-item "><a href="about.html">Ислямова Г.С.</a></li>
                                            <li class="menu-item "><a href="shopping.html">Галимов Д.И.</a></li>

                                        </ul>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                            <!--              <a href="" class="wheel-cheader-but">Buy Now</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wheel-start">
            <img src="{{ asset('assets/rentcar/images/bg1.jpg') }}" alt="" class="wheel-img">

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
            <!--                    <h5>Поиск автомобиля</h5>  -->
                                <h3><span>Заполните форму заказа</span></h3>
								{{-->>>>>>> Stashed changes --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="wheel-navigation">
                        <nav id="dl-menu">
                            <ul class="main-menu dl-menu">
                                <li class="menu-item current-menu-parent menu-item-has-children active-color">
                                    <a href="#">Легковые</a>
                                    <ul class="sub-menu dl-submenu">
                                        <li class="menu-item current-menu-item">
                                            <a href="index.html">Легковой госномер - Е 777 КХ 77</a>
                                        </li>
                                        <li class="menu-item current-menu-item">
                                            <a href="index2.html">Легковой госномер - А 333 МО 50</a>
                                        </li>
                                        <li class="menu-item current-menu-item">
                                            <a href="index2.html">Легковой госномер - М 111 ОТ 77</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item current-menu-parent menu-item-has-children">
                                    <a href="#">Микроавтобусы</a>
                                    <ul class="sub-menu dl-submenu">
                                        <li class="menu-item current-menu-item">
                                            <a href="car-list-grid.html">Микроавтобус 1</a>
                                        </li>
                                        <li class="menu-item current-menu-item">
                                            <a href="car-list-3col2.html">Микроавтобус 2</a>
                                        </li>
                                        <li class="menu-item current-menu-item">
                                            <a href="car-listing-details.html">Микроавтобус 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="reservation1.html">Ваши заказы</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Все заказы</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="contact.html">Буряк В.А.</a></li>
                                        <li class="menu-item"><a href="contact.html">Сахошкин П.В.</a></li>
                                        <li class="menu-item"><a href="register.html">Фетищев А.В.</a></li>
                                        <li class="menu-item"><a href="checkout.html">Корчажинский Б.В.</a></li>
                                        <li class="menu-item"><a href="about.html">Ислямова Г.С.</a></li>
                                        <li class="menu-item"><a href="shopping.html">Галимов Д.И.</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-menu-icon"><i></i></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wheel-start">
        <img src="{{ asset('assets/rentcar/images/bg1.jpg') }}" alt="" class="wheel-img">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70">
                        <h3><span>Заполните форму заказа</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container padd-lr0">
            <div class="col-lg-12">
                <div class="wheel-start-form">
                    <form action="#">
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>Выберите день</span>
                                <label for="input-val13" class="fa fa-calendar">
                                    <input class="datetimepicker" id='input-val13' type="text" value="29 Apr">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Выберите время</span>
                                <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val14' type="text" value="18:00">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>День возврата</span>
                                <label for="input-val15" class="fa fa-calendar">
                                    <input class="datetimepicker" id='input-val15' type="text" value="29 Apr">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Время возврата</span>
                                <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val16' type="text" value="18:00">
                                </label>
                            </div>
                        </div>
                        <label for="input-val17" class="promo">
                            <input type="text" id='input-val17' placeholder="Вы заказали автомобиль Тайота на 12 сентября 2025 года с 15-00 до 17-00 с водителем.">
                        </label>
                        <label for="input-val18" class="promo promo2">
                            <button class="wheel-btn" id="input-val18">Заказать</button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="wheel-footer">
        <img src="{{ asset('assets/rentcar/images/bg4.jpg') }}" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 padd-lr0">
                    <div class="wheel-address">
                        <div class="wheel-footer-logo"><a href=""><img src="{{ asset('assets/rentcar/images/logo2.png') }}" alt=""></a></div>
                        <ul>
                            <li><span><i class="fa fa-map-marker"></i>Москва<br>Новорогожская улица, дом 29</span></li>
                            <li><a href=""><span><i class="fa fa-phone"></i> тел. жд 7-87-73</span></a></li>
                            <li><a href=""><span><i class="fa fa-envelope"></i>maseykinav@dzvr.ru</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 padd-lr0">
                    <div class="wheel-footer-item">
                        <h3></h3>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 padd-lr0">
                    <div class="wheel-footer-item">
                        <h3>Меню</h3>
                        <ul>
                            <li><a href="" class="">Легковые</a></li>
                            <li><a href="" class="">Микроавтобусы</a></li>
                            <li><a href="" class="">Ваши заказы</a></li>
                            <li><a href="" class="">Все заказы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 padd-lr0">
                    <div class="wheel-footer-gallery">
                        <h3>Photo Gallery</h3>
                        <div class="clearfix">
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i11.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i12.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i13.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i14.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i15.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i16.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i17.jpg') }}" alt=""></a></div>
                            <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('assets/rentcar/images/i18.jpg') }}" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="wheel-footer-info wheel-bg6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 padd-lr0"><span>&#169; Разработка Дирекция железнодорожных вокзалов</span></div>
                <div class="col-lg-4 col-sm-6 padd-lr0">
                </div>
            </div>
        </div>
    </div>
</div>
{{--@endsection

@push('scripts')--}}
    <script type="text/javascript" src=></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/jquery.countTo.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/idangerous.swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/equalHeightsPlugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/rentcar/js/index.js') }}"></script>
		{{--@endpush--}}
