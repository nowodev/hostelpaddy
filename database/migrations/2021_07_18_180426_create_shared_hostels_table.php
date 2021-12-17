<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSharedHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shared_hostels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->index();
            $table->string('phone_number');
            $table->string('level');
            $table->string('institution');
            $table->string('gender');
            $table->string('choice');
            $table->string('photos')->nullable();
            $table->string('video')->nullable();
            $table->integer('available')->default('0');
    
            $table->softDeletes();
            $table->timestamps();
    
    
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shared_hostels');
    }
}