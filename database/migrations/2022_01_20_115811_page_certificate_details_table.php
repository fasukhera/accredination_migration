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
            $table->string('h1')->nullable();              // Main Header
            $table->string('p1')->nullable(); 
            $table->string('p2')->nullable();
            $table->string('wh')->nullable();              // Who Header
            $table->string('wp')->nullable();
            $table->string('li1')->nullable();
            $table->string('eh')->nullable();              // Entry Header
            $table->string('ep')->nullable();
            $table->string('li2')->nullable();
            $table->string('lh')->nullable();  // Learn Header
            $table->string('lp')->nullable();
            $table->string('li3')->nullable();
            $table->string('rh')->nullable();  // Resource Header
            $table->string('rp')->nullable();
            $table->string('li4')->nullable();
            $table->string('bh')->nullable();  // Box Header
            $table->string('l_bh1')->nullable();           // Left-BoxHeader1 --> BoxParagraph1
            $table->string('l_bp1')->nullable();
            $table->string('l_bh2')->nullable();
            $table->string('l_bp2')->nullable();
            $table->string('l_bh3')->nullable();
            $table->string('l_bp3')->nullable();
            $table->string('l_bh4')->nullable();
            $table->string('l_bp4')->nullable();
            $table->string('r_bh1')->nullable();           // Right-BoxHeader1 --> BoxParagraph1
            $table->string('r_bp1')->nullable();
            $table->string('r_bh2')->nullable();
            $table->string('r_bp2')->nullable();
            $table->string('r_bh3')->nullable();
            $table->string('r_bp3')->nullable();
            $table->string('r_bh4')->nullable();
            $table->string('r_bp4')->nullable();
            $table->string('last_h')->nullable();
            $table->string('last_li')->nullable();


            $table->unsignedBigInteger('certificate_id')->nullable;
            $table->foreign('certificate_id')->references('id')->on('certificates')->nullOnDelete;
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
