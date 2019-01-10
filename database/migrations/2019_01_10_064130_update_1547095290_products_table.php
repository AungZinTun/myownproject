<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1547095290ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if(Schema::hasColumn('products', 'price')) {
                $table->dropColumn('price');
            }
            
        });
Schema::table('products', function (Blueprint $table) {
            
if (!Schema::hasColumn('products', 'download_size')) {
                $table->integer('download_size')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('download_size');
            
        });
Schema::table('products', function (Blueprint $table) {
                        $table->decimal('price', 15, 2)->nullable();
                
        });

    }
}
