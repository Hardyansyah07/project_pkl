<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom 'id' sebagai big integer auto-increment primary key
            $table->string('nama_product');
            $table->integer('stok');
            $table->string('price');
            $table->string('description'); // Perbaikan: Mengubah 'desckription' menjadi 'description'
            $table->unsignedBigInteger('id_brand');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_brand')->references('id')->on('brands')->onDelete('cascade');
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
};
