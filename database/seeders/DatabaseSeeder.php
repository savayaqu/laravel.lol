<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           StudentSeeder::class,
            UsersTableSeeder::class,
           // и т.д.
        ]);



/*
   DB::table('students')->insert([

            'surname' => Str::random(12),
            'name' => Str::random(12),
            'patronymic' => Str::random(12),
            'date_birth' => '2002-02-12',
            'email' => Str::random(12).'@mail.ru',
            'height' => 253,
            'weight' => 125,
            'sex' => true,
        ]);
*/



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
