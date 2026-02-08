<?php

namespace App\DTO;

use App\Http\Requests\StoreRequest;

class CreateStoreDTO
{
    public function __construct(
        public string $name,
        public string $max_users,
        public string $status
    ){}

    public static function makeFromRequest(StoreRequest $request): self
    {
        return new self(
            $request->name,
            $request->max_users,
            $request->status
        );
    }
}