<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            
            CategorySeeder::class,
            SubCategorySeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
            ProjectSeeder::class,
            
            BlogCategorySeeder::class,
            BlogSeeder::class,

            BannerSeeder::class,
            ProductReviewSeeder::class,
            BlogReviewSeeder::class,
            WebsiteReviewSeeder::class,
            
        ]);
    }
}
