<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\GsLeaveCreditsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grad-School Leave Credits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gs-leave-credits-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmpID',
            'PrdID',
            'LEC_GSVLAdj',
            'LEC_GSVLHAWP',
            'LEC_GSVLRem',
            //'LEC_GSVL',
            //'LEC_GSOLVLAdj',
            //'LEC_GSOLVLHAWP',
            //'LEC_GSOLVLRem',
            //'LEC_GSOLVL',
            //'LEC_GSSLAdj',
            //'LEC_GSSLHAWP',
            //'LEC_GSSLRem',
            //'LEC_GSSL',
            //'LEC_GSOLSLAdj',
            //'LEC_GSOLSLHAWP',
            //'LEC_GSOLSLRem',
            //'LEC_GSOLSL',
            //'LEC_GSBLAdj',
            //'LEC_GSBLHAWP',
            //'LEC_GSBLRem',
            //'LEC_GSBL',
            //'LEC_GSELAdj',
            //'LEC_GSELHAWP',
            //'LEC_GSELRem',
            //'LEC_GSEL',
            //'LEC_GSSPLAdj',
            //'LEC_GSSPLHAWP',
            //'LEC_GSSPLRem',
            //'LEC_GSSPL',
            //'LEC_GSPLAdj',
            //'LEC_GSPLHAWP',
            //'LEC_GSPLRem',
            //'LEC_GSPL',
            //'LEC_GSMLAdj',
            //'LEC_GSMLHAWP',
            //'LEC_GSMLRem',
            //'LEC_GSML',
            //'LEC_GSULAdj',
            //'LEC_GSULHAWP',
            //'LEC_GSULRem',
            //'LEC_GSUL',
            //'LEC_GSSLWAdj',
            //'LEC_GSSLWHAWP',
            //'LEC_GSSLWRem',
            //'LEC_GSSLW',
            //'LEC_GSNLAdj',
            //'LEC_GSNLHAWP',
            //'LEC_GSNLRem',
            //'LEC_GSNL',
            //'GSOBLec',
            //'GSOBLecRem',
            //'LAB_GSVLAdj',
            //'LAB_GSVLHAWP',
            //'LAB_GSVLRem',
            //'LAB_GSVL',
            //'LAB_GSOLVLAdj',
            //'LAB_GSOLVLHAWP',
            //'LAB_GSOLVLRem',
            //'LAB_GSOLVL',
            //'LAB_GSSLAdj',
            //'LAB_GSSLHAWP',
            //'LAB_GSSLRem',
            //'LAB_GSSL',
            //'LAB_GSOLSLAdj',
            //'LAB_GSOLSLHAWP',
            //'LAB_GSOLSLRem',
            //'LAB_GSOLSL',
            //'LAB_GSBLAdj',
            //'LAB_GSBLHAWP',
            //'LAB_GSBLRem',
            //'LAB_GSBL',
            //'LAB_GSELAdj',
            //'LAB_GSELHAWP',
            //'LAB_GSELRem',
            //'LAB_GSEL',
            //'LAB_GSSPLAdj',
            //'LAB_GSSPLHAWP',
            //'LAB_GSSPLRem',
            //'LAB_GSSPL',
            //'LAB_GSPLAdj',
            //'LAB_GSPLHAWP',
            //'LAB_GSPLRem',
            //'LAB_GSPL',
            //'LAB_GSMLAdj',
            //'LAB_GSMLHAWP',
            //'LAB_GSMLRem',
            //'LAB_GSML',
            //'LAB_GSULAdj',
            //'LAB_GSULHAWP',
            //'LAB_GSULRem',
            //'LAB_GSUL',
            //'LAB_GSSLWAdj',
            //'LAB_GSSLWHAWP',
            //'LAB_GSSLWRem',
            //'LAB_GSSLW',
            //'LAB_GSNLAdj',
            //'LAB_GSNLHAWP',
            //'LAB_GSNLRem',
            //'LAB_GSNL',
            //'GSOBLab',
            //'GSOBLabRem',
            //'CLC_GSVLAdj',
            //'CLC_GSVLHAWP',
            //'CLC_GSVLRem',
            //'CLC_GSVL',
            //'CLC_GSOLVLAdj',
            //'CLC_GSOLVLHAWP',
            //'CLC_GSOLVLRem',
            //'CLC_GSOLVL',
            //'CLC_GSSLAdj',
            //'CLC_GSSLHAWP',
            //'CLC_GSSLRem',
            //'CLC_GSSL',
            //'CLC_GSOLSLAdj',
            //'CLC_GSOLSLHAWP',
            //'CLC_GSOLSLRem',
            //'CLC_GSOLSL',
            //'CLC_GSBLAdj',
            //'CLC_GSBLHAWP',
            //'CLC_GSBLRem',
            //'CLC_GSBL',
            //'CLC_GSELAdj',
            //'CLC_GSELHAWP',
            //'CLC_GSELRem',
            //'CLC_GSEL',
            //'CLC_GSSPLAdj',
            //'CLC_GSSPLHAWP',
            //'CLC_GSSPLRem',
            //'CLC_GSSPL',
            //'CLC_GSPLAdj',
            //'CLC_GSPLHAWP',
            //'CLC_GSPLRem',
            //'CLC_GSPL',
            //'CLC_GSMLAdj',
            //'CLC_GSMLHAWP',
            //'CLC_GSMLRem',
            //'CLC_GSML',
            //'CLC_GSULAdj',
            //'CLC_GSULHAWP',
            //'CLC_GSULRem',
            //'CLC_GSUL',
            //'CLC_GSSLWAdj',
            //'CLC_GSSLWHAWP',
            //'CLC_GSSLWRem',
            //'CLC_GSSLW',
            //'CLC_GSNLAdj',
            //'CLC_GSNLHAWP',
            //'CLC_GSNLRem',
            //'CLC_GSNL',
            //'GSOBClc',
            //'GSOBClcRem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
