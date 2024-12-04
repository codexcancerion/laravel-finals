<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagraphsTable extends Migration
{
    public function up()
    {
        Schema::create('paragraphs', function (Blueprint $table) {
            $table->id();
            $table->text('home');
            $table->text('testimonials');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paragraphs');
    }
}
