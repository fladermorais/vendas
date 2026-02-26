<?php

namespace App\Repositories;

use App\DTO\CreateUserDTO;
use App\DTO\UpdateUserDTO;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use stdClass;

class UserEloquentORM implements UserRepositoryInterface
{
    public function __construct(
        protected User $model
    ){}

    public function getAll(string $filter = null): array
    {
        $dados = $this->model
                    ->where(function($query) use($filter) {
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
        $user = $this->model->find($id);
        if(!$user){
            return null;
        } else {
            return (object) $user->toArray();
        }
    }

    public function delete(string $id)
    {
        $this->model->findOrFail($id)->delete();
    }

    public function new(CreateUserDTO $dto): stdClass
    {
        $user = $this->model->create(
            (array) $dto
        );

        return (object) $user->toArray();
    }

    public function update(UpdateUserDTO $dto): stdClass|null
    {
        $user = $this->model->find($dto->id);
        if(!$user){
            return null;
        }
        $user->update(
            (array) $dto
        );

        return (object) $user->toArray();
    }
}