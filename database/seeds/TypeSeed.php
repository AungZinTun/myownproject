<?php

use Illuminate\Database\Seeder;

class TypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'eBook',],
            ['id' => 2, 'title' => 'Video',],
            ['id' => 3, 'title' => 'Article',],
            ['id' => 4, 'title' => 'Audio',],
            ['id' => 5, 'title' => 'Photo',],

        ];

        foreach ($items as $item) {
            \App\Type::create($item);
        }
    }
}
