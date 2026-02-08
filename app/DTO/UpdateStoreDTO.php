<?php

namespace App\DTO;

use App\Http\Requests\StoreRequest;

class UpdateStoreDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $max_users,
        public string $status
    ) {}

    public static function makeFromRequest(StoreRequest $request): self
    {
        return new self(
            $request->id,
            $request->name,
            $request->max_users,
            $request->status
        );
    }
}