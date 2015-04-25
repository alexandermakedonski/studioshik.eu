<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Студио за красота ШИК</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" href="/assets/images/favicons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/images/favicons/apple-touch-icon-60x60-precomposed.png">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Neucha&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    <link rel="stylesheet" href="/assets/css/color-defaults.min.css">
    <link rel="stylesheet" href="/assets/css/swatch-red-white.min.css">
    <link rel="stylesheet" href="/assets/css/swatch-white-red.min.css">
    <link rel="stylesheet" href="/assets/css/fonts.min.css" media="screen">
    <link rel="stylesheet" href="/assets/css/demo.min.css">
    <link rel="stylesheet" href="/assets/css/studioshik.css">
   
</head>
<body>
    <header id="masthead" class="navbar navbar-sticky swatch-red-white" role="banner" style="max-height: 92px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="/assets/images/logoStudio.png" alt="One of the best themes ever"></a>
            </div>
            <nav class="collapse navbar-collapse main-navbar" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active"><a href="/" class="dropdown-toggle">Начало</a>
                    </li>
                    <li class="dropdown"><a href="/#services" class="dropdown-toggle">Услуги</a>
                    </li>
                    <li class="dropdown"><a href="/#promotions" class="dropdown-toggle">Промоции</a>
                    </li>
                    <li class="dropdown"><a href="/contacts" class="dropdown-toggle" >Контакти</a>
                    </li>
                    <li class="dropdown"><a href="/#calculator" class="dropdown-toggle">Цени-калкулатор</a>
                    </li>
                    <li class="dropdown"><a href="/#team" class="dropdown-toggle">Екип</a>
                    </li>
                    <li class="dropdown"><a href="/#gallery" class="dropdown-toggle">Галерия</a>
                    </li>
                    <li class="dropdown"><a href="/#news" class="dropdown-toggle">Новини</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="content" role="main">
        <section class="section swatch-red-white">
            <div class="background-media" style="background-image: url('/assets/images/studioshik.студиошик.jpg'); background-repeat: ; background-size: ; background-attachment: ; background-position: ; background-size: cover" data-start="background-position: 50% 0px" data-top-bottom="background-position: 50% -200px"></div>
            <div class="background-overlay" style="background-color:rgba(147, 84, 216, 0.8);"></div>
            <div class="container">
                <header class="section-header underline">
                    <h1 class="headline hyper hairline">Студио ШИК</h1>
                    <p class="big">мястото, където всеки се връща!!!</p>
                    
                </header>
            </div>
        </section>
        <section  class="section swatch-white-red has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <header class="section-header underline">
                    <h1 class="headline super hairline">Добре дошли в СТУДИО ШИК!</h1>
                    <p>Ние предлагаме индивидуален подход към всеки клиент- доставяме красота и вътрешно удовлетворение.<br>Нашата цел е подобряване качеството на живота –здрава и жизнена коса и кожа и красив маникюр . <br>След всяко посещение в ШИК следва приказка с хубав край.</p>
                </header>
            </div>
        </section>
        <section id="news" class="section swatch-red-white has-top">
            <div  class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
                </svg>
            </div>
             <div class="container">
                 <header class="section-header underline">
                    <h1 class="headline hyper hairline">Новини</h1>
                </header>
                <div class="container news">
                    <div class="advert">
                        <div class="fb-page" data-href="https://www.facebook.com/pages/%D0%A1%D1%82%D1%83%D0%B4%D0%B8%D0%BE-%D0%A8%D0%98%D0%9A/1472700636293945" data-width="330" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                    </div>
                    @foreach($newTemp as $new)   
                            <img alt="some image" src="/laravel/public/assets/images/news/{{$new->image}}"></br></br>
                        <h1 class="hairline">{{$new->title}}</h1><br>
                        <div class="row">
                            <div class="col-md-9">
                                <p class="lead">{{$new->text}}</p>
                            </div>
                            <div class="col-md-3">
                                <div class="portfolio-list overlay">
                                    <h3 class="portfolio-list-header text-center overlay">Новини</h3>
                                    <ol class="portfolio-list icons-ul">
                                        @foreach($news as $key => $new)
                                        @if($key >= $newsNumber)
                                         <li><i class="icon-li icon-ok"></i><a  href="/news/{{$new->id}}">{{$new->title}}</a></li>
                                        @endif
                                        @endforeach
                                    </ol>
                                </div><span class="overlay"></span></a>
                                <div class="portfolio-share overlay"><span class="overlay">Share</span>
                                    <ul class="list-inline">
                                        <li><a href="http://www.facebook.com/pages/Студио-ШИК/1472700636293945"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href=""><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </section>
        <section class="section swatch-white-red has-top">
            <div class="decor-top">
                <svg class="decor" height="120px" preserveaspectratio="none" style="height: 120px !important" version="1.1" viewbox="0 0 100 100" width="240px" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 100 L50 0 L100 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <header class="section-header underline">
                    <h1 class="headline super hairline">Заповядайте при нас</h1>
                    <p>За всякъкви въпроси не се колебайте да се свържите с екипа на ШИК.</p>
                </header>
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
                            <li><a href="http://www.facebook.com/pages/Студио-ШИК/1472700636293945"><img src="/assets/images/fb.png"></a></li>
                            <li><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%25D0%25A1%25D1%2582%25D1%2583%25D0%25B4%25D0%25B8%25D0%25BE-%25D0%25A8%25D0%2598%25D0%259A%2F1472700636293945&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" width="125px" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></li>
                        </ul>
                    </div>
                    <div id="partnersFooter">
                      <img id="bes" src="/assets/images/partners/BES.png"/>
                      <img id="OPI" src="/assets/images/partners/OPI.png"/>
                      <img id="oway" src="/assets/images/partners/oWay.png"/>
                      <img id="alfaparf" src="/assets/images/partners/alfaparf.png"/>
                    </div>
                    <div id="partnersFooterSecond">
                      <img id="junglefever" src="/assets/images/partners/junglefever.png"/>
                      <img id="farmavitaANDrolland" src="/assets/images/partners/farmavitaANDrolland.png"/>
                      <img id="fanolaANDsaphire" src="/assets/images/partners/fanolaANDsaphire.png"/>
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
    <script src="/assets/js/packages.min.js"></script>
    <script src="/assets/js/theme.min.js"></script>
    <script src="/assets/js/switcher.min.js"></script>
    <script type="text/javascript">
       $("document").ready(function(){
            setTimeout(function() {
              $('html, body').animate({
                scrollTop: $("#news").offset().top +510
             }, 2500);
            }, 800);
        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=827211330685873&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

</body>

</html>
