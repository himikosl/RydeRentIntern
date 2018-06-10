<?php

use Illuminate\Database\Seeder;

use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		User::create(array(
        'name'     => 'buddhi',
        'phone' => '1234667965',
        'email'    => 'buddhi@sliit.lk',
        'password' => Hash::make('123'),
		));
    }
}
