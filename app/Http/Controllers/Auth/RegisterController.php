<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use App\Teacher;
use App\Student;

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
    public function registerSelect()
    {
        return view('auth.select-register');
    }

    public function registerStudent()
    {
        return view('auth.register-student');
    }

    public function registerTeacher()
    {
        return view('auth.register-teacher');
    }

    // public function registerStaff()
    // {
    //     return view('auth.register-staff');
    // }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'usr_name' => ['required', 'string', 'max:255'],
            'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $user = User::create([
            'usr_name' => $data['usr_name'],
            'usr_email' => $data['usr_email'],
            'usr_password' => Hash::make($data['password']),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        

        if ($data['role'] == 1) {
            Student::create([
            'user_id'   => $user->usr_id,
            'nis'=> $data['nis'],
            'gender'=>$data['gender'],
            'class'=>$data['class'],
            'major'=>$data['major'],
            'school_year'=> $data['school_year'], 
            
        ]);
            

            //student
            $user->assignRole('student');
            $user->created_by = $user->usr_id;


        } elseif ($data['role'] == 2){
            Teacher::create([
            'user_id'   => $user->usr_id,
            'nip'=> $data['nip'],
            'teacher_subject'=> $data['teacher_subject'], 
            'gender'=>$data['gender'],
        ]);
            
            $user->assignRole('teacher');
            $user->created_by = $user->usr_id;
        } 

        Mail::to($data['usr_email'])->send(new SendMail($user));
        return $user;
    }
}
