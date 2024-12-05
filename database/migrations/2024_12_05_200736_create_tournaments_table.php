<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('commercial_name', 50)->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('federation_id')->nullable();
            $table->timestamps();

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('federation_id')
                ->references('id')
                ->on('federations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('tournaments', function (Blueprint $table) {
            // Delete Foreign Key
            $table->dropForeign(['country_id']);
            $table->dropForeign(['federation_id']);
        });

        Schema::dropIfExists('tournaments');
    }
};
