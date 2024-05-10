<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{
   private $userRepository;

   public function __construct(UserRepository $userRepository)
   {
        $this->userRepository = $userRepository;
   }

   public function findUserId($id)
   {
        $result = $this->userRepository->getUserId($id);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $result
        ]);
   }
}
