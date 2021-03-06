<?php

namespace App\Http\Controllers;

use App\Course;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $courses = $this->client()->courses;
        return view('client.courses.index')->with(compact('courses'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.courses.create')->with(compact('client'));
    }

    public function store(Request $request)
    {
        $rules = [
            'pdf' => 'mimes:pdf'
        ];
        $messages = [
            'pdf.mimes' => 'El archivo adjunto no es un PDF válido.'
        ];
        $this->validate($request, $rules, $messages);

        $course = new Course();
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->discount = $request->input('discount');
        $course->user_id = $this->client()->id;
        // dd($request->hasFile('pdf'));
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $path = public_path() . '/pdf/courses';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $course->pdf = $fileName;
        }
        $course->save();

        $notification = 'El curso se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/cursos');
    }

    public function edit($id)
    {
        $client = $this->client();
        $course = Course::find($id);
        return view('client.courses.edit')->with(compact('client', 'course'));
    }

    public function update($id, Request $request)
    {
        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->discount = $request->input('discount');
        $course->user_id = $this->client()->id;

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $path = public_path() . '/pdf/courses';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $course->pdf = $fileName;
        }
        $course->save();

        $notification = 'El curso se ha modificado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/cursos');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();

        $notification = 'El curso se ha eliminado correctamente.';
        session()->flash('notification', $notification);

        return redirect('/cursos');
    }
}
