<?php

namespace App\Http\Controllers;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    use AccessClientAsAdmin;

    public function index()
    {
        $courses = $this->client()->courses;
        return view('client.courses.index')->with(compact('courses'));
    }

}
