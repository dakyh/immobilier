<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccompagnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accompagnements', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->text('description');
            $table->foreignId('type')->constrained('typeacs')->onDelete('cascade');
            $table->date('datePublication');
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
        Schema::dropIfExists('accompagnements');
    }
}
