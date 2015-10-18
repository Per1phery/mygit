<?php
//use yii;
use yii\helpers\Html;
use common\models\Module;
use yii\helpers\VarDumper;
?>

<?php foreach(Module::getInstalled() as $i): ?>
    <div style="height: 40px">
        <div style="float: left"><?php echo $i->name?></div>
        <div style="float: right"><?php echo Html::a(Yii::t('app', 'Remove'), ['remove', 'id' => $i->id], ['class' => 'btn btn-primary'])?></div>
    </div>
<?php endforeach; ?>

<?php foreach(Module::getAvailable() as $k=>$i): ?>
    <div style="height: 40px">
        <div style="float: left;">

            <?php echo '<span style="color:green; font-size: 14px;">'.$i['info']['name'].'</span>';
                        if($i['dependencies']) {
                            echo '<span style="color:red; font-size: 14px;"> Зависимости: ';
                            foreach ($i['dependencies'] as $d) {
                                echo '<span style="color: black; font-size:14px;">'.$d . " </span>";
                            }
                            echo '</span>';
                        }
        ?>
        </div>

        <div style="float: right"><?php echo Html::a(Yii::t('app', 'Install'), ['install', 'name' => $i['moduleName']], ['class' => 'btn btn-primary', 'confirm'=>'Are you sure?'])?></div>
        <br>
    </div>
<?php endforeach; ?>
<?php
 //echo var_dump(yii::$app->getModules());
?>


