<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonemodels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->string('description');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phonemodels');
    }
}
