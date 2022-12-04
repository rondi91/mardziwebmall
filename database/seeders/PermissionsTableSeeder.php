<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2022-12-02 21:47:55',
            ),
            1 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2022-12-02 21:47:55',
            ),
            2 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2022-12-02 21:47:55',
            ),
            3 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2022-12-02 21:47:55',
            ),
            4 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2022-12-02 21:47:55',
            ),
            5 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            6 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            7 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            8 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            9 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            10 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            11 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            12 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            13 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            14 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            15 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            16 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            17 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            18 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            19 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            20 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            21 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            22 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            23 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            24 => 
            array (
                'created_at' => '2022-12-02 21:47:55',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            25 => 
            array (
                'created_at' => '2022-12-02 21:48:16',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            26 => 
            array (
                'created_at' => '2022-12-02 21:48:16',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            27 => 
            array (
                'created_at' => '2022-12-02 21:48:16',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            28 => 
            array (
                'created_at' => '2022-12-02 21:48:16',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            29 => 
            array (
                'created_at' => '2022-12-02 21:48:16',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            30 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            31 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            32 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            33 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            34 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            35 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            36 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            37 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            38 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            39 => 
            array (
                'created_at' => '2022-12-02 21:48:17',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            40 => 
            array (
                'created_at' => '2022-12-02 22:10:53',
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2022-12-02 22:10:53',
            ),
            41 => 
            array (
                'created_at' => '2022-12-02 22:10:53',
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2022-12-02 22:10:53',
            ),
            42 => 
            array (
                'created_at' => '2022-12-02 22:10:53',
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2022-12-02 22:10:53',
            ),
            43 => 
            array (
                'created_at' => '2022-12-02 22:10:53',
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2022-12-02 22:10:53',
            ),
            44 => 
            array (
                'created_at' => '2022-12-02 22:10:53',
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2022-12-02 22:10:53',
            ),
        ));
        
        
    }
}