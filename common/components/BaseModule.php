<?php
namespace common\components;
use common\models\Module;

class BaseModule extends \yii\base\Module
{

    public static function afterInstall(){}

    public static function afterRemove(){}

    public static function getDependencies(){}

    public static function getInfo(){}

    public static function checkDependency($dependency){
        return Module::find()->where('name=:dependency',['dependency' => $dependency])->all();
    }

    public static function checkDependencies($dependencies)
    {
        if ($dependencies) {
                foreach ($dependencies as $dependency) {
                   if (!self::checkDependency($dependency)) return false;
                }
        }
        return true;
    }



}