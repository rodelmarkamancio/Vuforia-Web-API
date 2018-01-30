<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_targets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('generated_id')->nullable();
            $table->text('name')->nullable();
            $table->integer('width')->nullable();
            $table->text('metadata')->nullable();
            $table->text('fbx_file')->nullable();
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
        Schema::dropIfExists('image_targets');
    }
}
