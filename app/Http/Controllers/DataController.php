<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMain()
    {
        return view('panel.data.main');
    }

    public function postMain(Request $request)
    {
        $rules = [
            'trade_name' => 'required|min:5',
            'fiscal_name' => 'min:5',
            'ruc' => 'digits:11',
            // 'phones' => '',
            'schedule_start' => 'date_format:H:i',
            'schedule_end' => 'date_format:H:i',
            'works_from' => 'date'
        ];
        $messages = [
            'trade_name.required' => 'Por favor ingresa el nombre comercial de tu empresa.',
            'trade_name.min' => 'Ingresa al menos 5 caracteres para el nombre comercial.',
            'fiscal_name.min' => 'Ingresa al menos 5 caracteres para el nombre fiscal.',
            'ruc.digits' => 'El NIF debe constar de 11 dígitos.',
            'schedule_start.date_format' => 'Ingresa una hora válida de inicio (formato 24 horas).',
            'schedule_end.date_format' => 'Ingresa una hora válida de fin (formato 24 horas).',
            'works_from.date' => 'Ingresa una fecha válida como inicio de la empresa.'
        ];

        $this->validate($request, $rules, $messages);

        // Update the authenticated user data
        $user = auth()->user();
        $user->trade_name = $request->get('trade_name');
        $user->fiscal_name = $request->get('fiscal_name');
        $user->ruc = $request->get('ruc');
        $user->phones = $request->get('phones');
        $user->schedule_start = $request->get('schedule_start');
        $user->schedule_end = $request->get('schedule_end');
        $user->works_from = $request->get('works_from');
        $user->save();

        return back()->with('notification', 'Tus datos se han actualizado correctamente !');
    }

    public function postProfileImage(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image'
        ]);

        $user = auth()->user();
        $extension = $request->file('photo')->getClientOriginalExtension();
        $file_name = $user->id . '.' . $extension;

        $path = public_path('images/users/' . $file_name);

        Image::make($request->file('photo'))
            ->fit(144, 144)
            ->save($path);

        $user->photo = $extension;
        $user->save();

        $data['success'] = true;
        $data['file_name'] = $file_name;
        return $data;
    }
}
