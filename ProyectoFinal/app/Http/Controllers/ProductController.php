<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\Product;
use App\Models\Section;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

}
