<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Product 1', 'description' => 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'photo1' => '/tmp/phpAduqOb', 'photo2' => null, 'link' => null, 'download_size' => null,],
            ['id' => 2, 'name' => 'Portrait Photography', 'description' => 'Portrait Photography', 'photo1' => null, 'photo2' => null, 'link' => null, 'download_size' => null,],
            ['id' => 3, 'name' => 'Laracast Lets\' Build a Forum with Laravel ', 'description' => null, 'photo1' => null, 'photo2' => null, 'link' => null, 'download_size' => null,],
            ['id' => 4, 'name' => 'Django Tutorial', 'description' => 'Django Tutorials', 'photo1' => null, 'photo2' => null, 'link' => null, 'download_size' => null,],

        ];

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
