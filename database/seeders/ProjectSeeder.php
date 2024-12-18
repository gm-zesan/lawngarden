<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array('id' => '1','title' => 'Project One','location' => 'Location One','description' => 'Description for project one.','start_date' => '2024-12-18','image' => 'project-one.jpg','status' => 'ongoing','created_at' => '2024-12-18 11:58:08','updated_at' => '2024-12-18 11:58:08'),
            array('id' => '2','title' => 'Project Two','location' => 'Location Two','description' => 'Description for project two.','start_date' => '2024-12-18','image' => 'project-two.jpg','status' => 'completed','created_at' => '2024-12-18 11:58:08','updated_at' => '2024-12-18 11:58:08'),
            array('id' => '3','title' => 'Project Three','location' => 'Location Three','description' => 'Description for project three.','start_date' => '2024-10-18','image' => 'project-three.jpg','status' => 'pending','created_at' => '2024-12-18 11:58:08','updated_at' => '2024-12-18 11:58:08'),
            array('id' => '4','title' => 'Project Four','location' => 'Location Four','description' => 'Description for project four.','start_date' => '2023-12-18','image' => 'project-four.jpg','status' => 'ongoing','created_at' => '2024-12-18 11:58:08','updated_at' => '2024-12-18 11:58:08'),
            array('id' => '5','title' => 'Project Five','location' => 'Location Five','description' => 'Description for project five.','start_date' => '2024-09-18','image' => 'project-five.jpg','status' => 'completed','created_at' => '2024-12-18 11:58:08','updated_at' => '2024-12-18 11:58:08')
        );

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
