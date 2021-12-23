<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateDetailsAccordiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_details_accordians', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_details_id');
            $table->string('main_h');
            $table->string('h1');
            $table->string('p1');
            $table->string('a'); //comma seprated
            $table->string('certification'); //comma seprated
            $table->string('h2');
            $table->string('p2');
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
        Schema::dropIfExists('certificate_details_accordians');
    }
}
