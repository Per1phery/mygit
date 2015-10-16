<?php
use Yii;
use yii\helpers\Html;
use common\models\Module;
?>

<?php foreach(Module::getInstalled() as $i): ?>
    <div style="height: 40px">
        <div style="float: left"><?php echo $i->name?></div>
        <div style="float: right"><?php echo Html::a(Yii::t('app', 'Remove'), ['remove', 'id' => $i->id], ['class' => 'btn btn-primary'])?></div>
    </div>
<?php endforeach; ?>

<hr>

<?php foreach(Module::getAvailable() as $i): ?>
    <div style="height: 40px">
        <div style="float: left;"><?php echo $i?></div>
        <div style="float: right"><?php echo Html::a(Yii::t('app', 'Install'), ['install', 'name' => $i], ['class' => 'btn btn-primary', 'confirm'=>'Are you sure?'])?></div>
        <br>
    </div>
<?php endforeach; ?>
<?php

?>


