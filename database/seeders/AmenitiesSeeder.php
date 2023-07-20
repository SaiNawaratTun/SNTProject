<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amenities')->insert([

            [
                'amenities_name' => 'Free Wifi'
            ],

            [
                'amenities_name' => 'Free parking'
            ],
            [
                'amenities_name' => 'Elevator'
            ],
            [
                'amenities_name' => 'Private entrance'
            ],
            [
                'amenities_name' => 'Pool'
            ],
            [
                'amenities_name' => 'Gym'
            ],
            [
                'amenities_name' => 'Garden'
            ],
            [
                'amenities_name' => 'Balcony'
            ],
            [
                'amenities_name' => 'Washing machine'
            ],
            [
                'amenities_name' => 'Air conditioning'
            ],
            [
                'amenities_name' => 'TV with standard cable'
            ],
            [
                'amenities_name' => 'Clothing storage: closet'
            ],
            [
                'amenities_name' => 'Refrigerator'
            ],
            [
                'amenities_name' => 'Microwave'
            ],
            [
                'amenities_name' => 'Stove'
            ],
            [
                'amenities_name' => 'Bed linens'
            ],
            [
                'amenities_name' => 'Coffee maker'
            ],
            [
                'amenities_name' => 'Toaster'
            ],
            [
                'amenities_name' => 'Hot water kettle'
            ],
            [
                'amenities_name' => 'Security cameras'
            ],
            [
                'amenities_name' => 'Smoke alarm'
            ],
            [
                'amenities_name' => 'Carbon monoxide alarm'
            ],
            [
                'amenities_name' => 'Meeting Rooms'
            ],
            [
                'amenities_name' => 'Restrooms'
            ],
            [
                'amenities_name' => 'Kitchen'
            ],
            [
                'amenities_name' => 'Dining table'
            ],
            [
                'amenities_name' => 'Bathtub'
            ],
            [
                'amenities_name' => 'City skyline view'
            ],
            [
                'amenities_name' => 'Extra pillows and blankets'
            ],
            [
                'amenities_name' => 'Balcony'
            ]

        ]);
    }
}
