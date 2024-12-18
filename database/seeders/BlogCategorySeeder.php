<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog_categories = array(
            array('id' => '1','name' => 'Tree Plantation','description' => 'Promoting tree planting initiatives.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '2','name' => 'Tree Conservation','description' => 'Efforts to protect and conserve trees.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '3','name' => 'Urban Forestry','description' => 'Integrating trees into urban environments.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '4','name' => 'Agroforestry','description' => 'Combining agriculture and forestry practices.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '5','name' => 'Rare Tree Species','description' => 'Highlighting endangered or unique tree species.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '6','name' => 'Medicinal Trees','description' => 'Trees with healing and medicinal properties.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '7','name' => 'Climate Impact','description' => 'How trees affect and mitigate climate change.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '8','name' => 'Tree Myths and Legends','description' => 'Cultural and historical stories about trees.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '9','name' => 'Deforestation Awareness','description' => 'Discussing the effects of deforestation.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '10','name' => 'Tree Benefits','description' => 'Economic, ecological, and social benefits of trees.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46')
        );

        foreach ($blog_categories as $blog_category) {
            BlogCategory::create($blog_category);
        }
    }
}
