<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subprojects', function (Blueprint $table) {
            $table->id();
            $table->integer('projectid');
            $table->string('name');
            $table->string('description');
            $table->date('expected_start_date');
            $table->date('expected_end_date');
            $table->date('actual_start_date');
            $table->date('actual_end_date');
            $table->integer('priority');
            $table->integer('status');
            $table->integer('createdBy');
            $table->integer('updatedBy');
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
        Schema::dropIfExists('subprojects');
    }
};
