<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('users')->insert([
     	'name' => 'admin',
		'email' => 'admin@gmail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'admin',
		'ipk' => '3.73',
     ]);
     DB::table('users')->insert([
     	'name' => 'user1',
		'email' => 'user1@gemail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'user',
		'ipk' => '3.73',
     ]);
     DB::table('users')->insert( [
     	'name' => 'user2',
		'email' => 'user2@gemail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik elektro',
		'website' => 'samsularipin77.github.io',
		'role' => 'user',
		'ipk' => '3.73',
     ]);
     DB::table('users')->insert([
     	'name' => 'reviewer',
		'email' => 'reviewer@gemail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'reviewer',
		'ipk' => '3.73',
     ]);
}
}