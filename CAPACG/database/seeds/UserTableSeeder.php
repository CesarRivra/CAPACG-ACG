<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'root',
            'email' => 'rootadmin@gmail.com',
            'password' => bcrypt('rootsecretadmin'),
            'Apellido' => 'admin',
            'Rol' => '1',
            'Estado' => '1',            
        ]);
    }
}
