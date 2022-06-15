<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(Request $request,  $provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createReview($getInfo, $provider);
        $login = session()->put(['status'=> $getInfo->getAvatar(),'name'=>$getInfo->name,'id'=>$getInfo->id]);
        return redirect()->route('reviews');
//        return redirect()->route('reviews')->with('status','auth');

    }

    function createReview($getInfo, $provider)
    {

        $user = Review::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $reviewe = new Review();
            $reviewe->name = $getInfo->name;
            $reviewe->email = $getInfo->email;
            $reviewe->provider = $provider;
            $reviewe->provider_id = $getInfo->id;
            $reviewe->avatar = $getInfo->getAvatar();
            $reviewe->avatar_original = $getInfo->avatar_original;
            $reviewe->save();

//            File::put(public_path() . '/uploads/profile/' . $getInfo->getId() . ".jpg", $fileContents);
//            $user = Review::create(
//                [
//                    'name'        => $getInfo->name,
//                    'email'       => $getInfo->email,
//                    'provider'    => $provider,
//                    'provider_id' => $getInfo->id,
//                    'avatar'      => $getInfo->getAvatar(),
//                    'avatar_original' => $getInfo->avatar_original,
//                ]
//            );
//        }
        }
        return $user;
    }
}

