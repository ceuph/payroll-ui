<?php

namespace app\controllers;

use Yii;
use app\models\NtDtr;
use app\models\search\NtDtrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

use app\models\PayrollEmployeeList;
use app\models\search\PayrollEmployeeListSearch;

/**
 * NtDtrController implements the CRUD actions for NtDtr model.
 */
class NtDtrController extends AppController
{

    public function actionIndex()
    {
        $searchModel = new NtDtrSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->sort->defaultOrder = ['PrdID' => SORT_DESC];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NtDtr model.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($EmpID, $PrdID)
    {
        return $this->render('view', [
            'model' => $this->findModel($EmpID, $PrdID),
        ]);
    }

    /**
     * Creates a new NtDtr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NtDtr();

        if ($model->load(Yii::$app->request->post()) && $empIds = Yii::$app->request->post()['NtDtr']['EmpID']) {

            foreach($empIds as $empId)
            {
                $model->EmpID = $empId;
            }

            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'record saved!');
                return 1;
            }else{

                Yii::$app->session->setFlash('error', 'EmpID and PrdID already exist');
                return 2;
            }
           
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    public function actionAjaxValidate() {

        $model = new NtDtr();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            
            foreach(Yii::$app->request->post()['NtDtr']['EmpID'] as $empId){
                 $model->EmpID = $empId;
             }

           \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }

    public function actionEmployeeList()
    {

        $searchModel = new PayrollEmployeeListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('employee-list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreateList($EmpID)
    {
        $model = new NtDtr();
        $employee = PayrollEmployeeList::findOne($EmpID);

        if ($model->load(Yii::$app->request->post())) {

                $model->EmpID = $EmpID;

            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'record saved!');
                return 1;
            }else{

                Yii::$app->session->setFlash('error', 'EmpID and PrdID already exist');
                return 2;
            }
           
        }

        return $this->renderAjax('create-list', [
            'model' => $model,
            'employee' => $employee,

        ]);
    }

    public function actionAjaxValidateList($EmpID) {

        $model = new NtDtr();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
 
                $model->EmpID = $EmpID;

           \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }

    /**
     * Updates an existing NtDtr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($EmpID, $PrdID)
    {
        $model = $this->findModel($EmpID, $PrdID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash('success', 'record saved!');
            return $this->redirect(['index']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NtDtr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($EmpID, $PrdID)
    {
        $this->findModel($EmpID, $PrdID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NtDtr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $EmpID
     * @param string $PrdID
     * @return NtDtr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($EmpID, $PrdID)
    {
        if (($model = NtDtr::findOne(['EmpID' => $EmpID, 'PrdID' => $PrdID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
