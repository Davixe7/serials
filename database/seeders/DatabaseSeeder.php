<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user = \App\Models\User::create([
        "name" => "John Doe",
        "email" => "johndoe@serial.com",
        "password" => bcrypt(123456)
      ]);
      
      $serial = \App\Models\Serial::create([
        "mac" => "1234567",
        "sere" => "7654321",
        "status" => 0
      ]);
    }
}
