<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>King Kitchen</title>
    <meta charset="UTF-8">
    <meta name="description" content="Кухни, шкафы-купе, мебель">
    <meta name="author" content="Уханов Егор">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
<!-- Скрипт анимации-->
    <!-- Стили -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{url('wow/animate.min.css')}}">
     <link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="stylesheet" href="{{url('css/slicknav.min.css')}}">
     <link rel="shortcut icon" type="image/x-icon" href="{{url('images/lg.png')}}"> 
<!--Модальное окно-->
    <link rel="stylesheet" href="{{url('remodal/remodal.css')}}">
    <link rel="stylesheet" href="{{url('remodal/remodal-default-theme.css')}}">
<!--Скрипты-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" href="{{url('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('js/jquery.placeholder.min.js')}}"></script>
	 <!-- Карусель-->
	<link rel="stylesheet" type="text/css" href="{{url('css/default.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.theme.default.css')}}" />
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
	<!--Для товаров -->
	<script src="{{url('js/modernizr.custom.63321.js')}}"></script>
 </head>
  <body>
        <header style="header__top">
       <div class="main__block__header crownfon">
            <div class="mid clearfix">
               <div class="red__logo left">
                        <img src="{{url('images/red__logo.png')}}" class="red__logo_tr">
                    </div>
                 <a href="#modal"> <div class="zamer__main__block left">
                      <div class="zamer__text">Вызвать замерщика</div>
                      <div class="zamer__img"><img src="{{url('images/GMOKAT.png')}}" class="img__zamer"></div>
                     </div></a>
                  <div class="kontacts right">
                      <p class="kontacts__info ">т. 89196174444</p>
                      <p class="kontacts__info ">т. 89871449292</p>
                      <a href="https://e.mail.ru/messages/inbox/?back=1">
                          <p class="kontacts__info mail ">egor.uxanov.97@mail.ru</p>
                      </a>
                  </div>
              </div>
         </div>
      </header>
      
      	  <nav>
		<div class="menu">
			<div class="mid">
                <ul class="menu__ul"><a href="index.html" class="logo_f"><img src="{{url('images/logo__pol__v.png')}}" class="viver"></a>
                    @foreach ($menuList as $menu)
                     <li class="menu__li"><a class="menu__a" href="{{route('mebels', ['id' => $menu->id])}}">Кухни</a></li>
                    @endforeach
				</ul>

			</div>
		</div>
	  </nav>
      <div class="auth__panel">
          <div class="wrapper">
                <ul>
                    @if(Auth::check())
                    <li><a href="{{route('logout')}}">Выход</a></li>
                    @else
                    <li><a href="">Регситрация</a></li>
                    <li><a href="{{route('login')}}">Войти</a></li>
                    @endif
                </ul>
          </div>
      </div>
              @yield('content')

            <footer class="crownfon">
                <div class="f__fon wow bounceInUp">
                <div class="mid">
                    <hr class="line__menu">
                    <ul class="menu__ul__f">
                    <li class="menu__f"><a class="menu__a__f" href="#">Кухни</a>
                        <ul class="vl__li">
                                <li class="vl"><a class="menu__a__vl" href="#">Модерн</a></li>
                                <li class="vl"><a class="menu__a__vl" href="#">Классические</a></li>
                        </ul>
                    </li>
					<li class="menu__f"><a class="menu__a__f" href="#">Шкафы</a>
                                <ul class="vl__li">
                                 <li class="vl"><a class="menu__a__vl" href="#">Шкафы-купе</a></li> 
                                </ul>
                    </li>
					<li class="menu__f"><a class="menu__a__f" href="#">Детские</a>
                                     <ul class="vl__li">
                                 <li class="vl"><a class="menu__a__vl" href="#">Кровати</a></li>
                                <li class="vl"><a class="menu__a__vl" href="#">Шкафы-купе</a></li>
                                    </ul>
                        
                        </li>
					<li class="menu__f"><a class="menu__a__f" href="#">Прихожки</a>
                                     <ul class="vl__li">
                                 <li class="vl"><a class="menu__a__vl" href="#">Шкафы-купе</a></li>
                                    </ul>
                    </li>
                    <li class="menu__f"><a class="menu__a__f" href="#">Офисы</a>
                                     <ul class="vl__li">
                                 <li class="vl"><a class="menu__a__vl" href="#">Шкафы-купе</a></li>
                                <li class="vl"><a class="menu__a__vl" href="#">Стеллажи</a></li>
                                    </ul>
                        </li>
					<li class="menu__f"><a class="menu__a__f" href="#">Спальни</a>
                        
                                     <ul class="vl__li">
                                 <li class="vl"><a class="menu__a__vl" href="#">Шкафы-купе</a></li>
                                <li class="vl"><a class="menu__a__vl" href="#">Кровати</a></li>
                        </ul>
                        </li>  
                    </ul>    
                </div>
                </div>
                <div class="author">
                    <div class="mid clearfix">
                    <span class="author__name left wow bounceInUp">2017©FreezkoS</span>
                        <div class="vk__logo right  wow bounceInUp"><span class="vk__text">Мы Вконтакте </span><img src="{{url('images/vk.png')}}" class="img__vk"></div>
                    </div>
                </div>
            </footer>
				<script src="{{url('js.js')}}"></script>
      
              <script>
            $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            items:1,
            loop:true,
            autoplay: true,
            autoplayTimeout:5500
            });
            });
        </script>
				
				<script src="{{url('js/jquery.catslider.js')}}"></script>
				<script>
					$(function() {
						$( '#mi-slider' ).catslider();
						$( '#mi-slider2' ).catslider();
					});
				</script>
				<script src="{{url('js/jquery.catslider.js')}}"></script>
			<!--	<script src="js.js"></script>-->
<!--Якорь возврата	-->
      <div id="toTop"><img src="{{url('images/yakor.png')}}" width="50px" height="50px" class="img__w"> 
      </div>
<!--Телефоны-->
       <div id="phone"><img src="{{url('images/phone.png')}}" width="50px" height="50px" class="img__w"> 
      </div>
      
      <div class="number__block">
                      <p class="t__text">т. 89196174444</p>
                      <p class="t__text">т. 89871449292</p>
                      <a href="https://e.mail.ru/messages/inbox/?back=1" target="_blank">
                          <p class="em__text">egor.uxanov.97@mail.ru</p>
                      </a>
      </div>
      
<!--Модальное окно 1-->
     <div class="remodal wow zoomIn" data-remodal-id="modal">
      <button data-remodal-action="close" class="remodal-close"></button>
         <h1 class="zamer__zag">Вызов замерщика</h1>
         <div class="zamer__info left">
            <div class="zamer__info__text">
                <p class="info__modal__text">
                Одно из главных достоинств мебели, изготовленной на заказ, – возможность её «встраивания» в углы, ниши, между полом и потолком и пр. Естественно, при заказе такой мебели необходимо произвести идеально точные замеры помещения. Во избежание ошибок и неточностей замер всегда производится специалистами компании.
                </p>
                <p class="info__modal__text">
                С учётом Ваших пожеланий и особенностей помещения дизайнер разрабатывает первый, предварительный эскиз мебельной композиции.
                </p>
             </div>
             <div class="zamer__info__img">
                 <img src="{{url('images/big_bike.png')}}" class="img__zamer__auto">
             </div>
         </div>
         
        <div class="forma__modal right">
    <form>

        <label>Ваше Имя</label>
        <input name="name" placeholder="Введите Имя...">

        <label>Ваш город</label>
        <input name="email" type="email" placeholder="Уфа">

        <label>Контактный телефон</label>
         <input name="email" type="email" placeholder="Введите номер...">
        
         <label>Email</label>
         <input name="email" type="email" placeholder="Введите email...">
        
        <input id="submit" name="submit" type="submit" value="Отправить">

    </form>
        </div>
    </div>
      
      <!--Модальное окно 2-->
      <div class="remodal wow zoomIn" data-remodal-id="modal1">
          <button data-remodal-action="close" class="remodal-close"></button>
            <p class="info__modal__text">Для того, чтобы вызвать замерщика необходимо указать: свой email, действетельный контактный телефон, 
                Имя и город, в котором и необходимо производить установка нашей мебели.
            </p>
            <p class="info__modal__text">
                Для того, чтобы начать заполнять анкету, необходимо кликнуть в левый верхний угол по кнопке <span class="color__text">"Вызвать замерщика"</span> <span class="warning__text">(если вы используете десктопную версию сайта)</span> или правый верхний <span class="warning__text">(если мобильная версия сайта)</span>.
            </p>
            <p class="info__modal__text">
            Все очень просто!
            </p>
            <img src="{{url('images/lisa.png')}}" class="lisa__png">
      </div>
      
      <!--Модальное окно 3-->
      
            <div class="remodal wow zoomIn" data-remodal-id="modal2">
          <button data-remodal-action="close" class="remodal-close"></button>
            <p class="info__modal__text">
                На нашем сайте постоянно идет прирост новой и качественной мебели и чтобы вы ничего не пропустили, 
                желательно чтобы вы подписалиьс на рассылку новостей, тем самым вы будете всегда в курсе всех событий!
            </p>
            <p class="info__modal__text">
                Для того, чтобы оформить подписку, необходимо спустить вниз на главной странице, где находится заголовок <span class="color__text">"Оформить рассылку"</span>.
            </p>
            <img src="{{url('images/lisa2.png')}}" class="lisa__png">
      </div>
      
            <!--Модальное окно 4-->
      
            <div class="remodal wow zoomIn" data-remodal-id="modal3">
          <button data-remodal-action="close" class="remodal-close"></button>
            <p class="info__modal__text">Если вас не заинтересовал наш сайт - значит вы не видели все интересные работы, которые были у нас собраны.
            </p>
            <p class="info__modal__text">
               Вам достаточно выбрать в верхнем горизонтальном меню необходимый пункт, для того чтобы открыть все интересующие вас работы или ввести в поиск слова, которые относятся к той или иной мебели.
            </p>
            <p class="info__modal__text">
            Очень простой и интуитивный интерфейс поможет с легкостью найти все необходимо.
            </p>
            <img src="{{url('images/lisa3.jpg')}}" class="lisa__png">
      </div>
      
            <!--Модальное окно 5-->
      
            <div class="remodal wow zoomIn" data-remodal-id="modal4">
          <button data-remodal-action="close" class="remodal-close"></button>
            <p class="info__modal__text">
                С нами можно связаться по разному: через телефон или интернет.
            </p>
            <p class="info__modal__text">
                Если же вы выбрали второй пункт, то вам достаточно кликнуть по надписе с почтой и браузер автоматически перенаправит вас на наш почтовый ящик.
            </p>
            <p class="info__modal__text">
            Там вам просто необходимо указать: ваше имя, номер телефона и что вас интересует.
            </p>
            <img src="{{url('images/lisa4.jpg')}}" class="lisa__png">
      </div>
      
            <!--Модальное окно 6-->
      
            <div class="remodal wow zoomIn" data-remodal-id="modal5">
          <button data-remodal-action="close" class="remodal-close"></button>
            <p class="info__modal__text">
                Наша организация <span class="color__text">работает более 15 лет</span>.
            </p>
            <p class="info__modal__text">
               Каждый наш заказ делается быстро, качественно надежно. Еще небыло случаев, когда мы не доделывали работу, либо происходили какие либо непредвиденные проблемы. И если они и случатся, то сразу же заменем бракованный товар или вернем вам деньги.
            </p>
            <p class="info__modal__text">
            С Уважением, King Kitchen.
            </p>
            <img src="{{url('images/lisa5.png')}}" class="lisa__png">
      </div>
      
<!--Модальное окно скрипт-->
      <script src="{{url('remodal/remodal.min.js')}}"></script>
      
    <script type="text/javascript" src="{{url('js/Scroll.js')}}" ></script>
            <script type="text/javascript" src="{{url('wow/wow.min.js')}}" ></script>
        <script>
             wow = new WOW(
                      {
                      offset:      0,          // default
                    }
                    )
             wow.init();
        </script>
  </body>
</html>

