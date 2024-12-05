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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('name', 100)->unique();
            $table->string('flag', 255)->nullable();
            $table->string('shield', 255)->nullable();
            $table->timestamps();

            $table->index('name', 'teams_name_idx');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('teams', function (Blueprint $table) {
            // Delete index
            $table->dropIndex('teams_name_idx');
            // Delete Foreign Key
            $table->dropForeign(['country_id']);
        });

        Schema::dropIfExists('teams');
    }
};
