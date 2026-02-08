@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{ __('Lojas') }}</h3>
                    <a class="btn btn-sm btn-primary text-center" href="" data-bs-toggle="modal" data-bs-target="#createModal">Novo</a>
                </div>
                
                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Máximo de usuários</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stores as $store)
                            <tr>
                                <th scope="row">{{ $store['id'] }}</th>
                                <td>{{ $store['name'] }}</td>
                                <td>{{ $store['max_users'] }}</td>
                                <td> <span class="badge bg-{{ $store['status'] == "a" ? "success" : "danger" }}">{{ $store['status'] }}</span></td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-info btn-sm" href="" data-bs-toggle="modal" data-bs-target="#updateModal_{{ $store['id'] }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('store.destroy', $store['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return(confirm('Deseja realmente excluir este registro?'))" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>

                                    </form>
                                </td>
                            </tr>

                            @include('admin.stores._modalUpdate')

                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.stores._modalCreate');


@endsection
