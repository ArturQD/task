<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public function create_user(Request $request){
//        $user = User::create([
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'password' => Hash::make($request['password'])
//        ]);
//        return response()->json([
//            'success' => true,
//            'message' => 'User created successfully'
//        ]);
//    }
}
