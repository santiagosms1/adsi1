<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
				  'fullname'  => 'Jeremias Springfiel',
				  'email'     => 'jeremias@gmail.com',
				  'phone'     => 3206119955,
				  'birthdate' => '1950-11-12',
				  'gender'    => 'Male',
				  'address'   => 'Street Siempre Viva',
				  'role'      => 'Admin',
                  'password'  => bcrypt('admin'),
		]);

		$user = new App\User;
		$user->fullname = 'Elsa Lorena Gonzalez Alzate';
		$user->email = 'loregon1986@gmail.com';
		$user->phone = 3206119955;
		$user->birthdate = '1986-01-14';
		$user->gender = 'Male';
		$user->address = 'street siempre viva';
		$user->role = 'customer';
		$user->password = hash;;make('customer');
		$user->save();

		//Factory
		factory(App\User::class, 50)->create();
    }
}
