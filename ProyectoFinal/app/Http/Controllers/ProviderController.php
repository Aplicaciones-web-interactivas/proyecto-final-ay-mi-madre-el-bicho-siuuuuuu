<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
}
