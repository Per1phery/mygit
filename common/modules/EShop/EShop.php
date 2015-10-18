<?php
namespace common\modules\EShop;


use common\components\BaseModule;
use common\models\Module;


class EShop extends BaseModule
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