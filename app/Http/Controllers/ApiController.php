<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function loginApi(Request $request)
    {
        // dd("hallo");
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            if ($user->level === 'murid') {

                $token = $user->createToken('siswa_token')->plainTextToken;
                $response = ['status' => 200, 'token' => $token, 'user' => $user, 'message' => 'login berhasil'];
                return response()->json($response);
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'No Access!',
                ];
            }
        } else if (!$user) {
            $response = ['status' => 500, 'message' => 'No account found with this email'];
            return response()->json($response);
        } else {
            $response = ['status' => 500, 'message' => 'Wrong email or password! please try again'];
            return response()->json($response);
        }
    }


}