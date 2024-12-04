<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadingsTable extends Migration
{
    public function up()
    {
        Schema::create('headings', function (Blueprint $table) {
            $table->id();
            $table->text('home');
            $table->text('about');
            $table->text('service');
            $table->text('price');
            $table->text('testimonials');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headings');
    }
}
