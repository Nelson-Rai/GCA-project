<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $category = \App\Models\Category::create([
            'name' => 'Accessories',
            'description' => 'Accessories description.'
        ]);

        \App\Models\Product::factory(5)->create([
            'category_id' => 9
        ]);
    }
}
