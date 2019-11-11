<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Narola',
            'lastname'     => 'Infotech',
            'email'    => 'narola@gmail.com',
            'type' => '1',
            'password' => Hash::make('awesome'),
        ));
    }
}
