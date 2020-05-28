<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained();                        //relazioni tra le due tabelle
            $table->foreignId('photo_id')->constrained();                       //volendo si puo essere piu specifici se non si collegano guarda documentazione laravel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages_photos');
    }
}
