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
        Schema::create('institutions', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cnpj')->unique();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->foreignUuid('address_id')->nullable()->references('id')->on('adresses');
            $table->rememberToken()->nullable();
            $table->timestampTz('email_verified_at')->nullable();
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
        Schema::dropIfExists('institutions', function (Blueprint $table) {
            $table->dropForeign('institutions_address_id_foreign');
        });
    }
};
