<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2018
 * Time: 23:57
 */


use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>