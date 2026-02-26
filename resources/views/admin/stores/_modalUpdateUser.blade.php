<div class="modal fade" id="updateModalUser_{{ $user['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update', $user['id']) }}" method="POST">
                    <input type="hidden" name="id" value="{{ $user['id'] }}">
                    @csrf
                    @method('PUT')
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
                    </div>
                    
                    <div class="col-m12">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" value="">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>