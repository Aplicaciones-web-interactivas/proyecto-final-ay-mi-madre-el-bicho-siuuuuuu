<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public function index()
    {
        // Obtiene todos los proveedores
        $providers = Provider::all();

        // Para cada proveedor, obtener sus workspaces, secciones y productos
        foreach ($providers as $provider) {
            $provider->workspaces = Workspace::where('provider_id', $provider->id)->get();

            foreach ($provider->workspaces as $workspace) {
                $workspace->sections = Section::where('workspace_id', $workspace->id)->get();

                foreach ($workspace->sections as $section) {
                    $section->products = Product::where('section_id', $section->id)->get();
                }
            }
        }

        // Pasa los datos a la vista
        return view('main_shop', [
            'providers' => $providers
        ]);
    }

}
