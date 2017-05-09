<?php

namespace App\Http\Controllers;

use App\SocialProfile;

trait SocialProfilesMethods
{
    private $socialProfilePlaceholders = [
        'facebook' => 'https://www.fb.com/{id}',
        'linkedin' => 'https://www.linkedin.com/company/{id}',
        'google_plus' => 'https://plus.google.com/{id}',
        'twitter' => 'https://twitter.com/{id}',
        'pinterest' => 'http://www.pinterest.com/{id}',
        'foursquare' => 'https://foursquare.com/user/{id}',
        'instagram' => 'https://www.instagram.com/{id}',
        'youtube' => 'https://www.youtube.com/{id}'
    ];

    public function getSocialProfile($name)
    {
        $placeholder = '';
        if (isset($this->socialProfile[$name]))
            $placeholder = $this->socialProfile[$name];

        $customObject = new \stdClass;
        $customObject->id = '';
        $customObject->state = false;

        $socialProfile = SocialProfile::where('user_id', $this->id)->where('name', $name)->first();

        if ($socialProfile) {
            // the URL is calculated, for that the ID is replaced in the placeholder

            $customObject->state = $socialProfile->state;
            if ($customObject->state==TRUE) {
                $customObject->id = $socialProfile->profile_id;
                $customObject->url = str_replace('{id}', $customObject->id, $placeholder);
            } else {
                $customObject->id = '';
                $customObject->url = '#';
            }

            // TODO: Update the followers count based on just ONE request per day to the APIs
            // $customObject->followers = $socialProfile->followers;
        } else {
            $customObject->url = '#';
            $customObject->followers = '?';
        }

        return $customObject;
    }

}