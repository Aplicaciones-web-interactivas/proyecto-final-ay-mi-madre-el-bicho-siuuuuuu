<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Product;
use App\Models\User;
use App\Models\Sale;
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

    public function processPayment(Request $request)
    {
        // Obtener los datos de los productos y cantidades del carrito desde la URL
        $productsData = $request->query('products');

        // Dividir los datos de los productos en un array utilizando el delimitador ","
        $productsArray = explode(',', $productsData);

        // Inicializar un array para almacenar los IDs de productos vendidos y sus cantidades
        $sales = [];

        // Iterar sobre los datos de los productos
        foreach ($productsArray as $productInfo) {
            // Dividir la información del producto en ID y cantidad utilizando el delimitador ":"
            list($productId, $quantity) = explode(':', $productInfo);

            // Buscar el producto en la base de datos
            $product = Product::find($productId);

            // Verificar si el producto existe y hay suficiente stock
            if ($product && $product->stock >= $quantity) {
                // Actualizar el stock del producto
                $product->stock -= $quantity;
                $product->save();

                // Registrar la venta en el array de ventas
                $sales[] = [
                    'id_producto' => $productId,
                    'cantidad' => $quantity
                ];
            } else {
                // Manejar errores si el producto no existe o no hay suficiente stock
                return response()->json(['error' => 'No se puede procesar la venta. Producto no disponible.']);
            }
        }

        // Registrar la venta en la base de datos
        foreach ($sales as $sale) {
            Sale::create([
                'id_producto' => $sale['id_producto'],
                'cantidad' => $sale['cantidad'],
                // Puedes agregar más campos a tu modelo Venta según tus necesidades
            ]);
        }

        // Devolver una respuesta exitosa
        return redirect()->back();
    }

}
