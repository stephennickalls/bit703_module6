<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenpolytechnicPhilterImageTag2 extends Migration
{
    public function up()
    {
        Schema::table('Openpolytechnic_philter_image_tag', function($table)
        {
            $table->integer('image_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('Openpolytechnic_philter_image_tag', function($table)
        {
            $table->integer('image_id')->unsigned(false)->change();
        });
    }
}
