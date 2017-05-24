<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = $this->client()->customers;
        // $description = $this->client()->customers_description;
        return view('client.customers.index')->with(compact('customers'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.customers.create')->with(compact('client'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Debes ingresar el nombre del cliente.',
            'name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $customer = new Customer();
        $customer->user_id = $this->client()->id;

        $customer->name = $request->get('name');
        // image
        $customer->save();

        $notification = 'El cliente se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/clientes');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        // Check if the customer really belongs to the user
        if ($customer->user_id !== $this->client()->id)
            return redirect('/clientes');

        $client = $this->client();
        return view('client.customers.edit')->with(compact('client', 'customer'));
    }

    public function update(Request $request)
    {
        $rules = [
            'customer_id' => 'required|exists:customers,id',
            'name' => 'required|min:3'
        ];
        $messages = [
            'customer_id.required' => 'Es necesario indicar el cliente que se va a editar.',
            'customer_id.exists' => 'El cliente indicado no existe en nuestra base de datos.',
            'name.required' => 'Debes ingresar el nombre del cliente.',
            'name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $customer = Customer::find($request->get('customer_id'));
        $customer->name = $request->get('name');
        // image
        $customer->save();

        $notification = 'El cliente se ha actualizado correctamente!';
        return redirect('/clientes')->with(compact('notification'));
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        $notification = 'El cliente seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
