<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmed IBrahim',
            'email' => 'test@mail.com',
            'password' => Hash::make('test') ,
        ]);

        DB::table('news')->insert([
            'title' => 'Test',
            'description' => 'test description',
            'image' => '1.png' ,
            'date' => Carbon::create('2022', '02', '02'),
        ]);
    }
}
