<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('_type');
            $table->string('type');
            $table->string('citation_key');
            $table->string('author');
            $table->string('title');
            $table->string('journal');
            $table->string('year');
            $table->string('doi');
            $table->string('art_number');
            $table->string('note');
            $table->string('url');
            $table->string('document_type');
            $table->string('source');           
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
        Schema::dropIfExists('articles');
    }
}
