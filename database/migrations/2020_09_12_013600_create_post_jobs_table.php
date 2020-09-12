<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('nature_id');

            $table->unsignedBigInteger('company_id');
            $table->string('address');

            $table->string('primary_skill');
            $table->string('secondary_skill');
            $table->string('experience');
            $table->integer('salary'); 
            $table->text('description');

             // relationship ချိတ်ဆက်ပုံ 
            $table->foreign('category_id')
                  ->references('id')
                  ->on('job_categories')
                  ->onDelete('cascade'); 
                  
            $table->foreign('nature_id')
                  ->references('id')
                  ->on('job_natures')
                  ->onDelete('cascade');

            $table->foreign('company_type')
                  ->references('id')
                  ->on('company_types')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('post_jobs');
    }
}
