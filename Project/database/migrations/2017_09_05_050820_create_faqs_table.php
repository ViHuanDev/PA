<?php

use App\Action;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('groupfaq_id')->unsigned();
            $table->string('status')->default(Action::PENDING);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('groupfaq_id')->references('id')->on('groupfaqs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
