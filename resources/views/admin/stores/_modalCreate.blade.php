<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    
                    <div class="col-md-12">
                        <label for="max_users">Quantidade de usuários</label>
                        <input type="number" name="max_users" id="max_users" class="form-control">
                    </div>
                    
                    <div class="col-m12">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="a">Ativo</option>
                            <option value="i">Inativo</option>
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>