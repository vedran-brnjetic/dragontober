<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVedranbrnjeticDragonbaseDragonType extends Migration
{
    public function up()
    {
        Schema::create('vedranbrnjetic_dragonbase_dragon_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('order_modifier')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vedranbrnjetic_dragonbase_dragon_type');
    }
}
