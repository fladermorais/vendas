@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1>Usuários</h1>
    </div>
</div>  
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between row">
        <h3 class="col-md-10">Usuários da Loja: {{ $store->name }}</h3>
        <x-adminlte-button label="Novo Usuário" data-toggle="modal" data-target="#createModalUser" class="bg-success col-md-2"/>
        {{-- <a class="btn btn-sm btn-primary text-center" href="" data-bs-toggle="modal" data-bs-target="#createModalUser">Novo Usuário</a> --}}
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
                        <x-adminlte-button label="" icon="fa-solid fa-pen-to-square" data-toggle="modal" data-target="#updateModalUser_{{ $user['id'] }}" class="bg-info btn-sm col-md-2"/>
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


@include('admin.stores._modalCreateUser')

@stop