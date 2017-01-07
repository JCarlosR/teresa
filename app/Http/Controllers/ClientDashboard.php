<?php

namespace App\Http\Controllers;

use App\ProfessionalProfile;
use App\SocialProfile;

trait ClientDashboard
{
    public function getDashboardResponse()
    {
        $is_admin = auth()->user()->is_admin;

        if ($is_admin)
            $client_id = session('client_id');
        else
            $client_id = auth()->user()->id;

        $facebook = $this->getSocialProfile($client_id, 'Facebook');
        $linkedIn = $this->getSocialProfile($client_id, 'Linkedin');
        $googlePlus = $this->getSocialProfile($client_id, 'Google+');
        $twitter = $this->getSocialProfile($client_id, 'Twitter');
        $pinterest = $this->getSocialProfile($client_id, 'Pinterest');
        $fourSquare = $this->getSocialProfile($client_id, 'FourSquare');
        $flickr = $this->getSocialProfile($client_id, 'Flickr');
        $instagram = $this->getSocialProfile($client_id, 'Instagram');
        $youtube = $this->getSocialProfile($client_id, 'Youtube');

        $architizer = $this->getProfessionalLink($client_id, 'Architizer');
        $archello = $this->getProfessionalLink($client_id, 'Archello');
        $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');
        $buildings = $this->getProfessionalLink($client_id, 'Open Buildings');
        $behance = $this->getProfessionalLink($client_id, 'Behance');

        return view('client.dashboard')->with(compact(
            'facebook', 'linkedIn', 'googlePlus', 'twitter', 'pinterest', 'fourSquare', 'flickr', 'instagram', 'youtube',
            'architizer', 'archello', 'archilovers', 'buildings', 'behance'
        ));
    }

    public function getSocialProfile($user_id, $name)
    {
        $customObject = new \stdClass;

        $socialProfile = SocialProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($socialProfile) {
            // URL
            if ($socialProfile->url !== '')
                $customObject->url = $socialProfile->url;
            else
                $customObject->url = '#';
            // Followers
            $customObject->followers = $socialProfile->followers;
        } else {
            $customObject->url = '#';
            $customObject->followers = '?';
        }

        return $customObject;
    }

    public function getProfessionalLink($user_id, $name)
    {
        $professionalProfile = ProfessionalProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($professionalProfile && $professionalProfile->url !== '')
            return $professionalProfile->url;

        return '#';
    }
}