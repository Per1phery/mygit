<?php
namespace backend\controllers;

class ModuleController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}