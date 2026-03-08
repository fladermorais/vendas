@extends('adminlte::page')

@section('title', 'Lojas')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1>Lojas</h1>
    </div>
</div>
@stop

@section('content')

<div class="card">
    
    <div class="card-header d-flex justify-content-between row">
        <h3 class="col-md-10">{{ __('Lista de Lojas') }}</h3>
        <x-adminlte-button label="Novo" data-toggle="modal" data-target="#createModal" class="bg-success col-md-2"/>
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
                        <a class="btn btn-secondary btn-sm" href="{{ route('store.show', $store['id']) }}"><i class="fa-solid fa-eye"></i></a>
                        <x-adminlte-button label="" icon="fa-solid fa-pen-to-square" data-toggle="modal" data-target="#updateModal_{{ $store['id'] }}" class="bg-info btn-sm"/>
                        {{-- <a class="btn btn-info btn-sm" href="" data-bs-toggle="modal" data-bs-target="#updateModal_{{ $store['id'] }}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
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


@include('admin.stores._modalCreate');


@stop
