<?php namespace VedranBrnjetic\Dragonbase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVedranbrnjeticDragonbaseDragonFamily extends Migration
{
    public function up()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon_family', function($table)
        {
            $table->string('name');
            $table->integer('toothless_level')->nullable();
            $table->integer('dragon_class_id');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vedranbrnjetic_dragonbase_dragon_family', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('toothless_level');
            $table->dropColumn('dragon_class_id');
            $table->increments('id')->unsigned()->change();
        });
    }
}
