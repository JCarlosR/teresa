<?php

namespace App\Http\Controllers\SuperClient;

use App\Http\Controllers\ClientDashboard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('super_client');
    }

    public function index()
    {
        return $this->getDashboardResponse();
    }
}
