<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqDocumentitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentitem_faq', function (Blueprint $table) {
            $table->integer('faq_id')->unsigned();
            $table->integer('documentitem_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');
            $table->foreign('documentitem_id')->references('id')->on('documents')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentitem_faq');
        //
    }
}
