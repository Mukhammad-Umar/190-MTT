
<thead>
  <tr>
    <td class="col-6"></td>
    @admin
      <td class="widthbutton col-3">&nbsp;</td>
    @endadmin
    <td class="col-3">Rasm</td>
    <td class="col-6"></td>
  </tr>  
</thead>
<tbody id="pannel" class="back-pannel">
@foreach($galleries as $gallery)
  <tr>
    <td></td>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$gallery->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    <td><img src="{{ asset('images/' . $gallery->image)}}" alt=""></td>
  </tr>
@endforeach