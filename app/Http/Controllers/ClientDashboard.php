<?php

namespace App\Http\Controllers;

use App\ProfessionalMedia;
use App\ProfessionalProfile;
use App\Project;
use App\Service;
use App\User;
use App\WorkSchedule;

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

        $workSchedule = WorkSchedule::where('user_id', $client_id)
            ->orderBy('created_at', 'desc')->first();

        $projects = Project::where('user_id', $client_id)->get();
        $services = Service::where('user_id', $client_id)->get();

        $professionalMedia = $this->getProfessionalMediaLinks($client_id);

        $facebook = $client->getSocialProfile('facebook');
        $linkedIn = $client->getSocialProfile('linkedin');
        $googlePlus = $client->getSocialProfile('google_plus');
        $twitter = $client->getSocialProfile('twitter');
        $pinterest = $client->getSocialProfile('pinterest');
        $fourSquare = $client->getSocialProfile('foursquare');
        $instagram = $client->getSocialProfile('instagram');
        $youtube = $client->getSocialProfile('youtube');

        if ($client->client_type == 'architect') {
            $architizer = $this->getProfessionalLink($client_id, 'Architizer');
            $archello = $this->getProfessionalLink($client_id, 'Archello');
            $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');
            $buildings = $this->getProfessionalLink($client_id, 'Open Buildings');
            $behance = $this->getProfessionalLink($client_id, 'Behance');

            return view('client.dashboard')->with(compact(
                'facebook', 'linkedIn', 'googlePlus', 'twitter', 'pinterest', 'fourSquare', 'instagram', 'youtube',
                'architizer', 'archello', 'archilovers', 'buildings', 'behance',
                'client', 'projects', 'services', 'professionalMedia',
                'workSchedule'
            ));
        } else {
            $professionalLinks = $this->getProfessionalProfileLinks($client_id);
            return view('client.dashboard')->with(compact(
                'facebook', 'linkedIn', 'googlePlus', 'twitter', 'pinterest', 'fourSquare', 'instagram', 'youtube',
                'professionalLinks',
                'client', 'projects', 'services', 'professionalMedia',
                'workSchedule'
            ));
        }
    }

    public function getProfessionalLink($user_id, $name)
    {
        $professionalProfile = ProfessionalProfile::where('user_id', $user_id)->where('name', $name)->first();

        if ($professionalProfile && $professionalProfile->url !== '')
            return $professionalProfile->url;

        return '#';
    }

    public function getProfessionalProfileLinks($user_id)
    {
        $professionalProfiles = ProfessionalProfile::where('user_id', $user_id)->get();
        foreach ($professionalProfiles as $professionalProfile) {
            if ($professionalProfile->url == '')
                $professionalProfile->url = '#';
        }
        return $professionalProfiles;
    }

    public function getProfessionalMediaLinks($user_id)
    {
        $professionalMedia = ProfessionalMedia::where('user_id', $user_id)->get();
        foreach ($professionalMedia as $item) {
            if ($item->url == '')
                $item->url = '#';
        }
        return $professionalMedia;
    }

}