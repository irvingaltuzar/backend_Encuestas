<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warning', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('parent_id')->default(0);
            $table->string('to', 45);
            $table->timestamp('date')->useCurrent()->useCurrentOnUpdate();
            $table->string('title', 45);
            $table->string('message', 200);
            $table->decimal('penalty', 10, 0)->default(0);
            $table->timestamp('time_to_penalty')->nullable();
            $table->timestamp('viewed_at')->nullable();
            $table->integer('sended_by_id');
            $table->integer('warning_type_id');
            $table->boolean('deleleted')->default(0);
            
            $table->foreign('sended_by_id', 'fk_warning_users1')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('warning_type_id', 'fk_warning_warning_type1')->references('id')->on('cat_warning_type')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warning');
    }
}