<?php

namespace App\DTO;

use App\Http\Requests\UserUpdateRequest;
use Symfony\Component\HttpFoundation\Request;

class UpdateUserDTO 
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
        public string $password
    ){}

    public static function makeFromRequest(UserUpdateRequest $request): self
    {
        return new self (
            $request->id,
            $request->name,
            $request->email,
            $request->password,
        );
    }
}

?>