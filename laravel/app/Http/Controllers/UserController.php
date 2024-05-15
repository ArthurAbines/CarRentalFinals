<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api',['except'=>['login','register']]);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'profile' => 'required|image|max:2048', // Assuming profile is an image
            'validID' => 'required|image|max:2048', // Assuming validID is an image
        ], [
            'profile.required' => 'The profile picture is required.',
            'validID.required' => 'The valid ID picture is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        // Create a new user instance
        $user = new User([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
        ]);

        // Handle profile and validID file uploads
        $profilePath = $request->file('profile')->store('profiles', 'public');
        $validIDPath = $request->file('validID')->store('validIDs', 'public');

        // Assign file paths to user model
        $user->profile = '/storage/' . $profilePath;
        $user->validID = '/storage/' . $validIDPath;

        // Mark the user's email as verified
        $user->markEmailAsVerified();
        // Save the user
        $user->save();

        // Generate token
        $token = JWTAuth::fromUser($user);

        return response()->json([
            "status" => 1,
            "message" => "User registered successfully",
            "user" => $user,
            "token" => $token
        ], 200);
    }

    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    "status" => "error",
                    "message" => "Invalid credentials"
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        // Retrieve the authenticated user
        $user = Auth::user();

        // Set the token as a cookie in the response
        // $cookie = Cookie::make('token', $token, 1); // Token expires in 2 minutes
        $cookie = Cookie::make('token', $token, 60 * 24 * 3);

        // Include user's ID in the token payload
        $token = JWTAuth::fromUser($user);

        return response()->json([
            "user" => $user,
            "message" => "Login successfully",
            'token' => $token
        ])->withCookie($cookie);
    }

    public function show()
    {
        try {
            // Retrieve the authenticated user
            $user = Auth::user();
    
            // Check if the user exists
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
    
            // Return the user data
            return response()->json(['user' => $user]);
        } catch (TokenExpiredException $e) {
            return response()->json(['message' => 'Token is expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['message' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token not found'], 500);
        }
    }


    public function logout(Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (TokenExpiredException $e) {
            return response()->json(['message' => 'Token is expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['message' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token not found'], 500);
        }
    
        if ($user) {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'Successfully logged out']);
        } else {
            return response()->json(['error' => 'Could not log out']);
        }
    }

}
