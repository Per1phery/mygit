<?php
namespace common\components;

use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\Application;
use common\models\Module;

class Bs extends Component implements BootstrapInterface
//class Bs extends Component
{
    public function bootstrap($app)
    {
        $this->load_modules($app);
        //$app->setModules(['asd'=> ['class' => 'asd']]);
    }


    public function load_modules($app)
    {
        $modules = Module::find()->where('status=1')->all();
        foreach($modules as $module) {
            $app->setModules([$module->name => ['class' => $module->namespace]]);
        }
    }

}