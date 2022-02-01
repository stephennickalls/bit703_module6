<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenpolytechnicPhilterImage2 extends Migration
{
    public function up()
    {
        Schema::table('Openpolytechnic_philter_image', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('Openpolytechnic_philter_image', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
