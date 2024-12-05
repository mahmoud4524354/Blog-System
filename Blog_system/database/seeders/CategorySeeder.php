<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Food', 'Travel', 'Fashion', 'Finaintial'] ;

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
