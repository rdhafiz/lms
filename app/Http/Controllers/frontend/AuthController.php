<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{

    public function login(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $credential = ['email' => $request->email, 'password' => $request->password];

            if(Auth::guard('users')->attempt($credential)) {
                return response()->json(['message' => 'Login successfully', 'data' => Auth::guard('users')->user()], 200);
            } else {
                return response()->json(['status' => 500, 'errors' => ['error' => 'Invalid Credentials! Please try again']], 500);
            }
        }catch ( \Exception $exception ) {
            return response()->json(['status' => 500, 'errors' => $exception->getMessage(), 'line' => $exception->getLine()], 500);
        }

    }

    public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:3|confirmed'
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json(['message' => 'Registration has been complete successfully']);
        }catch ( \Exception $exception ) {
            return response()->json(['status' => 500, 'errors' => $exception->getMessage(), 'line' => $exception->getLine()], 500);
        }
    }

    public function forget() {

    }

    public function reset() {

    }

}
