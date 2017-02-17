<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRegistry;
use App\User;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    /**
     * @var UserRegistry
     */
    private $userRegistry;

    /**
     * Create a new controller instance.
     *
     * @param UserRegistry $userRegistry
     */
    public function __construct(UserRegistry $userRegistry)
    {
//        $this->middleware('guest');
        $this->userRegistry = $userRegistry;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'verify_token' => $this->generateVerificationToken()
        ]);
    }

    /**
     * Generate verification token for the user
     */
    public function generateVerificationToken()
    {
        $pool = array_merge(range(0,9),range('a','z'),range('A','Z'));

        shuffle($pool);

        $sliced = array_slice($pool,0,10);

        return  implode('',$sliced);

    }

    /**
     * Activate Users account after registration
     *
     * @param $token
     */

    public function  verifyToken($token)
    {
        $user =  $this->userRegistry->activateUser($token);

        if(!$user)
        {
            abort(503);
        }

        return $this->login($user);

    }

    /**
     *
     * Login the users
     * 
     * @param $user
     * @return mixed
     */
    public function login($user)
    {
        Auth::login($user);
        return redirect('/home');

    }
}
