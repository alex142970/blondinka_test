<?php


namespace App;


use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class Bitrix24Provider extends AbstractProvider implements ProviderInterface
{

    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://' . env('BITRIX24_DOMAIN') . '/oauth/authorize', $state);
    }

    protected function getTokenUrl()
    {
        return 'https://oauth.bitrix.info/oauth/token/?grant_type=authorization_code&client_id='.
            $this->clientId . '&client_secret=' . $this->clientSecret .
            '&code=' . $this->getCode();
    }

    protected function getUserByToken($token)
    {
        $url = 'https://' . env('BITRIX24_DOMAIN') . '/rest/user.current.json?auth=' . $token;

        $response = $this->getHttpClient()->get($url);

        return json_decode($response->getBody(), true)['result'];
    }

    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id'       => $user['ID'],
            'email' => $user['EMAIL'],
            'name'     => $user['NAME'],
            'avatar'     => $user['PERSONAL_PHOTO'],
        ]);
    }
}
