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

                    @include('admin.stores._formUser')
                    
                    <hr>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                
                </form>
            </div>
        </div>
    </div>
</div>