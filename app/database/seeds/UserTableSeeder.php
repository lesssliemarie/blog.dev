<?php 

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'leslie@codeup.com';
		$user->password = Hash::make('letmein');
		$user->save();
	}
}