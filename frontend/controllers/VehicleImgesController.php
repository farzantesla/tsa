<?php

namespace frontend\controllers;

use Yii;
use frontend\models\VehicleImges;
use frontend\models\VehicleImgesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VehicleImgesController implements the CRUD actions for VehicleImges model.
 */
class VehicleImgesController extends Controller
{
    
    public $layout = 'dashboard';
    
    public function init()
    {
        parent::init();
             if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }


    }
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all VehicleImges models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicleImgesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VehicleImges model.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionView($id, $vehicle_users_id, $vehicle_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $vehicle_users_id, $vehicle_id),
        ]);
    }

    /**
     * Creates a new VehicleImges model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VehicleImges();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing VehicleImges model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionUpdate($id, $vehicle_users_id, $vehicle_id)
    {
        $model = $this->findModel($id, $vehicle_users_id, $vehicle_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing VehicleImges model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return mixed
     */
    public function actionDelete($id, $vehicle_users_id, $vehicle_id)
    {
        $this->findModel($id, $vehicle_users_id, $vehicle_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VehicleImges model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $vehicle_users_id
     * @param string $vehicle_id
     * @return VehicleImges the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $vehicle_users_id, $vehicle_id)
    {
        if (($model = VehicleImges::findOne(['id' => $id, 'vehicle_users_id' => $vehicle_users_id, 'vehicle_id' => $vehicle_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
