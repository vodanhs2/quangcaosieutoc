<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('service_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150)->unique();
           $table->string('slug',150)->nullable();
                $table->text('content')->nullable();
                    $table->int('service_id')->references('id')->on('service');
                     $table->int('active')->default(1);
                     $table->timestamp();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('service_content');
    }
}
