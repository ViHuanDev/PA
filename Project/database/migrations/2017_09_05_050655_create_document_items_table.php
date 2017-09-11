<?php

use App\Action;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentitems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_index')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('content',1000);
            $table->integer('document_id')->unsigned();
            $table->string('status')->default(Action::PENDING);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_items');
    }
}
