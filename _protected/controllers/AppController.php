<?php
namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

/**
 * AppController extends Controller and implements the behaviors() method
 * where you can specify the access control ( AC filter + RBAC ) for your controllers and their actions.
 */
class AppController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     * Here we use RBAC in combination with AccessControl filter.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'controllers' => ['user','leave-application','ug-leave-credits','gs-leave-credits','payroll-employee-list','nt-leave-credits','tc-dtr','tc-teaching-load','loans','nt-dtr','tother-income','nt-other-income','other-deductions'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete','process2','ajax-validate','find','employee-list'],
                        'allow' => true,
                        'roles' => ['theCreator'],
                    ],
                    [
                        'controllers' => ['ug-leave-credits','gs-leave-credits','nt-leave-credits','tc-dtr','nt-dtr','tother-income','nt-other-income','loans','other-deductions','payroll-employee-list','tc-teaching-load'],
                        'actions' => ['index', 'view', 'create', 'update','ajax-validate','find','employee-list','create-list','ajax-validate-list'],
                        'allow' => true,
                        'roles' => ['premium'],
                    ],

                ], // rules

            ], // access

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ], // verbs

        ]; // return

    } // behaviors

} // AppController
