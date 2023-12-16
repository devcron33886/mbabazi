<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'status' => 'published',
            ],
            [
                'name' => 'Vue',
                'slug' => 'vue',
                'status' => 'published',
            ],
            [
                'name' => 'React',
                'slug' => 'react',
                'status' => 'published',
            ],
            [
                'name' => 'Angular',
                'slug' => 'angular',
                'status' => 'published',
            ],
            [
                'name' => 'Node',
                'slug' => 'node',
                'status' => 'published',
            ],
            [
                'name' => 'Django',
                'slug' => 'django',
                'status' => 'published',
            ],
            [
                'name' => 'Flask',
                'slug' => 'flask',
                'status' => 'published',
            ],
            [
                'name' => 'Ruby on Rails',
                'slug' => 'ruby-on-rails',
                'status' => 'published',
            ],
            [
                'name' => 'Spring',
                'slug' => 'spring',
                'status' => 'published',
            ],
            [
                'name' => 'Express',
                'slug' => 'express',
                'status' => 'published',
            ],
            [
                'name' => 'Codeigniter',
                'slug' => 'codeigniter',
                'status' => 'published',
            ],
            [
                'name' => 'Django Rest Framework',
                'slug' => 'django-rest-framework',
                'status' => 'published',
            ],
            [
                'name' => 'Lumen',
                'slug' => 'lumen',
                'status' => 'published',
            ],
            [
                'name' => 'Flask Restful',
                'slug' => 'flask-restful',
                'status' => 'published',
            ],
            [
                'name' => 'Django Graphene',
                'slug' => 'django-graphene',
                'status' => 'published',
            ],
            [
                'name' => 'Django Channels',
                'slug' => 'django-channels',
                'status' => 'published',
            ],
            [
                'name' => 'Django CMS',
                'slug' => 'django-cms',
                'status' => 'published',
            ],
            [
                'name' => 'Django Oscar',
                'slug' => 'django-oscar',
                'status' => 'published',
            ],
            [
                'name' => 'Django Wagtail',
                'slug' => 'django-wagtail',
                'status' => 'published',
            ],
            [
                'name' => 'Django Mezzanine',
                'slug' => 'django-mezzanine',
                'status' => 'published',
            ],

        ];
        Tag::insert($tags);
    }
}
