<?php

namespace App\Http\Controllers;

use App\InboxMessage;
use App\ProfessionalMedia;
use App\ProfessionalProfile;
use App\Project;
use App\Service;
use App\User;
use App\WorkSchedule;

trait ClientDashboard
{

    public function getDashboardResponse()
    {   // to do: pass a parameter $isAdminOrSuperClient in this method
        // in the future, to avoid 2 queries here (has to be sent from the DashboardControllers)

        $is_admin = auth()->user()->is_admin;
        $is_super_client = auth()->user()->is_super_client;

        if ($is_admin || $is_super_client) {
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

        $messages = InboxMessage::where('user_id', $client->id)
            ->orderBy('id', 'desc')->take(7)->get();

        $variables = compact(
            'facebook', 'linkedIn', 'googlePlus', 'twitter', 'pinterest', 'fourSquare', 'instagram', 'youtube',
            'client', 'projects', 'services', 'professionalMedia',
            'workSchedule', 'messages'
        );

        if ($client->client_type == 'architect') {
            $architizer = $this->getProfessionalLink($client_id, 'Architizer');
            $archello = $this->getProfessionalLink($client_id, 'Archello');
            $archilovers = $this->getProfessionalLink($client_id, 'Archilovers');
            $buildings = $this->getProfessionalLink($client_id, 'Open Buildings');
            $behance = $this->getProfessionalLink($client_id, 'Behance');

            $variables += compact(
                'architizer', 'archello', 'archilovers', 'buildings', 'behance'
            );
        } else {
            $professionalLinks = $this->getProfessionalProfileLinks($client_id);
            $variables += compact(
                'professionalLinks'
            );
        }

        if ($client->hasSection('Marcas')) {
            $brands = $client->brands;
            $variables += compact('brands');
        }
        if ($client->hasSection('Artículos')) {
            $articles = $client->articles;
            $variables += compact('articles');
        }

        return view('client.dashboard')->with($variables);
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