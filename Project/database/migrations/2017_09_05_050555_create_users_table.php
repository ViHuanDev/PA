<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('extendinfo')->nullable();
            $table->string('position')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('organization_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('status')->default(User::PENDING);
            $table->string('address');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();//deleted_at

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
