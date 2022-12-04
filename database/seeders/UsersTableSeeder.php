<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2022-12-02 12:58:38',
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'user',
                'password' => '$2y$10$TZ5GaeMiPWfQZxiHhMA5DeDL4QFSnkSDC5iHMi2w9Jx.pIc8O2XRW',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2022-12-02 21:53:43',
                'username' => 'user',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2022-12-02 21:41:30',
                'email' => 'rondie94@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'rondi',
                'password' => '$2y$10$FIK7ikJBLEVUrfcp4F9bpOyoEv4PTq2XheTfCprsd8alvTneJYkyO',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2022-12-02 21:41:30',
                'username' => NULL,
            ),
        ));
        
        
    }
}