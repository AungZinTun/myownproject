<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ProductTagSeed::class);
        $this->call(TypeSeed::class);
        $this->call(ProductCategorySeed::class);
        $this->call(ProductSeed::class);
        $this->call(CommentSeed::class);
        $this->call(DownloadSeed::class);
        $this->call(LikeSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(UserActionSeed::class);
        $this->call(ProductSeedPivot::class);

    }
}
