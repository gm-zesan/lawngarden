<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use App\Models\WebsiteReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Customer::take(2)->get();

        foreach ($users as $user) {
            WebsiteReview::create([
                'user_id' => $user->id, 
                'rating' => rand(1, 5),
                'review' => 'This is a sample review for the website. It is really helpful and informative.',
                'status' => 1,
            ]);
        }
    }
}
