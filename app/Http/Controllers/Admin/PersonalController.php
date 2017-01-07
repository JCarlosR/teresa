<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client_id = session('client_id');
        $employees = Employee::where('user_id', $client_id)->get();
        return view('admin.employees.index')->with(compact('employees'));
    }

    public function store(Request $request)
    {
        $rules = [
            'job' => 'required',
            'name' => 'required',
            'emails' => '',
            'phones' => 'min:6'
        ];
        $messages = [
            'job.required' => 'Por favor especifica el cargo del contacto.',
            'name.required' => 'Debes ingresar el nombre del contacto.',
            'phones.min' => 'Ingresa al menos 6 caracteres para el teléfono, o deja el campo vacío.'
        ];
        $this->validate($request, $rules, $messages);

        $employee = new Employee();
        $employee->user_id = session('client_id');
        $employee->job = $request->get('job');
        $employee->name = $request->get('name');
        $employee->emails = $request->get('emails');
        $employee->phones = $request->get('phones');
        $employee->save();

        session()->flash('notification', 'Los datos de contacto se han registrado correctamente!');
        return back();
    }

    public function update(Request $request)
    {
        $employee = Employee::find($request->get('employee_id'));
        $employee->job = $request->get('job');
        $employee->name = $request->get('name');
        $employee->emails = $request->get('emails');
        $employee->phones = $request->get('phones');
        $employee->save();

        session()->flash('notification', 'Los datos de contacto se han actualizado correctamente!');
        return back();
    }

    public function delete(Request $request)
    {
        $employee = Employee::find($request->get('employee_id'));
        $employee->delete();

        session()->flash('notification', 'El personal de contacto seleccionado ha sido eliminado.');
        return back();
    }
}
