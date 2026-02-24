<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateStoreDTO;
use App\DTO\UpdateStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(
        protected StoreService $service
    )
    {}

    public function index(Request $request)
    {
        $stores = $this->service->getAll($request->filter);
        return view('admin/stores/index', compact('stores'));
    }

    public function show(string|int $id)
    {
        $store = $this->service->findOne($id);

        if(!$store){
            return back();
        }

        return view('admin/stores/show', compact('store'));
    }

    // public function create()
    // {
    //     return view('');
    // }

    public function store(StoreRequest $request)
    {
        $this->service->new(
            CreateStoreDTO::makeFromRequest($request)
        );

        return redirect()->route('store.index');
    }

    // public function edit(Store $store)
    // {
    //     if(!$store){
    //         return back();
    //     }

    //     return view('');
    // }

    public function update(StoreRequest $request, string $id)
    {
        $store = $this->service->update(UpdateStoreDTO::makeFromRequest($request));

        if(!$store){
            return back();
        }
        $message = [   
            'status'    =>  'success', 
            'message'   =>  'Registro excluído com sucesso!'
        ];
        return redirect()->route('store.index')->with('message', $message);
    }

    public function destroy(string $id)
    {
        $this->service->remove($id);
        $message = [   
            'status'    =>  'success', 
            'message'   =>  'Registro excluído com sucesso!'
        ];
        
        return redirect()->route('store.index')->with('message', $message);
    }
}