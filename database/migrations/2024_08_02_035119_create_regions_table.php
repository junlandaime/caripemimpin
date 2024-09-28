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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Kota', 'Kabupaten', 'Provinsi']);
            $table->string('bendera')->nullable();
            $table->string('lambang')->nullable();
            $table->text('julukan')->nullable();
            $table->string('motto')->nullable();
            $table->string('semboyan')->nullable();
            $table->string('lokasi')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('dashum')->nullable();
            $table->string('harjad')->nullable();
            $table->date('harjadate')->nullable();
            $table->string('ibukota')->nullable();
            $table->string('kepdar')->nullable();
            $table->string('wakepdar')->nullable();
            $table->string('sekda')->nullable();
            $table->string('ketdprd')->nullable();
            $table->string('luasdaerah')->nullable();
            $table->string('totalpopulasi')->nullable();
            $table->string('kepadatanpop')->nullable();
            $table->text('agama')->nullable();
            $table->text('bahasa')->nullable();
            $table->string('ipm')->nullable();
            $table->string('zonwak')->nullable();
            $table->string('kodebps')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('pelatken')->nullable();
            $table->string('kodeiso3166')->nullable();
            $table->string('kodekemendagri')->nullable();
            $table->string('apbd')->nullable();
            $table->string('pad')->nullable();
            $table->string('dau')->nullable();
            $table->text('lagudaerah')->nullable();
            $table->text('rumahadat')->nullable();
            $table->string('senjata')->nullable();
            $table->string('flora')->nullable();
            $table->string('fauna')->nullable();
            $table->string('situs')->nullable();
            $table->timestamps();

            $table->unique(['name', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
