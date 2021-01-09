<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BookHouse</title>
    <meta name="description" content="BookHouse - библиотека книг"><!--1-2-3 предложения о теме-->
    <meta name="keywords" content="выражения, через, запятую">
    <link href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('media/css/main.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('media/js/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('media/js/main.js')}}"></script>
</head>
    <body>
        <div id="header">
            <img src="{{asset('media/img/img_logo.jpg')}}" id="logo" />
            <h1 id="logotext">BookHouse </h1>
			<ul class="forAccount">
		@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </div>
		<div id="nav">
      <a href="#" data-title="BookHouse" data-body="Добро пожаловать в BookHouse, мир книг, знаний и увлечений!" 
      data-image="paperl-pen.png">Главная</a>
      <a href="#" data-title="BookHouse" data-body="<br>  BookHouse  — это динамично развивающаяся книжная библиотека.

		<br>  В нашем ассортименте вы найдете книги самых разных жанров, от горячих новинок до классики, non-fiction, бизнес, онлайн-бестселлеры. Конечно, в центре внимания — наши юные читатели. В нашей библиотеке представлен большой выбор литературы для детей самых разных возрастов: энциклопедии, сказки, развивающие книги, учебная литература, а также раскраски, настольные игры, музыкальные игрушки и многое другое.

		<br>  Всегда рады видеть вас в BookHouse!

		" 
      data-image="img1.jpg">О нас</a>
      <!-- <a href="#" data-title="Услуги компании" data-body="html code для страницы Услуги" 
      data-image="img2.jpg">Услуги</a> -->
      <a href="#" data-title="Наш продукт" data-body="" 
      data-image="img3.jpg">Библиотека</a>
			<!-- <a href="#">Портфолио</a> -->
			<a href="#" data-title="Контакты" data-body="
			<br>Адрес: Минск, ул.Кунцевщина, 13 
			<br>Телефон: +375 29 0000000
			<br>Email: tasnovikovaalex@yandex.ru<br>" data-image="img5.jpg">Контакты</a>
		</div>
		<div class="container my-cont">
		<div class="row">
		<div class="col-3 my-col-3">
		<a href="#" class="btn btn-light btn-block">Новинки</a>
		<a href="#" class="btn btn-light btn-block">Учебная литература</a>
		<a href="#" class="btn btn-light btn-block">Для авторов</a>
		</div>
		<div class="col">
		@yield('content')
	  
		</div>
		<div class="col-2">
      <!--http://www.pogoda.by-->
<!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), http://www.pogoda.by снимает с себя ответственность за конечный результат.-->

<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
</td></tr>
<tr><td>

<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
<tr><td>
<script type="text/javascript" charset="windows-1251" src="http://www.pogoda.by/meteoinformer/js/26850_1.js"></script>
</td></tr>
</table>

</td></tr>

<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">http://www.pogoda.by</a>
</td></tr>
</table>
    </div>
  </div>
</div>
	<div id="footer">
	Novikova &copy;
	</div>
    </body>

</html>