<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index() {
        
        // Obtener todos los proveedores junto con la información del usuario relacionado
        $proveedores = Provider::with('user')->get();

        return view('dashboard', ['proveedores' => $proveedores]);
    }

}
