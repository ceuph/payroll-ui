<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */

$this->title = 'Update Teaching Load: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tc Teaching Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tc-teaching-load-update">

    <h1>Employee # <?= Html::encode($model->EmpID) ?></h1>
    <h1>Period <?= Html::encode($model->PrdID) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
