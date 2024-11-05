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
        Schema::create('job__posts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->integer('seniority_level_id');
            $table->string('salary_range');
            $table->integer('industry_id');
            $table->integer('job_location_id');
            $table->integer('working_pattern_id');
            $table->integer('hours_id');
            $table->boolean('sponsorship');
            $table->integer('skill_id');
            $table->longText('role_exists_text');
            $table->longText('role_exists_involve');
            $table->integer('is_deleted');
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
        Schema::dropIfExists('job__posts');
    }
};
