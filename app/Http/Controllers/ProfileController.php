<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSocialProfiles()
    {
        $socialPages = [
            'Facebook',
            'Linkedin',
            'Google+',
            'Twitter',
            'FourSquare'
        ];
        return view('panel.profiles.social')->with(compact('socialPages'));
    }

    public function getProfessionalProfiles()
    {
        $professionalPages = [
            'Architizer',
            'Archello',
            'Addtiva',
            'Archilovers',
            'Open Buildings',
            'Behance',
            'Phaidon Atlas'
        ];
        return view('panel.profiles.professional')->with(compact('professionalPages'));
    }
}
