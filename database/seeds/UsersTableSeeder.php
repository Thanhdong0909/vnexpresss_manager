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
        	['name'=>'Thanh Dong' , 'email'=>'phanthanhdong@hotmail.com', 'password'=>bcrypt('12345')],
        	['name'=>'Thanh Luan' , 'email'=>'phanthanhluan@hotmail.com', 'password'=>bcrypt('123456')]
        ]);
    }
}
