<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->date('publish_date');
            $table->boolean('is_suggested')->default(false);
            $table->foreignId('author_id')->constrained()->onDetele('cascade');
            $table->foreignId('category_id')->constrained()->onDetele('cascade');
            $table->string('publishing_house');
            $table->integer('number_of_pages');
            $table->decimal('price', 8, 2);
            $table->string('book_image');
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
        Schema::dropIfExists('books');
    }
}
