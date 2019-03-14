<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('position')->default(0);
            $table->string('number')->nullable();
            $table->text('bio')->nullable();
            $table->string('contact')->nullable();
            $table->string('preview')->nullable();
            $table->string('hk_id')->nullable();
            $table->string('hk_id_preview')->nullable();
            $table->string('fitness')->default('n/a');
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
        Schema::dropIfExists('profile');
    }
}
