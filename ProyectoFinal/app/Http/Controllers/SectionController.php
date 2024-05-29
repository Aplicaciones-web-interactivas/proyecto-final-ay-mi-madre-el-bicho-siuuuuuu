<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\Section;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SectionController extends Controller
{
    public function nuevaSeccion(Request $request)
    {
        $nuevaSeccion = new Section();
        $nuevaSeccion->workspace_id = $request->workspace_id;
        $nuevaSeccion->name = $request->nombre; 
        $nuevaSeccion->save();

        return redirect()->back();
    }

    public function editarSeccion(Request $request){
        $seccion = Section::find($request->section_id_input_edit);
        $seccion->name = $request->input('nombre_edit');
        $seccion->save();
        return redirect()->back();
    }

    public function eliminarSeccion($id){
        $seccion=Section::find($id);
        $seccion->delete();
        return redirect()->back();
    }

}
