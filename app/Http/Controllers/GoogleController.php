<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);

            $finduser = User::where('email', $user->getEmail())->first();
            if ($finduser) {
                Auth::login($finduser);
                switch (Auth::user()->role) {
                    case Role::ADMIN:
                        return redirect()->to('/home');
                        
                        break;
                    case Role::KRT:
                        return redirect()->to('/kt');
                        break;
                    case Role::PKK:
                        return redirect()->to('/pkk');
                        break;
                    case Role::RW:
                        return redirect()->to('/rw');
                        break;
                    case Role::TAKMIR:
                        return redirect()->to('/takmir');
                        break;
                    case Role::NOACCESS:
                        Auth::logout();
                        return redirect()->intended('login')->with('alert', 'Akun anda belum Mendapat Hak Akses');
                        break;
                }
                // return redirect()->intended('home');




            } else {
                // User::create([
                //     'google_id' => $user->id,
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'password' => bcrypt('12345678'),
                //     'role' => '7',
                // ]);

                // Auth::login($newUser);
                
                return redirect()->intended('login')->with('alert', 'Akun anda belum terdaftar');
                

            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
