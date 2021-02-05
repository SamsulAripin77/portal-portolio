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
		'username' => 'admin@gmail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'admin',
		'ipk' => '3.73',
     ]);
     DB::table('users')->insert([
     	'name' => 'user1',
		'email' => 'user1@gemail.com',
		'username' => 'user1@gemail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'user',
		'ipk' => '3.73',
     ]);
     DB::table('users')->insert( [
		'name' => 'user2',
	   'email' => 'user2@gemail.com',
	   'username' => 'user2@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
	   'name' => 'user3',
	   'email' => 'user3@gemail.com',
	   'username' => 'user3@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
		'name' => 'user4',
	   'email' => 'user4@gemail.com',
	   'username' => 'user4@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
		'name' => 'user5',
	   'email' => 'user5@gemail.com',
	   'username' => 'user5@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
		'name' => 'user6',
	   'email' => 'user6@gemail.com',
	   'username' => 'user6@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
		'name' => 'user7',
	   'email' => 'user7@gemail.com',
	   'username' => 'user7@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
	DB::table('users')->insert( [
		'name' => 'user8',
	   'email' => 'user8@gemail.com',
	   'username' => 'user8@gemail.com',
	   'password' => Hash::make('password'),
	   'jurusan' => 'teknik elektro',
	   'website' => 'samsularipin77.github.io',
	   'role' => 'user',
	   'ipk' => '3.73',
	]);
     DB::table('users')->insert([
     	'name' => 'reviewer',
		'email' => 'reviewer@gemail.com',
		'username' => 'reviewer@gemail.com',
		'password' => Hash::make('password'),
		'jurusan' => 'teknik informatika',
		'website' => 'samsularipin77.github.io',
		'role' => 'reviewer',
		'ipk' => '3.73',
     ]);
}
}