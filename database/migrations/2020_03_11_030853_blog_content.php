<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('blog_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150)->unique();
           $table->string('slug',150)->nullable();
                $table->text('content')->nullable();
                    $table->int('service_id')->references('id')->on('blog');
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
    }
}
