<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array('id' => '1','name' => 'Fruit Trees','description' => 'Trees that produce edible fruits.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '2','name' => 'Flowering Trees','description' => 'Trees known for their beautiful flowers.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '3','name' => 'Shade Trees','description' => 'Trees that provide ample shade.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '4','name' => 'Evergreen Trees','description' => 'Trees that stay green all year.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '5','name' => 'Deciduous Trees','description' => 'Trees that shed their leaves annually.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45')
        );

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
