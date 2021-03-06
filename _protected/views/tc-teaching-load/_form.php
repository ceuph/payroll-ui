<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="tc-teaching-load-form">

    <?php $form = ActiveForm::begin(['id' => 'tcloadFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['tc-teaching-load/ajax-validate'])]); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>
        <li><a data-toggle="tab" href="#ug">Under-Grad</a></li>
        <li><a data-toggle="tab" href="#gs">GradSchool</a></li>
        <li><a data-toggle="tab" href="#sem">Sem Month</a></li>


    </ul>
    <div class="row">
        <div class="col-sm-5">
        <div id="home" class="tab-pane fade in active">
        <?= $form->field($model, 'EmpID')->widget(Select2::classname(), [
            'options' => ['placeholder' => 'Search ...',
                'multiple'=> true,
                'class' => 'form-control'],
            'pluginOptions' => [
                'allowClear' => true,
                'minimumInputLength' => 2,
                'language' => [
                    'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                ],
                'ajax' => [
                    'url' => $url,
                    'dataType' => 'json',
                   'data' => new JsExpression('function(params) { return {q:params.term}; }')
            
                ],
                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                'templateResult' => new JsExpression('function(employee) { return (
                    employee.EmpID || "") + " " + (employee.LName || "")  + ", " + (
                    employee.FName || ""); }'),
                'templateSelection' => new JsExpression('function (employee) { return (
                    employee.EmpID || "") + " " + (employee.LName || "")  + ", " + (
                    employee.FName || ""); }'),

            ],
        ])->label('Employee ID'); ?>

        <?= $form->field($model, 'PrdID')->dropDownList(ArrayHelper::map(PayrollPayPeriodList::find()->where(['status'=>PayrollPayPeriodList::STATUS_YES])->orderBy("PrdID DESC")->all(), 'PrdID', 'decription')) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="ug" class="tab-pane fade">
            <?= $form->field($model, 'UG_LoadLec')->textInput() ?>

            <?= $form->field($model, 'UG_LoadLab')->textInput() ?>

            <?= $form->field($model, 'UG_LoadClc')->textInput() ?>
   
        </div>
        <div id="gs" class="tab-pane fade">
            <?= $form->field($model, 'GS_LoadLec')->textInput() ?>

            <?= $form->field($model, 'GS_LoadLab')->textInput() ?>

            <?= $form->field($model, 'GS_LoadClc')->textInput() ?>
        </div>
        <div id="sem" class="tab-pane fade">
            <?= $form->field($model, 'TC_SemMonth')->textInput() ?>

        </div>
        
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'tclBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['tc-teaching-load/create']);
$script = <<< JS

$("#tclBtn").click(function(e){
    var formData = new FormData($("#tcloadFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#tcloadFrm').trigger('reset');
                $.pjax.reload({container:'#tclTbl', async: false});
            }
        },

        error: function(){
            alert("ERROR at PHP side!!");
        },


        //Options to tell jQuery not to process data or worry about content-type.
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


JS;
$this->registerJs($script);