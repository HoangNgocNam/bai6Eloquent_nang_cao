<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($request)
    {
        $this->model->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
    }

    public function update($id, $request)
    {
        $data = $request->only("name","email","password");
        $this->model-> where('id', $id)
            ->update($data);
    }

    public function getPostOfUser($userId)
    {
       $user = $this->getById($userId);
       return $user->posts;
    }
}
