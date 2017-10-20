<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'apellidos' => 'required|max:255',
            'pais' => 'required|max:255',
            'tipoCuenta' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users|confirmed',
            'password' => 'required|min:6',
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
        
    
            $user = User::create([
             'name' => $data['name'],
             'apellidos' => $data['apellidos'],
             'email' => $data['email'],
             'pais' => $data['pais'],
             'tipoCuenta' => $data['tipoCuenta'],
             'password' => bcrypt($data['password']),
              
        ]);
            
         Mail::send('emails.contacto',['msg'=> $user],function($message)use($data){
           $message->to('solisjinmy@gmail.com', $data['name'])->subject('tu mensaje recibido');
       });
        return $user;
       
    }
    
    
    
    public function redirectPath()
    {
        if (auth()->user()->tipoCuenta == 'personal') {
            return '/home';
        }else

        return  '/homeEmpresa';
    }
    
    
}
