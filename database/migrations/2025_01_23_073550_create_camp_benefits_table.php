<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('camp_id');
            // Cara Pertama
            // $table->unsignedBigInteger('camp_id');

            // cara ke 2
            // cara ke 2 ini nama tabel yang mau direlasi harus sama dengan table relasinya
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            // Cara pertama
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
