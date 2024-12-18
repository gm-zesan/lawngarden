<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_categories = array(
            array('id' => '1','category_id' => '1','name' => 'Fruit Trees SubCategory 1','description' => 'Details about Fruit Trees SubCategory 1.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '2','category_id' => '1','name' => 'Fruit Trees SubCategory 2','description' => 'Details about Fruit Trees SubCategory 2.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '3','category_id' => '1','name' => 'Fruit Trees SubCategory 3','description' => 'Details about Fruit Trees SubCategory 3.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '4','category_id' => '2','name' => 'Flowering Trees SubCategory 1','description' => 'Details about Flowering Trees SubCategory 1.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '5','category_id' => '2','name' => 'Flowering Trees SubCategory 2','description' => 'Details about Flowering Trees SubCategory 2.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '6','category_id' => '2','name' => 'Flowering Trees SubCategory 3','description' => 'Details about Flowering Trees SubCategory 3.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '7','category_id' => '3','name' => 'Shade Trees SubCategory 1','description' => 'Details about Shade Trees SubCategory 1.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '8','category_id' => '3','name' => 'Shade Trees SubCategory 2','description' => 'Details about Shade Trees SubCategory 2.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '9','category_id' => '3','name' => 'Shade Trees SubCategory 3','description' => 'Details about Shade Trees SubCategory 3.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '10','category_id' => '4','name' => 'Evergreen Trees SubCategory 1','description' => 'Details about Evergreen Trees SubCategory 1.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '11','category_id' => '4','name' => 'Evergreen Trees SubCategory 2','description' => 'Details about Evergreen Trees SubCategory 2.','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '12','category_id' => '4','name' => 'Evergreen Trees SubCategory 3','description' => 'Details about Evergreen Trees SubCategory 3.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '13','category_id' => '5','name' => 'Deciduous Trees SubCategory 1','description' => 'Details about Deciduous Trees SubCategory 1.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '14','category_id' => '5','name' => 'Deciduous Trees SubCategory 2','description' => 'Details about Deciduous Trees SubCategory 2.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '15','category_id' => '5','name' => 'Deciduous Trees SubCategory 3','description' => 'Details about Deciduous Trees SubCategory 3.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46')
        );

        foreach ($sub_categories as $sub_category) {
            SubCategory::create($sub_category);
        }
    }
}
