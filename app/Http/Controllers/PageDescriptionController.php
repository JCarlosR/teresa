<?php

namespace App\Http\Controllers;

use App\PageDescription;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageDescriptionController extends Controller
{
    use AccessClientAsAdmin;

    private $allowedPageNames = 'services,projects';

    public function update($name, Request $request)
    {
        $rules = [
            'page' => 'in_array:'.$this->allowedPageNames
        ]; // default message because the error is only show for "strange" users
        $this->validate($request, $rules); // TO DO (?) Rule::in

        $client = $this->client();

        $pageDescription = PageDescription::firstOrNew([
            'user_id' => $client->id,
            'page' => $name
        ]);
        $pageDescription->description = $request->input('presentation');
        $pageDescription->save();

        $notification = 'La presentación de la página se ha actualizado correctamente.';
        return back()->with(compact('notification'));
    }
}
