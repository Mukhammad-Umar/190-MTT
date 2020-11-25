<!DOCTYPE html>
<html>
<head>
<title>190-sonli Uchqun maktabgacha ta'lim muassasi</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}" media="screen">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css')}}" media="screen">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox-buttons.css')}}" media="screen">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox-thumbs.css')}}" media="screen">
  @yield('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->
</head>
<body>

  <div id="header">
    <div>
    <a href="{{ route('index')}}"><img src="{{ asset('images/logo.gif')}}" alt=""></a>
      <ul>
        <li class="@if(Request::is('/')) current @endif"><a href="{{ route('index')}}">Bosh Sahifa</a></li>
        <li class="@if(Request::is('admission')) current @endif"><a href="{{ route('admission')}}">Qabul jarayoni</a></li>
        <li class="@if(Request::is('about')) current @endif"><a href="{{ route('about')}}">Biz haqimizda</a></li>
        <li class="@if(Request::is('gallery')) current @endif"><a href="{{ route('gallery')}}">Gallereya</a></li>
        <li class="@if(Request::is('contact')) current @endif"><a href="{{ route('contact')}}">Bog`lanish</a></li>
      </ul>
    </div>
  </div>

    @yield('main')

  <div id="footer">
    <div>
        <div class="address"> 
            <span>Manzil:</span>
            <p>Toshkent shahri, Olmazor tumani,</p>
            <p>Sebzor M-17/18</p>
            <p>Telefon: 97 264-86-84</p>
        </div>
      <ul>
        <li> <a><img src="{{ asset('images/playing-in-grass.gif')}}" alt=""></a>
          <p>Odobli bola ota-onasini kasal boʻlibgina xafa qilishi mumkin.</p>
          <span class="readmore">Konfutsiy</span> </li>
        <li> <a><img src="{{ asset('images/baby-smiling.gif')}}" alt=""></a>
          <p>Bolalar hammani yaxshi koʻradi, ayniqsa unga eʼtibor va mehr koʻrsatganlarni.</p>
          <span class="readmore">Lev Tolstoy</span> </li>
      </ul>
    </div>
    <p class="footnote">Copyright &copy; 2020 <a>190-MTT sayti</a></p>
  </div>

    <script src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{ asset('js/jquery.mousewheel.pack.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox-buttons.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox-media.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox-thumbs.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/mine.js')}}"></script>

    @yield('js')

</body>
</html>