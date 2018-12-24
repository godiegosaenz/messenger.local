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
        $usuario5 = new User;

        $usuario5->name = "juan";
        $usuario5->email = "juanjesus@gmail.com";
        $usuario5->password = bcrypt("123456");

        $usuario5->save();

    }
}
