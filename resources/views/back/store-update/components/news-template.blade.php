
@yield('form-open')
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title">@lang('Sarlavha')</label>
    <input type="text" class="form-control" id="title" name="title" value="@if(isset($news)){{$news->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Sarlavha | Title" required> 
    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('information') ? 'has-error' : '' }}">
    <label for="information">@lang("Ma'lumot")</label>
    <input type="text" class="form-control" id="information" name="information" value="@if(isset($news)){{$news->information}}@elseif(old('information')){{old('information')}}@endif" placeholder="Information" required> 
    {!! $errors->first('information', '<small class="help-block">:message</small>') !!}
</div>