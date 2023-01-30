<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            "full_name" => ["required", 'min:4', 'max:63'],
            "email" => ["required", "email:rfc"],
            "password" =>  ["required", 'min:8', 'max:32'],
            // same:password
            "user_name" => ["required", 'alpha_num', 'min:6', 'max:63'],
        ]);
        $user = new User;
        $user->email = $request->email;
        $user->full_name = $request->full_name;
        $user->password = Hash::make($request->password);
        $user->user_name = $request->user_name;
        if ($request->password == $request->confirm_password) {
            $user->save();
            return response()->json("success", 200);
        } else {

            return response()->json(['error' => "password and confirm password not equal"], 400);
        }
    }

    public function login(Request $request)

    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        error_log($user->password);
        error_log($request->password);
        if ($user) {
            $hash_password = Hash::make($request->password);
            error_log($hash_password);
            // if (Hash::check($user->password, $request->password)) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $token = auth()->user()->createToken('API TOKEN')->plainTextToken;
                return response()->json([
                    'status' => true,
                    'message' => 'User Logged In Successfully',
                    'token' => $token
                ], 200);
            }
        }

        return response()->json("email or password is wrong", 400);


        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'device_name' => 'required',
        // ]);

        // $user = User::where('email', $request->email)->first();

        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }

        // return $user->createToken($request->device_name)->plainTextToken;
    }



    public function forgetPass(Request $request)
    {

        $request->validate([
            "password" =>  ["required", 'min:8', 'max:32']
        ]);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($request->password == $request->confirm_password) {
                User::where('email', $email)->update(['password' => $user->password = Hash::make($request->password)]);
                return response()->json("successfully password change", 200);
            }
            return response()->json("password and confirm password not equal", 400);
        }

        return response()->json("email not found", 400);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();


        return [
            'message' => 'Tokens Revoked'
        ];
    }
}