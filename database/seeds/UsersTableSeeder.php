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

        $usuario5 = new User;

        $usuario5->name = "Jose";
        $usuario5->email = "jose@gmail.com";
        $usuario5->password = bcrypt("123456");

        $usuario5->save();

        $usuario5 = new User;

        $usuario5->name = "Diego";
        $usuario5->email = "diego@gmail.com";
        $usuario5->password = bcrypt("123456");

        $usuario5->save();

    }
}
