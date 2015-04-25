<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Студио за красота ШИК</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicons/apple-touch-icon-60x60-precomposed.png">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Neucha&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="stylesheet" href="assets/css/color-defaults.min.css">
    <link rel="stylesheet" href="assets/css/swatch-red-white.min.css">
    <link rel="stylesheet" href="assets/css/swatch-white-red.min.css">
    <link rel="stylesheet" href="assets/css/fonts.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/demo.min.css">
    <link rel="stylesheet" href="assets/css/studioshik.css">
    <link rel="stylesheet" href="assets/colorbox-master/example3/colorbox.css" />
   
</head>
<body>
    <header id="masthead" class="navbar navbar-sticky swatch-red-white" role="banner" style="max-height: 92px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="assets/images/logoStudio.png" alt="One of the best themes ever"></a>
            </div>
            <nav class="collapse navbar-collapse main-navbar" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active"><a href="#home" class="dropdown-toggle" data-toggle="dropdown">Начало</a>
                    </li>
                    <li class="dropdown"><a href="#services" class="dropdown-toggle" data-toggle="dropdown">Услуги</a>
                    </li>
                    <li class="dropdown"><a href="#promotions" class="dropdown-toggle" data-toggle="dropdown">Промоции</a>
                    </li>
                    <li class="dropdown"><a href="/contacts" class="dropdown-toggle">Контакти</a>
                    </li>
                    <li class="dropdown"><a href="#calculator" class="dropdown-toggle" data-toggle="dropdown">Цени-калкулатор</a>
                    </li>
                    <li class="dropdown"><a href="#team" class="dropdown-toggle" data-toggle="dropdown">Екип</a>
                    </li>
                    <li class="dropdown"><a href="#gallery" class="dropdown-toggle" data-toggle="dropdown">Галерия</a>
                    </li>
                    <li class="dropdown"><a href="#news" class="dropdown-toggle" data-toggle="dropdown">Новини</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="content" role="main">
        <section id="home" class="section swatch-red-white">
            <div class="background-media" style="background-image: url('assets/images/studioshik.студиошик2.jpg'); background-repeat: ; background-size: ; background-attachment: ; background-position: ; background-size: cover" data-start="background-position: 50% 0px" data-top-bottom="background-position: 50% -200px"></div>
            <div class="background-overlay" style="background-color:rgba(147, 84, 216, 0.5);"></div>
            <div class="container">
                <header class="section-header underline">
                    <h1 class="headline hyper hairline">Студио ШИК</h1>
                    <p class="big">мястото, където всеки се връща!!!</p>
                </header>
            </div>
        </section>
        <section id="promotions" class="section swatch-white-red has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                 <div class="facebookbox">
                    <div class="fb-page" data-href="https://www.facebook.com/pages/%D0%A1%D1%82%D1%83%D0%B4%D0%B8%D0%BE-%D0%A8%D0%98%D0%9A/1472700636293945" data-width="282" data-height="210" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
                </div>
                <div class="row shikplace">
                    <div id="slider-flex2" style="width:260px;" class="shikproducts flexslider os-animation" data-flex-speed="4000" data-flex-itemwidth="245pxpx" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions="show" data-flex-controlsalign="center" data-flex-captionhorizontal="" data-flex-captionvertical="" data-flex-controlsposition="" data-flex-directions-type="">
                        <ul class="slides">
                            @foreach($advs as $key => $adv)

                                @if($key == 9)
                                <li class="os-animation last" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                                    <a href="http://shik.bg/index.php/{{$adv->shopName}}">
                                    <figure class=""><img src="http://shik.bg/images/{{$adv->image}}">
                                        <figcaption class="box-caption">
                                                <h4>{{$adv->shopName}}</h4>
                                                <p>{{$adv->price}} лв.</p>
                                        </figcaption>
                                    </figure>
                                    </a>
                                </li>
                                @else
                                <li class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                                    <a href="http://shik.bg/index.php/{{$adv->shopName}}">
                                    <figure class=""><img src="http://shik.bg/images/{{$adv->image}}">
                                        <figcaption class="box-caption">
                                                <h4>{{$adv->shopName}}</h4>
                                                <p>{{$adv->price}} лв.</p>
                                        </figcaption>
                                    </figure>
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                 <header class="section-header underline covert">
                    <h1 class="headline super hairline">Промоции</h1>
                    <p style="margin-left: 15px;">За всички наши клиенти -  достъпни оферти и промоционални  пакети за да се усетите  специалната весела и отпускаща  атмосфера при нас</p>
                </header>
                <div class="row">
                    <div id="slider-flex2" class="flexslider os-animation" data-flex-speed="7000" data-flex-itemwidth="290pxpx" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions="show" data-flex-controlsalign="center" data-flex-captionhorizontal="" data-flex-captionvertical="" data-flex-controlsposition="" data-flex-directions-type="">
                        <ul style="margin-top: 5px;" class="slides">
                            @foreach($promotions as $promotion)
                                @if($promotion->show == '0')
                                    <li>
                                        <figure>
                                            <div class="promoHover" alt="some alt" data-original-title="{{$promotion->popuptext}}" data-toggle="tooltip">
                                                <img src="assets/images/promo.png" >
                                                <figcaption class="promo">
                                                    <p class="percents">-{{$promotion->percent}}%</p>
                                                    <div class="icons">
                                                        <img src="assets/images/icons/hairCutIcon.png">
                                                        <span>+</span>
                                                        <img src="assets/images/icons/ManicureIcon.png">

                                                    </div>
                                                    <p class="promoName">{{$promotion->name}}</p>
                                                    <p class="pricePromo">{{$promotion->price}} лв.</p>
                                                </figcaption>
                                            </div>
                                        </figure>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="section swatch-red-white has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container services">
                <header class="section-header underline">
                    <h1 class="headline super hairline">Услуги</h1>
                </header>
                <div class="col-md-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".1s">
                       <div class="PriceList">
                            <div class="headPage">

                            </div>
                            <div class="ListsContainer">

                                <!--<div class="pricePageList active" id="0">
                                    <div class="page-service">
                                        <img class="rightimg" src='/assets/images/pageicons/2.png'>
                                        <img class="leftimg" src='/assets/images/pageicons/3.png'>
                                        <h2 data-id='0'>Подстригване</h2>
                                        <ul data-id='0'>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                        </ul>
                                        <h2 data-id='1'>Подстригване</h2>
                                        <ul data-id='1'>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                        </ul>
                                        <h2 data-id='2'>Подстригване</h2>
                                        <ul data-id='2'>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                        </ul>
                                        <h2 data-id='3'>Подстригване</h2>
                                        <ul data-id='3'>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                            <li>Подстригване</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                -->

                                @foreach ($descendantsHair as $value)
                                    @if($categories==0)
                                        <div class="pricePageList active" id="0">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <h2 data-id='0'>{{$value->name}}</h2>
                                                <ul data-id='0'>
                                    @endif
                                    @if($categories>3 && $categories%4==0)
                                        </ul>
                                        <div class="priceBtn btnN" data-id="{{$categories/4}}"></div>
                                        </div>
                                        </div>
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <div class="priceBtn btnB" data-id="{{$categories/4-1}}"></div>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @elseif($categories%4!=0 && $categories!=0)
                                        </ul>
                                        <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                        <ul data-id='{{$categories%4}}'>

                                    @endif
                                    @foreach($servicesHair as $serv)
                                        @if($serv->category_id  == $value->id)
                                            <li>{{$serv->name}} - {{$serv->price}} лв.</li>
                                        @endif   
                                    @endforeach
                                <!--{{$categories++}}-->
                                @endforeach
                                </ul>
                                </div>
                                </div>


                                <!--{{$categories=$hairCatNumber}}-->
                                @foreach ($descendantsManicure as $value)
                                    @if($categories==$hairCatNumber)
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @endif
                                    @if($categories>$hairCatNumber && $categories%4==0)
                                        </ul>
                                        <div class="priceBtn btnN" data-id="{{$categories/4}}"></div>
                                        </div>
                                        </div>
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <div class="priceBtn btnB" data-id="{{$categories/4-1}}"></div>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @elseif($categories%4!=0 && $categories!=0)
                                        </ul>
                                        <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                        <ul data-id='{{$categories%4}}'>

                                    @endif
                                    @foreach($servicesManicure as $serv)
                                        @if($serv->category_id  == $value->id)
                                            <li>{{$serv->name}} - {{$serv->price}} лв.</li>
                                        @endif   
                                    @endforeach
                                <!--{{$categories++}}-->
                                @endforeach
                                </ul>
                                </div>
                                </div>

                                <!--{{$categories=$manicureCatNumber}}-->
                                @foreach ($descendantsCosmetics as $value)
                                    @if($categories==$manicureCatNumber)
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @endif
                                    @if($categories>$manicureCatNumber && $categories%4==0)
                                        </ul>
                                        <div class="priceBtn btnN" data-id="{{$categories/4}}"></div>
                                        </div>
                                        </div>
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <div class="priceBtn btnB" data-id="{{$categories/4-1}}"></div>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @elseif($categories%4!=0 && $categories!=0)
                                        </ul>
                                        <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                        <ul data-id='{{$categories%4}}'>

                                    @endif
                                    @foreach($servicesCosmetics as $serv)
                                        @if($serv->category_id  == $value->id)
                                            <li>{{$serv->name}} - {{$serv->price}} лв.</li>
                                        @endif   
                                    @endforeach
                                <!--{{$categories++}}-->
                                @endforeach
                                </ul>
                                </div>
                                </div>

                                <!--{{$categories=$cosmeticsCatNumber}}-->
                                @foreach ($descendantsMassage as $value)
                                    @if($categories==$cosmeticsCatNumber)
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @endif
                                    @if($categories>$cosmeticsCatNumber && $categories%4==0)
                                        </ul>
                                        <div class="priceBtn btnN" data-id="{{$categories/4}}"></div>
                                        </div>
                                        </div>
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <div class="priceBtn btnB" data-id="{{$categories/4-1}}"></div>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @elseif($categories%4!=0 && $categories!=0)
                                        </ul>
                                        <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                        <ul data-id='{{$categories%4}}'>

                                    @endif
                                    @foreach($servicesMassage as $serv)
                                        @if($serv->category_id  == $value->id)
                                            <li>{{$serv->name}} - {{$serv->price}}лв.</li>
                                        @endif   
                                    @endforeach
                                <!--{{$categories++}}-->
                                @endforeach
                                </ul>
                                </div>
                                </div>

                                <!--{{$categories=$massageCatNumber}}-->
                                @foreach ($descendantsMakeup as $value)
                                    @if($categories==$massageCatNumber)
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @endif
                                    @if($categories>$massageCatNumber && $categories%4==0)
                                        </ul>
                                        <div class="priceBtn btnN" data-id="{{$categories/4}}"></div>
                                        </div>
                                        </div>
                                        <div class="pricePageList" id="{{$categories/4}}">
                                            <div class="page-service">
                                                <img class="rightimg" src='/assets/images/catalog/pageicons/2.png'>
                                                <img class="leftimg" src='/assets/images/catalog/pageicons/3.png'>
                                                <div class="priceBtn btnB" data-id="{{$categories/4-1}}"></div>
                                                <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                                <ul data-id='{{$categories%4}}'>
                                    @elseif($categories%4!=0 && $categories!=0)
                                        </ul>
                                        <h2 data-id='{{$categories%4}}'>{{$value->name}}</h2>
                                        <ul data-id='{{$categories%4}}'>

                                    @endif
                                    @foreach($servicesMakeup as $serv)
                                        @if($serv->category_id  == $value->id)
                                            <li>{{$serv->name}} - {{$serv->price}}лв.</li>
                                        @endif   
                                    @endforeach
                                <!--{{$categories++}}-->
                                @endforeach
                                </ul>
                                </div>
                                </div>
                                
                            </div>
                            
                            <div class="priceBtnContainer">

                                    <a class="priceBtn btn btn-lg btn-info btn-icon-right"  data-id="0">Фризьорство <span class="hex-alt hex-alt-big"><i class="fa fa-scissors" data-animation="pulse"></i></span></a>
                                    <a class="priceBtn btn btn-lg btn-info btn-icon-right" data-id="{{$hairCatNumber/4}}">Маникюр <span class="hex-alt hex-alt-big"><i class="fa fa-heart-o" data-animation="pulse"></i></span></a>
                                    <a class="priceBtn btn btn-lg btn-info btn-icon-right" data-id="{{$manicureCatNumber/4}}">Козметика <span class="hex-alt hex-alt-big"><i class="fa  fa-tachometer" data-animation="pulse"></i></span></a>
                                    <a class="priceBtn btn btn-lg btn-info btn-icon-right" data-id="{{$cosmeticsCatNumber/4}}">Масажи <span class="hex-alt hex-alt-big"><i class="fa fa-leaf" data-animation="pulse"></i></span></a>
                                    <a class="priceBtn btn btn-lg btn-info btn-icon-right" data-id="{{$massageCatNumber/4}}">Грим <span class="hex-alt hex-alt-big"><i class="fa fa-magic" data-animation="pulse"></i></span></a>
                            </div>
                        </div>

                    </div>
            <div class="text-default os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">        
                <div id="calculator" class="navbar-default sidebar calculator row" role="navigation">
                    <div class="sidebar-nav navbar-collapse col-md-1 servicescalc">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="#"><i class="fa fa-bolt fa-fw"></i> Калкулатор - цени <span class="fa fa-angle-down"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#"><i class="fa fa-scissors fa-fw"></i> Фризьорство <span class="fa fa-angle-down"></span></a>
                                        <!--{{$helpServ = 0}} -->
                                        <ul class="nav nav-third-level">
                                        @foreach ($descendantsHair as $value)
                                            <li>
                                                <a href="#"> {{$value->name}} <span class="fa fa-angle-down"></span></a>
                                                @foreach($servicesHair as $serv)
                                                    @if($serv->category_id  == $value->id)
                                                        <ul class="nav nav-four-level">
                                                            <div class="check" data-category="{{$value->name}}" data-name="{{$serv->name}}" data-price="{{$serv->price}}" data-time="{{$serv->time}}" data-value="{{$helpServ}}">{{$serv->name}}<span  class="icon fa fa-check-circle fa-fw"></span></div><!--{{$helpServ++}} -->
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o fa-fw"></i> Маникюр <span class="fa fa-angle-down"></span></a>
                                        <ul class="nav nav-third-level">
                                        @foreach ($descendantsManicure as $value)
                                            <li>
                                                <a href="#"> {{$value->name}} <span class="fa fa-angle-down"></span></a>
                                                @foreach($servicesManicure as $serv)
                                                    @if($serv->category_id  == $value->id)
                                                        <ul class="nav nav-four-level">
                                                            <div class="check" data-category="{{$value->name}}" data-name="{{$serv->name}}" data-price="{{$serv->price}}" data-time="{{$serv->time}}" data-value="{{$helpServ}}">{{$serv->name}}<span  class="icon fa fa-check-circle fa-fw"></span></div><!--{{$helpServ++}} -->
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-tachometer fa-fw"></i> Козметика <span class="fa fa-angle-down"></span></a>
                                        <ul class="nav nav-third-level">
                                        @foreach ($descendantsCosmetics as $value)
                                            <li>
                                                <a href="#"> {{$value->name}} <span class="fa fa-angle-down"></span></a>
                                                @foreach($servicesCosmetics as $serv)
                                                    @if($serv->category_id  == $value->id)
                                                        <ul class="nav nav-four-level">
                                                            <div class="check" data-category="{{$value->name}}" data-name="{{$serv->name}}" data-price="{{$serv->price}}" data-time="{{$serv->time}}" data-value="{{$helpServ}}">{{$serv->name}}<span  class="icon fa fa-check-circle fa-fw"></span></div><!--{{$helpServ++}} -->
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-leaf fa-fw"></i> Масажи <span class="fa fa-angle-down"></span></a>
                                        <ul class="nav nav-third-level">
                                        @foreach ($descendantsMassage as $value)
                                            <li>
                                                <a href="#"> {{$value->name}} <span class="fa fa-angle-down"></span></a>
                                                @foreach($servicesMassage as $serv)
                                                    @if($serv->category_id  == $value->id)
                                                        <ul class="nav nav-four-level">
                                                            <div class="check" data-category="{{$value->name}}" data-name="{{$serv->name}}" data-price="{{$serv->price}}" data-time="{{$serv->time}}" data-value="{{$helpServ}}">{{$serv->name}}<span  class="icon fa fa-check-circle fa-fw"></span></div><!--{{$helpServ++}} -->
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-magic fa-fw"></i> Грим <span class="fa fa-angle-down"></span></a>
                                        <ul class="nav nav-third-level">
                                        @foreach ($descendantsMakeup as $value)
                                            <li>
                                                <a href="#"> {{$value->name}} <span class="fa fa-angle-down"></span></a>
                                                @foreach($servicesMakeup as $serv)
                                                    @if($serv->category_id  == $value->id)
                                                        <ul class="nav nav-four-level">
                                                            <div class="check" data-category="{{$value->name}}" data-name="{{$serv->name}}" data-price="{{$serv->price}}" data-time="{{$serv->time}}" data-value="{{$helpServ}}">{{$serv->name}}<span  class="icon fa fa-check-circle fa-fw"></span></div><!--{{$helpServ++}} -->
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 listtotal">
                        <ol class="list">
                            
                        </ol>
                        <div class="totalAllservices">
                            <ul>
                                <li>
                                    Ориентировъчни:
                                </li>
                                <li>
                                    време - <p id="timeTotal">0</p> мин.
                                </li>
                                <li>
                                    цена - <p id="priceTotal">0</p> лв.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
            </div>
            <div class="text-default os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                <div class="hairlenghtstyle">
                    <div  class="hairlenght">
                        <a href="/assets/images/hair/KASA--KOSA.png" rel="gallery" class="pirobox_gall first" rev="0"><figcaption><img src="/assets/images/hair/KASA--KOSA.png" width="100%" height="100%"></figcaption></a>
                        <p>Къса коса</p>
                    </div>
                    <div  class="hairlenght">
                        <a href="/assets/images/hair/SREDNO-DALGA-KOSA.png" rel="gallery" class="pirobox_gall first" rev="0"><figcaption><img src="/assets/images/hair/SREDNO-DALGA-KOSA.png" width="100%" height="100%"></figcaption></a>
                        <p>Средно дълга коса</p>
                    </div>
                    <div  class="hairlenght">
                        <a href="/assets/images/hair/DALGA--KOSA.png" rel="gallery" class="pirobox_gall first" rev="0"><figcaption><img src="/assets/images/hair/DALGA--KOSA.png" width="100%" height="100%"></figcaption></a>
                        <p>Дълга коса</p>
                    </div>
                    <div  class="hairlenght">
                        <a href="/assets/images/hair/MNOGA-DALGA--KOSA.png" rel="gallery" class="pirobox_gall first" rev="0"><figcaption><img src="/assets/images/hair/MNOGA-DALGA--KOSA.png" width="100%" height="100%"></figcaption></a>
                        <p>Много дълга коса</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section id="team" class="section swatch-white-red has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <header class="section-header underline">
                    <h1 class="headline super hairline">Екип</h1>
                </header>
                <div class="row">
                    <ul class="list-unstyled row box-list">
                        <li class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                            <div class="box-round flat-shadow box-big">
                                <div class="box-dummy"></div>
                                <figure class="box-inner"><img class="svg-inject" src="assets/images/design/people/man-1-800x800.png" alt="a clock">
                                    <figcaption class="box-caption">
                                        <h4>Фризьор</h4>
                                        <p>Професионалист</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <h3 class="text-center">Пепи<small class="block">Фризьор</small></h3>
                            <p class="text-center">Тя изгради своя традиция, базираща се на висок професионализъм, перфектно обслужване и специално отношение към клиента.Практикува фризьорство на най- високо ниво, не само в традиционните стилистични подходи, но и смели и авангардни решения. Пепи знае най-правилната грижа за здрава,бляскава и жизнена коса,добре поддържана ,перфектно подстригана и супер лесна за оформяне „сам в къщи“.Уверете се сами.</p>
                        </li>
                        <li class="col-md-4 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
                            <div class="box-round flat-shadow box-big">
                                <div class="box-dummy"></div>
                                <figure class="box-inner"><img class="svg-inject" src="assets/images/design/people/woman-1-800x800.png" alt="a clock">
                                    <figcaption class="box-caption">
                                        <h4>Маникюрист</h4>
                                        <p>Професионалист</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <h3 class="text-center">Деси<small class="block">Маникюрист</small></h3>
                            <p class="text-center">Кой ако не Деси ще се погрижи за вашите ръце?Перфектен маникюр,точния за Вас лак,подходяща за повода декорация и накрая всеки ще иска да има Вашата ръка.Ноктопластика,поддръжка, изграждане или да залепи счупения нокът всеки каприз е задължение нейно.Най-издържливия гел лак го слага Тя. Ела и виж.</p>
                        </li>
                        <li class="col-md-4 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
                            <div class="box-round flat-shadow box-big">
                                <div class="box-dummy"></div>
                                <figure class="box-inner"><img class="svg-inject" src="assets/images/design/people/man-2-800x800.png" alt="a clock">
                                    <figcaption class="box-caption">
                                        <h4>Масажист и козметик</h4>
                                        <p>Професионалист</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <h3 class="text-center">Цеци<small class="block">Масажист и козметик</small></h3>
                            <p class="text-center">Цеци е трупала своя опит по целия свят и сега е тук за да се погрижи и за вашата кожа ,тяло и душа. „Тайната на красивата кожа е в редовната грижа за нея!“ на всеки казва Тя.Нейните златни ръце ще поправят каквото е необходимо по лицето,ръцете,краката и цялото тяло неусетно докато си почивате под звуците на приятна музика.Отпускащ,спортен или антицелулитен масаж е невероятното преживяване, което ще пожелаете пак и пак и пак.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
         <section id="gallery" class="section swatch-red-white has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <header class="section-header text-center underline">
                    <h1 class="headline super hairline">Галерия</h1>
                </header>
                <div class="text-default os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                    <ul class="isotope-filters text-center">
                        <li><a class="pseudo-border active" id="allphotos" href="#">Всички</a>
                        </li>
                        @foreach($gallerycat as $gallcat)
                            <li><a id="{{$gallcat->id}}" class="pseudo-border"  href="#">{{$gallcat->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="row gallery">
                    @foreach($gallerycat as $gallcat)
                        @foreach($gallery as $photo)
                            @if($gallcat->id == $photo->category && $photo->show == 0 )
                                <div id="{{$gallcat->id}}" class="gallery_pics">
                                    <a href="/laravel/public/assets/images/gallery/{{$photo->photo}}" rel="gallery" class="pirobox_gall first" rev="0"><img src="/laravel/public/assets/images/gallery/{{$photo->photo}}" width="100%" height="100%">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                    <a class="btn btn-lg btn-info btn-icon-right showMore">Покажи още <span class="hex-alt hex-alt-big"><i class="fa fa-picture-o" data-animation="wobble"></i></span></a>
                </div>
            </div>
        </section>
        <section class="section swatch-white-red" id="news">
            <div class="container">
                <header class="section-header underline text-center">
                    <h1 class="headline super hairline">Новини</h1>
                </header>
                <div class="carousel slide" id="news2">
                    <div class="col-md-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".1s">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#news2" class="active"></li>
                            <li data-slide-to="1" data-target="#news2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <!--{{$help=0}}-->
                            @foreach($news as $key => $new)
                                @if($newsNumber > 0)
                                    @if($key >= $newsNumber)
                                        @if($key == $newsNumber)
                                           <div class="item active">
                                                <div class="row">
                                        @endif
                                        @if($help>=3 && $help%3==0 )
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="grid-post swatch-red-white">
                                                            <article class="post post-showinfo">
                                                                <div class="post-media">
                                                                    <a class="feature-image  hover-animate" href="/news/{{$new->id}}" title="{{$new->title}}"><img alt="some image" src="/laravel/public/assets/images/news/{{$new->image}}"> <i class="fa fa-comments-o"> Прочети цялата статия</i>
                                                                    </a>
                                                                </div>
                                                                <div class="post-head text-center">
                                                                    <h3 class="post-title">{{$new->title}}</h3>
                                                                    <div class="post-icon flat-shadow flat-hex">
                                                                        <div class="hex hex-big"><i class="fa fa-camera"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-body">
                                                                    <p>{{ str_limit($new->text, $limit = 300, $end = '...') }}</p><a class="more-link" href="/news/{{$new->id}}">Прочети още</a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <!--{{$help++}}-->
                                        @else
                                                    <div class="col-md-4">
                                                        <div class="grid-post swatch-red-white">
                                                            <article class="post post-showinfo">
                                                                <div class="post-media">
                                                                    <a class="feature-image  hover-animate" href="/news/{{$new->id}}" title="{{$new->title}}"><img alt="some image" src="/laravel/public/assets/images/news/{{$new->image}}"> <i class="fa fa-comments-o"> Прочети цялата статия</i>
                                                                    </a>
                                                                </div>
                                                                <div class="post-head text-center">
                                                                    <h3 class="post-title">{{$new->title}}</h3>
                                                                    <div class="post-icon flat-shadow flat-hex">
                                                                        <div class="hex hex-big"><i class="fa fa-camera"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-body">
                                                                    <p>{{ str_limit($new->text, $limit = 300, $end = '...') }}</p><a class="more-link" href="/news/{{$new->id}}">Прочети още</a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <!--{{$help++}}-->
                                        @endif
                                    @endif
                                @else
                                    @if($key == 0 && $key%3 == 0)
                                           <div class="item active">
                                                <div class="row">
                                    @endif
                                    @if($key>=3 && $key%3==0 )
                                                </div>
                                             </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="grid-post swatch-red-white">
                                                            <article class="post post-showinfo">
                                                                <div class="post-media">
                                                                    <a class="feature-image  hover-animate" href="/news/{{$new->id}}" title="{{$new->title}}"><img alt="some image" src="/laravel/public/assets/images/news/{{$new->image}}"> <i class="fa fa-comments-o"> Прочети цялата статия</i>
                                                                    </a>
                                                                </div>
                                                                <div class="post-head text-center">
                                                                    <h3 class="post-title">{{$new->title}}</h3>
                                                                    <div class="post-icon flat-shadow flat-hex">
                                                                        <div class="hex hex-big"><i class="fa fa-camera"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-body">
                                                                    <p>{{ str_limit($new->text, $limit = 300, $end = '...') }}</p><a class="more-link" href="/news/{{$new->id}}">Прочети още</a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                    @else
                                                        <div class="col-md-4">
                                                            <div class="grid-post swatch-red-white">
                                                                <article class="post post-showinfo">
                                                                    <div class="post-media">
                                                                        <a class="feature-image  hover-animate" href="/news/{{$new->id}}" title="{{$new->title}}"><img alt="some image" src="/laravel/public/assets/images/news/{{$new->image}}"> <i class="fa fa-comments-o"> Прочети цялата статия</i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="post-head text-center">
                                                                        <h3 class="post-title">{{$new->title}}</h3>
                                                                        <div class="post-icon flat-shadow flat-hex">
                                                                            <div class="hex hex-big"><i class="fa fa-camera"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-body">
                                                                        <p>{{ str_limit($new->text, $limit = 300, $end = '...') }}</p><a class="more-link" href="/news/{{$new->id}}">Прочети още</a>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                    @endif
                                @endif
                            @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="gradient-pattern"></div>

        <section class="section swatch-white-red has-top allnews">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Всички новини</a>
                                </div>
                                <div class="panel-collapse collapse" id="collapseOne">
                                    <div class="panel-body">
                                        <div class="allnewsposition">
                                            @foreach($news as $new)
                                            <div  class="allnewsconf">
                                                <a href="/news/{{$new->id}}"><figcaption><div><img src="/laravel/public/assets/images/news/{{$new->image}}"></div></figcaption></a>
                                                <div class="titleallNews"><p>{{$new->title}}</p></div>
                                                <div class="textallNews"><p>{{ str_limit($new->text, $limit = 70, $end = '...') }}</p></div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer id="footer" role="contentinfo">
            <section class="section swatch-red-white has-top">
                <div class="decor-top">
                    <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
                    </svg>
                </div>
                <div id="footerContainer">
                			<div id="text-4" class="sidebar-widget widget_text">
                                <header class="section-header underline">
                                    <h1 class="headline super hairline">Партньори</h1>
                                </header>
                            </div>
                    <div id="logoFooter"></div>
                    <div id="navFooterLeftA">
                      <ul>
                        <li>
                          <a href="#home">
                          Начало
                          </a>
                        </li>
                        <li>
                          <a href="#services">
                          Услуги
                          </a>
                        </li>
                        <li>
                          <a href="#promotions">
                          Промоции
                          </a>
                        </li>
                        <li>
                          <a href="#team">
                          Екип
                          </a>
                        </li>
                        <li>
                          Тел: 0895740642
                        </li>
                      </ul>
                    </div>
                    <div id="navFooterLeftB">
                      <ul>
                        <li>
                          <a href="#gallery">
                          Галерия
                          </a>
                        </li>
                        <li>
                          <a href="#news">
                          Новини
                          </a>
                        </li>
                        <li>
                          <a href="#">
                          Контакти
                          </a>
                        </li>
                        <li>
                          constacts@shik.bg
                        </li>
                      </ul>
                    </div>
                    <div id="fb">
                        <ul>
                            <li><a href="http://www.facebook.com/pages/Студио-ШИК/1472700636293945"><img src="assets/images/fb.png"></a></li>
                            <li><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%25D0%25A1%25D1%2582%25D1%2583%25D0%25B4%25D0%25B8%25D0%25BE-%25D0%25A8%25D0%2598%25D0%259A%2F1472700636293945&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" width="125px" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></li>
                        </ul>
                    </div>
                    <div id="partnersFooter">
                      <img id="bes" src="assets/images/partners/BES.png"/>
                      <img id="OPI" src="assets/images/partners/OPI.png"/>
                      <img id="oway" src="assets/images/partners/oWay.png"/>
                      <img id="alfaparf" src="assets/images/partners/alfaparf.png"/>
                    </div>
                    <div id="partnersFooterSecond">
                      <img id="junglefever" src="assets/images/partners/junglefever.png"/>
                      <img id="farmavitaANDrolland" src="assets/images/partners/farmavitaANDrolland.png"/>
                      <img id="fanolaANDsaphire" src="assets/images/partners/fanolaANDsaphire.png"/>
                    </div>
              </div>
              <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="swatch_social-2" class="sidebar-widget widget_swatch_social">
                                <ul class="unstyled inline small-screen-center social-icons social-background social-big">
                                    <li><a target="_blank" href="https://bg-bg.facebook.com/pages/%D0%A1%D1%82%D1%83%D0%B4%D0%B8%D0%BE-%D0%A8%D0%98%D0%9A/1472700636293945"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a target="_blank" href="/"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://plus.google.com/u/0/109238299195470825631/about"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </section>
        </footer>
    </div><a class="go-top hex-alt" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
    <script src="assets/js/packages.min.js"></script>
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/switcher.min.js"></script>
    <script src="assets/colorbox-master/jquery.colorbox.js"></script>
    <script src="assets/js/design.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=827211330685873&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript">

        $(document).ready(function() {
            if(!(window.location.hash.substring(1).length  === 0)){
                $(".calculator ul li a").trigger('click');
            }
        });
    </script>
</body>

</html>
