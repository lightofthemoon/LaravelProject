<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $lessons = [
            // Course 1 lessons
            [
                'courseId' => 1,
                'name' => 'Introduction to Web Development',
                'content' => 'In this lesson, we will cover the basics of web development, including HTML, CSS, and JavaScript.',
                'videoURL' => 'https://example.com/video1.mp4',
            ],
            [
                'courseId' => 1,
                'name' => 'Building a Simple Website',
                'content' => 'In this lesson, we will build a simple website using the knowledge from the previous lesson.',
                'videoURL' => 'https://example.com/video2.mp4',
            ],
            [
                'courseId' => 1,
                'name' => 'Advanced HTML and CSS Techniques',
                'content' => 'This lesson will explore more advanced HTML and CSS techniques for creating modern web pages.',
                'videoURL' => 'https://example.com/video3.mp4',
            ],
            // Course 2 lessons
            [
                'courseId' => 2,
                'name' => 'Introduction to Laravel',
                'content' => 'In this lesson, we will explore the fundamentals of the Laravel framework and how to set up a new project.',
                'videoURL' => 'https://example.com/video4.mp4',
            ],
            [
                'courseId' => 2,
                'name' => 'Routing and Controllers in Laravel',
                'content' => 'In this lesson, we will dive into the routing system and controller structure in Laravel.',
                'videoURL' => 'https://example.com/video5.mp4',
            ],
            [
                'courseId' => 2,
                'name' => 'Database Migrations and Models in Laravel',
                'content' => 'This lesson will cover how to work with databases and models in the Laravel framework.',
                'videoURL' => 'https://example.com/video6.mp4',
            ],
            // Course 3 lessons
            [
                'courseId' => 3,
                'name' => 'Kotlin Basics',
                'content' => 'This lesson will cover the basic syntax and features of the Kotlin programming language.',
                'videoURL' => 'https://example.com/video7.mp4',
            ],
            [
                'courseId' => 3,
                'name' => 'Kotlin for Android Development',
                'content' => 'In this lesson, we will explore how to use Kotlin for building Android applications.',
                'videoURL' => 'https://example.com/video8.mp4',
            ],
            [
                'courseId' => 3,
                'name' => 'Kotlin Advanced Features',
                'content' => 'This lesson will cover more advanced Kotlin features, such as extension functions and lambda expressions.',
                'videoURL' => 'https://example.com/video9.mp4',
            ],
            // Course 4 lessons
            [
                'courseId' => 4,
                'name' => 'Flutter Introduction',
                'content' => 'This lesson will provide an introduction to the Flutter framework and its features.',
                'videoURL' => 'https://example.com/video10.mp4',
            ],
            [
                'courseId' => 4,
                'name' => 'Building a Flutter App',
                'content' => 'In this lesson, we will create a simple Flutter application from scratch.',
                'videoURL' => 'https://example.com/video11.mp4',
            ],
            [
                'courseId' => 4,
                'name' => 'Flutter State Management',
                'content' => 'This lesson will explore different state management approaches in Flutter.',
                'videoURL' => 'https://example.com/video12.mp4',
            ],
            // Course 5 lessons
            [
                'courseId' => 5,
                'name' => 'SQL Basics',
                'content' => 'This lesson will cover the fundamental concepts of SQL, including SELECT, INSERT, UPDATE, and DELETE statements.',
                'videoURL' => 'https://example.com/video13.mp4',
            ],
            [
                'courseId' => 5,
                'name' => 'SQL Joins',
                'content' => 'In this lesson, we will learn about different types of SQL joins and how to use them.',
                'videoURL' => 'https://example.com/video14.mp4',
            ],
            [
                'courseId' => 5,
                'name' => 'SQL Subqueries and Aggregates',
                'content' => 'This lesson will cover advanced SQL topics, such as subqueries and aggregate functions.',
                'videoURL' => 'https://example.com/video15.mp4',
            ],
            [
                'courseId' => 6,
                'name' => 'Introduction to NumPy',
                'content' => 'This lesson will provide an overview of the NumPy library and its core features.',
                'videoURL' => 'https://example.com/video16.mp4',
            ],
            [
                'courseId' => 6,
                'name' => 'NumPy Arrays and Operations',
                'content' => 'In this lesson, we will dive into working with NumPy arrays and performing various operations on them.',
                'videoURL' => 'https://example.com/video17.mp4',
            ],
            [
                'courseId' => 6,
                'name' => 'Advanced NumPy Techniques',
                'content' => 'This lesson will cover more advanced NumPy features and techniques, such as broadcasting and vectorization.',
                'videoURL' => 'https://example.com/video18.mp4',
            ],
            // Course 7 lessons
            [
                'courseId' => 7,
                'name' => 'Understanding CSRF Attacks',
                'content' => 'This lesson will explain the concept of CSRF attacks and how they work.',
                'videoURL' => 'https://example.com/video19.mp4',
            ],
            [
                'courseId' => 7,
                'name' => 'Protecting against CSRF Attacks',
                'content' => 'In this lesson, we will learn about different techniques to protect against CSRF attacks.',
                'videoURL' => 'https://example.com/video20.mp4',
            ],
            [
                'courseId' => 7,
                'name' => 'CSRF Attacks in Web Frameworks',
                'content' => 'This lesson will cover how CSRF attacks can manifest in popular web frameworks and how to mitigate them.',
                'videoURL' => 'https://example.com/video21.mp4',
            ],
            // Course 8 lessons
            [
                'courseId' => 8,
                'name' => 'Introduction to XSS Attacks',
                'content' => 'This lesson will provide an overview of Cross-Site Scripting (XSS) attacks and how they work.',
                'videoURL' => 'https://example.com/video22.mp4',
            ],
            [
                'courseId' => 8,
                'name' => 'Mitigating XSS Attacks',
                'content' => 'In this lesson, we will explore various methods to prevent and mitigate XSS attacks.',
                'videoURL' => 'https://example.com/video23.mp4',
            ],
            [
                'courseId' => 8,
                'name' => 'XSS Attacks in Modern Web Applications',
                'content' => 'This lesson will cover how XSS attacks can manifest in modern web applications and advanced mitigation techniques.',
                'videoURL' => 'https://example.com/video24.mp4',
            ],
            // Course 9 lessons
            [
                'courseId' => 9,
                'name' => 'ChatGPT Basics',
                'content' => 'This lesson will cover the fundamentals of ChatGPT and its capabilities.',
                'videoURL' => 'https://example.com/video25.mp4',
            ],
            [
                'courseId' => 9,
                'name' => 'Advanced ChatGPT Prompting',
                'content' => 'In this lesson, we will learn about advanced prompting techniques to get the most out of ChatGPT.',
                'videoURL' => 'https://example.com/video26.mp4',
            ],
            [
                'courseId' => 9,
                'name' => 'ChatGPT in Real-World Applications',
                'content' => 'This lesson will explore practical use cases and applications of ChatGPT in various domains.',
                'videoURL' => 'https://example.com/video27.mp4',
            ],
            // Course 10 lessons
            [
                'courseId' => 10,
                'name' => 'Introducing SoraAI',
                'content' => 'This lesson will provide an introduction to the SoraAI platform and its features.',
                'videoURL' => 'https://example.com/video28.mp4',
            ],
            [
                'courseId' => 10,
                'name' => 'Integrating SoraAI into Your Projects',
                'content' => 'In this lesson, we will explore how to integrate SoraAI into your own projects and applications.',
                'videoURL' => 'https://example.com/video29.mp4',
            ],
            [
                'courseId' => 10,
                'name' => 'Advanced SoraAI Capabilities',
                'content' => 'This lesson will cover more advanced features and use cases of the SoraAI platform.',
                'videoURL' => 'https://example.com/video30.mp4',
            ],
        ];

        foreach ($lessons as $lessonData) {
            Lesson::create($lessonData);
        }
    }
}
