@extends('front.layout')
  @section('css')
  
  @endsection
@section('main')

  <div class="content">
    <div>
      <div> <img src="{{ asset('images/baby.jpg')}}" alt=""> </div>
      <div class="conditions">
        <p>
            <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
            </svg>Bog`chaga 3 yoshdan 7 yoshgacha bo`lgan bolalar qabul qilinadi</span>
        </p>
        <p>
          <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
          </svg>Hujjat topshirish ishlari davlat xizmatlari markazlari orqali va</span>
        </p>
        <p>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
          </svg>
          <a href="https://my.gov.uz/oz/service/285" target="_blank">my.gov.uz</a> sayti orqali amalga oshirishingiz mumkin
        </p>
      </div>
    </div>
  </div>

  @endsection