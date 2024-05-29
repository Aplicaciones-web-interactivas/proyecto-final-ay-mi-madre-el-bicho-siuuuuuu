<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\User;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function index() {
        
        // Obtener todos los proveedores junto con la información del usuario relacionado
        $proveedores = Provider::with('user')->get();

        return view('dashboard', ['proveedores' => $proveedores]);
    }

    public function getDashboardData()
    {
        // Ventas por Proveedor
        $ventasPorProveedor = Sale::join('products', 'ventas.id_producto', '=', 'products.id')
            ->join('sections', 'products.section_id', '=', 'sections.id')
            ->join('workspaces', 'sections.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->select('providers.brand_name as provider_name', DB::raw('SUM(ventas.cantidad) as total_sales'))
            ->groupBy('providers.brand_name')
            ->get();

        // Tendencia de Ventas a lo Largo del Tiempo
        $tendenciaVentas = Sale::join('products', 'ventas.id_producto', '=', 'products.id')
            ->select(DB::raw('DATE_FORMAT(ventas.created_at, "%Y-%m") as month'), DB::raw('SUM(ventas.cantidad) as total_sales'))
            ->where('ventas.created_at', '>=', Carbon::now()->subMonths(6))
            ->groupBy(DB::raw('DATE_FORMAT(ventas.created_at, "%Y-%m")'))
            ->orderBy('month', 'asc')
            ->get();

        // Proporción de Ventas por Proveedor
        $proporcionVentasPorProveedor = Sale::join('products', 'ventas.id_producto', '=', 'products.id')
            ->join('sections', 'products.section_id', '=', 'sections.id')
            ->join('workspaces', 'sections.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->select('providers.brand_name as provider_name', DB::raw('SUM(ventas.cantidad) as total_sales'))
            ->groupBy('providers.brand_name')
            ->get();

        return view('admin_graphics', compact('ventasPorProveedor', 'tendenciaVentas', 'proporcionVentasPorProveedor'));
    }

}
