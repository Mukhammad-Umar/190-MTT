@extends('front.layout')

@section('css')
    <style>
        .pre-container{
            background: whitesmoke;
        }
    </style>
@endsection

@section('main')
<div class="pre-container">
    <div class="container">
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8 single-news">

                @foreach ($news as $news)

                    <!-- Title -->
                    <h1 class="mt-4 news-title">{{$news->title}}</h1>

                    <!-- Date/Time -->
                    <p class="news-date">{{ $news->created_at }} da chop etilingan</p>

                    <hr>

                    <p>{{$news->information}}</p>
                    
                    @endforeach

                <hr>

            </div>

        </div>
    </div>
</div>
@endsection