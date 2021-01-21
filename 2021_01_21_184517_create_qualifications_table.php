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
            $table->date('marticyoc');
            $table->date('interyoc');
            $table->date('graduationyoc');
            $table->date('mastersyoc');
            $table->date('phdsyoc');
            $table->date('otheryoc');
            $table->string('matricboard');
            $table->string('interboard');
            $table->string('graduationboard');
            $table->string('mastersboard');
            $table->string('phdsboard');
            $table->string('otherboard');
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
