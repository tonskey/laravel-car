<?php

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
        // $this->call(UserTableSeeder::class);

        App\User::create([
            'name' => 'Demo User',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo'),
        ]);

        // factory(App\Car::class, 30)->create();
    }
}
