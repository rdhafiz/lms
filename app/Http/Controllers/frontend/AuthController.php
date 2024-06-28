<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{

    /**
     * User login
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

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

    /**
     * User registration
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6|confirmed'
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
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

    /**
     * User forget
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function forget(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $userInformation = User::where('email', $request->email)->first();

            if($userInformation == null) {
                return response()->json(['errors' => ['email' => ['Email not found']]], 500);
            }

            $random_number = rand(10000000, 99999999);
            $userInformation->reset_code = $random_number;
            $userInformation->save();

            Mail::send('emails.forget', ['userInfo' => $userInformation], function ($message) use ($userInformation) {
                $message->to($userInformation['email'], $userInformation['name'])->subject(env('MAIL_FROM_NAME') . ': Password reset code');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            return response()->json(['message' => 'Forget password has been successfully']);
        }catch( \Exception $exception ) {
            return response()->json(['status' => 500, 'errors' => $exception->getMessage(), 'line' => $exception->getLine()], 500);
        }
    }

    /**
     * User reset
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function reset(Request $request) {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'email' => 'required',
                'reset_code' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }
            $userInformation = User::where(['email' => $input['email'], 'reset_code' => $input['reset_code']])->first();
            if($userInformation === null) {
                return response()->json(['status' => 500, 'error' => 'invalid request. Check your reset code']);
            }
            if(Hash::check($input['password'], $userInformation['password'])) {
                return response()->json(['errors' => ['password' => ['Please kindly use another password']]], 500);
            }
            $userInformation->password = bcrypt($input['password']);
            $userInformation->reset_code = null;
            $userInformation->save();
            return response()->json(['message' => 'Reset password has been successfully']);
        }catch( \Exception $exception) {
            return response()->json(['status' => 500, 'errors' => $exception->getMessage(), 'line' => $exception->getLine()], 500);
        }
    }

    public function profileDetails(Request $request) {
        try {
            $user_id = Auth::guard('users')->id();
            $user = User::where('id', $user_id)->first();
            return response()->json(['message' => 'User data show successfully', 'data' => $user]);
        } catch ( \Exception $exception) {
            return response()->json(['status' => 500, 'errors' => $exception->getMessage(), 'line' => $exception->getLine()], 500);
        }
    }

    public function profileLogout(Request $request) {
        try {
            Auth::guard('users')->logout();
            return response()->json([ 'message' => 'Logout successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

}
