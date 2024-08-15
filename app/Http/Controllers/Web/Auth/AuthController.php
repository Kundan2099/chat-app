<?php

namespace App\Http\Controllers\Web\Auth;

use App\Enums\Gender;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Events\UserRegistred;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;


interface AuthInterface
{
    public function viewLogin();
    public function handleLogin(Request $request);
    public function viewRegister();
    public function handleRegister(Request $request);
}

class AuthController extends Controller implements AuthInterface
{

    /** 
     * Create a new controller instanceo
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * View Login
     * 
     * @return mixed
     */
    public function viewLogin(): mixed
    {
        try {
            return view('web.pages.auth.login');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'As error occured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Login
     * 
     * @return mixed
     */
    public function handleLogin(Request $request): mixed
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'min:10', 'max:100', 'exists:users'],
                'password' => ['required', 'string', 'min:1', 'max:20']
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], $request->get('remember'))) {
                return redirect(RouteServiceProvider::HOME);
            }

            return redirect()->back()->withErrors([
                'password' => ['Wrong password']
            ])->withInput($request->only('email', 'remember'));
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'As error occured',
                'description' => $exception->getMessage()
            ]);
        }
    }


    /**
     * View Register
     * 
     * @return mixed
     */
    public function viewRegister(): mixed
    {
        try {
            return view('web.pages.auth.register');
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'As error occured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Register
     * 
     * @return mixed
     */
    public function handleRegister(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'min:1', 'max:250'],
                'email' => ['required', 'string', 'email', 'unique:users', 'min:1', 'max:250'],
                'phone' => ['required', 'numeric', 'unique:users', 'digits:10'],
                'gender' => ['required', 'string', new Enum(Gender::class)],
                'date_of_birth' => ['required', 'string', 'min:1', 'max:250'],
                'home' => ['nullable', 'string', 'min:1', 'max:250'],
                'street' => ['nullable', 'string', 'min:1', 'max:250'],
                'postal_code' => ['required', 'numeric', 'digits:6'],
                'city' => ['required', 'string', 'min:3', 'max:100'],
                'state' => ['required', 'string', 'min:3', 'max:100'],
                'country' => ['required', 'string', 'min:3', 'max:100'],
                'password' => ['required', 'string', 'min:6', 'max:20'],
            ]);


            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->gender = $request->input('gender');
            $user->date_of_birth = $request->input('date_of_birth');
            $user->home = $request->input('home');
            $user->street = $request->input('street');
            $user->postal_code = $request->input('postal_code');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->password = Hash::make($request->input('password'));
            $user->save();


            event(new UserRegistred($user));
            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'As error occured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}
