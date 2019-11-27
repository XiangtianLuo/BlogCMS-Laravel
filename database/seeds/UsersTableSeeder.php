<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','806105934@qq.com')->first();

        if(!$user){
            User::create([
                'name'=>'butters',
                'email'=>'806105934@qq.com',
                'role'=>'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
