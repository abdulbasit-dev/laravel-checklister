<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => 'Welecome',
            'content' => 'Welecome',
        ]);
        Page::create([
            'title' => 'Get Consoltation',
            'content' => 'Get Consoltation',
        ]);
    }
}
