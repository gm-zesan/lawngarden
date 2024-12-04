<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogReview;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = Blog::take(2)->get();
        $users = Customer::take(2)->get();

        foreach ($blogs as $blog) {
            foreach ($users as $user) {
                BlogReview::create([
                    'blog_id' => $blog->id,
                    'user_id' => $user->id,
                    'rating' => rand(1, 5),
                    'review' => 'This is a sample review for the blog post "' . $blog->title . '". I really enjoyed it!',
                    'status' => 1,
                ]);
            }
        }
    }
}
