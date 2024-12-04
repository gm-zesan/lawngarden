<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::take(2)->get();
        $users = Customer::take(2)->get();

        foreach ($products as $product) {
            foreach ($users as $user) {
                ProductReview::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                    'rating' => rand(1, 5),
                    'review' => 'This is a sample review for the product "' . $product->name . '". It is amazing!',
                    'status' => 1,
                ]);
            }
        }
    }
}
