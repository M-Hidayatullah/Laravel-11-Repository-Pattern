<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository{

    /**
     * get user data by id
     * @param $id
     * @return void
     */
    public function getUserId($id);
}
