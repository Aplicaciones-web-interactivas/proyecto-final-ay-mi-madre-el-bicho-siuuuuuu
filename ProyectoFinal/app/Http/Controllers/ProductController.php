<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\Product;
use App\Models\Section;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function nuevoProducto(Request $request)
    {
        // Procesamiento de la imagen
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName); // Guarda la imagen en la carpeta 'public/img'
            $imagePath = 'img/' . $imageName; // Guarda la ruta de la imagen en la variable $imagePath
        } else {
            $imagePath = null; // Si no se subió ninguna imagen, asigna null a $imagePath
        }


        // Creación del nuevo producto
        $product = new Product();
        $product->section_id = $request->input('section_id_input');
        $product->name = $request->input('name_prod');
        $product->description = $request->input('description_prod');
        $product->price = $request->input('price_prod');
        $product->stock = $request->input('stock');
        $product->image = $imagePath; // Asigna la ruta de la imagen al atributo 'image'
        $product->save();

        return redirect()->back();
    }

    public function editarProducto(Request $request)
    {
        $product = Product::find($request->input('product_id_edit'));

        $product->name = $request->input('name_prod_edit');
        $product->description = $request->input('description_prod_edit');
        $product->price = $request->input('price_prod_edit');
        $product->stock = $request->input('stock_edit');

        $product->save();

        return redirect()->back();
    }

    public function eliminarProducto($id)
    {
        $product = Product::find($id);

        if ($product) {
            // Elimina la imagen asociada si existe
            $imagePath = public_path($product->image); // Esto asume que $product->image es la ruta relativa desde public/
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            // Elimina el producto de la base de datos
            $product->delete();
        }

        return redirect()->back();
    }

}
