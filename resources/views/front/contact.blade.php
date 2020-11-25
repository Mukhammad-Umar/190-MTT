@extends('front.layout')

@section('main')

<style>
  body{
    background:white;
  }
  #footer{
    background: #5d802c;
  }
</style>
  <hr>
  <hr>
<div class="container">
    <section class="section pb-5">
        <div class="row contact_text col-lg-12">
            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Biz bilan bog`lanish</h2>
            <!--Section description-->
            <p class="section-description pb-4">Agar sizga 190-sonli Uchqun maktabgacha ta'lim muassasi ma'qul kelgan bo`lsa, yoki qandaydr savollaringiz bo`lsa, unda bizga ismingiz va telefon raqamingizni yuvoring va biz siz bilan bog`lanib, sizni qiziqtirgan savollaringizga javob beramz.</p>
        </div>
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tocontact')}}" method="post">
						   		 {{ csrf_field() }}
                        <!--Body-->
                        <div class="md-form">
                            <input type="text" id="form-name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            <label for="form-name">Ismingiz</label>

                            @error('name')
                                <span class="invalid-feedback pb-4" role="alert">
                                    <strong>Ism noto`g`ri yozilgan!</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="text" id="form-email" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}">
                            <label for="form-email">Telefon raqamingiz</label>

                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Telefon raqam noto`g`ri yozilgan!</strong>
                                </span>
                            @enderror
                        </div>

                        <br>
                        <p style="font-size:10px;">* bo`sh kataklar ichiga ismingiz va telefon raqamingizni yozing</p>
                        
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                @if(is_array(session()->get('success')))
                                <ul>
                                    @foreach (session()->get('success') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @else
                                    {{ session()->get('success') }}
                                @endif
                            </div>
                        @endif

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-light-blue">Yuborish</button>
                        </div>
                
                    </form>
                </div>
            </div>
            <!--Form with header-->
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-7">
                <!--Yandex map-->
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.uz/maps/org/143723039320/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">190-sonli Uchqun maktabgacha ta'lim muassasi</a><a href="https://yandex.uz/maps/10335/tashkent/category/day_care_center_kindergarten/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Bolalar bog'chasi  Toshkentda</a><iframe src="https://yandex.uz/map-widget/v1/-/CCQpeKAqKA" width="630" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div><br>
                <!--Buttons-->
                <div class="row text-center">
                    <div class="col-md-6">
                    <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                    <p> Toshkent shahari, Olmazor tumani</p>
                    <p> Sebzor M-17/18</p>
                    </div>
                    <div class="col-md-6">
                    <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                    <p>Mudira: Yahyayeva Gulira'no Jahongirovna</p>
                    <p>+998 97 264 86 84</p>
                    </div>
                </div>
            </div>
            <!--Grid column-->
        </div>
    </section>
</div>

  @endsection