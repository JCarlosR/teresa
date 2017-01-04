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

        $facebook = $this->getSocialLink($client_id, 'Facebook');
        $linkedIn = $this->getSocialLink($client_id, 'Linkedin');
        $googlePlus = $this->getSocialLink($client_id, 'Google+');
        $twitter = $this->getSocialLink($client_id, 'Twitter');
        $fourSquare = $this->getSocialLink($client_id, 'FourSquare');

        $architizer = $this->getProfessionalLink($client_id, 'Architizer');
        $archello = $this->getProfessionalLink($client_id, 'Archello');
        $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');

        return view('client.dashboard')->with(compact(
            'facebook', 'linkedIn', 'googlePlus', 'twitter', 'fourSquare',
            'architizer', 'archello', 'archilovers'
        ));
    }

    public function getSocialLink($user_id, $name)
    {
        $socialProfile = SocialProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($socialProfile && $socialProfile->url !== '')
            return $socialProfile->url;

        return '#';
    }

    public function getProfessionalLink($user_id, $name)
    {
        $professionalProfile = ProfessionalProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($professionalProfile && $professionalProfile->url !== '')
            return $professionalProfile->url;

        return '#';
    }
}