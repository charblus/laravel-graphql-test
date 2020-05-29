<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's UsersTable.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
          'name' => 'kwen',
          'email' => 'email@email.com',
          'password' => bcrypt('123456'),
      ]);
      DB::table('users')->insert([
          'name' => 'kwen1',
          'email' => 'email1@email.com',
          'password' => bcrypt('123456'),
      ]);

    }
}
