<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProfessionalMedia;
use App\ProfessionalProfile;
use App\SocialProfile;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // TODO: client_selected middleware
    }

    public function getSocialProfiles()
    {
        $socialPages = [
            ['Facebook', 'facebook', 'https://www.fb.com/{id}'],
            ['Linkedin', 'linkedin', 'https://www.linkedin.com/company/{id}'],
            ['Google+', 'google_plus', 'https://plus.google.com/{id}'],
            ['Twitter', 'twitter', 'https://twitter.com/{id}'],
            ['Pinterest', 'pinterest', 'http://www.pinterest.com/{id}'],
            ['FourSquare', 'foursquare', 'https://es.foursquare.com/v/{id}'],
            ['Instagram', 'instagram', 'https://www.instagram.com/{id}'],
            ['Youtube', 'youtube', 'https://www.youtube.com/{id}']
        ];

        $socialProfiles = collect();

        foreach ($socialPages as $socialPage) {
            $socialProfile = SocialProfile::firstOrCreate([
                'display' => $socialPage[0],
                'name' => $socialPage[1],
                'user_id' => session('client_id')
            ]);

            $socialProfile->placeholder = $socialPage[1];
            $socialProfiles->push($socialProfile);
        }

        return view('admin.profiles.social')->with(compact('client_id', 'socialProfiles'));
    }

    public function postSocialProfile(Request $request)
    {
        $socialProfile = SocialProfile::firstOrCreate([
            'name' => $request->get('name'),
            'user_id' => session('client_id')
        ]);
        $socialProfile->url = $request->get('url');
        $socialProfile->state = $request->get('state');
        // $socialProfile->followers = $request->get('followers');
        $socialProfile->notes = $request->get('notes');
        $socialProfile->save();

        return back()->with('notification', 'El perfil social se ha actualizado correctamente!');
    }


    public function getProfessionalProfiles()
    {
        $client = User::find(session('client_id'));

        if ($client->client_type == 'architect') {
            $professionalPageNames = [
                'Architizer',
                'Archello',
                'Archilovers',
                'Open Buildings',
                'Behance'
            ];

            $professionalProfiles = collect();

            foreach ($professionalPageNames as $professionalPageName) {
                $professionalProfile = ProfessionalProfile::firstOrCreate([
                    'name' => $professionalPageName,
                    'user_id' => session('client_id')
                ]);
                $professionalProfiles->push($professionalProfile);
            }

        } else {
            $professionalProfiles = ProfessionalProfile::where('user_id', $client->id)->get();
        }

        return view('admin.profiles.professional')->with(compact('professionalProfiles', 'client'));
    }

    public function postProfessionalProfile(Request $request)
    {
        $client = User::find(session('client_id'));

        if ($client->client_type == 'architect') {
            $professionalProfile = ProfessionalProfile::firstOrCreate([
                'name' => $request->get('name'),
                'user_id' => session('client_id')
            ]);
            $professionalProfile->url = $request->get('url');
            $professionalProfile->notes = $request->get('notes');
            $professionalProfile->state = $request->get('state');
            $professionalProfile->save();
        } else {
            $professionalProfile = ProfessionalProfile::find($request->input('id'));
            $name = $request->input('name');
            if ($name) {
                if (! $professionalProfile) {
                    $professionalProfile = new ProfessionalProfile();
                    $professionalProfile->user_id = session('client_id');
                }

                $professionalProfile->name = $name;
                $professionalProfile->url = $request->get('url');
                $professionalProfile->notes = $request->get('notes');
                $professionalProfile->state = $request->get('state');
                $professionalProfile->save();
            } else {
                if ($professionalProfile)
                    $professionalProfile->delete();
            }
        }

        return back()->with('notification', 'El perfil profesional se ha actualizado correctamente!');
    }


    public function getProfessionalMedia()
    {
        $client = User::find(session('client_id'));

        $professionalMedia = ProfessionalMedia::where('user_id', $client->id)->get();

        return view('admin.profiles.media')->with(compact('professionalMedia', 'client'));
    }

    public function postProfessionalMedia(Request $request)
    {
        $professionalMedia = ProfessionalMedia::find($request->input('id'));

        $name = $request->input('name');
        if ($name) {
            if (! $professionalMedia) {
                $professionalMedia = new ProfessionalMedia();
                $professionalMedia->user_id = session('client_id');
            }

            $professionalMedia->name = $name;
            $professionalMedia->url = $request->get('url');
            $professionalMedia->notes = $request->get('notes');
            $professionalMedia->state = $request->get('state');
            $professionalMedia->save();
        } else {
            if ($professionalMedia)
                $professionalMedia->delete();
        }

        return back()->with('notification', 'El medio profesional se ha actualizado correctamente!');
    }
}
