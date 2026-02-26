<div class="col-md-12">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ isset($store['name']) ? $store['name'] : old('name')}}">
    @if($errors->has('name'))
    @foreach($errors->get('name') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>

<div class="col-md-12">
    <label for="max_users">Quantidade de usuários</label>
    <input type="number" name="max_users" id="max_users" class="form-control" value="{{ isset($store['max_users']) ? $store['max_users'] : "" }}">
    @if($errors->has('number'))
    @foreach($errors->get('number') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>

<div class="col-m12">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option {{ isset($store['status']) && $store['status'] == 'a' ? "selected" : "" }} value="a">Ativo</option>
        <option {{ isset($store['status']) && $store['status'] == 'i' ? "selected" : "" }} value="i">Inativo</option>
    </select>
    @if($errors->has('status'))
    @foreach($errors->get('status') as $e)
    <span class="error">{{$e}}</span>
    @endforeach
    @endif
</div>