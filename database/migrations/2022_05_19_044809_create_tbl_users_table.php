<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->mediumText('user_name')->comment('name of user')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('tel')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('role')->comment('role system')->default(2);
            $table->timestamp('created_at')->comment('Created time')->nullable();
            $table->timestamp('updated_at')->comment('Updated time')->nullable();
            $table->timestamp('deleted_at')->comment('Deleted time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
};
