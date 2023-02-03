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
        Schema::create('student_course_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('aca_session');
            $table->integer('semester_id');
            $table->integer('year_id');
            $table->string('program_name');
            $table->tinyInteger('is_active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->string('created_ip');
            $table->string('updated_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course_infos');
    }
};
