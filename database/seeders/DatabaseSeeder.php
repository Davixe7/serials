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
        \App\Models\User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@app.com',
            'password' => bcrypt(123456)
        ]);
    }
}
