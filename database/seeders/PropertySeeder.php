<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Property::insert([
            [
                'name' => 'Ocean View Apartment',
                'type' => 'Apartment',
                'price' => 7500000,
                'area_sqft' => 1200,
                'address' => 'Juhu, Mumbai',
                'description' => 'Sea-facing 2BHK apartment with balcony.',
                'image_path' => '/images/ocean-view.jpg',
                'created_at' => now()
            ],
            [
                'name' => 'Hilltop Villa',
                'type' => 'Villa',
                'price' => 15000000,
                'area_sqft' => 2500,
                'address' => 'Lonavala, Maharashtra',
                'description' => 'Luxury villa with private pool.',
                'image_path' => '/images/hilltop-villa.jpg',
                'created_at' => now()
            ],
            [
                'name' => 'City Center Flat',
                'type' => 'Apartment',
                'price' => 5000000,
                'area_sqft' => 850,
                'address' => 'Shivaji Nagar, Pune',
                'description' => 'Close to metro station and IT hub.',
                'image_path' => '/images/city-flat.jpg',
                'created_at' => now()
            ]
        ]);
    }
}
