<?php
namespace common\modules\test;


use common\components\BaseModule;
use common\models\Module;


class Test extends BaseModule
{

    public static function afterInstall()
    {
        //   echo 'installed';
    }


    public static function getDependencies()
    {
        return require(__DIR__ . '/config/dependencies.php');
    }

    public static function getInfo()
    {
        return require(__DIR__ . '/config/info.php');
    }


}