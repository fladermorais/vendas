<?php

namespace App\Services;

use App\DTO\CreateUserDTO;
use App\DTO\UpdateUserDTO;
use App\Repositories\UserRepositoryInterface;
use stdClass;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $repository
    ){}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass | null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateUserDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateUserDTO $dto): stdClass | null
    {
        return $this->repository->update($dto);
    }

    public function remove(string $id)
    {
        return $this->repository->delete($id);
    }
}