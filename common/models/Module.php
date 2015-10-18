<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "module".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class Module extends \yii\db\ActiveRecord
{
    private static $_installed_modules;
    private static $_available_modules;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['namespace'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'namespace' => Yii::t('app', 'NameSpace'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function getModulesList()
    {

    }

    public static function getInstalled()
    {
        if (empty(self::$_installed_modules))
            return self::$_installed_modules = self::find()->where('status=1')->indexBy('name')->all();
        else
            return self::$_installed_modules;
    }

    public static function getAvailable()
    {
        if (empty(self::$_available_modules)) {
            $dirs = glob(Yii::getAlias('@common/modules/*'), GLOB_ONLYDIR);

            $modules = [];
            foreach ($dirs as $dir) {
                $parts = explode(DIRECTORY_SEPARATOR, $dir);
                $moduleName = $parts[count($parts) - 1];
                $params = array();
                $params['moduleName'] = $moduleName;
                $class_name = 'common\\modules\\' . $moduleName . '\\' . $moduleName;
                if(class_exists($class_name)) $params['dependencies'] = $class_name::getDependencies();
                if(class_exists($class_name)) $params['info'] = $class_name::getInfo();
                $modules[$moduleName] = $params;

            }

            $installed = self::getInstalled();
            $diff = array_diff_key($modules, $installed);

            return self::$_available_modules = $diff;
        } else {
            return self::$_available_modules;
        }


    }
}
