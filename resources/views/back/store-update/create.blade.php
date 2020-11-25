@extends('back.store-update.template')

@section('form-open')
    @if (Request::is('admin/news/*'))
        <form method="post" action="{{ route('news.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
    @elseif (Request::is('admin/galleries/*'))
    <form method="post" action="{{ route('galleries.store') }}">
                {{ csrf_field() }}
            {{ method_field('POST') }}
    @elseif (Request::is('admin/users/*'))
    <form method="post" action="{{ route('users.store') }}">
                {{ csrf_field() }}
            {{ method_field('POST') }}
    @endif
@endsection