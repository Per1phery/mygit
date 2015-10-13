<?php

namespace backend\widgets;

use yii\helpers\Html;

class Infobox extends \yii\bootstrap\Widget
{
    public $title;
    public $number;
    public $value;
    public $description;
    public $style;
    public $icon;
    private $boxStyles = [
        'blue'  => 'bg-blue',
        'yellow'    => 'bg-yellow',
        'red'   => 'bg-red',
    ];


    public $message;

    public function init(){
        parent::init();
        if (isset($this->boxStyles[$this->style])){
            $this->style=$this->boxStyles[$this->style];
        }else{
            $this->style='bg-red';
        }
        if($this->title===null){
            $this->title= 'Empty title';
        }
        if($this->number===null){
            $this->number= '50 %';
        }
        if($this->value===null){
            $this->value= '50%';
        }
        if($this->description===null){
            $this->description = 'Empty description';
        }
        if($this->icon === null){
            $this->icon = '';
        }
    }

    public function run(){
        return  Html::tag(
            'div',
             Html::tag('span', Html::tag('i', '', ['class' => $this->icon]) , ['class' => 'info-box-icon'])
            .Html::tag('div',
                        Html::tag('span', Html::encode($this->title), ['class' => 'info-box-text'])
                       .Html::tag('span', Html::encode($this->number), ['class' => 'info-box-number'])
                       .Html::tag('div',
                                  Html::tag('div', '', ['class' => 'progress-bar', 'style' => Html::cssStyleFromArray(['width' => $this->value ]) ]) ,
                                 ['class' => 'progress'])
                       .Html::tag('span', Html::encode($this->description), ['class' => 'progress-description']),
                        ['class' => 'info-box-content']),
            ['class' => 'info-box '.$this->style]);
    }

}