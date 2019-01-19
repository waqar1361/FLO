<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('description');
            $table->string('age');
            $table->string('gender');
            $table->string('place');
            $table->string('image');
            
            $table->string('type');
            $table->string('status')->default('unprocessed');
            $table->boolean('verified')->default(false);
            $table->integer('reporter_id');
            $table->integer('user_id')->nullable();
            $table->date('missing_at')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
