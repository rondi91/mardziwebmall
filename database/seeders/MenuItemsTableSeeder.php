<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-boat',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Dashboard',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            2 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Users',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            4 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 9,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Tools',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 10,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 11,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 12,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 13,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            9 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:47:55',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 14,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Settings',
                'updated_at' => '2022-12-02 21:47:55',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:48:16',
                'icon_class' => 'voyager-categories',
                'id' => 11,
                'menu_id' => 1,
                'order' => 8,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.categories.index',
                'target' => '_self',
                'title' => 'Categories',
                'updated_at' => '2022-12-02 21:48:16',
                'url' => '',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:48:17',
                'icon_class' => 'voyager-news',
                'id' => 12,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.posts.index',
                'target' => '_self',
                'title' => 'Posts',
                'updated_at' => '2022-12-02 21:48:17',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 21:48:17',
                'icon_class' => 'voyager-file-text',
                'id' => 13,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.pages.index',
                'target' => '_self',
                'title' => 'Pages',
                'updated_at' => '2022-12-02 21:48:17',
                'url' => '',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2022-12-02 22:10:53',
                'icon_class' => NULL,
                'id' => 14,
                'menu_id' => 1,
                'order' => 15,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.orders.index',
                'target' => '_self',
                'title' => 'Orders',
                'updated_at' => '2022-12-02 22:10:53',
                'url' => '',
            ),
        ));
        
        
    }
}