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
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            $table->enum('nomor_urut', ['1', '2', '3', '4', '5']);
            $table->string('party');
            $table->string('slug');
            $table->unsignedBigInteger('region_id');

            $table->unsignedBigInteger('pemimpin_id');
            $table->unsignedBigInteger('wakil_id');
            $table->text('short_bio');
            $table->longText('full_bio');
            $table->longText('visi');
            $table->longText('misi');
            $table->string('image_url')->nullable();
            $table->date('election_date');
            $table->unsignedInteger('views')->default(0);

            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pairs');
    }
};
