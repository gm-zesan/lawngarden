<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = array(
            array('id' => '2','name' => 'G.M. Zesan','email' => 'gmzesan7767@gmail.com','mobile' => '01921324091','password' => '$2y$10$V3NR7C7nG6hXQNlgwrMo8uG3tLYHW4pksKG6XnVlIHLmg/zWHji1C','address' => 'Uttara, Dhaka','date_of_birth' => '2024-10-14','n_id' => NULL,'image' => 'customer-profile/HYqXagJI5zQDHneXG5LvoUyYjTAvr1hZDwXplGu1.png','blood_group' => 'O+','created_at' => '2023-06-13 01:53:31','updated_at' => '2024-10-14 09:49:17'),
            array('id' => '5','name' => 'hasan','email' => 'mdh33262@gmail.com','mobile' => '34564321','password' => '$2y$10$2Pok6ggzRrVdvoheOLSM/OLj8QLCjx6.lqHD8wUg0H.ocOVjTzx4S','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-06-27 14:52:26','updated_at' => '2023-06-27 14:52:26'),
            array('id' => '6','name' => 'John Doe','email' => 'johndoe@example.com','mobile' => '1234567890','password' => '$2y$10$JbWY4vdy6jrbH9lWgcTQ5OA35kr6k27WNCt4g56Wvyqr1TfEkGaEq','address' => '123 Green Lane, Tree City','date_of_birth' => '1990-05-15','n_id' => '123456789','image' => 'images/customers/john_doe.jpg','blood_group' => 'O+','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '7','name' => 'Jane Smith','email' => 'janesmith@example.com','mobile' => '0987654321','password' => '$2y$10$aQm1dg/mRvgbMfT.w65tb.NNAnVXi/UsJRiM4DY69WHh9FcvRlmFi','address' => '456 Tree St, Eco Town','date_of_birth' => '1985-08-22','n_id' => '987654321','image' => 'images/customers/jane_smith.jpg','blood_group' => 'A-','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '8','name' => 'Alice Brown','email' => 'alicebrown@example.com','mobile' => '1122334455','password' => '$2y$10$v6.syZDIUNDgpR4pr9YrOew438O2SOT8wk7YTn/IelpljokNdpTse','address' => '789 Forest Drive, Woodland','date_of_birth' => '1995-11-10','n_id' => '112233445','image' => 'images/customers/alice_brown.jpg','blood_group' => 'B+','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '9','name' => 'Robert Green','email' => 'robertgreen@example.com','mobile' => '6677889900','password' => '$2y$10$KcFToxmCBs3d3s99.l/NfeDpd0dWsDt.tnO1QS2hDZeU4ncW8Za8C','address' => '321 Evergreen Terrace, Forest City','date_of_birth' => '1980-02-28','n_id' => '667788990','image' => 'images/customers/robert_green.jpg','blood_group' => 'AB+','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45'),
            array('id' => '10','name' => 'Emily White','email' => 'emilywhite@example.com','mobile' => '5566778899','password' => '$2y$10$JLRuDE2BZNKPGvqALj.N6OVX6ynQSr3s/Bi7eQq5VhVmBTsDTJaUS','address' => '654 Pine Street, Treeville','date_of_birth' => '1992-03-12','n_id' => '556677889','image' => 'images/customers/emily_white.jpg','blood_group' => 'O-','created_at' => '2024-12-18 11:51:45','updated_at' => '2024-12-18 11:51:45')
        );

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
