<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('starting_date');
            $table->string('Expiry_date');
            $table->string('contact_email');
            $table->string('image');
            $table->longText('description')->nullable();
        
            $table->timestamps();

            $table->softDeletes();
        });
    }
}
