<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'games'],
            ['name' => 'consoles'],
            ['name' => 'controllers'],
            ['name' => 'merchandice']
        ];

        foreach($categories as $category){
            ItemCategory::firstOrCreate(['category' => $category['name']]);
        }
    }
}
