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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // id du post
            $table->text('content'); // contenu du post
            $table->foreignId('user_id')->constrained(); // clé étrangère vers la table user
            $table->foreignId('topic_id')->constrained(); // clé étrangère vers la table topic
            $table->timestamps(); // createdAt et updatedAt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
