<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::create([
        'name'=>'sanal',
        'email'=>'sanal@gmail.com',
        'mobile'=>'9846001235',
        'type'=>'admin',
        'username'=>'sanal@gmail.com',
        'password'=>bcrypt('123456'),
    ]);
    User::create([
        'name'=>'Neethu',
        'email'=>'neethu@gmail.com',
        'mobile'=>'7895461235',
        'type'=>'HR',
        'username'=>'neethu@gmail.com',
        'password'=>bcrypt('11111'),
    ]);
    User::create([
        'name'=>'Sreedil',
        'email'=>'sreedil@gmail.com',
        'mobile'=>'9856231456',
        'type'=>'Employee',
        'username'=>'sreedil@gmail.com',
        'password'=>bcrypt('22222'),
    ]);
    }
}