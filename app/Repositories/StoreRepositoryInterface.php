<?php

namespace App\Repositories;

use App\DTO\ {
    CreateStoreDTO,
    UpdateStoreDTO,
};
use stdClass;

interface StoreRepositoryInterface
{
    public function getAll(string $filter = null):array;

    public function findOne(string $id): stdClass|null;

    public function delete(string $id);

    public function new(CreateStoreDTO $dto): stdClass;

    public function update(UpdateStoreDTO $dto): stdClass|null;
}