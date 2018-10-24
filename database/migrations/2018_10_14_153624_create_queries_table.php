<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('queries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->text('questions');
            $table->string('keyword1');
            $table->string('keyword2');
            $table->text('answers');
            $table->string('answer_file');
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
        Schema::dropIfExists('queries');
    }
}