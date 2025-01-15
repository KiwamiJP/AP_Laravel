<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
   User::factory(20)->create();
           
    //$this->call([
      //  UserSeeder::class,
     //   PostSeeder::class,
      
    //]);
}
}
