<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id()->comment("編號(主鍵)");
            $table->string('name')->comment("區域名稱")->nullable();
            $table->string('position')->comment("位置")->nullable();
            $table->string('element')->comment("元素")->nullable();
            $table->string('belief')->comment("信仰")->nullable();
            $table->string('god')->comment("信奉神明")->nullable();
            $table->string('ruler')->comment("統治者")->nullable();
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
        Schema::dropIfExists('areas');
    }
}
