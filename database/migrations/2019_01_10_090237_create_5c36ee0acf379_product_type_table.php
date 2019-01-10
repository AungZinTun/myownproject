<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5c36ee0acf379ProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('product_type')) {
            Schema::create('product_type', function (Blueprint $table) {
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id', 'fk_p_251011_251383_type_p_5c36ee0acf4ff')->references('id')->on('products')->onDelete('cascade');
                $table->integer('type_id')->unsigned()->nullable();
                $table->foreign('type_id', 'fk_p_251383_251011_produc_5c36ee0acf5c9')->references('id')->on('types')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type');
    }
}
