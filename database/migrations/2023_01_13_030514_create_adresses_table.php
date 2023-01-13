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
        Schema::create('adresses', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('street');
            $table->string('district');
            $table->string('number');
            $table->string('zip_code');
            $table->string('city');
            $table->foreignUuid('state_id')->references('id')->on('states');
            $table->foreignUuid('country_id')->references('id')->on('countries');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses', function (Blueprint $table) {
            $table->dropForeign('adresses_state_id_foreign');
            $table->dropForeign('adresses_country_id_foreign');
        });
    }
};
