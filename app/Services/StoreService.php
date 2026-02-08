<?php

namespace App\Services;

use App\DTO\CreateStoreDTO;
use App\DTO\UpdateStoreDTO;
use App\Repositories\StoreRepositoryInterface;

use stdClass;

class StoreService
{
    public function __construct(
        protected StoreRepositoryInterface $repository
    )
    {}
    
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass | null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateStoreDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateStoreDTO $dto): stdClass | null
    {
        return $this->repository->update($dto);
    }

    public function remove(string $id)
    {
        return $this->repository->delete($id);
    }
}