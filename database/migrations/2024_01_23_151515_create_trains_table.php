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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->tinyText("Azienda");
            $table->tinyText("Stazione di partenza");
            $table->tinyText("Stazione di arrivo");
            $table->time("Orari partenza");
            $table->time("Orari arrivo");
            $table->char("Codice treno", 25)->unique();
            $table->smallInteger("Numero carrozze")->unsigned();
            $table->boolean("In orario");
            $table->boolean("Cancellato");
            $table->timestamps();


            bghfdghjk
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
