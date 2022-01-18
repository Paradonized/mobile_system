<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique();

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->unsignedBigInteger('phonemodel_id');
            $table->foreign('phonemodel_id')->references('id')->on('phonemodels');

            $table->longText('description');

            $table->integer('year_of_release');
            
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
        Schema::dropIfExists('phones');
    }
}
