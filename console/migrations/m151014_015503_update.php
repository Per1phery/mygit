<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_015503_update extends Migration
{
    public function up()
    {
        $this->addColumn('module','namespace', 'string');
    }

    public function down()
    {
        $this->dropColumn('module','namespace');
    }
}
