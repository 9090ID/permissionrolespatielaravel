<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([

        		'name' => 'Roles Admin',
        		'email'=> 'admin@gmail.com',
        		'password' => bcrypt('12345678')
       	]);
       	$admin->assignRole('admin');
       	 $user = User::create([
        		'name' => 'Roles User',
        		'email'=> 'user@gmail.com',
        		'password' => bcrypt('12345678')
       	]);
       	$user->assignRole('user');

    }
}
