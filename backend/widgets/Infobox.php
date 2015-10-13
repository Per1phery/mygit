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
            $this->value= '50';
        }
        if($this->description===null){
            $this->description = 'Empty description';
        }
        if($this->icon === null){
            $this->icon = '';
        }
    }

    public function run(){
        return          '<div class="info-box '.$this->style.'">
                              <span class="info-box-icon"><i class="'.$this->icon.'"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">'.$this->title.'</span>
                                <span class="info-box-number">'.$this->number.'</span>
                                <div class="progress">
                                  <div class="progress-bar" style="width: '.$this->value.'%"></div>
                                </div>
                                <span class="progress-description">
                            ' .$this->description . '
                            </span>
                              </div>
                            </div>';
    }

}