<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_142640_module extends Migration
{
    public function up()
    {
        $this->createTable('module', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'status' => Schema::TYPE_BOOLEAN
        ]);
    }

    public function down()
    {
        $this->dropTable('module');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
