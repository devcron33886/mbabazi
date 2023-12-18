<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services=[
            [
                'name'=>'Web Development',
                'slug'=>'web-development',
                'icon'=>'https://via.placeholder.com/150',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'price'=>1000,
                'discount'=>10,
                'status'=>'active'
            ],[
                'name'=>'Mobile Development',
                'slug'=>'mobile-development',
                'icon'=>'https://via.placeholder.com/150',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'price'=>1000,
                'discount'=>10,
                'status'=>'active'
            ],[
                'name'=>'Desktop Development',
                'slug'=>'desktop-development',
                'icon'=>'https://via.placeholder.com/150',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'price'=>1000,
                'discount'=>10,
                'status'=>'active'

            ]
                
            

        ];
        Service::insert($services);
    }
}
