<?php

use Illuminate\Database\Seeder;

class LikeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'like' => 1, 'product_id' => 2,],

        ];

        foreach ($items as $item) {
            \App\Like::create($item);
        }
    }
}
