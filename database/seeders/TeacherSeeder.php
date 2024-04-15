<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $teachers = [
            [
                'name' => 'John Doe',
                'phoneNumber' => '1234567890',
                'email' => 'john@example.com',
                'avatar' => 'avatar.jpg',
                'gender' => 'Male',
                'isDeleted' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'phoneNumber' => '9876543210',
                'email' => 'jane@example.com',
                'avatar' => 'avatar.jpg',
                'gender' => 'Female',
                'isDeleted' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Johnson',
                'phoneNumber' => '5555555555',
                'email' => 'david@example.com',
                'avatar' => 'avatar.jpg',
                'gender' => 'Male',
                'isDeleted' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Wilson',
                'phoneNumber' => '1111111111',
                'email' => 'emily@example.com',
                'avatar' => 'avatar.jpg',
                'gender' => 'Female',
                'isDeleted' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Brown',
                'phoneNumber' => '2222222222',
                'email' => 'michael@example.com',
                'avatar' => 'avatar.jpg',
                'gender' => 'Male',
                'isDeleted' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('teacher')->insert($teachers);
    }
}
