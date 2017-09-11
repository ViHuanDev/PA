<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_faq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faq_id')->unsigned();
            $table->integer('checklist_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');
            $table->foreign('checklist_id')->references('id')->on('checklists')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_faq');
        //
    }
}
