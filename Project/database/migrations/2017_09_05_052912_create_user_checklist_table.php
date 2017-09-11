<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_user', function (Blueprint $table) {
           $table->integer('user_id')->unsigned();
           $table->integer('checklist_id')->unsigned();
           $table->string('status');
           $table->timestamps();
           $table->softDeletes();

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('checklist_id')->references('id')->on('checklists')->onDelete('cascade');
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_checklist');
        
    }
}
