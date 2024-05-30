<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => '123456789',
            'idRol' => '1',
        ]);

        \App\Models\User::create([
            'name' => 'Proveedor1',
            'email' => 'prov1@gmail.com',
            'password' => '123456789',
            'idRol' => '2',
        ]);

        \App\Models\Provider::create([
            'user_id' => '2',
            'brand_name' => 'Nike',
        ]);

        \App\Models\Workspace::create([
            'provider_id' => '1',
        ]);

        \App\Models\Section::create([
            'workspace_id' => '1',
            'name' => 'Balones',
        ]);

        \App\Models\Section::create([
            'workspace_id' => '1',
            'name' => 'Playeras',
        ]);

        \App\Models\Product::create([
            'section_id' => '1',
            'name' => 'Brazuca balon 2014',
            'description' => 'Balon utilizado en el mundial de Brasil 2014',
            'price' => '1699.0',
            'stock' => '10',
            'image' => 'img/1716960897_Brazuca.png',
        ]);

        \App\Models\Product::create([
            'section_id' => '2',
            'name' => 'Playera Arsenal',
            'description' => 'Playera Arsenal 2023/2024',
            'price' => '1699.0',
            'stock' => '50',
            'image' => 'img/1716960924_arsenal.png',
        ]);
    }
}
