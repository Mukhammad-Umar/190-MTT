
<thead>
  <tr>
    <td class="widthbutton">&nbsp;</td>
    <td class="widthbutton">&nbsp;</td>
    <td>Id</td>
    <td>Login</td>                            
    <td>Role</td>
    <td>Email</td>
  </tr>  
</thead>
<tbody id="pannel">
@foreach($users as $user)
  <tr>
    <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$user->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('users.edit', $user->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->role}}</td>
    <td>{{$user->email}}</td>
  </tr>
@endforeach