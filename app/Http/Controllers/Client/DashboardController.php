<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientDashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return $this->getDashboardResponse();
    }
}
