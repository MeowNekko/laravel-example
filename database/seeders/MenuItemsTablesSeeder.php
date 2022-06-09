<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItem::truncate();

        MenuItem::create([
            'name'      => 'Open',
            'link'      => 'open',
            'template'  => 'pages/open',
            'active'    => true,
            'auth'      => false,
        ]);
        MenuItem::create([
            'name'      => 'Close',
            'link'      => 'close',
            'template'  => 'pages/close',
            'active'    => true,
            'auth'      => true,
        ]);
    }
}
