<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $user = User::create([
      'username' => 'admin',
      'password' => 'admin',
      'remember_token' => str_random(10),
    ]);
  }
}
