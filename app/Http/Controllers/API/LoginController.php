<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginAPI(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::with("murid")->where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
            if ($user->level === 'murid') {
                $token = $user->createToken('Personal Access Token')->plainTextToken;
                $g = $user->murid;
                $response = [
                    'status' => 200,
                    'token' => $token,
                    'user' => $user,
                    'message' => 'Success!',
                    'relasi' => $g,
                ];
                return response()->json($response);
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'No Access!',
                ];
                return response()->json($response);
            }
        } else if ($user == '[]') {
            $response = [
                'status' => 500,
                'message' => 'No Data Available!',
            ];
            return response()->json($response);
        } else {
            $response = [
                'status' => 500,
                'message' => 'Wrong Email or Password!',
            ];
            return response()->json($response);
        }
    }
}
