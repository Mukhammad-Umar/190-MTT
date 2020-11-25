
<div class="form-group"><!-- !!!/images/ - custom -->
  <img class="img_product" src="@if(isset($image)){{asset('images/gallery/' . $image)}} @elseif(isset($gallery)){{asset('images/' . $gallery->image)}}@elseif(old('image')){{asset('images/gallery/' . old('image'))}}@else{{asset('img/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
  <!-- not updating image, only creating -->
  @if(Request::is('admin/galleries/create'))
    <form method="post" action="{{ route('gallery-upload') }}" name="form_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
      <input type="file" name="image" class="upload_field">
      <button type="submit" class="upload_submit">Go</button>
      <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Tanlash</button>
    </form>
  @endif
</div>
@yield('form-open')
<input type="hidden" id="image" name="image" value="@if(isset($image)){{'gallery/' . $image}}@elseif(isset($gallery)){{$gallery->image}}@elseif(old('image')){{old('image')}}@else{{'gallery/nophoto.jpg'}}@endif">
