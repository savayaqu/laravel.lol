<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public  function run(){
        DB::table('students')->insert([

            [
                'surname' => 'Заикин',
                'name' => 'Вадим',
                'patronymic' => 'Анатольевич',
                'date_birth' => '2005-06-16',
                'email' => 'zcomn@mail.ru',
                'height' => 167,
                'weight' => 45,
                'sex' => true,
            ],
            [
                'surname' => 'Уляхин',
                'name' => 'Василий',
                'patronymic' => 'Алексеевич',
                'date_birth' => '1987-12-11',
                'email' => 'cristaldevil@mail.ru',
                'height' => 166,
                'weight' => 115,
                'sex' => true,
            ],
            [
                'surname' => 'Евсеев',
                'name' => 'Дмитрий',
                'patronymic' => 'Витальевич',
                'date_birth' => '2005-11-04',
                'email' => 'dima11831@gmail.com',
                'height' => 175,
                'weight' => 60,
                'sex' => true,
            ],
            [
                'surname' => 'Фамилия',
                'name' => 'Имя',
                'patronymic' => 'Отчество',
                'date_birth' => '2001-01-11',
                'email' => 'fio@mail.ru',
                'height' => 111,
                'weight' => 11,
                'sex' => true,
            ]
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
    }
}
