<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category ->name = "Đời sống";
        $category->save();

        $category = new Category();
        $category ->name = "Kinh Doanh";
        $category->save();

        $category = new Category();
        $category ->name = "Pháp Luật";
        $category->save();

        $category = new Category();
        $category ->name = "Xã hội";
        $category->save();
    }
}
