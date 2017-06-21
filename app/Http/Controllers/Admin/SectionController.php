<?php

namespace App\Http\Controllers\Admin;

use App\ClientSection;
use App\Http\Controllers\Controller;
use App\Section;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SectionController extends Controller
{
    use AccessClientAsAdmin;

    public function index()
    {
        $id = $this->client()->id;
        $sections = Section::all();
        $clientSections = ClientSection::where('user_id', $id)->pluck('section_id')->toArray();

        // mark as assigned
        foreach ($sections as $section) {
            $section->marked = in_array($section->id, $clientSections);
        }

        return view('admin.sections.index')->with(compact('sections'));
    }

    public function status($id, $action)
    {
        $clientSection = ClientSection::where('user_id', $this->client()->id)
            ->where('section_id', $id)->first();

        if ($action === 'enable') {
            if (! $clientSection) {
                $clientSection = new ClientSection();
                $clientSection->user_id = $this->client()->id;
                $clientSection->section_id = $id;
                $clientSection->save();
            }
        } else { // disable
            if ($clientSection)
                $clientSection->delete();
        }

        return back();
    }

}
