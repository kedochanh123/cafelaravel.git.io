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
        Schema::create('tbl_cafe', function (Blueprint $table) {
            $table->id();
            $table->string('typeName')->comment('Tên loại cà fe')->default('Đen đá không đường');
            $table->string('describe')->default('Cuộc đời tớ nếm đủ vị cay đắng rồi, vài giọt cafe này chưa nhằm nhò gì.');
            $table->tinyInteger('price')->nullable()->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tbl_cafe');
    }
};
