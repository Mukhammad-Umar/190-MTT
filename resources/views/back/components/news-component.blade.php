<thead>
  <tr>
    @admin
      <td class="widthbutton">&nbsp;</td>
    @endadmin
    @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
      <td class="widthbutton">&nbsp;</td>
    @endif
    <td>Mavzu</td>
    <td class="content">Ma'lumot</td>
  </tr>  
</thead>
<tbody id="pannel" class="back-pannel">
@foreach($news as $news)
  <tr>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$news->id}}" href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
      <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('news.edit', $news->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    @endif
    <td>{{$news->title}}</td>
    <td class="content">{{$news->information}}</td>
  </tr>
@endforeach
</tbody>