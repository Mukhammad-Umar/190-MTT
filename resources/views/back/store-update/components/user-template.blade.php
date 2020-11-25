
  @yield('form-open')
  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">@lang('Ism')</label>
    <input type="text" class="form-control" id="name" name="name" value="@if(isset($user)){{$user->name}}@elseif(old('name')){{old('name')}}@endif" placeholder="Ism" required> 
    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
  </div>
  <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}"">
    <label for="role">Saytda Bajaradigan Vazifasi</label>
    <select class="form-control" name="role" id="role">
      <option>User</option>
      <option>Redac</option>
      <option>Admin</option>
    </select>
  </div>
  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email">@lang("Email")</label>
    <input type="email" class="form-control" id="email" name="email" value="@if(isset($user)){{$user->email}}@elseif(old('email')){{old('email')}}@endif" placeholder="Email" required> 
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
  @if(Request::is('admin/users/create'))
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
      <label for="password">@lang("Parol")</label>
      <input type="text" class="form-control" id="password" name="password" value="@if(isset($user)){{$user->password}}@elseif(old('password')){{old('password')}}@endif" placeholder="Parol" required> 
      {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
    </div>
  @endif