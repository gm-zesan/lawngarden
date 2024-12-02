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
            array('id' => '1','name' => 'Electronics','description' => 'electronics','created_at' => '2023-05-21 07:30:52','updated_at' => '2023-05-21 18:28:39'),
            array('id' => '2','name' => 'Books','description' => 'books','created_at' => '2023-05-21 07:32:40','updated_at' => '2023-05-21 18:29:32'),
            array('id' => '5','name' => 'House hold item','description' => 'house hold item','created_at' => '2023-05-21 18:39:39','updated_at' => '2023-05-21 18:39:39'),
            array('id' => '6','name' => 'Test','description' => 'test','created_at' => '2023-05-21 18:40:10','updated_at' => '2023-05-21 18:40:10'),
            array('id' => '7','name' => 'Man Fashion','description' => 'man fashion','created_at' => '2023-05-31 11:04:29','updated_at' => '2023-05-31 11:04:29'),
            array('id' => '8','name' => 'Women Fashon','description' => 'women fashion','created_at' => '2023-05-31 11:05:01','updated_at' => '2023-05-31 11:05:01'),
            array('id' => '9','name' => 'Gadget','description' => 'gadget','created_at' => '2023-05-31 11:06:32','updated_at' => '2023-05-31 11:06:32')
        );

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
