<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model app\models\NtOtherIncome */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="nt-other-income-form">

<h1><?= $employee->EmpID." - ".$employee->LName. ", ".$employee->FName ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'ntotherFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['nt-other-income/ajax-validate-list','EmpID'=>$employee->EmpID])]); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Allowance<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#hrm">HRM</a></li>
                <li><a data-toggle="tab" href="#ip">IP</a></li>
                <li><a data-toggle="tab" href="#rle">RLE</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Refund<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#alumt">Alumni Ticket</a></li>
                <li><a data-toggle="tab" href="#ccl">CC-Loan</a></li>
                <li><a data-toggle="tab" href="#coo">COOP</a></li>
                <li><a data-toggle="tab" href="#faw">Fawu</a></li>
                <li><a data-toggle="tab" href="#mdm">MDMF</a></li>
                <li><a data-toggle="tab" href="#hand">Handling Fee</a></li>
                <li><a data-toggle="tab" href="#med">Medicare</a></li>
                <li><a data-toggle="tab" href="#phil">Philhealth</a></li>
                <li><a data-toggle="tab" href="#sss">SSS</a></li>
                <li><a data-toggle="tab" href="#tax">Tax</a></li>
                <li><a data-toggle="tab" href="#tui">Tuition</a></li>
                <li><a data-toggle="tab" href="#oth">Other</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bonus<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#mid">Mid Year</a></li>
                <li><a data-toggle="tab" href="#slvl">SLVL</a></li>
                <li><a data-toggle="tab" href="#thir">Thirteenth Month</a></li>
                <li><a data-toggle="tab" href="#chris">Christmas</a></li>
                <li><a data-toggle="tab" href="#shs">Senior Highschool</a></li>
                <li><a data-toggle="tab" href="#senior">Senior Staff Fee</a></li>
                <li><a data-toggle="tab" href="#non">Non-Tax/Tax</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">A-C<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#adv">Advance-IP</a></li>
                <li><a data-toggle="tab" href="#adjIP">Adjusment IP</a></li>
                <li><a data-toggle="tab" href="#adviser">Adviser Fee</a></li>
                <li><a data-toggle="tab" href="#backp">Back Pay</a></li>
                <li><a data-toggle="tab" href="#pracpay">Clinical Lab Prac. Pay</a></li>
                <li><a data-toggle="tab" href="#classorg">Class Organization Advisers</a></li>
                <li><a data-toggle="tab" href="#communityout"> Community Outreach Pay</a></li>
                <li><a data-toggle="tab" href="#communityimmer">  Community Immersion</a></li>
                <li><a data-toggle="tab" href="#coordination"> Coordination</a></li>
                <li><a data-toggle="tab" href="#compre">Compre Examiniation</a></li>
                <li><a data-toggle="tab" href="#critical">Critical Work</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">D-G<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dent">Dentistry</a></li>
                <li><a data-toggle="tab" href="#differential">Differential</a></li>
                <li><a data-toggle="tab" href="#enhancement">Enhancement Seminar</a></li>
                <li><a data-toggle="tab" href="#enrollment">Enrollment Advising</a></li>
                <li><a data-toggle="tab" href="#expertise">Expertise Premium</a></li>
                <li><a data-toggle="tab" href="#externalprog">External Program Pay</a></li>
                <li><a data-toggle="tab" href="#externship"> Externship</a></li>
                <li><a data-toggle="tab" href="#goodwill">  Goodwill</a></li>
                <li><a data-toggle="tab" href="#gratuity"> Gratuity</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">H-I<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Hardship">Hardship Pay</a></li>
                <li><a data-toggle="tab" href="#haz">Hazard-Pay</a></li>
                <li><a data-toggle="tab" href="#hon">Honorarium</a></li>
                <li><a data-toggle="tab" href="#hospital">Hospital Orientation</a></li>
                <li><a data-toggle="tab" href="#incentive">Incentive LP</a></li>
                <li><a data-toggle="tab" href="#inclusion">Inclusion Program</a></li>
                <li><a data-toggle="tab" href="#incremental">Incremental Proceeds</a></li>
                <li><a data-toggle="tab" href="#Internship">Internship Pay</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">M-S<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Maternity">Maternity Benefity</a></li>
                <li><a data-toggle="tab" href="#onetime">One time Incentive</a></li>
                <li><a data-toggle="tab" href="#Otherincome">Other Income</a></li>
                <li><a data-toggle="tab" href="#Practicum">Practicum</a></li>
                <li><a data-toggle="tab" href="#Proctorship">Proctorship</a></li>
                <li><a data-toggle="tab" href="#Review">Review</a></li>
                <li><a data-toggle="tab" href="#RICE">RICE</a></li>
                <li><a data-toggle="tab" href="#Salary">Salary Senior High School</a></li>
                <li><a data-toggle="tab" href="#Specialexam">Special Exam</a></li>
                <li><a data-toggle="tab" href="#Substitution">Substitution</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">T<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Training">Training</a></li>
                <li><a data-toggle="tab" href="#Transportation">Transportation Allowance</a></li>
                <li><a data-toggle="tab" href="#Tutorial">Tutorial</a></li>              

            </ul>
        </li>
        

    </ul>
    <div class="row">
        <div class="col-sm-5">
        <div id="home" class="tab-pane fade in active">

         <?= $form->field($model, 'PrdID')->dropDownList(ArrayHelper::map(PayrollPayPeriodList::find()->where(['status'=>PayrollPayPeriodList::STATUS_YES])->orderBy("PrdID DESC")->all(), 'PrdID', 'decription')) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="adv" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdvIP')->textInput() ?>
 
        </div>
        <div id="haz" class="tab-pane fade">
            <?= $form->field($model, 'NT_HazardPay')->textInput() ?>

        </div>
        <div id="hon" class="tab-pane fade">
            <?= $form->field($model, 'NT_Honorarium')->textInput() ?>
            <?= $form->field($model, 'NT_HonorariumNF')->textInput() ?>

        </div>
        <div id="hrm" class="tab-pane fade">
            <?= $form->field($model, 'NT_HRMAllowNTax')->textInput() ?>

            <?= $form->field($model, 'NT_HRMAllowTax')->textInput() ?>
        </div>
        <div id="ip" class="tab-pane fade">
            <?= $form->field($model, 'NT_IPAllow')->textInput() ?>
        </div>
        <div id="rle" class="tab-pane fade">
            <?= $form->field($model, 'NT_RLEAllowNTax')->textInput() ?>

            <?= $form->field($model, 'NT_RLEAllowTax')->textInput() ?>
        </div>  
        <div id="alumt" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDAlumniTick')->textInput() ?>
        </div>
        <div id="ccl" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDCCLoan')->textInput() ?>
        </div>
        <div id="coo" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDCOOP')->textInput() ?>
        </div>
        <div id="faw" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDFAWU')->textInput() ?>

        </div>
        <div id="mdm" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDHDMFMPL')->textInput() ?>

            <?= $form->field($model, 'NT_RFDHDMFP')->textInput() ?>

            <?= $form->field($model, 'NT_RFDHDMFU')->textInput() ?>
        </div>
        <div id="hand" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDHF')->textInput() ?>
        </div>
        <div id="med" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDMedicare')->textInput() ?>

        </div>
        <div id="phil" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDPHIC')->textInput() ?>
        </div>
        <div id="sss" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDSSSCondo')->textInput() ?>

            <?= $form->field($model, 'NT_RFDSSSL')->textInput() ?>

            <?= $form->field($model, 'NT_RFDSSSP')->textInput() ?>

        </div>
        <div id="tax" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDTax')->textInput() ?>

            <?= $form->field($model, 'NT_RFDTaxAdv')->textInput() ?>
        </div>
        <div id="tui" class="tab-pane fade">
             <?= $form->field($model, 'NT_RFDTF')->textInput() ?>

        </div>
        <div id="oth" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDOthers')->textInput() ?>
            <?= $form->field($model, 'NT_RFDOthersRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="mid" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNMidYrNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNMidYrTax')->textInput() ?>
        </div>
        <div id="slvl" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNSLVLNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNSLVLTax')->textInput() ?>

        </div>
        <div id="thir" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNTMPTax')->textInput() ?>

        </div>
        <div id="chris" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNXmasNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNXmasTax')->textInput() ?>

        </div>
        <div id="shs" class="tab-pane fade">
            <?= $form->field($model, 'NT_SHSBNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'NT_SHSBNTMPTax')->textInput() ?>

        </div>
        <div id="senior" class="tab-pane fade">
            <?= $form->field($model, 'NT_SSBNMidYrTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNSLVLTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNTMPTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNXmasTax')->textInput() ?>

        </div>
        <div id="non" class="tab-pane fade">
            <?= $form->field($model, 'NT_BonusNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BonusTax')->textInput() ?>

        </div>
        <div id="adjIP" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdjIPAllow')->textInput() ?>
        </div>
        <div id="adviser" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdviserFee')->textInput() ?>
        </div>
        <div id="backp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BackPay')->textInput() ?>

            <?= $form->field($model, 'NT_BackPayEFA')->textInput() ?>

            <?= $form->field($model, 'NT_BackPayCOLA')->textInput() ?>

            <?= $form->field($model, 'NT_BigClassPay')->textInput() ?>
        </div>
        <div id="pracpay" class="tab-pane fade">
            <?= $form->field($model, 'NT_CLPPay')->textInput() ?>

        </div>
        <div id="classorg" class="tab-pane fade">
            <?= $form->field($model, 'NT_ClassOrgAdvs')->textInput() ?>

        </div>
        <div id="communityout" class="tab-pane fade">
            <?= $form->field($model, 'NT_CommOutrchPay')->textInput() ?>

        </div>
        <div id="communityimmer" class="tab-pane fade">
            <?= $form->field($model, 'NT_CommImmersion')->textInput() ?>

        </div>
        <div id="coordination" class="tab-pane fade">
            <?= $form->field($model, 'NT_Coordi')->textInput() ?>

        </div>
        <div id="compre" class="tab-pane fade">
            <?= $form->field($model, 'NT_CompreExam')->textInput() ?>

        </div>
        <div id="critical" class="tab-pane fade">
            <?= $form->field($model, 'NT_CriticWork')->textInput() ?>

        </div>
        <div id="dent" class="tab-pane fade">
            <?= $form->field($model, 'NT_DentPreBoard')->textInput() ?>
            <?= $form->field($model, 'NT_DentALE')->textInput() ?>
        </div>
        <div id="differential" class="tab-pane fade">
             <?= $form->field($model, 'NT_Differential')->textInput() ?>
        </div>
        <div id="enhancement" class="tab-pane fade">
            <?= $form->field($model, 'NT_EnhcmtSeminar')->textInput() ?>

        </div>
        <div id="enrollment" class="tab-pane fade">
            <?= $form->field($model, 'NT_EnrAdvising')->textInput() ?>

        </div>
        <div id="expertise" class="tab-pane fade">
            <?= $form->field($model, 'NT_ExpertisePrm')->textInput() ?>

        </div>
        <div id="externalprog" class="tab-pane fade">
            <?= $form->field($model, 'NT_ExtProgPay')->textInput() ?>

        </div>
        <div id="externship" class="tab-pane fade">
            <?= $form->field($model, 'NT_Externship')->textInput() ?>

        </div>
        <div id="goodwill" class="tab-pane fade">
            <?= $form->field($model, 'NT_Goodwill')->textInput() ?>

        </div>
        <div id="gratuity" class="tab-pane fade">
            <?= $form->field($model, 'NT_GratuityNTax')->textInput() ?>

            <?= $form->field($model, 'NT_GratuityTax')->textInput() ?>

        </div>
        <div id="Hardship" class="tab-pane fade">
            <?= $form->field($model, 'NT_HardshipPay')->textInput() ?>

        </div>
        <div id="hospital" class="tab-pane fade">
            <?= $form->field($model, 'NT_HosptOrient')->textInput() ?>

        </div>
        <div id="incentive" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncentiveLP')->textInput() ?>

        </div>
        <div id="inclusion" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncluProg')->textInput() ?>

        </div>
        <div id="incremental" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncrmtlProceeds')->textInput() ?>

        </div>
        <div id="Internship" class="tab-pane fade">
             <?= $form->field($model, 'NT_InternshipPay')->textInput() ?>

        </div>
        <div id="Maternity" class="tab-pane fade">
            <?= $form->field($model, 'NT_MaternityBnft')->textInput() ?>

        </div>
        <div id="onetime" class="tab-pane fade">
            <?= $form->field($model, 'NT_OneTimeIncentive')->textInput() ?>

        </div>
        <div id="Practicum" class="tab-pane fade">
            <?= $form->field($model, 'NT_Practicum')->textInput() ?>

        </div>
        <div id="Proctorship" class="tab-pane fade">
            <?= $form->field($model, 'NT_Proctorship')->textInput() ?>

        </div>
        <div id="Review" class="tab-pane fade">
            <?= $form->field($model, 'NT_ReviewNTax')->textInput() ?>
            <?= $form->field($model, 'NT_ReviewTax')->textInput() ?>

        </div>
        <div id="RICE" class="tab-pane fade">
            <?= $form->field($model, 'NT_RICE')->textInput() ?>

        </div>
        <div id="Salary" class="tab-pane fade">
            <?= $form->field($model, 'NT_SalarySHS')->textInput() ?>

        </div>
        <div id="Specialexam" class="tab-pane fade">
            <?= $form->field($model, 'NT_SpclExam')->textInput() ?>

        </div>
        <div id="Substitution" class="tab-pane fade">
            <?= $form->field($model, 'NT_Substitution')->textInput() ?>

        </div>
        <div id="Training" class="tab-pane fade">
            <?= $form->field($model, 'NT_Training')->textInput() ?>

        </div>
        <div id="Transportation" class="tab-pane fade">
            <?= $form->field($model, 'NT_TranspoAllow')->textInput() ?>

        </div>
        <div id="Tutorial" class="tab-pane fade">
            <?= $form->field($model, 'NT_Tutorial')->textInput() ?>

        </div>
        <div id="Otherincome" class="tab-pane fade">
            <?= $form->field($model, 'NT_OINTax')->textInput() ?>

            <?= $form->field($model, 'NT_OINTaxRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'NT_OITax')->textInput() ?>

            <?= $form->field($model, 'NT_OITaxRem')->textInput(['maxlength' => true]) ?>

        </div>
        
    </div>
            
    </div>
          
    </div>   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'ntotherBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['nt-other-income/create-list','EmpID'=>$employee->EmpID]);
$script = <<< JS

$("#ntotherBtn").click(function(e){
    var formData = new FormData($("#ntotherFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
               $("#nto-modal").modal('hide');
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