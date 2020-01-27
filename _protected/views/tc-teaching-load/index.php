<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TcTeachingLoadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tc Teaching Loads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-teaching-load-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tc Teaching Load', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PrdID',
            'EmpID',
            'UG_LoadLec',
            'UG_LoadLab',
            'UG_LoadClc',
            //'GS_LoadLec',
            //'GS_LoadLab',
            //'GS_LoadClc',
            //'TC_SemMonth',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>