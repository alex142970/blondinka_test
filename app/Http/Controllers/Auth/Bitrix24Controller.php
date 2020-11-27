<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

class Bitrix24Controller extends Controller
{
    /**
     * Redirect on bitrix24 oauth url
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function redirect()
    {
        return Socialite::driver('bitrix24')->redirect();
    }

    /**
     * Callback from bitrix oauth
     */

    public function handleCallback()
    {
        $bitrixUser = Socialite::driver('bitrix24')->user();

        //Find exist user
        $user = User::whereEmail($bitrixUser->email)->first();

        if(empty($user)) {

            //make new user with profile

            $user = new User();
            $user->bitrix_id = $bitrixUser->getId();
            $user->name = $bitrixUser->getName();
            $user->email = $bitrixUser->getEmail();
            $user->save();

            $userProfile = $this->mapProfile(new UserProfile(), $bitrixUser->user);
            $userProfile->user_id = $user->id;
            $userProfile->save();
        } else {

            //update user with profile

            $user->name = $bitrixUser->getName();
            $user->save();

            $userProfile = $this->mapProfile($user->profile, $bitrixUser->user);
            $userProfile->save();
        }

        auth()->login($user, true);

        return redirect()->to('/home');
    }

    /**
     * @param UserProfile $userProfile
     * @param $payload array
     * @return UserProfile
     */

    protected function mapProfile(UserProfile $userProfile, array $payload)
    {
        $map = [];

        foreach ($payload as $field => $value) {
            if($field == 'PERSONAL_BIRTHDAY') {
                $value = Carbon::parse($value)->toDateString();
            }
            $map[strtolower($field)] = empty($value) ? null : $value;
        }

        $userProfile->fill($map);

        return $userProfile;
    }
}
