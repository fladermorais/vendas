<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateUserDTO;
use App\DTO\UpdateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service
    ){}

    public function store(UserCreateRequest $request)
    {
        $users = $this->service->new(
            CreateUserDTO::makeFromRequest($request)
        );

        return back();
    }

    public function update(UserUpdateRequest $request, string $id)
    {
        $user = $this->service->findOne($id);
        if(!$user){
            return back();
        }

        $this->service->update(
            UpdateUserDTO::makeFromRequest($request)
        );

        return back();

    }

    public function destroy(string $id)
    {
        $user = $this->service->remove($id);
        return back();
    }
}
