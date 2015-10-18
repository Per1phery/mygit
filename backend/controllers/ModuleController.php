<?php
namespace backend\controllers;

use common\components\BaseModule;
use Yii;
use common\models\Module;
use common\modules;
use yii\helpers\FileHelper;
use yii\helpers\VarDumper;

class ModuleController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInstall($name)
    {
        if ($name) {
            $module = new Module();

            $module->name = $name;
            $module->status = 1;

            $class = $module->namespace = $this->path($name);

            if(class_exists($class) && $class::checkDependencies($class::getDependencies()) && $module->save()) {
                $class::afterInstall();
                Yii::$app->session->setFlash('success', Yii::t('app', 'Module has been saved'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Module has not been saved'));
            }

        }

        return $this->redirect('index');
    }

    public function actionRemove($id)
    {
        if ($id) {
            $module = Module::findOne($id);
            $name = $module->name;
            $class = $this->path($name);

            if (class_exists($class) &&  $module->delete()) {
                $class::afterRemove();
                Yii::$app->session->setFlash('success', Yii::t('app', 'Module has been removed'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Module has not been removed'));
            }
        }

        return $this->redirect('index');
    }

    private function path($name)
    {
        $className = ucfirst($name);
        return 'common\modules\\' . $name . "\\" . $className;
    }
}