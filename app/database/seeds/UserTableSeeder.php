<?php 

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->username = 'leslie';
		$user->email = 'leslie@codeup.com';
		$user->password = 'letmein';
		$user->save();

		$user = new User();
		$user->username = 'jason';
		$user->email = 'jason@codeup.com';
		$user->password = 'letmeintoo';
		$user->save();
	}
}