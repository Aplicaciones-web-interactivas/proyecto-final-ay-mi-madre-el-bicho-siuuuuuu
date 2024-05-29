<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\Sale;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ProviderController extends Controller
{
    public function nuevoProveedor(Request $request)
    {
        // Crear el usuario y asignar el rol de proveedor
        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->correo, 
            'password' => Hash::make($request->contraseña),  
            'idRol' => 2,
        ]);

        // Crear el proveedor con el ID del usuario recién creado
        $nuevoProveedor = new Provider();
        $nuevoProveedor->user_id = $user->id;
        $nuevoProveedor->brand_name = $request->brand; 
        $nuevoProveedor->save();

        $nuevoWorkspace = new Workspace();
        $nuevoWorkspace->provider_id = $nuevoProveedor->id;
        $nuevoWorkspace->save();

        return redirect()->back();
    }

    public function editarProveedor(Request $request, $id){
        $editarProveedor = User::find($id);
        $editarProveedor->name = $request->input('name');
        $editarProveedor->email = $request->input('email');
        $editarProveedor->save();
        return redirect()->back();
    }

    public function eliminarProveedor($id){
        $eliminarProveedor=User::find($id);
        $eliminarProveedor->delete();
        return redirect()->back();
    }

    public function graficaBarras($userId)
    {
        // Obtener ventas por producto y proveedor específico
        $ventasPorProveedor = Sale::join('products', 'ventas.id_producto', '=', 'products.id')
            ->join('sections', 'products.section_id', '=', 'sections.id')
            ->join('workspaces', 'sections.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->where('providers.user_id', $userId) // Filtrar por el user_id del proveedor
            ->select('products.name as product_name', DB::raw('SUM(ventas.cantidad) as cantidad'))
            ->groupBy('products.name')
            ->get();

        // Obtener ventas por producto y fecha para mostrar evolución temporal
        $ventasPorFecha = Sale::join('products', 'ventas.id_producto', '=', 'products.id')
            ->join('sections', 'products.section_id', '=', 'sections.id')
            ->join('workspaces', 'sections.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->where('providers.user_id', $userId) // Filtrar por el user_id del proveedor
            ->select('products.name as product_name', DB::raw('SUM(ventas.cantidad) as cantidad'), DB::raw('DATE(ventas.created_at) as fecha'))
            ->groupBy('products.name', 'fecha')
            ->orderBy('fecha')
            ->get();

        return view('graphics', compact('ventasPorProveedor', 'ventasPorFecha'));
    }


}
