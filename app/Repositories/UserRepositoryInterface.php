<?php

namespace App\Repositories;

use App\DTO\CreateUserDTO;
use App\DTO\UpdateUserDTO;
use stdClass;

interface UserRepositoryInterface
{
    public function getAll(string $filter = null):array;

    public function findOne(string $id): stdClass | null;

    public function delete(string $id);

    public function new(CreateUserDTO $dto): stdClass;

    public function update(UpdateUserDTO $dto): stdClass | null;
}