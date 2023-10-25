<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->comment("編號(主鍵)");
            $table->string('name')->comment("角色名稱");
            $table->tinyInteger('aid')->comment("區域編號")->unsigned();
            $table->tinyInteger('stars')->comment("星數")->unsigned();
            $table->string('property')->comment("屬性");
            $table->string('gender')->comment("性別");
            $table->string('weapon')->comment("武器");
            $table->string('constellation')->comment("命之座");
            $table->string('permanent_limited')->comment("常駐/限定");
            $table->string('race')->comment("種族");
            $table->date('birthdate')->comment("生日");
            $table->double('height')->comment("身高")->nullable()->unsigned();
            $table->double('version')->comment("版本")->unsigned();
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
        Schema::dropIfExists('roles');
    }
}
