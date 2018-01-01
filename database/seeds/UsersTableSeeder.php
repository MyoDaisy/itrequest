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
                DB::table('users')->insert(
            [
                [
                    'first_name'=>'Quy',
                    'last_name'=>'Luong',
                    'username'=>'luongquy',
                    'password'=>bcrypt('12345'),
                    'profile_picture'=>'public/image/profile.jpg',
                    'team_id'=>0,
                    'authority'=>0,
                ]
            ]
        );
    }
}
