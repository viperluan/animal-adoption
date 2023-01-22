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
        Schema::create('animals', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->foreignUuid('specie_id')->references('id')->on('species');
            $table->foreignUuid('institution_id')->references('id')->on('institutions');
            $table->foreignUuid('adoption_id')->nullable()->references('id')->on('adoptions');
            $table->string('name');
            $table->string('gender');
            $table->date('birthday')->nullable();
            $table->float('weight')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->boolean('adopted')->default(false);
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
        Schema::dropIfExists('animals', function (Blueprint $table) {
            $table->dropForeign('animals_specie_id_foreign');
            $table->dropForeign('animals_institution_id_foreign');
            $table->dropForeign('animals_adoption_id_foreign');
        });
    }
};
