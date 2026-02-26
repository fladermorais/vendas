@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Dados da Loja: {{ $store->name }}</h3>
                    <a class="btn btn-sm btn-primary text-center" href="" data-bs-toggle="modal" data-bs-target="#createModalUser">Novo Usuário</a>
                </div>
                
                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                        @if(isset($store->users))
                        @php
                            // dd($store->users[0]['id'])
                        @endphp
                        <tbody>
                            @foreach($store->users as $user)
                            <tr>
                                <th scope="row">{{ $user['id'] }}</th>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-info btn-sm" href="" data-bs-toggle="modal" data-bs-target="#updateModalUser_{{ $user['id'] }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('user.destroy', $user['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return(confirm('Deseja realmente excluir este registro?'))" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>

                                    </form>
                                </td>
                            </tr>

                            @include('admin.stores._modalUpdateUser')

                            @endforeach
                        </tbody>
                        @endif
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.stores._modalCreateUser');


@endsection
