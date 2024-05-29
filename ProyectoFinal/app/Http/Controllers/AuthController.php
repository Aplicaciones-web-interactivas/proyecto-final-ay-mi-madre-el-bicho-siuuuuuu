<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function logout(Request $request){
        Auth::logout();
        // auth()->logout($user);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'idRol' => 3,
        ]);

        // Loguear al usuario automáticamente después del registro
        auth()->login($user);

        return redirect()->route('shop');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (auth()->attempt($credentials)) {
        $user = auth()->user();
        switch ($user->idRol) {
            case 1: // Administrador
                return redirect()->route('dashboard')->with(['userId' => $user->id]);
                break;
            case 2: // Proveedor
                return redirect()->route('workspace', ['userId' => $user->id]);
                break;
            case 3: // Cliente
                return redirect()->route('shop')->with(['userId' => $user->id]); // Si el rol no está definido, redirige a una ruta predeterminada
                break;
        }
    }

    return back()->withErrors(['email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.']);
}


}

