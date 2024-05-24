<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('tong_gia', 15, 2);
            $table->dateTime('ngay_dat_hang');
            $table->string('trang_thai');
        });
    }

    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
