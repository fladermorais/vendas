<div class="col-md-12">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ isset($user['name']) ? $user['name'] : old('name')}}">
    @if($errors->has('name'))
    @foreach($errors->get('name') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>

<div class="col-md-12">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ isset($user['email']) ? $user['email'] : "" }}">
    @if($errors->has('email'))
    @foreach($errors->get('email') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>

<div class="col-m12">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control" value="">
    @if($errors->has('password'))
    @foreach($errors->get('password') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>