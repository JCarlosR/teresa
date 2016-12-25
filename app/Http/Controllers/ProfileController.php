<?php

namespace App\Http\Controllers;

use App\ProfessionalProfile;
use App\SocialProfile;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getSocialProfiles($client_id)
    {
        $socialPageNames = [
            'Facebook',
            'Linkedin',
            'Google+',
            'Twitter',
            'Pinterest',
            'FourSquare'
        ];
        $socialProfiles = collect();

        foreach ($socialPageNames as $socialPageName) {
            $socialProfile = SocialProfile::firstOrCreate([
                'name' => $socialPageName,
                'user_id' => $client_id
            ]);
            $socialProfiles->push($socialProfile);
        }

        return view('admin.profiles.social')->with(compact('client_id', 'socialProfiles'));
    }
    public function postSocialProfile(Request $request, $client_id)
    {
        $socialProfile = SocialProfile::firstOrCreate([
            'name' => $request->get('name'),
            'user_id' => $client_id
        ]);
        $socialProfile->url = $request->get('url');
        $socialProfile->notes = $request->get('notes');
        $socialProfile->state = $request->get('state');
        $socialProfile->save();

        return back()->with('notification', 'El perfil social se ha actualizado correctamente!');
    }

    public function getProfessionalProfiles($client_id)
    {
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
                'user_id' => $client_id
            ]);
            $professionalProfiles->push($professionalProfile);
        }

        return view('admin.profiles.professional')->with(compact('client_id', 'professionalProfiles'));
    }
    public function postProfessionalProfile(Request $request, $client_id)
    {
        $professionalProfile = ProfessionalProfile::firstOrCreate([
            'name' => $request->get('name'),
            'user_id' => $client_id
        ]);
        $professionalProfile->url = $request->get('url');
        $professionalProfile->notes = $request->get('notes');
        $professionalProfile->state = $request->get('state');
        $professionalProfile->save();

        return back()->with('notification', 'El perfil profesional se ha actualizado correctamente!');
    }

}
