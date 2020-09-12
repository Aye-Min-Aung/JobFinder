<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_job_id');
            $table->unsignedBigInteger('job_seeker_id');
            $table->date('apply_date');

 // relationship ချိတ်ဆက်ပုံ 

            $table->foreign('post_job_id')
                  ->references('id')
                  ->on('post_jobs')
                  ->onDelete('cascade');
            // $table->foreignId('post_job_id')
            //       ->constrained('post_jobs')
            //       ->onDelete('cascade');

            $table->foreign('job_seeker_id')
                  ->references('id')
                  ->on('job_seekers')
                  ->onDelete('cascade');
            // $table->foreignId('job_seeker_id')
            //       ->constrained('job_seekers')
            //       ->onDelete('cascade');
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
        Schema::dropIfExists('apply_jobs');
    }
}
