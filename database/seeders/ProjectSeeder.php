<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects=[
            [
                'category_id'=>1,
                'name'=>'Project 1',
                'slug'=>'project-1',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+1',
                'description'=>'Project 1 description',
                'url'=>'https://project1.com',
                'owner'=>'John Doe',
                'status'=>'completed'
            
            ],[
                'category_id'=>2,
                'name'=>'Project 2',
                'slug'=>'project-2',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+2',
                'description'=>'Project 2 description',
                'url'=>'https://project2.com',
                'owner'=>'John Doe',
                'status'=>'completed'
            ],
            [
                'category_id'=>3,
                'name'=>'Project 3',
                'slug'=>'project-3',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+3',
                'description'=>'Project 3 description',
                'url'=>'https://project3.com',
                'owner'=>'John Doe',
                'status'=>'completed'
            ],[
                'category_id'=>4,
                'name'=>'Project 4',
                'slug'=>'project-4',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+4',
                'description'=>'Project 4 description',
                'url'=>'https://project4.com',
                'owner'=>'John Doe',
                'status'=>'completed'
            ],[
                'category_id'=>5,
                'name'=>'Project 5',
                'slug'=>'project-5',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+5',
                'description'=>'Project 5 description',
                'url'=>'https://project5.com',
                'owner'=>'John Doe',
                'status'=>'completed'
            ],[
                'category_id'=>6,
                'name'=>'Project 6',
                'slug'=>'project-6',
                'image'=>'https://via.placeholder.com/640x480.png/00ff77?text=Project+6',
                'description'=>'Project 6 description',
                'url'=>'https://project6.com',
                'owner'=>'John Doe',
                'status'=>'completed'
                
            ]

        ];

        Project::insert($projects);
    }
}
