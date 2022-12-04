<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2022-12-02 21:47:55',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2022-12-02 21:47:55',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2022-12-02 21:47:55',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2022-12-02 21:47:55',
            ),
            3 => 
            array (
                'controller' => '',
                'created_at' => '2022-12-02 21:48:16',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Categories',
                'display_name_singular' => 'Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-categories',
                'id' => 4,
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2022-12-02 21:48:16',
            ),
            4 => 
            array (
                'controller' => '',
                'created_at' => '2022-12-02 21:48:17',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Posts',
                'display_name_singular' => 'Post',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 5,
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'name' => 'posts',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'server_side' => 0,
                'slug' => 'posts',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            5 => 
            array (
                'controller' => '',
                'created_at' => '2022-12-02 21:48:17',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Pages',
                'display_name_singular' => 'Page',
                'generate_permissions' => 1,
                'icon' => 'voyager-file-text',
                'id' => 6,
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'name' => 'pages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'pages',
                'updated_at' => '2022-12-02 21:48:17',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-12-02 22:10:53',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Orders',
                'display_name_singular' => 'Order',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 8,
                'model_name' => 'App\\Models\\Order',
                'name' => 'orders',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'orders',
                'updated_at' => '2022-12-02 22:21:05',
            ),
        ));
        
        
    }
}