<?php

use backend\widgets\Infobox;
?>

<div class="col-md-3 col-sm-6 col-xs-12">
    <?= Infobox::widget([
    'title' =>  'SUPERRRRRRR',
    'style' => 'blue',
    'icon' => 'fa fa-envelope-o'
    ]); ?>
 </div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <?= Infobox::widget([
        'title' =>  'SUPERRRRRRR',
        'style' => 'red',
        'value' => '10%',
        'number' => '10 %',
        'description' => 'My new descr',
        'icon' => 'fa fa-thumbs-o-up'
    ]); ?>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <?= Infobox::widget([
        'title' =>  'SUPERRRRRRR',
        'style' => 'yellow',
        'icon' => 'fa fa-comments-o'
    ]); ?>
</div>
