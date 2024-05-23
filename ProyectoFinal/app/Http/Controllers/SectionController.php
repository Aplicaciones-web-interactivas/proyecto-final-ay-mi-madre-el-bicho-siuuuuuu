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
}
