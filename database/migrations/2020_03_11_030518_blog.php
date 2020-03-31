<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150)->unique();
           $table->string('slug',150)->unique();
            $table->text('title')->nullable();
              $table->text('description')->nullable();
                $table->text('content')->nullable();
                  $table->int('view');
                   $table->text('image')->nullable();
                    $table->int('admin_id')->references('id')->on('users');
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
        Schema::dropIfExists('blog');
    }
}
