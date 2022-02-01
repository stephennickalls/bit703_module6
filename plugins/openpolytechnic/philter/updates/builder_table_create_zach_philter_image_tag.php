<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenpolytechnicPhilterImageTag extends Migration
{
    public function up()
    {
        Schema::create('Openpolytechnic_philter_image_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('image_id');
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('Openpolytechnic_philter_image_tag');
    }
}
