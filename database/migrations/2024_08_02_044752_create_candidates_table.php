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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('prename')->nullable();
            $table->string('name');
            $table->string('aftername')->nullable();
            $table->string('ttl')->nullable();
            $table->string('domisili')->nullable();
            $table->string('agama');
            $table->string('position');
            $table->string('partai');
            $table->unsignedBigInteger('region_id');
            $table->longText('riwayatpen')->nullable();
            $table->longText('prestasi')->nullable();
            $table->longText('karir')->nullable();
            $table->string('akun');
            $table->text('nominal');
            $table->string('foto')->nullable();
            // $table->date('election_date');
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
