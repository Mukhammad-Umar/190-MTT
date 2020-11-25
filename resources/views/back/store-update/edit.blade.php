@extends('back.store-update.template')

@section('form-open')
    @if (Request::is('admin/news/*'))
        <form method="post" action="{{ route('news.update', [$news->id]) }}">
                    {{ csrf_field() }}
                {{ method_field('PUT') }}
    {{-- @elseif (Request::is('admin/galleries/*'))
        <form method="post" action="{{ route('galleries.update', [$gallery->id]) }}">
                    {{ csrf_field() }}
                {{ method_field('PUT') }} --}}
    @elseif (Request::is('admin/users/*'))
        <form method="post" action="{{ route('users.update', [$user->id]) }}">
                    {{ csrf_field() }}
                {{ method_field('PUT') }}
    @endif
@endsection
