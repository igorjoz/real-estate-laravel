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
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedSmallInteger('beds');
            $table->unsignedSmallInteger('baths');
            $table->unsignedSmallInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street_name');
            $table->tinyText('street_number');

            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('beds');
            $table->dropColumn('baths');
            $table->dropColumn('area');

            $table->dropColumn('city');
            $table->dropColumn('code');
            $table->dropColumn('street_name');
            $table->dropColumn('street_number');

            $table->dropColumn('price');
        });
    }
};
