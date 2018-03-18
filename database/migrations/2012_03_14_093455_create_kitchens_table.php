<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitchensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img')->nullable();
            $table->integer('type_id')
            ->unsigned();
            $table->foreign('type_id')
            ->references('id')
            ->on('types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->text('text');
            $table->integer('clicks')->default(0);
            $table->integer('provider_id')
            ->unsigned();
        $table->foreign('provider_id')
            ->references('id')
            ->on('providers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('kitchens');
    }
}
