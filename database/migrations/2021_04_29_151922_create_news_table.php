<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function(Blueprint $table){
            $table->id();
            $table->string('name_category', '30');
            $table->timestamps();
        });

        Schema::create('source', function (Blueprint $table){
            $table->id();
            $table->string('resource_name', '50');
            $table->string('source', '100')
                  ->nullable(true);
            $table->timestamps();

        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', '50')
                ->unique()
                ->nullable(false)
                ->index();
            $table->text('content')
                ->nullable(true);
            $table->dateTime('publish_date')
                ->nullable(true);
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('news_category')
                ->unsigned();
            $table->bigInteger('news_source')
                ->unsigned();

            $table->foreign('news_category')
                ->references('id')
                ->on('category');
            $table->foreign('news_source')
                ->references('id')
                ->on('source');
        });

        Schema::create('user_categories', function (Blueprint $table) {
            $table->bigInteger('user')
                ->unsigned();
            $table->bigInteger('category')
                ->unsigned();
            $table->foreign('user')
                ->references('id')
                ->on('users');
            $table->foreign('category')
                ->references('id')
                ->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
        Schema::dropIfExists('user_categories');
        Schema::dropIfExists('category');
        Schema::dropIfExists('source');


    }
}
