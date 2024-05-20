<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    public function nuevoProveedor(Request $request)
    {

        // Crear el usuario y asignar el rol de proveedor
        $user = User::create([
            'name' => $request->nombre,  // Corregido: nombre a name
            'email' => $request->correo,  // Corregido: correo a email
            'password' => Hash::make($request->contraseña),  // Corregido: contraseña a password
            'idRol' => 2,
        ]);

        // Crear el proveedor con el ID del usuario recién creado
        $nuevoProveedor = new Provider();
        $nuevoProveedor->user_id = $user->id;
        $nuevoProveedor->brand_name = $request->brand;  // Corregido: brand a brand_name
        $nuevoProveedor->save();

        // Redirigir de vuelta con un mensaje de éxito
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
