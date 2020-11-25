@extends('front.layout')

@section('main')
    <style>
      .about_part{
        margin-top: 30px !important;
        text-align: center;
        float: none !important;
        width: 700px !important;
      }
      .about_part span{
        font-size: 25px !important;
      }
      .about_part p{
        font-size: 18px !important;
        color: yellowgreen;
        font-family: cursive;
      }
    </style>
  <div class="content">
    <div>
      <div> <img src="{{ asset('images/professionals.jpg')}}" alt=""> </div>
      <div>
        <div id="aside" class="about_part"> 
          <span class="first">Bizning maqsadimiz</span>
          <p>Biz sizning farzandingizni kun tartibini kuzatib, sog'lom va quvnoq bo'lib o'sishini diqqat bilan kuzatib boramiz. Biz nafaqat farzandingizning sog'lig'i, balki uning psixologik ahvoli haqida ham qayg'uramiz.
          Toshkentda bolalar bog'chasini qidirayotgan ota-onalar uchun biz bolalarning bo'sh vaqtini tashkil etishga alohida e'tibor qaratayotganimizni ta'kidlaymiz, chunki toza havoda faol o'yinlar va qo'shma bayramlarda ishtirok etish bolaning sog'lom va barkamol rivojlanishi uchun zarurdir.
          Eng kichigi uchun bizda ochiq bolalar bog'chalari mavjud, bu erda ko'p yillik tajribaga ega yuqori malakali o'qituvchilar ishlaydi. Bolalar bizga kelganidan xursandlar, chunki bizda dam olish va faol o'yinlar uchun barcha sharoitlar mavjud.</p>
        </div>
      </div>
    </div>
  </div>

@endsection
