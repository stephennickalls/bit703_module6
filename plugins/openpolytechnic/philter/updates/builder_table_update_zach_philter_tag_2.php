<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenpolytechnicPhilterTag2 extends Migration
{
    public function up()
    {
        Schema::table('Openpolytechnic_philter_tag', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('Openpolytechnic_philter_tag', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
