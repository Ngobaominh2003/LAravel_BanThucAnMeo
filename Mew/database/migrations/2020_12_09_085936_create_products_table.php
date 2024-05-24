<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('ten_san_pham')->nullable();
            $table->unsignedBigInteger('loai_id');
            $table->foreign('loai_id')->references('type_id')->on('loaisanpham')->onDelete('cascade');
            $table->text('mo_ta')->nullable();
            $table->double('gia')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('khoi_luong')->nullable();
            $table->integer('so_luong')->nullable();
           
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
