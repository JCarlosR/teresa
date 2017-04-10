<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            ['Facebook', 'https://www.fb.com/{id}'],
            ['Linkedin', 'https://www.linkedin.com/company/{id}'],
            ['Google+', 'https://plus.google.com/{id}'],
            ['Twitter', 'https://twitter.com/{id}'],
            ['Pinterest', 'http://www.pinterest.com/{id}'],
            ['FourSquare', 'https://es.foursquare.com/v/{id}'],
            ['Instagram', 'https://www.instagram.com/{id}'],
            ['Youtube', 'https://www.youtube.com/{id}']
        ];

        $socialProfiles = collect();

        foreach ($socialPages as $socialPage) {
            $socialProfile = SocialProfile::firstOrCreate([
                'name' => $socialPage[0],
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

        return view('admin.profiles.professional')->with(compact('professionalProfiles'));
    }

    public function postProfessionalProfile(Request $request)
    {
        $professionalProfile = ProfessionalProfile::firstOrCreate([
            'name' => $request->get('name'),
            'user_id' => session('client_id')
        ]);
        $professionalProfile->url = $request->get('url');
        $professionalProfile->notes = $request->get('notes');
        $professionalProfile->state = $request->get('state');
        $professionalProfile->save();

        return back()->with('notification', 'El perfil profesional se ha actualizado correctamente!');
    }

}
