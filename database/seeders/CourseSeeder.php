<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'categoryId' => 1,
                'title' => 'Introduction to Web Development',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-06-01',
                'price' => 99.99,
                'imageURL' => 'https://example.com/web-dev.jpg',
                'demoVideo' => 'https://example.com/web-dev-demo.mp4',
                'note' => 'Suitable for beginners.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 1,
                'title' => 'Build responsesive website with Laravel',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 2,
                'title' => 'Advanced Kotlin',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 2,
                'title' => 'Flutter the next generation',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 3,
                'title' => 'SQL basic',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 3,
                'title' => 'NumPy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 4,
                'title' => 'CSRF attack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 4,
                'title' => 'XSS attack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 5,
                'title' => 'ChatGPT',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            [
                'categoryId' => 5,
                'title' => 'SoraAI',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.',
                'startDate' => '2023-07-15',
                'price' => 149.99,
                'imageURL' => 'https://example.com/python-advanced.jpg',
                'demoVideo' => 'https://example.com/python-advanced-demo.mp4',
                'note' => 'Prerequisite: Basic knowledge of Python.',
                'isDeleted' => 0,
            ],
            
        ];

        foreach ($courses as $course) {

            Course::create($course);
        }
    }
}