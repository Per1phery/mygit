<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_071011_Menu extends Migration
{
    public function up()
    {
        $this->createTable('admin_menu', [
            'id' => Schema::TYPE_PK,
            'parent_id' => 'integer not null default 0',
            'name' => Schema::TYPE_STRING,
            'type' => Schema::TYPE_STRING,
            'position' => Schema::TYPE_INTEGER,
            'url' => Schema::TYPE_STRING,
            'icon' => Schema::TYPE_STRING,
        ]);
    }

    public function down()
    {
       $this->dropTable('admin_menu');
    }


}
