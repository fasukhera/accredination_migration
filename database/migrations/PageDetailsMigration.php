<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageCertificateDetailsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_details', function (Blueprint $table) {
            $table->id();
            $table->string('h1');
            $table->string('h2')->nullable();
            $table->string('p1')->nullable();
            $table->string('h3')->nullable();
            $table->string('p2')->nullable();
            $table->string('h4')->nullable();
            $table->string('li')->nullable(); //comma seprated
            $table->string("h5")->nullable();
            $table->string("p3")->nullable();
            $table->string("a")->nullable();
            $table->string("vi")->nullable();
            $table->unsignedBigInteger('certificate_id');
            $table->foreign('certificate_id')->references('id')->on('certificates');
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
        Schema::dropIfExists('page_details');
    }
}