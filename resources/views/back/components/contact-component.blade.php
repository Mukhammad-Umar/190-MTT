
<thead>
  <tr>
    @admin
      <td class="widthbutton">&nbsp;</td>
    @endadmin
    <td>Ism</td>
    <td>Telefon raqam</td>                            
    <td>Yuborilingan Vaqt</td>
  </tr>  
</thead>
<tbody id="pannel">
@foreach($contacts as $contact)
  <tr>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttondelete" id="{{$contact->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    <td>{{$contact->name}}</td>
    <td>{{$contact->telephone}}</td>
    <td>{{$contact->created_at}}</td>
  </tr>
@endforeach