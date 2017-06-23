<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class BrandController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = $this->client()->brands;
        // $description = $this->client()->projects_description;
        return view('client.brands.index')->with(compact('brands'));
    }

//    public function show($id)
//    {
//        $project = Project::findOrFail($id);
//
//        // Check if the project really belongs to the user
//        if ($project->user_id !== $this->client()->id)
//            return redirect('/proyectos');
//
//        $client = $this->client();
//        return view('client.projects.show')->with(compact('client', 'project'));
//    }

    public function create()
    {
        $client = $this->client();
        return view('client.brands.create')->with(compact('client'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'website' => 'required|url'
        ];
        $messages = [
            'name.required' => 'Debes ingresar el nombre de la marca.',
            'name.min' => 'El nombre ingresado es muy corto (se requieren al menos 3 caracteres).',
            'website.required' => 'Debes ingresar el sitio web de la marca.',
            'website.url' => 'La URL ingresada no tiene un formato válido.'
        ];
        $this->validate($request, $rules, $messages);

        $brand = new Brand();
        $brand->user_id = $this->client()->id;

        $brand->name = $request->get('name');
        $brand->title = $request->get('name'); // SEO fields will be edited later
        $brand->type = $request->get('type');
        $brand->industry = $request->get('industry');
        $brand->foundation = $request->get('foundation');
        $brand->founder = $request->get('founder');
        $brand->products = $request->get('products');
        $brand->website = $request->get('website');

        $brand->question_1 = $request->get('question_1');
        $brand->question_2 = $request->get('question_2');
        $brand->question_3 = $request->get('question_3');

        $brand->save();

        $notification = 'La marca se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/marcas');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        // Check if the project really belongs to the user
        if ($brand->user_id !== $this->client()->id)
            return redirect('/marcas');

        $client = $this->client();
        return view('client.brands.edit')->with(compact('client', 'brand'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'website' => 'required|url'
        ];
        $messages = [
            'name.required' => 'Debes ingresar el nombre de la marca.',
            'name.min' => 'El nombre ingresado es muy corto (se requieren al menos 3 caracteres).',
            'website.required' => 'Debes ingresar el sitio web de la marca.',
            'website.url' => 'La URL ingresada no tiene un formato válido.'
        ];
        $this->validate($request, $rules, $messages);

        $brand = Brand::find($id);
        $brand->user_id = $this->client()->id;

        $brand->name = $request->get('name');
        $brand->title = $request->get('title'); // SEO field (just seen by administrators)
        $brand->description = $request->get('description'); // SEO field (just seen by administrators)
        $brand->type = $request->get('type');
        $brand->industry = $request->get('industry');
        $brand->foundation = $request->get('foundation');
        $brand->founder = $request->get('founder');
        $brand->products = $request->get('products');
        $brand->website = $request->get('website');

        $brand->question_1 = $request->get('question_1');
        $brand->question_2 = $request->get('question_2');
        $brand->question_3 = $request->get('question_3');

        $brand->save();

        $notification = 'La marca se ha modificado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/marcas');
    }

    public function delete($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        $notification = 'La marca seleccionada se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
