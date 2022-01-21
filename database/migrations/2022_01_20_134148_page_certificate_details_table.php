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
            $table->longText('h1')->nullable();              // Main Header
            $table->longText('p1')->nullable(); 
            $table->longText('p2')->nullable();
            $table->longText('wh')->nullable();              // Who Header
            $table->longText('wp')->nullable();
            $table->longText('li1')->nullable();
            $table->longText('eh')->nullable();              // Entry Header
            $table->longText('ep')->nullable();
            $table->longText('li2')->nullable();
            $table->longText('lh')->nullable();  // Learn Header
            $table->longText('lp')->nullable();
            $table->longText('li3')->nullable();
            $table->longText('rh')->nullable();  // Resource Header
            $table->longText('rp')->nullable();
            $table->longText('li4')->nullable();
            $table->longText('bh')->nullable();  // Box Header
            $table->longText('l_bh1')->nullable();           // Left-BoxHeader1 --> BoxParagraph1
            $table->longText('l_bp1')->nullable();
            $table->longText('l_bh2')->nullable();
            $table->longText('l_bp2')->nullable();
            $table->longText('l_bh3')->nullable();
            $table->longText('l_bp3')->nullable();
            $table->longText('l_bh4')->nullable();
            $table->longText('l_bp4')->nullable();
            $table->longText('r_bh1')->nullable();           // Right-BoxHeader1 --> BoxParagraph1
            $table->longText('r_bp1')->nullable();
            $table->longText('r_bh2')->nullable();
            $table->longText('r_bp2')->nullable();
            $table->longText('r_bh3')->nullable();
            $table->longText('r_bp3')->nullable();
            $table->longText('r_bh4')->nullable();
            $table->longText('r_bp4')->nullable();
            $table->longText('last_h')->nullable();
            $table->longText('last_li')->nullable();


            $table->unsignedBigInteger('certificate_id');
            $table->foreign('certificate_id')->references('id')->on('page_certificates');
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
