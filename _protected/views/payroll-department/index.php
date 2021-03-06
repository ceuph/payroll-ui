<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PayrollDepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payroll Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-department-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Payroll Department', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'department_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
