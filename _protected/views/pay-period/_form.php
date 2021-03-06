<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\PayPeriod */
/* @var $form yii\widgets\ActiveForm */
/* @var $last app\models\PayPeriod */
?>

<div class="pay-period-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    if(!is_null($last)){

		echo $form->field($model, 'PrdID')->textInput(['maxlength' => true])->label('PrdID (last entry PrdID is) '.$last->PrdID);
    }else{

    	echo $form->field($model, 'PrdID')->textInput(['maxlength' => true])->label('PrdID sample ID: S201901');

    }
    


    ?>

    <?php
    echo $form->field($model, 'date_from')->widget(DatePicker::classname(), [
	    'options' => ['placeholder' => 'Enter Date From'],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'format' => 'yyyy-mm-dd' ,
	        'daysOfWeekDisabled' => [0],
	        'orientation' => 'bottom left',
	        /*'beforeShowDay' => new JsExpression(
            "function(date) {
		        if (date.getDate() == 15 || date.getDate() == 1) {
		            return [true, ''];
		        }
		        return [false, ''];
		        
		        }"
        	),*/

	    ]
	]);

     ?>

    <?php
    echo $form->field($model, 'date_to')->widget(DatePicker::classname(), [
	    'options' => ['placeholder' => 'Enter Date to'],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'format' => 'yyyy-mm-dd' ,
	        'daysOfWeekDisabled' => [0],
	        'orientation' => 'bottom left',
	    ]
	]);

     ?>

     <?= $form->field($model, 'status')->textInput(['maxlength' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

