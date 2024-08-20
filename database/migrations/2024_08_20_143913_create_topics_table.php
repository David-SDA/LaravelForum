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
        Schema::create('topics', function (Blueprint $table) {
            $table->id(); // id du topic
            $table->foreignId('user_id')->constrained(); // clé étrangère vers la table users
            $table->string('title'); // titre du topic
            $table->text('content'); // contenu du topic
            $table->boolean('locked')->default(false); // vérouillage du topic (defaut : non)
            $table->timestamps(); // created at et updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
