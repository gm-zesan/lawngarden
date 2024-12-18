<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = array(
            array('id' => '1','name' => 'Piece','description' => 'Unit for individual items.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '2','name' => 'Kilogram','description' => 'Unit for measuring weight.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '3','name' => 'Meter','description' => 'Unit for measuring length.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '4','name' => 'Liter','description' => 'Unit for measuring liquid volume.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46'),
            array('id' => '5','name' => 'Set','description' => 'Unit for multiple items grouped together.','created_at' => '2024-12-18 11:51:46','updated_at' => '2024-12-18 11:51:46')
        );

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
