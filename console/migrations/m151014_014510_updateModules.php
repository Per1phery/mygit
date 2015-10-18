<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_014510_updateModules extends Migration
{
    public function up()
    {
        $this->addColumn('module','menu_name', 'string');
    }

    public function down()
    {
        $this->dropColumn('module','menu_name');
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
