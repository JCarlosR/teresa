<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ClientDashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return $this->getDashboardResponse();
    }
}
