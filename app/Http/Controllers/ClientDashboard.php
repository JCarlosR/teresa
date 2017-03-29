<?php

namespace App\Http\Controllers;

use App\ProfessionalProfile;
use App\Project;
use App\Service;
use App\SocialProfile;
use App\User;

trait ClientDashboard
{
    public function getDashboardResponse()
    {
        $is_admin = auth()->user()->is_admin;

        if ($is_admin) {
            $client_id = session('client_id');
            $client = User::findOrFail($client_id);
        } else {
            $client = auth()->user();
            $client_id = $client->id;
        }

        $facebook = $this->getSocialProfile($client_id, 'Facebook', 'https://www.fb.com/{id}');
        $linkedIn = $this->getSocialProfile($client_id, 'Linkedin', 'https://www.linkedin.com/company/{id}');
        $googlePlus = $this->getSocialProfile($client_id, 'Google+', 'https://plus.google.com/+{id}');
        $twitter = $this->getSocialProfile($client_id, 'Twitter', 'https://twitter.com/{id}');
        $pinterest = $this->getSocialProfile($client_id, 'Pinterest', 'http://www.pinterest.com/{id}');
        $fourSquare = $this->getSocialProfile($client_id, 'FourSquare', 'https://foursquare.com/user/{id}');
        $instagram = $this->getSocialProfile($client_id, 'Instagram', 'https://www.instagram.com/{id}');
        $youtube = $this->getSocialProfile($client_id, 'Youtube', 'https://www.youtube.com/{id}');

        $architizer = $this->getProfessionalLink($client_id, 'Architizer');
        $archello = $this->getProfessionalLink($client_id, 'Archello');
        $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');
        $buildings = $this->getProfessionalLink($client_id, 'Open Buildings');
        $behance = $this->getProfessionalLink($client_id, 'Behance');

        $projects = Project::where('user_id', $client_id)->get();
        $services = Service::where('user_id', $client_id)->get();

        return view('client.dashboard')->with(compact(
            'facebook', 'linkedIn', 'googlePlus', 'twitter', 'pinterest', 'fourSquare', 'instagram', 'youtube',
            'architizer', 'archello', 'archilovers', 'buildings', 'behance',
            'client', 'projects', 'services'
        ));
    }

    public function getSocialProfile($user_id, $name, $placeholder)
    {
        $customObject = new \stdClass;
        $customObject->id = '';
        $customObject->state = false;

        $socialProfile = SocialProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($socialProfile) {
            // the URL field is used as the ID
            // and the URL have to be calculated after replace the ID in the placeholder
            $customObject->id = $socialProfile->url;
            
            if ($socialProfile->id !== '')
                $customObject->url = str_replace('{id}', $customObject->id, $placeholder);
            else
                $customObject->url = '#';

            // TODO: Update the followers count just once per day
            // $customObject->followers = $socialProfile->followers;

            $customObject->state = $socialProfile->state;
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