<?php

namespace App\Repositories;

use App\DTO\CreateStoreDTO;
use App\DTO\UpdateStoreDTO;
use App\Models\Store;
use App\Repositories\StoreRepositoryInterface;

use stdClass;

class StoreEloquentORM implements StoreRepositoryInterface
{
    public function __construct(
        protected Store $model
        )
    {}

    public function getAll(string $filter = null): array
    {
        $dados =  $this->model
                    ->where(function ($query) use($filter) {
                        if($filter){
                            $query->where('name', $filter);
                        }
                    })
                    ->get()
                    ->toArray();
        return $dados;
    }

    public function findOne(string $id): stdClass|null
    {
        $store = $this->model
                      ->find($id);
        
        if(!$store) {
            return null;
        } else {
            return (object) $store->toArray();
        }
    }

    public function delete(string $id)
    {
        $this->model->findOrFail($id)->delete();
    }

    public function new(CreateStoreDTO $dto): stdClass
    {
        $store = $this->model->create(
            (array) $dto
        );

        return (object) $store->toArray();
        
    }

    public function update(UpdateStoreDTO $dto): stdClass|null
    {
        $store = $this->model->find($dto->id);
        if(!$store){
            return null;
        }

        $store->update(
            (array) $dto
        );

        return (object) $store->toArray();
    }
}