<?php

namespace App\DTO;

use App\Http\Requests\UserCreateRequest;
use Symfony\Component\HttpFoundation\Request;

class CreateUserDTO 
{
    public function __construct(
        public string $name,
        public string $email,
        public string $store_id
    ){}

    public static function makeFromRequest(UserCreateRequest $request): self
    {
        return new self (
            $request->name,
            $request->email,
            $request->store_id
        );
    }
}

?>