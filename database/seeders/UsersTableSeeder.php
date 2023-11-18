<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'surname' => 'Иванов',
                'name' => 'Иван',
                'login' => 'ivan123',
                'password' => 'secret123',
            ],
            [
                'surname' => 'Петров',
                'name' => 'Петр',
                'login' => 'petr456',
                'password' => 'secret124',
            ],
            [
                'surname' => 'Сидорова',
                'name' => 'Мария',
                'login' => 'maria789',
                'password' => 'secret125',
            ],
            [
                'surname' => 'Козлов',
                'name' => 'Алексей',
                'login' => 'alex42',
                'password' => 'secret126',
            ],
            [
                'surname' => 'Смирнова',
                'name' => 'Елена',
                'login' => 'elena777',
                'password' => 'secret127',
            ],
        ]);
    }
}
