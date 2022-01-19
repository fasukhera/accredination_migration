<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageCertificateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_certificate_details', function (Blueprint $table) {
            $table->id();
            $table->string('h1');              // Main Header
            $table->string('p1')->nullable(); 
            $table->string('p2')->nullable();
            $table->string('wh');              // Who Header
            $table->string('wp')->nullable();
            $table->string('li1')->nullable();
            $table->string('eh');              // Entry Header
            $table->string('ep')->nullable();
            $table->string('li2')->nullable();
            $table->string('lh')->nullable();  // Learn Header
            $table->string('lp')->nullable();
            $table->string('li3')->nullable();
            $table->string('rh')->nullable();  // Resource Header
            $table->string('rp')->nullable();
            $table->string('li4')->nullable();
            $table->string('bh')->nullable();  // Box Header
            $table->string('l-bh1');           // Left-BoxHeader1 --> BoxParagraph1
            $table->string('l-bp1')->nullable();
            $table->string('l-bh2');
            $table->string('l-bp2')->nullable();
            $table->string('l-bh3');
            $table->string('l-bp3')->nullable();
            $table->string('l-bh4');
            $table->string('l-bp4')->nullable();
            $table->string('r-bh1');           // Right-BoxHeader1 --> BoxParagraph1
            $table->string('r-bp1')->nullable();
            $table->string('r-bh2');
            $table->string('r-bp2')->nullable();
            $table->string('r-bh3');
            $table->string('r-bp3')->nullable();
            $table->string('r-bh4');
            $table->string('r-bp4')->nullable();
            $table->string('last-h');
            $table->string('last-li')->nullable();


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
        Schema::dropIfExists('page_certificate_details');
    }
}
