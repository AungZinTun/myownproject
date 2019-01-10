<?php

use Illuminate\Database\Seeder;

class DownloadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'link' => 'https://quickadminpanel.com/251011/custom/create', 'product_id' => 3,],

        ];

        foreach ($items as $item) {
            \App\Download::create($item);
        }
    }
}
