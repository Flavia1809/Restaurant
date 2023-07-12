<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use function RingCentral\Psr7\try_fopen;

class ProviderController extends Controller
{
//     //cod pt git + google de la code with tony
//    public function redirect($provider)
//   {
//        return Socialite::driver($provider)->redirect();
//   }
//
//    public function callback($provider)
//    {
//
//        $SocialUser = Socialite::driver($provider)->user();
//        dd($SocialUser);
//        $user = User::updateOrCreate([
//            'provider_id' => $SocialUser->id,
//            'provider'=>$provider
//        ], [
//            'name' => $SocialUser->name,
//            'username' => $SocialUser->nickname(),
//            'email' => $SocialUser->email,
//            'provider_token' => $SocialUser->token,
//        ]);
//
//
//        Auth::login($user);
//
//        return redirect('/dashboard');
//    }


    //arab
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),

                ]);
                Auth::login($new_user);
                return redirect()->intended('dashboard');
            }
            else {
                Auth::login($user);
                return redirect()->intended('dashboard');
            }

            } catch (\Throwable $th){
                dd('Merge da nu prea :/  ' . $th->getMessage());
            }
    }


}




