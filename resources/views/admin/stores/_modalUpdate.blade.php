<div class="modal fade" id="updateModal_{{ $store['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.update', $store['id']) }}" method="POST">
                    <input type="hidden" name="id" value="{{ $store['id'] }}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ isset($store['name']) ? $store['name'] : old('name')}}">
                    </div>
                    
                    <div class="col-md-12">
                        <label for="max_users">Quantidade de usuários</label>
                        <input type="number" name="max_users" id="max_users" class="form-control" value="{{ isset($store['max_users']) ? $store['max_users'] : "" }}">
                    </div>
                    
                    <div class="col-m12">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ isset($store['status']) && $store['status'] == 'a' ? "selected" : "" }} value="a">Ativo</option>
                            <option {{ isset($store['status']) && $store['status'] == 'i' ? "selected" : "" }} value="i">Inativo</option>
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>