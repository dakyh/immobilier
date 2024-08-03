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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('intitule');
            $table->text('description');
            $table->integer('surface');
            $table->decimal('prix', 10, 2);
            $table->enum('type', Bien::$types);
            $table->string('adresse');
            $table->date('datePublication');
            $table->string('etat');
            $table->integer('nombreDePieces')->nullable();
            $table->integer('nombreDeChambres')->nullable();
            $table->integer('nombreDeSallesDeBain')->nullable();
            $table->boolean('cloture')->nullable();
            $table->integer('nombreDAppartements')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biens');
    }
};
