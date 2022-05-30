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
        Schema::create('media_template_block', function (Blueprint $table) {
            $table->unsignedBigInteger('template_block_id');
            $table->foreign('template_block_id')->references('id')->on('templateblocks');
            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_template_block');
    }
};
