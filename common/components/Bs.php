<?php
namespace common\components;

use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\Application;

class Bs extends Component implements BootstrapInterface
//class Bs extends Component
{
    public function bootstrap($app)
    {
        $app->setModules(['asd'=> ['class' => 'asd']]);
    }
}