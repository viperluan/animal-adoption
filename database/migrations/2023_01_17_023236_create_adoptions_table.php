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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->foreignUuid('institution_id')->references('id')->on('institutions');
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
        Schema::dropIfExists('adoptions', function (Blueprint $table) {
            $table->dropForeign('adoptions_user_id_foreign');
            $table->dropForeign('adoptions_institution_id_foreign');
        });
    }
};
