<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category = new Category();
        $category->id = 2;
        $category->name = 'Electronics';
        $category->save();

        // Category::create(['id' => 1, 'name' => 'School Supplies']);
        // Category::create(['id' => 2, 'name' => 'Electronics' ]);
        // Category::create(['id' => 3, 'name' => 'Beverages' ]);
        // Category::create(['id' => 4, 'name' => 'Health & Personal Care']);
        // Category::create(['id' => 5, 'name' => 'Home Appliances' ]);
       
    }
}
