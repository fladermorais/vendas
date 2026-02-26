<div class="modal fade" id="createModalUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Criar um novo usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="store_id" id="store_id" value="{{ $store->id }}">
                    <div class="col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    
                    <div class="col-md-12">
                        <label for="password">Senha</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>