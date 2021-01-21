<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_id')->unsigned();
            $table->foreign('p_id')->references('id')->on('carddetails')->onDelete('cascade');;
            $table->date('matricyoc')->nullable();
            $table->date('interyoc')->nullable();
            $table->date('graduationyoc')->nullable();
            $table->date('mastersyoc')->nullable();
            $table->date('phdsyoc')->nullable();
            $table->date('otheryoc')->nullable();
            $table->string('matricboard')->nullable();
            $table->string('interboard')->nullable();
            $table->string('graduationboard')->nullable();
            $table->string('mastersboard')->nullable();
            $table->string('phdsboard')->nullable();
            $table->string('otherboard')->nullable();
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
        Schema::dropIfExists('qualifications');
    }
}
