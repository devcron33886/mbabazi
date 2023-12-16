<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:',
                'status' => 'published',
            ],
            [
                'name' => 'Vue',
                'slug' => 'vue',
                'description' => 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications.',
                'status' => 'published',
            ],
            [
                'name' => 'React',
                'slug' => 'react',
                'description' => 'React is an open-source front-end JavaScript library for building user interfaces or UI components.',
                'status' => 'published',
            ],
            [
                'name' => 'Angular',
                'slug' => 'angular',
                'description' => 'Angular is a TypeScript-based free and open-source web application framework led by the Angular Team at Google and by a community of individuals and corporations.',
                'status' => 'published',
            ],
            [
                'name' => 'Node',
                'slug' => 'node',
                'description' => 'Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser.',
                'status' => 'published',
            ],
            [
                'name' => 'Django',
                'slug' => 'django',
                'description' => 'Django is a Python-based free and open-source web framework that follows the model-template-views architectural pattern.',
                'status' => 'published',
            ],
            [
                'name' => 'Flask',
                'slug' => 'flask',
                'description' => 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.',
                'status' => 'published',
            ],
            [
                'name' => 'Ruby on Rails',
                'slug' => 'ruby-on-rails',
                'description' => 'Ruby on Rails, or Rails, is a server-side web application framework written in Ruby under the MIT License. Rails is a model–view–controller framework, providing default structures for a database, a web service, and web pages.',
                'status' => 'published',
            ],
            [
                'name' => 'Spring',
                'slug' => 'spring',
                'description' => 'The Spring Framework is an application framework and inversion of control container for the Java platform.',
                'status' => 'published',
            ],
            [
                'name' => 'Laptops',
                'slug' => 'laptops',
                'description' => 'Laptops are a must-have-device for everyone as these are easy-to-use, portable, energy savers and more.',
                'status' => 'published',

            ],
            [
                'name' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'description' => 'Mobile phone usage is on the rise and smartphone lovers are on a constant hunt to buy the best smartphone at a reasonable price.',
                'status' => 'published',
            ],
            [
                'name' => 'Accessories',
                'slug' => 'accessories',
                'description' => 'Accessories enhance the performance of your smartphone.',
                'status' => 'published',
            ],
        ];

        Category::insert($categories);
    }
}
