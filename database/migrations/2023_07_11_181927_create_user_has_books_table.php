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
        Schema::create('user_has_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('book_id')->constrained('books');
            $table->integer('pages_read');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_books');
    }
};
