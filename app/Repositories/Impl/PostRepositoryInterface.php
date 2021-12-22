<?php

namespace App\Repositories\Impl;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function create($data);

    public function update($id, $request);


}
