<?php

namespace App\Http\Controllers;

use App\ProfessionalProfile;
use App\SocialProfile;

trait ClientDashboard
{
    public function getDashboardResponse($isAdmin, $client_id)
    {
        $facebook = $this->getSocialLink($client_id, 'Facebook');
        $linkedIn = $this->getSocialLink($client_id, 'Linkedin');
        $googlePlus = $this->getSocialLink($client_id, 'Google+');
        $twitter = $this->getSocialLink($client_id, 'Twitter');
        $fourSquare = $this->getSocialLink($client_id, 'FourSquare');

        $architizer = $this->getProfessionalLink($client_id, 'Architizer');
        $archello = $this->getProfessionalLink($client_id, 'Archello');
        $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');

        if ($isAdmin)
            return view('admin.home')->with(compact(
                'facebook', 'linkedIn', 'googlePlus', 'twitter', 'fourSquare',
                'architizer', 'archello', 'archilovers',
                'client_id'
            ));

        return view('panel.home')->with(compact(
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