<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'niveau' => ['required', 'string', 'max:64'],
            'nom' => ['required', 'string', 'max:32'],
            'prenom' => ['required', 'string', 'max:32'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sexeutilisateur' => ['required', 'string', 'in:fille,garcon'],
            'etab_prov' => ['string', 'max:64'],
            'date_naiss' => ['date_format:Y-m-d'],
            'nomtuteur' => ['required', 'string', 'max:64'],
            'prenomtuteur' => ['required', 'string', 'max:64'],
            'adresseutilisateur' => ['required', 'string', 'max:255'],
            'telutilisateur' => ['required ', 'string', 'max:16'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'niveau' => $data['niveau'],
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sexeutilisateur' => $data['sexeutilisateur'],
            'etab_prov' => $data['etab_prov'],
            'date_naiss' => $data['date_naiss'],
            'nomtuteur' => $data['nomtuteur'],
            'prenomtuteur' => $data['prenomtuteur'],
            'adresseutilisateur' => $data['adresseutilisateur'],
            'telutilisateur' => $data['telutilisateur'],
        ]);
    }
}