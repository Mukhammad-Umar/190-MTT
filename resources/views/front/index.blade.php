@extends('front.layout')

@section('main')

  <div id="content">
    <div>
      <div class="news-blog">
          <div class="news">
            <span>Yangilliklar</span>
          </div>
          @foreach($news as $news)
            <section class="news-blog">
              <a href="{{route('news', [$news->id])}}"><h1>{{$news->title}}</h1></a>
              <p>{{ Str::limit($news->information, 400, '...') }}
                @if (Str::length($news->information) > 250 )
                    <a href="{{route('news', [$news->id])}}">To`liq o`qish -></a>
                @endif
              </p>
            </section>
          @endforeach
          <span class="link-to">
            <p> Kop`roq yangiliklar uchun &nbsp;<a href="https://mdo.uz/uz" target="_blank"> Vazirlik saytiga o`ting -></a></p>
          </span>
      </div>
    </div>
  </div>
  
@endsection