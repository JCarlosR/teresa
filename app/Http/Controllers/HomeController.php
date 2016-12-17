<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SocialProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client_id = auth()->user()->id;
        return $this->getDashboardResponse(false, $client_id);
    }

}
