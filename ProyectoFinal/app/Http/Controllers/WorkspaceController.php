<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WorkspaceController extends Controller
{
    public function index($userId) 
    {
        // Encuentra el usuario por su ID
        $user = User::find($userId);
        
        // Encuentra el provider asociado al usuario
        $provider = Provider::where('user_id', $userId)->first();
        
        // Encuentra el workspace asociado al provider
        $workspace = Workspace::where('provider_id', $provider->id)->first();

        // Encuentra todas las secciones asociadas al workspace
        $sections = Section::where('workspace_id', $workspace->id)->get();

        // Para cada sección, obtener sus productos
        foreach ($sections as $section) {
            $section->productos = Product::where('section_id', $section->id)->get();
        }

        // Pasa los datos a la vista
        return view('workspace', [
            'userId' => $userId,
            'brandName' => $provider->brand_name,
            'workspaceId' => $workspace->id,
            'sections' => $sections
        ]);
    }
}
