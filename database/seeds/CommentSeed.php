<?php

use Illuminate\Database\Seeder;

class CommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'description' => 'good', 'product_id' => 2,],

        ];

        foreach ($items as $item) {
            \App\Comment::create($item);
        }
    }
}
