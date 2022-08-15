<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageDetailsAccordiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Page_details_accordians', function (Blueprint $table) {
            $table->id();
            $table->longText('h1');
            $table->longText('p1');
            $table->longText('li');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->unsignedBigInteger('page_details_id');
            $table->foreign('page_details_id')->references('id')->on('page_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Page_details_accordians');
    }
}
